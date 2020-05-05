/* 1) - Récupération des id pour les stocker dans des variables  */
var reponse1 = document.getElementById("1r"); // Astérix
var reponse2 = document.getElementById("2r"); // Jolly jumper
var reponse3 = document.getElementById("3r"); // Les ptit diables 
var reponse4 = document.getElementById("4r"); // Les profs
var reponse5 = document.getElementById("5r"); // One piece
var reponse6 = document.getElementById("6r"); // Fan manga

/* --------------------------------------------------------------------------------------------- */
/* 2) - Capter les inputs contenant les valeurs */
// On utilise l'evenement 'change' puis on effectue la fonction 
// l'evenement 'change' permet lorque la valeur et rentrer et que l'utilisateur clique en dehors de l'input (par exemple pour écrire une valeur autre part ) , alors la fonction et appliquée
reponse1.addEventListener("change", VerificationFormat);
reponse2.addEventListener("change", VerificationFormat);
reponse3.addEventListener("change", VerificationFormat);
reponse4.addEventListener("change", VerificationFormat);
reponse5.addEventListener("change", VerificationFormat);
reponse6.addEventListener("change", VerificationFormat);


/* --------------------------------------------------------------------------------------------- */
/* 3) - Création de la fonction Verification*/
// Cette fonction permettra de vérifier si le format rentré dans les inputs et correct

function VerificationFormat() {

    // Cette variable contient id de l'input 
    // this.id permet d'aller récupérer l'id de l'evement qui s'est produit à l'étape 3, on le concat avec 'message' pour capter la bonne div d'affichage
    var texte = this.id + 'Format';

    var input = event.target;

    // checkValidity est une fonction propre a javascript qui verifie les REJEX (le pattern dans le HTML) et qui permet de vérifier si le format est bon 
    if (input.value == "") {
        document.getElementById(texte).innerHTML = ("Champ manquant")
    }

    else if (!this.checkValidity()) {
        document.getElementById(texte).innerHTML = ("Mauvais format");
    }
    else {
        document.getElementById(texte).innerHTML = ("");
    }
}

/* --------------------------------------------------------------------------------------------- */
/* 4) - Création de la fonction VerificationReponse*/
// Cette fonction permettra de vérifier si les reponses associés aux reponse sont correct


function VerificationReponse() {

    //on récupère les valeurs dans les input 
  var valeur= document.getElementsByTagName("input");

   

}

//Contient les solutions aux questions
var lesSolutions = {
    "1r": "Panoramix",
    "2r": "Lucky Luke",
    "3r": "Tom",
    "4r": "Kev Adams",
    "5r": "Luffy",
    "6r": "un otaku"
}

/* --------------------------------------------------------------------------------------------- */
/* 5) - Capter le bouton Effacer Reponse */
// on récupère l'id puis on capte l'evenement

var reset = document.getElementById("reset");
reset.addEventListener("click", Refresh);


/* --------------------------------------------------------------------------------------------- */
/* 6) - Création de la fonction Refresh */
// Cette fonction sert à rendre vide toutes les valeurs dans les input 

function Refresh() {

    // Toutes les valeurs des variables dont on a récupérer les id dans l'étape 1 ( donc les input)  , vont devenir vide
    reponse1.value = "";
    reponse2.value = "";
    reponse3.value = "";
    reponse4.value = "";
    reponse5.value = "";
    reponse6.value = "";

    // On récupère les id des divs permettant de savoir si le format et bon (Etape 3), puis on y remplace la réponse par du vide 
    document.getElementById("1rFormat").innerHTML = "";
    document.getElementById("2rFormat").innerHTML = "";
    document.getElementById("3rFormat").innerHTML = "";
    document.getElementById("4rFormat").innerHTML = "";
    document.getElementById("5rFormat").innerHTML = "";
    document.getElementById("6rFormat").innerHTML = "";
}