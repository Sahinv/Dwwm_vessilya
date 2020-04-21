

function calcul() 
{    
    var x = parseInt(prompt("Ecrit un premier chiffre biatch"));
    var y = parseInt(prompt("Ecrit un deuxieme chiffre biatch"));

   var sommes = parseInt(x) * parseInt(y);
   var cube = parseInt(x) ** parseInt(x); /// Opérateur de puissance

     return alert(" Le cube de " +x+ " est egal a " + cube+" et le produit de " + x + " x " + y + " est egal a " + sommes);
}

calcul();