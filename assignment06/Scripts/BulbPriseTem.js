
//<!--//   This script illustrates using the focus event
// This script I use funtion to calculate prizes in realtime
// Calculate prices in realtime I have to put oninput in the form i want to get the value from.
//I was trying to use on change and then do the math and did not work becouse onchange works in the same imput text 
//I figure out (after 3.5 on google research) that in order to to get values from one <input> or form , 
// and shows the resoult in another <imput> or form the use of onchange wont work.  -->


// The event handler function to compute the cost



function fourShort() {
    //a = document.getElementById("fourshort1").value = (document.getElementById("fourshort").value * 2.39)
    var a = document.getElementById("fourshort").value * 2.39;
    var b = a.toFixed(2);
    document.getElementById("fourshort1").value = b;
}

function eightShort() {
    //document.getElementById("eightshort1").value = (document.getElementById("eightshort").value * 4.29)
    var a = document.getElementById("eightshort").value * 4.29;
    var b = a.toFixed(2);
    document.getElementById("eightshort1").value = b;
}

function fourLong() {
 //document.getElementById("fourlong1").value = (document.getElementById("fourlong").value * 3.95)
    var a = document.getElementById("fourlong").value * 3.95;
    var b = a.toFixed(2);
    document.getElementById("fourlong1").value = b;
}

function eightLong() {
    //document.getElementById("eightlong1").value = (document.getElementById("eightlong").value * 7.49)
    var a = document.getElementById("eightlong").value * 7.49;
    var b = a.toFixed(2);
    document.getElementById("eightlong1").value = b;
}