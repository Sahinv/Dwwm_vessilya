var nom = document.getElementById('no'); // je vais chercher mon id nom 

// nom.addEventListener("input", testNom); // je fait appel a ma fonction test nom 

bonNom = new regExp("^[A-ZÀ-Ý]{1}[a-zà-ý '-]*$"); // je test si cest bien des lettres et mini 2 

function testNom() { // tester mon nom
    if (!bonNom.test(nom.value)) // si le test est pas bon message erreur en alerte
        alert("erreur sur la verification du nom ");

}