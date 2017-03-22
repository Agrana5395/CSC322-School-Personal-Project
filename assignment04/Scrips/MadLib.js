/* This is the JavaScript for our simple MadLibs type game.
Step 1 - Create a hook to the button in the UI and add an event listener
which waits for a click event.
Step 2 - Create a function which is called swapWords(), which will insert
the words from our swap list into the story.
Step 3 - Make the updated story display in the UI. */

// Hook JavaScript into the UI button.
var swapItButton = document.getElementById("swapItButton");
swapItButton.addEventListener("click", swapWord);

// Create a story array, which is a list of our story pieces.
var theQuote = [
    "We are fast approaching the stage  ",  //index 0
    " noun1 ",                                //index 1 noun1 (input 1 )
    ", of the ultimate inversion: ",        //index 2
    " verv1 ",                                //index 3 verv1 (input 2 )
    " the stage where the  ",               //index 4
    "noun2",                                //index 5 noun2 (input 3 )
    " government is free to do ",           //index 6 
    " adverv1 ",                              //index 7  adverv1 (input 4 )
    " it pleases, while the citizens  ",    // index 8 
    " verv2 ",                                //index 9 verv2 (input 5)
    "may act only by permission;",          //index 10
    " verv3 ",                                //index 11 verv3 (input 6)
    " which is the stage of the darkest ",  //index 12 
    "adjetive1",                            //index 13 adjetive1 (input 7)
    ",the stage of rule ",                  //index 14 
    " noun3 ",                                //index 15 noun3 (input 8)
    ", by brute force.",                    //index 16  
    "noun4",                                //index 17 noun4 (input 9)
   " Ayn ",                                //index 18 
    "name1 ",                               //index 19 name1 (input 9)
    "Rand. "
];

// create a funtion to swap the words and display the new story 

function swapWord() {
    theQuote[1] = "<span class='inserted '>" + document.getElementById("noun1").value + "</span>";
    theQuote[3] = "<span class='inserted '>" + document.getElementById("verv1").value + "</span>";
    theQuote[5] = "<span class='inserted '>" + document.getElementById("noun2").value + "</span>";
    theQuote[7] = "<span class='inserted '>" + document.getElementById("adverv1").value + "</span>";
    theQuote[9] = "<span class='inserted '>" + document.getElementById("verv2").value + "</span>";
    theQuote[11] = "<span class='inserted '>" + document.getElementById("verv3").value + "</span>";
    theQuote[13] = "<span class='inserted '>" + document.getElementById("adjetive1").value + "</span>";
    theQuote[15] = "<span class='inserted '>" + document.getElementById("noun3").value + "</span>";
    theQuote[17] = "<span class='inserted '>" + document.getElementById("noun4").value + "</span>";
    theQuote[19] = "<span class='inserted '>" + document.getElementById("name1").value + "</span>";

    // now i will create a var in order to hold all the story centences.
    // the for loop is a great idea but i found a symple way to join everything without a loop.


    var theQuoteJoin = theQuote.join("");
    document.getElementById("story").innerHTML = theQuoteJoin;

    // this was my initial loop but i wont use it right now     
    //Loop through the array to grab each story piece and add each piece to the end of the string to assemble the story.
    //var theQuoteJoin = "";
    //for (var index = 0; index < theQuote.length; index++) {
    //    theQuoteJoin += theQuote[index];
    //}
}
