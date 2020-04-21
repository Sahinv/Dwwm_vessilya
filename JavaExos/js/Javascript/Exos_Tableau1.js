
function tab1() {
    var taille = parseInt(prompt("Saisir le nombre de valeur du tableau "));
    var myTableau = [taille];
    for (i= 0 ; i < taille ; i++) {
        do {
            var val = prompt("Saissir les valeurs à mettre dans le tableau, pour arreter taper STOP");
            myTableau = myTableau[val];
            console.log(myTableau);
        } while (val != "STOP");
    }
    
    }

//tab1();


function tab() {
var tableau = [];
do {
  var valeur = prompt("saisi les valeurs a entrer dans le tableau ");

  if (valeur != 0) {
    tableau += valeur + " ";
  }
}
while (valeur != 0);
console.log(tableau);

}

tab()
