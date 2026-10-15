<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP PHP - Exercice 1</title>
</head>
<body>
    <h1>Exercice 1 : Affichage et variables </h1>

    <?php
    // Commentaire sur une ligne : Affichage du message de bienvenue
    echo "<p>Bienvenue dans mon TP PHP</p>";

    /*
       Commentaire sur plusieurs lignes :
       Déclaration et affichage des informations de l'étudiant
       avec des noms de variables explicites.
    */
    $prenom = "Hajar";
    $nom = "El hamidi";
    $groupe = "Groupe G2";

    echo "<p>Nom : $nom<br>";
    echo "Prénom : $prenom<br>";
    echo "Groupe : $groupe</p>";
    ?>

    <p><?= "merci" ?></p>
</body>
</html>