
/*
    * ............................
 */
function 
openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" activo", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " activo";
}


const c = document.querySelector(".topright");

c.onclick = function () {
    document.querySelector("#n-video").style.display = "none";
};

function myFunction(event) { 
  var x = event.target;
  document.getElementById("demo").innerHTML = "Triggered by a " + x.tagName + " element";
}
