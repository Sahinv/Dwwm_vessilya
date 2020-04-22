<!DOCTYPE HTML>
<HTML>
<!--  sur base du travail de Maciej-->

<head>
    <meta charset="UTF-8" />
    <title>Examen Chûnin</title>
    <link rel="stylesheet" href="Css.css" />
</head>
<!--  Attributs utilisés
    required : oblige le champ à contenir quelque chose à la validation (obligatoire)
    autofocus : le pointeur sera dans ce champ au demarrage de la page
    title : infobulle
    placeholder : information dans le champ qui s'efface à la réception du focus
    checked : la case est cochée au démarrage
    textarea : zone texte sur plusieurs lignes
-->

<body>
    <header>
        <h1>Formulaire d'inscription à l'examun chûnin</h1>
    </header>
    <form action="resultat.php" method="POST">

        <div>
            <label for="nom">Nom : </label>
            <input type="text" id="no" name="nom" pattern="^[A-ZÀ-Ý]{1}[a-zà-ý '-]*$" required autofocus>
            <div class="vert"> <img src="rouge.png" > </div>
            <div class="rouge"> <img src="Vert.png">   </div>
        </div>

        <div>
            <label for="prenom">Prenom : </label>
            <input type="text" id="preno" name="prenom" required >
            <div class="vert"> <img src="rouge.png" > </div>
            <div class="rouge"> <img src="Vert.png">   </div>


        </div>
        <div>
            <label for="codePostal">Code postal : </label>
            <input type="text" id="posta" name="codePostal" required>
            <div class="vert"> <img src="rouge.png" > </div>
            <div class="rouge"> <img src="Vert.png">   </div>

        </div>
      
        <div >
            <label for="motDePasse">Mot de passe : </label>
            <input type="password"  id="motDePasse" name="motDePasse" required>
            <div class="vert"> <img src="rouge.png" > </div>
            <div class="rouge"> <img src="Vert.png">   </div>
           
        </div>
        <div >
            <label for="confirm">Confirmer mot de passe : </label>
            <input type="password"  id="confirm" name="confirm" required>
            <div class="vert"> <img src="rouge.png" > </div>
            <div class="rouge"> <img src="Vert.png">   </div>
        </div>

        <div>
            <button id="submit" type="submit ">Valider</button>
            <button type="submit">Annuler</button>
        </div>
    </form>

    <script src="test.js"></script>
</body>


</html>