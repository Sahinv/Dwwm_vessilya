





var nbAleatoire = Math.floor((Math.random() * 100) + 1);
console.log(nbAleatoire);

do {
    var nb = prompt("Ecrivez un nombre ");
 if (nb < nbAleatoire) {
        alert("Trop bas gamin");
        confirm("Continuer ? Appuie sur ok si t'es chaud ");
    }

    else if (nb > nbAleatoire) {
        alert("Trop grand jeune pomme");
        confirm("Continuer ? Appuie sur ok si t'es chaud ");
    }
} while ( nb != nbAleatoire)




