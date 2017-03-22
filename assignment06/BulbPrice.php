<!DOCTYPE html>

<html lang="en">

<head>

    <title>Bulb Price</title>

    <meta charset="utf-8" />



    <meta name="CSC322 Web Programing index" content="TEXT,HTML,CSS" />



    <meta name="keywords" content="Books Exchange, school, work, web, programming" />



    <meta name="description" content="School homework and assigments for web programing" />







    <!--



        Filename: 	    index.html



        Author: 	    Alfredo Granado



        Date:		    09/26/2016



        Course name:    Web Programing



        Course number:  CSC322



        assigment:      index page



        Supporting Files: styles.css



        References: Web Programing book



    -->



    <link href="../assignment06/Styles/BulbPrice.css" rel="stylesheet" />

</head>

<?php include("../includes/nav.html"); ?>



<body>

    <form action="BulbPrice.php" method="post">



                <?php

    // as a reference I used some example from the book in page 370 to 393

    // Get form data values

     $fourShort = $_POST["fourshort"];

     $eightShort = $_POST["eightshort"];

     $fourLong = $_POST["fourlong"];

     $eightLong = $_POST["eightlong"];

     $name = $_POST["firstname"];

     $lastName = $_POST["lastname"];

     $country = $_POST["country"];

     $payment = $_POST["payment"];



     // If any of the quantities are blank, set them to zero

     if ($fourShort == "") $fourShort = 0;

     if ($eightShort == "") $eightShort = 0;

     if ($fourLong == "") $fourLong = 0;

     if ($eightLong == "") $eightLong = 0;



     // Compute the item costs and total cost

     $fourShort_cost = 2.39 * $fourShort;

     $eightShort_cost = 4.29 * $eightShort;

     $fourLong_cost = 3.95 * $fourLong;

     $eightLong_cost = 7.49 * $eightLong;

     $temp_price = $fourShort_cost + $eightShort_cost + $fourLong_cost + $eightLong_cost;

     $total_price =  $temp_price * (6.2/100) + $temp_price;



     $total_items = $fourShort + $eightShort + $fourLong + $eightLong;



        ?>

        <div class="NameForm">

           <h3>User Information</h3>

                <label for="fname">First Name</label>

                <input type="text" id="fname" name="firstname">



                <label for="lname">Last Name</label>

                <input type="text" id="lname" name="lastname">



                <label for="country">Country</label>

                <select id="country" name="country">

                    <option value="Australia">Australia</option>

                    <option value="Canada">Canada</option>

                    <option value="USA">USA</option>

                </select>

           </div>



            <table id="bulbTable" summary="Tree Descriptions">

                <caption> <h3> Order Information </h3></caption>

                <thead>

                    <tr>

                        <th> Product </th>

                        <th> Unit Price </th>

                        <th> Quantity Ordered </th>

                        <th> Item Cost </th>

                    </tr>

                </thead>

                <tbody>

                    <tr align="center">

                        <td> Light Bulbs x 4</td>

                        <td> $2.39 </td>

                        <td> <input type="text" name="fourshort" id="fourshort" oninput="fourShort()" <?php print ("$fourShort"); ?> /></td>

                        <td> <input type="text" name="fourshort1" id="fourshort1" onfocus="this.blur()"/></td>

                        <!--<td> <input type="text" name="fourshort" /> </td>-->

                    </tr>

                    <tr align="center">

                        <td> Light Bulbs x 8 </td>

                        <td> $4.29</td>

                        <td> <input type="text" name="eightshort" id="eightshort" onchange="eightShort()" <?php print ("$eightShort"); ?> /></td>

                        <td> <input type="text" name="eightshort1" id="eightshort1" onfocus="this.blur()" ></td>

                        <!--<td> <input type="text" name="eightshort" /> </td>-->

                    </tr>

                    <tr align="center">

                        <td> Long-Life Light Bulbs x 4 </td>

                        <td> $3.95 </td>

                        <td> <input type="text" name="fourlong" id="fourlong" onchange="fourLong()" <?php print("$fourLong"); ?> /></td>

                        <td> <input type="text" name="fourlong1" id="fourlong1" onfocus="this.blur()" /></td>

                    </tr>

                    <tr align="center">

                        <td> Long-Life Light Bulbs x 4 </td>

                        <td> $7.49 </td>

                        <td> <input type="text" name="eightlong" id="eightlong" onchange="eightLong()" <?php print ("$eightLong"); ?> /></td>

                        <td> <input type="text" name="eightlong1" id="eightlong1" onfocus="this.blur()"/></td>

                        <!--<td> <input type="text" name="eightlong" /> </td>-->

                    </tr>

                </tbody>

                <tfoot>

                    <tr>

                        <td colspan="4"> You will se the unit prise without taxes or extra fees,

                        but you will see extra fees and taxes in your invoice</td>

                    </tr>

                </tfoot>

            </table>





            <h3> Payment Method </h3>



            <!--<div class="bulb">

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

            </div>-->







            <div class="example">

                <div>

                    <input id="radio1" type="radio" name="payment" value="Visa" checked="checked">

                    <label for="radio1"><span><span></span></span>Visa</label>

                </div>

                <div>

                    <input id="radio2" type="radio" name="payment" value="Master Card">

                    <label for="radio2"><span><span></span></span>Master Card</label>

                </div>

                <div>

                    <input id="radio3" type="radio" name="payment" value="Discover">

                    <label for="radio3"><span><span></span></span>Discover</label>

                </div>

            </div>







        <div class="NameForm">

        <input type="submit" value="Submit">

        <input type="reset" value="Clear">

        </div>





        <p>

            <h3>Your Invoice</h3>

            <?php  // Return the results to the browser in a table

      print ("Hola $name");

      print(" $lastName");

      print(" from $country <br />");

      print ("You ordered $total_items  items <br />");

      printf ("Your total bill is: $ %6.2f <br />", $total_price);

      print ("Your chosen method of payment is: $payment <br />");

            ?>

        </p>



</form>

    <script src="../assignment06/Scripts/BulbPriseTem.js"></script>

</body>

</html>





    



