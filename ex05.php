<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ex05</title>
</head>
<body>
<?php
$valeurs_a_tester = [-1, 9, 10, 12, 14, 16, 21];

foreach ($valeurs_a_tester as $moyenne) {
    if ($moyenne < 0 || $moyenne > 20) {
        $resultat = "Note invalide";
    } else {
        if ($moyenne < 10) {
            $resultat = "Non validé";
        } elseif ($moyenne < 12) {
            $resultat = "Passable";
        } elseif ($moyenne < 14) {
            $resultat = "Assez bien";
        } elseif ($moyenne < 16) {
            $resultat = "Bien";
        } else {
            $resultat = "Très bien";
        }
    }

    echo "Pour une moyenne de <strong>$moyenne</strong>, le message obtenu est : <em>$resultat</em><br>";
}
?>
</body></html>