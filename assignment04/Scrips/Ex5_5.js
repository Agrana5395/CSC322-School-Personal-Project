
//<!--//   This script illustrates using the focus event
// This script I use funtion to calculate prizes in realtime
// Calculate prices in realtime I have to put oninput in the form i want to get the value from.
//I was trying to use on change and then do the math and did not work becouse onchange works in the same imput text 
//I figure out (after 3.5 on google research) that in order to to get values from one <input> or form , 
// and shows the resoult in another <imput> or form the use of onchange wont work.  -->


// The event handler function to compute the cost

function computeCost() {
    var apple = document.getElementById("apple").value;
    var orange = document.getElementById("orange").value;
    var banana = document.getElementById("banana").value;

    // Compute the cost

    document.getElementById("cost").value =
    totalCost = apple * 0.59 + orange * 0.49 +
                banana * 0.39;
}  //* end of computeCost



function calApple() {
    document.getElementById("applePrice").value = (document.getElementById("apple").value* 0.59)
}

function calOrange() {
    document.getElementById("orangePrice").value = (document.getElementById("orange").value * 0.49)
}

function calBanana() {
    document.getElementById("bananaPrice").value = (document.getElementById("banana").value * 0.39)
}