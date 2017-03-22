/*Multi image slideshow script- by javascriptkit.com
Visit JavaScript Kit (http://javascriptkit.com) for script
Credit must stay intact for use*/

//#1 SPECIFY number of slideshows
var number_of_slideshows=3

//#2 SPECIFY interval between slide (2000=2 seconds)
var interval=2000

//#3 SHOULD each slide be linked to a unique URL?
var linked=1

var slideshows=new Array(number_of_slideshows)
for (i=0; i <number_of_slideshows; i++)
    slideshows[i]=new Array()

//#4 SPECIFY image paths of 1st slideshow
slideshows[0][0]="./Media/allinonePC.jpg"
slideshows[0][1]="./Media/gamingPC.jpg"
slideshows[0][2]="./Media/laptop.jpg"


//SPECIFY image paths of 2nd slideshow (remove if number_of_slides less than 2)
slideshows[1][0]="./Media/samsun55in4k.jpg"
slideshows[1][1]="./Media/sharp55in4k.jpg"
slideshows[1][2]="./Media/tlc55inc4k.jpg"


//SPECIFY image paths of 3rd slideshow (remove if number_of_slides less than 3)
slideshows[2][0]="./Media/sonyMicroSystem.jpg"
slideshows[2][1]="./Media/VisiosoundBar.jpg"
slideshows[2][2] = "./Media/SharpAllInOne.jpg"
//EXTEND THIS ARRAY if more than 3 slide shows

var slidelinks=new Array(number_of_slideshows)
for (i=0; i <number_of_slideshows; i++)
    slidelinks[i]=new Array()

//#5 SPECIFY urls of 1st slideshow
slidelinks[0][0] = 'https://www.amazon.com/s/ref=sr_nr_n_0?fst=as%3Aoff&rh=n%3A172282%2Cn%3A541966%2Cn%3A13896617011%2Cn%3A565098%2Cn%3A13896597011%2Ck%3Acomputer&keywords=computer&ie=UTF8&qid=1477267369&rnid=493964'
slidelinks[0][1] = 'https://www.amazon.com/s/ref=sr_nr_n_1?fst=as%3Aoff&rh=n%3A172282%2Cn%3A541966%2Cn%3A565108%2Ck%3Acomputer&keywords=computer&ie=UTF8&qid=1477266704&rnid=493964'
slidelinks[0][2] = 'https://www.amazon.com/s/ref=sr_nr_n_1?fst=as%3Aoff&rh=n%3A172282%2Cn%3A541966%2Cn%3A13896617011%2Cn%3A565098%2Cn%3A13896603011%2Ck%3Acomputer&keywords=computer&ie=UTF8&qid=1477267413&rnid=493964'


//SPECIFY urls of 2nd slideshow (remove if number_of_slides=1)
slidelinks[1][0] = 'https://www.amazon.com/Samsung-UN55KU6300-55-Inch-Ultra-Smart/dp/B01E69WHP6/ref=sr_1_2?ie=UTF8&qid=1477267641&sr=8-2&keywords=4k+tvs'
slidelinks[1][1] = 'https://www.amazon.com/Sharp-LC-55N7000U-55-Inch-Ultra-Smart/dp/B01E6PGWHO/ref=sr_1_16?ie=UTF8&qid=1477267641&sr=8-16&keywords=4k+tvs'
slidelinks[1][2] = 'https://www.amazon.com/TCL-55US5800-55-Inch-Ultra-Smart/dp/B01BGC39VM/ref=sr_1_12?ie=UTF8&qid=1477267641&sr=8-12&keywords=4k%2Btvs&th=1'


//SPECIFY urls of 3rd slideshow (remove if number_of_slides less than 3)
slidelinks[2][0] = "https://www.amazon.com/Sony-CMTSBT100-Micro-System-Bluetooth/dp/B00DM5F19A/ref=sr_1_1?ie=UTF8&qid=1477268114&sr=8-1&keywords=audio+systems"
slidelinks[2][1] = "https://www.amazon.com/VIZIO-SB4051-C0-Wireless-Subwoofer-Satellite/dp/B00SMBGP76/ref=sr_1_1?s=electronics&ie=UTF8&qid=1477268364&sr=1-1&keywords=VIZIO+SB4051-C0+40-Inch+5.1+Sound+Bar+System+with+Wireless+Subwoofer+%26+Rear+Satellite"
slidelinks[2][2] = "https://www.amazon.com/Sharp-350-Watt-System-Multi-Play-Cassette/dp/B00BEIB81M/ref=sr_1_4?s=electronics&ie=UTF8&qid=1477268403&sr=1-4&keywords=all%2Bin%2Bone%2Baudio%2Bsystem&th=1"

function clickredir(){
    window.location=slidelinks[maininc][subinc]
}



var maininc=0
var subinc=0

if (linked)
    document.write('<a href="javascript:clickredir()"><img src="'+slideshows[0][0]+'" name="multislide" border=0></a>')
else
    document.write('<img src="'+slideshows[0][0]+'" name="multislide">')

function slideit(){
    subinc= (subinc<slideshows[maininc].length-1)? subinc+1: 0
    document.images.multislide.src=slideshows[maininc][subinc]
}

function setslide(which){
    clearInterval(runit)
    maininc=which
    subinc=0
    runit=setInterval("slideit()",interval)
}

runit=setInterval("slideit()",interval)