<?php
session_start();
require_once 'class.user.php';
$user_home = new USER();

if(!$user_home->is_logged_in())
{
	$user_home->redirect('index.php');
}

$stmt = $user_home->runQuery("SELECT * FROM Student WHERE studentId=:uid");
$stmt->execute(array(":uid"=>$_SESSION['userSession']));
$row = $stmt->fetch(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html class="no-js">

<head>
    <title>
        <?php echo $row['user_email']; ?>
    </title>
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />
    <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen" />
    <link href="assets/styles.css" rel="stylesheet" media="screen" />
    <script src="bootstrap/js/jquery-1.9.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
    <script src="js/global.js"></script>
    
    <script src="js/global.js"></script>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

</head>

<body>
    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container-fluid">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a class="brand" href="../index.php">Main Home</a>
                <div class="nav-collapse collapse">
                    <ul class="nav pull-right">
                        <li class="dropdown">
                            <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-user"></i>
                                <?php echo $row['user_email']; ?>
                                <i class="caret"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a tabindex="-1" href="logout.php">Logout</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav">
                        <li class="active">
                            <a href="../index.php">CSC322 Web Programing</a>

                        </li>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                                Tutorials
                                <b class="caret"></b>

                            </a>
                            <ul class="dropdown-menu" id="menu1">
                                <li>
                                    <a href="https://www.lynda.com/MySQL-tutorials/Admin-CRUD/119003/137051-4.html?autoplay=true">Tutorial Link</a>
                                </li>
                                <li>
                                    <a href="https://www.amazon.com/Effortless-E-Commerce-MySQL-Voices-Matter-ebook/dp/B00GO4I9AO/ref=mt_kindle?_encoding=UTF8&me=">Biograpy E-Moerce</a>
                                </li>
                                <li>
                                    <a href="http://www.layoutit.com/">Bootsstrap jQuery</a>
                                </li>
                                <li>
                                    <a href="http://work.smarchal.com/twbscolor">Bootstrap Colors</a>
                                </li>
                                <li>
                                    <a href="http://www.w3schools.com/howto/howto_js_dropdown.asp">JavaScrip</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
    </div>

    <!--/.fluid-container-->
   
    <script src="assets/scripts.js"></script>

    <article>
        <!-- this is a project learned from YouTuve video: https://www.youtube.com/watch?annotation_id=annotation_3995890877&feature=iv&src_vid=jVAqK3yzbeg&v=tSfnyaFMUtc  -->
       
        <div class="page-container">
            <?php
        get_total();
        require_once 'php/check_com.php';
            ?>
            <form action="" method="post" class="main">
                <label>enter a brief comment</label>
                <textarea class="form-text" name="comment" id="comment"></textarea>
                <br />
                <input type="submit" class="form-submit" name="new_comment" value="post" />
            </form>
            <?php get_comments(); ?>
        </div>

        <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
        <script src="js/global.js"></script>
    </article>
</body>

</html>