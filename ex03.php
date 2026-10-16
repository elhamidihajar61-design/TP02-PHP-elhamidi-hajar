<?php
define("TAUX_TVA", 20);
define("DEVISE", "MAD");
$prixHT = 60; 
$qte = 3;

$totalHT = $prixHT * $qte; // 180
$montantTVA = $totalHT * TAUX_TVA / 100; // 36
$totalTTC = $totalHT + $montantTVA; // 216
$totalTTC += 15; // 231 avec livraison
echo "Total HT: $totalHT ".DEVISE."<br>";
echo "TVA: $montantTVA ".DEVISE."<br>";
echo "TTC + livraison: $totalTTC ".DEVISE."<br>";
if(defined("TAUX_TVA"))
         echo "Constante TAUX_TVA existe";
?>
