// Création de la variable body dans laquelle on cherche la balise body html
var body=document.getElementsByTagName("body")[0];


// On met dans la variable rouge , l'élement contenant l'id 'Redd' (bouton)
var rouge =document.getElementById('Redd');
// On capte l'element (click) de la variable rouge (bouton) afin de changer la couleur grâce à la fonction anonyme 
rouge.addEventListener("click",function(){
    // On change le fond avec la couleur
   body.style.backgroundColor="red";})

var vert =document.getElementById('Vertt');
vert.addEventListener("click",function(){
   body.style.backgroundColor="green";})

var bleu =document.getElementById('Bleuee');
bleu.addEventListener("click",function(){
    body.style.backgroundColor="blue";})