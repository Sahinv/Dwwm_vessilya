

//---------------------------- Fonction qui permet de créer le cookie ---------------------
// *** RAPPEL ***
// Cookie :
// clé (= valeur permet de stocker l’information souhaitée ) 
// Une date d’expiration (optionnel, durée de vie de cette information.)
// Un domaine (optionnel, nom du serveur par défaut)
//Une arborescence. (optionnel) 

function createCookie(name, value, days) {
    // permet de créer un cookie
    if (days) {
        // si le nombre de jour est renseigné, on le transforme en millieme de seconde
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        var expires = "expires=" + date.toGMTString();
        // Transforme la date en en string
    } else var expires = "";
    //le cookie doit contenir clé=valeur;expires=temps;path=nomDomaine
    // Création du cookie
    document.cookie = name + "=" + value + "; " + expires + "; path=/";
}

//---------------------------- Fonction qui permet de lire le cookie ---------------------
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


//---------------------------- Fonction qui permet de supprimer le cookie ---------------------
function eraseCookie(name) {
    // pour supprimer un cookie, on le périme
    createCookie(name, "", -1);
}
// Variable qui va chercher par l'id visite
var divVisite=document.getElementById("visite");
// Variable qui va chercher par l'id init
var init=document.getElementById("init");
// Dans la variable on capte l'action et on va chercher la fonction initPage
init.addEventListener("click",initPage);

//NOMBRE DE VISITE*************************************
if(readCookie("page")==null){
    createCookie("page", 1,3);
}
else{
    createCookie("page",parseInt(readCookie("page"))+1,3);
}
divVisite.innerHTML="Vous êtes venus "+readCookie("page")+" fois.";


//---------------------------- Fonction qui permet d'initialiser le compteur ---------------------
function initPage(){
    createCookie("page",0, 3);
    divVisite.innerHTML="Vous êtes venus 0 fois.";
}