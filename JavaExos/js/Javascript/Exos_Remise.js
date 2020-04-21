// var PU = prompt("Ecrire le prix unitiaire");
// var QTECOM = prompt("Ecire la quantité souhaité");

// var PORT = TOTAL* 0.02 ; 
// if (PORT<6){
//     PORT = 6;
// }
// var TOTAL = PU * QTECOM ;
// var PAP;

// if (TOTAL >= 500) {
//   PORT = 0;
//     PAP = TOTAL - (TOTAL * (10/100));
//     alert("Le prix a payer est de"+PAP);
// }

// else if ((TOTAL => 100) && (TOTAL <= 200) ) {
// PAP = TOTAL -(TOTAL * (5/100)) + PORT;
// alert("Le prix à payer est de " + PAP);
// }

// else if (TOTAL > 200) {
//  PAP = TOTAL - (TOTAL * (10/100)) + PORT;
// alert("Le prix à payer est de " + PAP);

// }

// else { PAP = TOTAL + PORT};
// alert("Le pric à payer est de " + PAP)

// // else if (TOTAL < 200 ) {
// //     PAP = (TOTAL - remise5 ) + PORT;
// //     alert("Le prix à payer est de " + PAP);
    
// //     }

var prix = parseFloat(prompt("quelle est votre prix"));
var qt = parseInt(prompt("quelle quantité")); 
var total = prix*xqt; 
var port = total * 0.02 ; 
if (port<6){
    port = 6;
}
var resultat; 

if (total>=500){
    resultat = total - (total * (10/100)); 
}
else if ((total>200)&&(total<499)){
    resultat = total - (total*(10/100))+port; 
}
else if ((total>100)&&(total<200)){
    resultat = total - (total*(5/100))+port; 
}
else {
    resultat = total + port ; 
}
 console.log(" prix a payé : "+resultat+" € pour "+qt+" produits a : "+prix+" €"); 
 alert(" prix a payé : "+resultat);




