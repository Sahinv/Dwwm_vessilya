// Fonction pour le cookie
function createCookie(name, value, days) { // permet de créer un cookie
    if (days) {
        // si le nombre de jour est renseigné, on le transforme en millieme de seconde
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        var expires = "expires=" + date.toGMTString();
    }
    else var expires = "";
    //le cookie doit contenir clé=valeur;expires=temps;path=nomDomaine 
    document.cookie = name + "=" + value + "; " + expires + "; path=/";
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

// Enregistrement du formulaire dans le cookie
//On récupère l'id du Bouton envoyer grace a l'action puis on applique la fonction
document.getElementById("send").addEventListener("click", function () {

    // On récupère les informations du formulaire dans la fonction
    var nomUser = document.getElementById("nom").value;
    var prenomUser = document.getElementById("prenom").value;

    // refresh la page au moment de la l'action
    location.reload();

    // On  crée les cookie 
    createCookie("nom", nomUser);
    createCookie("prenom", prenomUser);
})

// Verification de l'existence des cookies
if (readCookie("nom", "prenom") != null) {
    // On récupère l'id de la div qui permet d'afficher la phrase de présentation , grace aux cookie du nom + prenom 
    document.getElementById("affichage").innerHTML = "Bonjour : " + readCookie("nom") + " " + readCookie("prenom");
}

// Remise à zéro des cookies
if (readCookie("nom", "prenom") != null) {
    //On stock dans la variable l'id du bouton reinitialisation grace a l'action , ensuite on applique la fonction
    var reinit = document.getElementById("reinit").addEventListener("click", function () {
        // On appel la fonction supprimer cookie
        eraseCookie("nom", "prenom");
        location.reload();
    })
}



