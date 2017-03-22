<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8" />



    <meta name="CSC322 Web Programing index" content="TEXT,HTML,CSS,php" />



    <meta name="keywords" content="Books Exchange, school, work, web, programming" />



    <meta name="description" content="School homework and assigments for web programing" />







    <title>Form</title>



    <!--



        Filename: 	    index.html



        Author: 	    Alfredo Granado



        Date:		    09/26/2016



        Course name:    Web Programing



        Course number:  CSC322



        assigment:      index page



        Supporting Files: styles.css



    -->


    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css" />

    <link href="Styles/musicform.css" rel="stylesheet" />
     <script src="JQuery/jquery-3.1.1.js"></script>

    <link href="Styles/IndexStyles/styles.css" rel="stylesheet" type="text/css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

    <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>

    <script type="text/javascript" src="test.js"></script>



</head>

<body>

    <?php include("../includes/nav.html"); ?>



    <form action="MusicForm.php" method="post">



        <div class="NameForm">

            <h3>User Information</h3>

            <label for="sname"> Song Name</label>

            <input type="text" id="sname" name="sname" />



            <label for="scomp">Name of the Compositor</label>

            <input type="text" id="scomp" name="scomp" />



            <label for="sart">Name of the artist or Band</label>

            <input type="text" id="sart" name="sart" />



            <!--<input type="submit" value="Submit">-->



        </div>



        <div class="NameForm">

            <input type="submit" value="Submit" />

            <input type="reset" value="Clear" id="reset" />

            <!--<input type="button" value="Read" />-->

        </div>





        <?php

if(isset($_POST['sname']) && isset($_POST['scomp']) && isset($_POST['sart'])) {

    $data = " Song Name: " . $_POST['sname']  . "-- Name of the Compositor: " .  $_POST['scomp'] . "-- Name of the artist or Band: ". $_POST['sart'] . "\n";

    $write = file_put_contents('Documents/form.txt', $data, FILE_APPEND | LOCK_EX);

    if($write === false) {

        die('There was an error writing this file');

    }

    else {

        echo "$write bytes have been written to the text <br/> ";

    }

}

else {

    die('no post data to process');
   
}

fclose($handle);

        ?>





  <?php

  // I got the code idea from http://www.dummies.com/programming/php/how-to-read-from-the-file-in-php-for-html5-and-css3-programming/

 //open up the contact file

 $fo = fopen("Documents/form.txt", "r") or die("error");



 //print a line at a time

 while (!feof($fo)){

  $line = fgets($fo);

  print "$line <br />";

 }

 //close the file

 fclose($fo);



 ?>

       

 </form>

    
 <script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>

    <script>

$('nav li').hover(

  function() {

	  $('ul', this).stop().slideDown(200);

  },

	function() {

    $('ul', this).stop().slideUp(200);

  }

);

    </script>

    <script type="text/javascript">



  var _gaq = _gaq || [];

  _gaq.push(['_setAccount', 'UA-36251023-1']);

  _gaq.push(['_setDomainName', 'jqueryscript.net']);

  _gaq.push(['_trackPageview']);



  (function() {

    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;

    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';

    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);

  })();



    </script>



</body>



</html>

