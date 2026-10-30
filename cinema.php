<?php

include_once 'Seance.php';
include_once 'BilletPleinTarif.php';
include_once 'BilletReduit.php';
include_once 'BilletEnfant.php';



$seance = new Seance("16 decembre 2026", "20h30");

$billetPleinTarif = new BilletPleinTarif( 12, 23.5 , $seance);
$billetReduit = new BilletReduit(42 , 23.5 , $seance ,"carte étudiante");
$billetEnfant = new BilletEnfant(11 , 5 ,$seance, 9);


echo "<body style='background-color: #1c1c1c; color: white;'>";

echo "<h1 style='color: #cc7605f3; text-align: center; font-size: 40px;'>
Dunesday
</h1>";


echo "<h2 style='color: #cc7605f3;'>Billet adulte</h2>";
echo "Prix calculé : " . $billetPleinTarif->calculerPrix() . " €<br>";
$billetPleinTarif->imprimerDetail();



echo "<h2 style='color: #cc7605f3;'>Billet enfant</h2>";
echo "Prix calculé : " . $billetEnfant->calculerPrix() . " €<br>";
$billetEnfant->imprimerDetail();



echo "<h2 style='color: #cc7605f3;'>Billet étudiant</h2>";
echo "Prix calculé : " . $billetReduit->calculerPrix() . " €<br>";
$billetReduit->imprimerDetail();


?>