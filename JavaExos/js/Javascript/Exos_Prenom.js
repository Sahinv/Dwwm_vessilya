var compteur= 0 ;
do {
    compteur= compteur++;
    var prenom = prompt("Ecrivez le prénom n*"+parseInt(compteur++)+", pour arreter écrire STOP");
    console.log(prenom);
} while (prenom != "STOP"  );

// var num = 1;
// while (result != "")
//   {
//     num = num++;
//     var result =prompt("Entrez le prénom n° "+parseInt(num++)+"\n ou Cliquer sur Annuler")
//     console.log(result);
//   }