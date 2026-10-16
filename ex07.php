<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 7</title>
    
</head>
<body>

    <section>
        <h2>Table de multiplication de 7</h2>
        <?php
        $nombre = 7; 

        for ($i = 1; $i <= 10; $i++) {
            $resultat = $nombre * $i;
            echo "$nombre &times; $i = $resultat<br>";
        }
        ?>
    </section>

    <hr>

    <section>
        <h2>Pyramide d'étoiles</h2>
        <?php
        for ($ligne = 1; $ligne <= 6; $ligne++) {
            for ($etoile = 1; $etoile <= $ligne; $etoile++) {
                echo "*"; 
            }
            echo "<br>"; 
        }
        echo "</pre>";
        ?>
    </section>

</body>
</html>