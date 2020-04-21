function retourne(elt, recto) {
    id = elt.id // on récupére l'id de l'image 

    // Construction du nom de la nouvelle image 
    if (recto) nomImage= "../Image/"+id+"A.jpg";
    else nomImage="../Image/"+id+"R.jpg";
    elt.src=nomImage;
}

var images = document.getElementsByTagName("img"); // On recup toutes les images
for (let i = 0 ; i < images.length; i++) {
    images[i].addEventListener("mouseover", function() {
        retourne(images[i], true); // On lance la méthode retourne, on lui envoie l'image sur laquelle la sourie passe
        //  true permet de savoir si on passe du recto au verso ou inversement

    });
    images[i].addEventListener("mouseout", function() {  retourne(images[i], false)});
    
}