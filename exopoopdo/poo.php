<?php

require 'employe.php'; 
$date1 = new DateTime("12/02/1997");
$date2 = new DateTime("12/02/2020");

$employe1 = new employe(1,"Leonard", "David", $date1, $date2,12000);


echo "Informations de l'employé avant l'augmentation :<br>";
$employe1->AfficherEmploye();

echo "<br>";

$employe1->AugmentationDuSalaire();

echo "Informations de l'employé après l'augmentation :<br>";

$employe1->AfficherEmploye();
?>