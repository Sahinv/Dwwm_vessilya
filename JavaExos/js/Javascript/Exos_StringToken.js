function strtok(str1, str2, n) {
    var tab = str1.split(str2); /// La méthode split() permet de diviser une chaîne de caractères à partir d'un séparateur pour fournir un tableau de sous-chaînes.
    return (tab[n - 1]);
}

 var str = "robert;dupont;amiens;8000";
 document.write(strtok(str, ";", 3));