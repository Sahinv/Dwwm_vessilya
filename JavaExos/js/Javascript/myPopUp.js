var fille;

document.getElementById("ouvrirFenetre").addEventListener("click",function(){

    fille = window.open('fenetreFille.html','',200,200);

});

document.getElementById("fermerFenetre").addEventListener("click",function(){

    fille.close();

});

document.getElementById("deplacerFenetre").addEventListener("click",function(){

    fille.moveBy(100,100);
    fille.focus();

});