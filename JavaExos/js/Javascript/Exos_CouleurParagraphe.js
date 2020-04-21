var titre =document.getElementsByTagName("h1");
titre[0].style.color = "red";

var divcentre=document.getElementsByClassName("centre");
// var pcentre = divcentre.getElementsByTagName("p");

titre.addEventListener("mouseover", changeCouleur);

function changeCouleur() {
    titre.style.color = "white";
 }

for (let i = 0 ; i < pcentre.length; i++) {
    pcentre[i].style.color = "green";
}