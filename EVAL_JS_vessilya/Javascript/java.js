
// /* Récupération des inputs */
// var CE = document.getElementById("CE").value; //Capital Emprunté
// var TNA = document.getElementById("TNA").value ;//Taux nominal Annuel
// var DE = document.getElementById("DE").value; //Durée d'emprunt
// var mensualite = document.getElementById("mensualite").value ;//Mensualité
// var CT = document.getElementById("CT").value; //Cout Total


// /*Calcul */
// CalculMensualite = (CE * TNA/12)/(1 - Math.pow(1 + TNA/12, -DE));

/************************************ Bouton calculer   **************************/ 

/*On récupère l'id du Bouton envoyer grace a l'action puis on applique la fonction */
document.getElementById("calcul").addEventListener("click", function() {

/* Récupération des inputs avec leurs valeurs */
var CE = document.getElementById("CE").value; //Capital Emprunté
var TNA = document.getElementById("TNA"). value; //Taux nominal Annuel
var DE = document.getElementById("DE").value; //Durée d'emprunt

/* On effectue le calcul */
CalculMensualite = (CE* TNA/12)/(1 - Math.pow(1 + TNA/12, -DE));

return CalculMensualite;
})

// /*Si les champs sont remplit alors on affiche dans l'input mensualité le calcul */
if ( (CE && TNA && DE) != null ) {
    document.getElementById("mensualite").innerHTML= CalculMensualite+"ddd";
}

else alert("Veuillez remplir les champs");

/************************************ Bouton nouveau calcul   **************************/ 
var newCalcul = document.getElementById("Nouveau").addEventListener("click", function(){
    var CE = document.getElementById("CE").value=""; //Capital Emprunté


})

