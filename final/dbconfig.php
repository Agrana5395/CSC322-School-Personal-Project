<?php
class Database
{

    private $host = "dev.cictspace.net";
    private $db_name = "AGRANA5395_CSC322";
    private $username = "AGRANA5395";
    private $password = "Cu8@toAm3r!ca";
    public $conn;

    public function dbConnection()
	{

	    $this->conn = null;
        try
		{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
		catch(PDOException $exception)
		{
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}

?>