<!DOCTYPE html>

<html>

<head>

    <title> Tree Brances </title>

    <meta http-equiv="Bulb store  , problem 2.14 , web programming " content="text/html" charset="utf-8" />

    <!--

        Filename: 	    Bulbs.html

        Author: 	    Alfredo Granado

        Date:		    09/26/2016

        Course name:    Web Programing

        Course number:  CSC322

        assigment:      bulbs 2.13

        Supporting Files: http://www.w3schools.com/ 

        Supporting Files: Pgramin the World Wide Web book source code for reference 

    -->


 <link href="Styles/TreeBranchesStyles.css" rel="stylesheet" type="text/css"/>

    <link href="Styles/IndexStyles/styles.css" rel="stylesheet" type="text/css" />

    <script src="JQuery/jquery-3.1.1.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

    <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>

    <script type="text/javascript" src="test.js"></script>



    <link href="Styles/bulbsStore.css" rel="stylesheet" />



</head>

<body>

    <!--<header>

        <h1>Tree Branches Inc.</h1>

        <h4>the bulb store</h4>

        <h5>Dedicated to bring you a tree from every part of the world </h5>

    </header>-->

    <?php include("../includes/header.html"); ?>

    

    <!--<nav>

        <ul>

            <li><a href="../index.html">Index</a></li>

            <li><a href="#news">News</a></li>

            <li><a href="#contact">Contact</a></li>

            <li><a href="#register">Register</a></li>

            <li><a href="#about">About</a></li>

        </ul>

    </nav>-->

    <?php include("../includes/nav.html"); ?>



   



    <aside>

        <h2>Trees Discounts</h2>

        <p>We also have some discounts for the beuty of yuor garden.</p>

        <ol>

            <li>

                Trees

                <ul>

                    

                    <li><a href="TreeBranches.php">Japanesse</a> </li>

                    <li><a href="TreeBranches.php">Amazonian</a> </li>

                    <li><a href="TreeBranches.php">Tropicals</a> </li>

                    

                </ul>

            </li>

            <li>

                Flowers

                <ul>

                    <li><a href="assignment01/#"> Artificial   </a> </li>

                    <li><a href="assignment01/#"> Nationals   </a> </li>

                    <li><a href="assignment01/#"> International    </a> </li>

                </ul>

            </li>

            <li>

                Artificial Trees

                <ul>

                    <li><a href="assignment01/#"> Metalic </a> </li>

                    <li><a href="assignment01/#"> Plasics </a> </li>

                    <li><a href="assignment01/#"> Organic </a> </li>

                </ul>

            </li>

        </ol>

    </aside>

    <section>



        <div class="NameForm">

            <form action="action_page.php">

                <label for="fname">First Name</label>

                <input type="text" id="fname" name="firstname">



                <label for="lname">Last Name</label>

                <input type="text" id="lname" name="lastname">



                <label for="country">Country</label>

                <select id="country" name="country">

                    <option value="australia">Australia</option>

                    <option value="canada">Canada</option>

                    <option value="usa">USA</option>

                </select>



                <input  type="submit" value="Submit">

                <input  type="reset" value="Clear">

            </form>

        </div>



        <div class="bulb">

            <div>

                <input id="checkbox1" type="checkbox" name="checkbox" value="1" checked="checked">

                <label for="checkbox1"><span><span></span></span>Four 25-Watt light bulbs for $2.39</label>

            </div>

            <div>

                <input id="checkbox2" type="checkbox" name="checkbox" value="2">

                <label for="checkbox2"><span><span></span></span>Eight 25-Watt light bulbs for $4.29</label>

            </div>

            <div>

                <input id="checkbox3" type="checkbox" name="checkbox" value="3">

                <label for="checkbox3"><span><span></span></span>Four 25-Watt Long-life bulbs for $3.95</label>

            </div>

            <div>

                <input id="checkbox4" type="checkbox" name="checkbox" value="3">

                <label for="checkbox4"><span><span></span></span>Eight 25-Watt Long-life bulbs for $7.49</label>

            </div>

        </div>







        <div class="example">

            <div>

                <input id="radio1" type="radio" name="radio" value="1" checked="checked">

                <label for="radio1"><span><span></span></span>Visa</label>

            </div>

            <div>

                <input id="radio2" type="radio" name="radio" value="2">

                <label for="radio2"><span><span></span></span>Master Card</label>

            </div>

            <div>

                <input id="radio3" type="radio" name="radio" value="3">

                <label for="radio3"><span><span></span></span>Discover</label>

            </div>

        </div>

        

    </section>

    <!--<footer>

        <h6>Sullivan University</h6>

        <p> Phone number: 555-555-5555</p>

    </footer>-->

    <?php  include("../includes/footer.html"); ?>
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

