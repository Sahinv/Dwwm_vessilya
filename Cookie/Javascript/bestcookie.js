function createCookie(name, value, days) { // permet de créer un cookie
    if (days) {
        // si le nombre de jour est renseigné, on le transforme en millieme de seconde
        var date = new Date(); 
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000)); 
        var expires = "expires=" + date.toGMTString();
    }
    else var expires = "";
    //le cookie doit contenir clé=valeur;expires=temps;path=nomDomaine 
    document.cookie = name+"="+value+"; " + expires+"; path=/";
}

function readCookie(name) {
    // on récupère tous les cookies du site en une fois, séparé par ; 
    // on range dans un tableau chaque cookie
    var listeCookies = document.cookie.split('; ');
    for (let i = 0; i < listeCookies.length; i++) {
        // pour chaque cookie, on sépare en tableau la clé et la valeur
        var unCookie = listeCookies[i].split("=");
        // si la clé correspond au cookie cherché, on renvoi la valeur 
        if (unCookie[0] == name) return unCookie[1];
    }
    return null;
}


function eraseCookie(name) {
    // pour supprimer un cookie, on le périme createCookie(name,"",-1);
    createCookie(name, "", -1);
}

//----------------------> Création d'une arborescence pour l'utilisation des cookies Formulaire <----------------------//

// -> Function creation d'un cookie avec en parametre 3 valeurs
//    -name = la clé
//    -value = la valeur  
//    -days = date d'expiration en milliseconde

function creerCookie(nom, valeur, jour) {
    // Si les jours ont bien été définis
    if (jour) {
        // On crée un objter date stockant la date actuelle
        var date = new Date();
        // On definis la date d'expiration du cookie
        date.setTime(date.getTime() + (jour * 24 * 60 * 60 * 1000));
        //On met la date au bon format pour un cookie
        var exp = '; expires=' + date.toGMTString();
    }
    // Si les jours n'ont pas été définis,  pas besoin de calcul
    else {
        var exp = "";
    }
    document.cookie = nom + '=' + valeur + exp + ';path=/'
}

// -> Function lire cookie avec en parametre 1 valeur
//    -name = la clé

function lireCookie(nom) {
    // On récupère le nm du cookie et le signe '='
    var nomEtEgal = nom + '=';
    // On récupère tous les cookies dans un tableau
    var cTableau = document.cookie.split(';');
    // Parcourt le tableau crée
    for (let i = 0; i < cTableau.length; i++) {
        // On récupère tous les noms et valeurs des cookies
        var result = cTableau[i];
        // On supprime les espaces potentiels dans result jusqu'à tomber sur le nom d'un cookie
        while (result.charAt(0) == ' ') {
            result = result.substring(1, result.length);
        }
        if (result.indexOf(nomEtEgal) == 0) {
            return result.substring(nomEtEgal.length, result.length);
        }
    }
    // Si nom du cookie non trouvé , il n'existe pas
    return null;
}

// -> Function supprime cookie avec en parametre 1 valeur
//    -name = la clé

function supprimerCookie(nom) {
    // On donne le nom du cookie à supper , puis on utilise creerCookie() pour indiquer une date d'expiration passée
    creerCookie(nom, '', -1);
}