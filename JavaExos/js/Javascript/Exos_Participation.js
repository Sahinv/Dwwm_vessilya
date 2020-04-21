// var Repas = prompt("Quel est le prix de ton repas ?");
// var Statut = prompt(" Etes vous celib ou Marié (c/m) ");
// var Salaire = prompt("C'est quoi ton salaire ");
// var Part = 0 ;

// if (Salaire < 1200 ) {
//         Part = 10;
//         var Gosse = prompt("Combien de Gosse t'as sale cassos ?");
//         Gosse = Gosse * 10 ;
// }


function participation() {
    var repas = prompt("Quelle est le prix du repas ?");
    var salaire = prompt("Quelle est t'on salaire ?");
    var mar = prompt("Et tu marié ? o/n");
    var part = 0;
    var nbEnfant;
    var total;

    if (mar == "o") {
        part = 25;
    }
    else
    {
            part = 20;
     }
    nbEnfant = prompt("Combien d'enfant as tu ?");
        if (nbEnfant > 0) {
            part = part + (nbEnfant * 10);
        }
    if (salaire < 1200) {
        part = part + 10;
    }
    if (part > 50) {
        part = 50;
    }
    total = repas * (part / 100);
    return alert("Votre participation est de : " + total + " euro");
}

participation()