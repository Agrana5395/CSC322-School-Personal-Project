
/*************************************************************************

          Filename: 	       payday.html
          Author: 	           Alfredo Granado
          Date:		           10/28/2016
          Course name:         Web Programing
          Course number:       CSC322
          assigment:           Mid Term
          Supporting Files:    styles.css, JavaScript, html
*************************************************************************/

/*function to get today's date */
function todaydate() {
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth() + 1; //January is 0 took me some day to figureout!
    var yyyy = today.getFullYear();

    if (dd < 10) {
        dd = '0' + dd;
    }

    if (mm < 10) {
        mm = '0' + mm;
    }

    today = mm + '/' + dd + '/' + yyyy;
    document.getElementById("mydate").value = today;

}

/*function to get date to load on startup */
function startform() {
    todaydate();
    //hinput();
    //minInput();
    //tax_percent();
 
}

//function validator() {
//    var inputs = document.
//}

function minInput() {
    var hoursTi = /^\d+$/;
    if (eval(document.paycheck.hours.value) === 0) {
        alert("Sorry this is for people that work. Your total Hours have to be a number larger than 0");
        return false;
    } else if (eval(document.paycheck.payrate.value) <= 7) {
        alert("Sorry, you should talk to your boss. In USA you have to make at least 7.25 per hour");
        return false;
    } else if (eval(document.paycheck.hours.value === hoursTi) || eval(document.paycheck.payrate.value === hoursTi)) {
        alert("please enter a integer in hourly pay rate or in Number of Hours worked ");
        return false;
    }
else {
        return true;
    }

}


//// I REALLY DO NOT KNOW HOW TO Basic Input ValidationS.  I need to learn. I hope we have time to learn this befor move on 
//function hinput() {
//    var hoursTi = /^\d+$/;

//    if ( document.paycheck.hours.value === hoursTi || document.paycheck.payrate.value === hoursTi) {
//        alert("please enter a integer in hourly pay rate or in Number of Hours worked ");
//        return false;

//    } else {
//        return false;
//    }

//function rinput() {
//    var payrateTi = /^[0-9]+$/;
//    if (document.paycheck.payrate.value !== payrateTi) {
//        alert("please type an integer");
//        return false;
//    } else {
//        return true;
//    }
//}
//}



function resetConf() {
    return confirm("Are you sure you want to reset all text?");
}




/*function to display calculated amount in 2-decimal format */
function dollars(n) {
    document.paycheck.feedback3.value = "$ " + n.toFixed(2);
}

/* function to calculate paycheck */
function tax_percent() {
    var hoursTi = /^\d+$/;
    var tax = "";
    var dep = new Array(5);
    dep[0] = .2;
    dep[1] = .17;
    dep[2] = .15;
    dep[3] = .12;
    dep[4] = .10;
    dep[5] = .10;
    var txt = " %";
    for (i = 0; i < 6; i++) {
       if (document.paycheck['tax' + i].checked) {
                var newtax = new Number(dep[i]);
                taxrate = newtax * 100;
                var h = eval(document.paycheck.hours.value);
                var r = eval(document.paycheck.payrate.value);
                document.paycheck.feedback.value = taxrate + txt;
                var total = document.paycheck.feedback3.value = r * (1 - newtax) * h;
                dollars(total);
                // document.paycheck.feedback3.value = ("$ " + dollars(r * (1 - newtax) * h));
                //document.paycheck.feedback3.value = dollars(r * (1 - newtax) * h);
                //return fase;

            }
        }
    }



