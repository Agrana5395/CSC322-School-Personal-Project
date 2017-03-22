<!DOCTYPE html>
<html>
<head>
    <title> Tree Brances </title>
	<meta http-equiv="Tree branches ,Unlimited , web programming " content="text/html" charset="utf-8" />
    <!--
        Filename: 	    TreeBrancehes.html
        Author: 	    Alfredo Granado
        Date:		    09/26/2016
        Course name:    Web Programing
        Course number:  CSC322
        assigment:      Tree Store 2.12
        Supporting Files: styles.css
    -->


    <link href="Styles/TreeBranchesStyles.css" rel="stylesheet" type="text/css"/>
    <link href="Styles/IndexStyles/styles.css" rel="stylesheet" type="text/css" />
    <script src="JQuery/jquery-3.1.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
    <script type="text/javascript" src="test.js"></script>
</head>
<body>
    <header>
        <h1>Tree Branches Inc.</h1>
        <h5>Dedicated to bring you a tree from every part of the world </h5>
    </header>

    <!--<nav>
        <ul>            
            <li><a href="../index.html">Index</a></li>
            <li><a href="#news">News</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#register">Register</a></li>
            <li><a href="#login">Login</a></li>
            <li><a href="#about">About</a></li>
        </ul>
    </nav>-->
    <?php include("../includes/nav.html"); ?>

    <aside>
        <h2>Tress Miselaneos</h2>
        <p>We also have some miscellaneous to decor yours trees in your garden or your backyard.</p>
        <ol>
            <li>Lights
                <ul>
                    
                    <li><a href="LightsBulbs.php">Small Lights</a> </li>
                    <li><a href="LightsBulbs.php">Medium Lights</a> </li>
                    <li> <a href="LightsBulbs.php">Larger Lights</a> </li>
                </ul>
            </li>
            <li>Projectors
                <ul>
                    <li><a href="assignment01/#"> Small projector  </a> </li>
                    <li><a href="assignment01/#"> medium projector  </a> </li>
                    <li><a href="assignment01/#"> big projector  </a> </li>
                </ul>
            </li>
            <li>Artificial Trees
                <ul>
                    <li><a href="assignment01/#"> small Trees  </a> </li>
                    <li><a href="assignment01/#"> medium Trees  </a> </li>
                    <li><a href="assignment01/#"> big Trees  </a> </li>
                </ul>
            </li>
         </ol>
    </aside>
    <section>
        <table id="TreeTableImage" summary="Tree Descriptions">
            <thead>
                <tr>
                    <th scope="col">Tree Branch</th>
                    <th scope="col">Tree Origen</th>
                    <th scope="col">Tree Descroption</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <td colspan="4">Click in More to have more detailed description about the trees. </td>
                </tr>
            </tfoot>
            <tbody>
                <tr>
                    <td>Cuban Royal Palm</td>
                    <td>Cuba</td>
                    <td>Cuban royal palm is a species of palm which is native to southern Florida, Mexico and parts of Central America and the Caribbean.
                        <a href="Documents/Cuban royal palm.pdf">More..</a>
                    </td>
                </tr>
                <tr>
                    <td>Sharinga tree</td>
                    <td>Amazon River</td>
                    <td> It is a tree belonging to the family Euphorbiaceae. It is the most economically important member of the genus Hevea. 
                    It is of major economic importance because the milky latex extracted from the tree is the primary source of natural rubber.
                        <a href="Documents/Hevea Brasiliensis Description.pdf">More..</a>
                     </td>
                </tr>
                <tr>
                    <td>Japanese maple</td>
                    <td>Japan</td>
                    <td>is a species of woody plant native to Japan, China, Korea, eastern Mongolia, and southeast Russia.
                     Many different cultivars of this maple have been selected and they are grown worldwide for their large variety of attractive forms, 
                    leaf shapes, and spectacular colors.
                        <a href="Documents/Japanese maple Description.pdf">More..</a>
                    </td>
                </tr>
                <tr>
                    <td>bonsai tree</td>
                    <td>Marketing</td>
                    <td>is a Japanese art form using trees grown in containers. Similar practices exist in other cultures, 
                    including the Chinese tradition of penjing from which the art originated, and the miniature living landscapes of Vietnamese hòn non bộ. 
                    The Japanese tradition dates back over a thousand years.
                        <a href="Documents/Bonsai Description.pdf">More..</a>
                    </td>
                </tr>
            </tbody>
        </table>

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
