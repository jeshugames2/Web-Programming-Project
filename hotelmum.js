var myIndex = 0;
var myIndex2=0;
var myIndex3=0;
carousel();
carousel2();
carousel3();

document.getElementsByTagName("td")[3].style.border="none";
document.getElementsByTagName("td")[6].style.border="none";

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 1000);
}

/*function myMap() {
var mapOptions = {
    center: new google.maps.LatLng(19.131505, 72.82199489999999),
    zoom: 10,
    mapTypeId: google.maps.MapTypeId.HYBRID
}
var map = new google.maps.Map(document.getElementById("map"), mapOptions);
}*/

function carousel2() {
    var j;
    var y = document.getElementsByClassName("mySlides2");
    for (j = 0; j < y.length; j++) {
       y[j].style.display = "none";  
    }
    myIndex2++;
    if (myIndex2 > y.length) {myIndex2 = 1}    
    y[myIndex2-1].style.display = "block";  
    setTimeout(carousel2, 1000);
}

function carousel3() {
    var k;
    var z = document.getElementsByClassName("mySlides3");
    for (k = 0; k < z.length; k++) {
       z[k].style.display = "none";  
    }
    myIndex3++;
    if (myIndex3 > z.length) {myIndex3 = 1}    
    z[myIndex3-1].style.display = "block";  
    setTimeout(carousel3, 1000);
}