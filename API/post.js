// 229a7f1ca981d5bf71a3e305c2af64ea clé api météo

//Var contenant la ville
villeChoisie = "Paris";
//Appel de la fonction 
recevoirTemperature(villeChoisie);

//On place dans la variable l'élement css du bouton
changerDeVille = document.querySelector('#changer');
//On capte l'action puis demande a l'utilsateur la ville , on fois écrite on y applique la fonction
changerDeVille.addEventListener('click', () => {
    villeChoisie = prompt('Quelle ville souhaitez-vous voir ?');
    recevoirTemperature(villeChoisie);
});

function recevoirTemperature(ville) {
    url = 'https://api.openweathermap.org/data/2.5/weather?q=' + ville + '&appid=229a7f1ca981d5bf71a3e305c2af64ea&units=metric';

    requete = new XMLHttpRequest(); // Nous créons un objet qui nous permettra de faire des requêtes
    requete.open('GET', url); // Nous récupérons juste des données
    requete.responseType = 'json'; // Nous attendons du JSON
    requete.send(); // Nous envoyons notre requête

    // Dès qu'on reçoit une réponse, cette fonction est executée
    requete.onload = function () {
        if (requete.readyState === XMLHttpRequest.DONE) {
            if (requete.status === 200) {
                reponse = requete.response;
                console.log(reponse);
                temperature = reponse.main.temp;
                ville = reponse.name;

                console.log(temperature);
                console.log(ville);

                document.querySelector('#temperature_label').textContent = Math.round(temperature);
                document.querySelector('#ville').textContent = ville;


            } else {
                alert('Un problème est intervenu, merci de revenir plus tard.');
            }
        }
    }
}
