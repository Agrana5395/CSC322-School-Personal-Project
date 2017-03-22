<?php

require_once 'dbconfig.php';

class USER
{

	private $conn;

	public function __construct()
	{
		$database = new Database();
		$db = $database->dbConnection();
		$this->conn = $db;
    }

	public function runQuery($sql)
	{
		$stmt = $this->conn->prepare($sql);
		return $stmt;
	}

	public function lasdID()
	{
		$stmt = $this->conn->lastInsertId();
		return $stmt;
	}

	public function register($uname,$email,$upass,$code)
	{
		try
		{
			$password = md5($upass);
			$stmt = $this->conn->prepare("INSERT INTO Student(user_name,user_email,user_pass,user_tokenCode)
			                                             VALUES(:userName, :userMail, :userPass, :activeCode)");
			$stmt->bindparam(":userName",$uname);
			$stmt->bindparam(":userMail",$email);
			$stmt->bindparam(":userPass",$password);
			$stmt->bindparam(":activeCode",$code);
			$stmt->execute();
			return $stmt;
		}
		catch(PDOException $ex)
		{
			echo $ex->getMessage();
		}
	}

	public function login($email,$upass)
	{
		try
		{
			$stmt = $this->conn->prepare("SELECT * FROM Student WHERE user_email=:email_id");
			$stmt->execute(array(":email_id"=>$email));
			$userRow=$stmt->fetch(PDO::FETCH_ASSOC);

			if($stmt->rowCount() == 1)
			{
				if($userRow['user_status']=="Y")
				{
					if($userRow['user_pass']==md5($upass))
					{
						$_SESSION['userSession'] = $userRow['studentId'];
						return true;
					}
					else
					{
						header("Location: index.php?error");
						exit;
					}
				}
				else
				{
					header("Location: index.php?inactive");
					exit;
				}
			}
			else
			{
				header("Location: index.php?error");
				exit;
			}
		}
		catch(PDOException $ex)
		{
			echo $ex->getMessage();
		}
	}


	public function is_logged_in()
	{
		if(isset($_SESSION['userSession']))
		{
			return true;
		}
	}

	public function redirect($url)
	{
		header("Location: $url");
	}

	public function logout()
	{
		session_destroy();
		$_SESSION['userSession'] = false;
	}

	function send_mail($email,$message,$subject)
	{
		require_once('mailer/class.phpmailer.php');
		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->SMTPDebug  = 0;
		$mail->SMTPAuth   = true;
		$mail->SMTPSecure = "ssl";
		$mail->Host       = "smtp.gmail.com";
		$mail->Port       = 465;
		$mail->AddAddress($email);
		$mail->Username="agrana5395@gmail.com";
		$mail->Password="Lopez2damama";
		$mail->SetFrom('agrana5395@gmail.com','Course Reviews');
		$mail->AddReplyTo("agrana5395@gmail.com","Course Revies");
		$mail->Subject    = $subject;
		$mail->MsgHTML($message);
		$mail->Send();
	}
}