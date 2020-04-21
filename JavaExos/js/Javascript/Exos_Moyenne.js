
Somme = 0;
var compteur= 0 ;
do {
    ;
    var nombre = prompt("Ecrivez le nombre n*"+parseInt(compteur++)+", pour arreter tapper 0");
    console.log(nombre);
    Somme = Somme + parseInt(nombre);
    compteur= compteur++
//    console.log(Somme)

  
} while (nombre  != 0);
var Moyenne = Somme / compteur;
//    console.log(Moyenne)
alert("La somme est égal à :"+Somme+"  La moyenne est de :"+Moyenne);




/* CODE YOUS */ 
// var sommeTot= 0;
// var compteur = 0;


// while (saisie != 0) {

//     var saisie = parseInt (prompt("Entrez un nombre"+"\n 0 arrete la saisie"));
//    console.log(saisie)
//     // on ajoute la somme à la somme précédente
//     sommeTot= sommeTot+saisie;
//     console.log(sommeTot)

//     // on incrémente le compteur pour calculer la moyenne
//     compteur++;
// }
// var moye =sommeTot/compteur;
// console.log(moye)
// alert("Moyenne:" +moye);