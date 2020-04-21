function calculatrice() {
  var nb1 = prompt("Donner un premier chiffre"),
    ope = prompt("Donner l'opérateur"),
    nb2 = prompt("Donner le second chiffre"),
    t;
  if (nb1 == "" || nb2 == "" || ope == "") {
    return alert("pas de données");
  }
  nb1 = parseInt(nb1, 10);
  nb2 = parseInt(nb2, 10);
  switch (ope) {
    case '+':
      t = nb1 + nb2;
      break;
    case '-':
      t = nb1 - nb2;
      break;
    case '*':
      t = nb1 * nb2;
      break;
    case '/':
      t = nb1 / nb2;
      break;
    default:
      t = "operateur non reconnu !";
      break;
  }
  alert(t);
};
calculatrice();