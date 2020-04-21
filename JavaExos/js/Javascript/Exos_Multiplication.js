

function multi(nb)
{console.log("voici la table de "+nb+" : ");
document.write("voici la table de "+nb+" : <br>");
    for( i=1 ; i<=10; i++){

     var table = nb * i ;

        console.log(nb+" x "+i+" = "+table );
        document.write(nb+" x "+i+" = "+table +"<br>") // Affiche en html a la suite 
    }
}

multi(7);