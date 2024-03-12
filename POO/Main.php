<?php
require ("voiture.php");
require ("personnage.php");


// $voiture1 = new Voiture("blanc", 1500.23, 1000000);
// $voiture1->changerlacouleur("mauve");
// $voiture1->changerleprix(10000);

// echo "elle a une couleur de : ".$voiture1->obtenircouleur()."<br>";
// echo "elle a un prix de : ".$voiture1->obtenirprix()." Euro<br>";
// echo "elle a un poids de : ".$voiture1->obtenirpoids()." Kilos<br>";
// echo "le prix augmente de 5000 :".$voiture1->augmenterPrix(5000)."<br>";
// echo "elle a un prix final de : ".$voiture1->obtenirprix()." Euro<br>";

// echo "<br>";

// $voiture2 = new Voiture();

// $voiture2->changerCouleur('Blanche');
// $voiture2->changerPoids(600);
// $voiture2->changerPrix(6500);

// echo "Voiture2 est de couleur : ".$voiture2->obtenirCouleur(). "<br>";
// echo "Voiture2 a un poids de : ".$voiture2->obtenirPoids() . "Kg<br>";
// echo "Voiture2 à un prix de : " . $voiture2->obtenirPrix() . "€<br>";

// echo "<br>";

// if ($voiture1->obtenirPrix() > $voiture2->obtenirPrix() ){
//     echo "La voiture ".$voiture1->obtenirCouleur()." est plus chère que la voiture".$voiture2->obtenirCouleur()." de ".$voiture1->obtenirPrix() - $voiture2->obtenirPrix()." €";
// }
// if ($voiture2->obtenirPrix() > $voiture1->obtenirPrix() ){
//     echo "La voiture ".$voiture2->obtenirCouleur()." est plus chère que la voiture".$voiture1->obtenirCouleur()." de ".$voiture2->obtenirPrix() - $voiture1->obtenirPrix()." €";
// }

// $voiture3= new Voiture("Noire",1750.4,10000,"Ferrari");

// echo "La voiture 3 <br>";
// echo "Couleur : ".$voiture3->obtenircouleur()."<br>";
// echo "Poids : ".$voiture3->obtenirpoids()."<br>";
// echo "Prix : ".$voiture3->obtenirprix()."<br>";
// echo "Marque : ".$voiture3->obtenirmarque()."<br>";

// $voiture4= new Voiture("Blanche",1850.4,15000,"Audi");
// $voiture5= new Voiture("Rouge",1650.4,12000,"Mercedes");
// echo "<br>";
// echo "La voiture 4 <br>";
// echo "Couleur : ".$voiture4->obtenircouleur()."<br>";
// echo "Poids : ".$voiture4->obtenirpoids()."<br>";
// echo "Prix : ".$voiture4->obtenirprix()."<br>";
// echo "Marque : ".$voiture4->obtenirmarque()."<br> <br>";

//  $car1= $voiture4;
//  $car2= $voiture5;
// if ($car1->pluschere($car2) ){
//         echo "La voiture ".$car1->obtenirCouleur()." est plus chère que la voiture ".$car1->obtenirCouleur()." de ".$car1->obtenirPrix() - $car2->obtenirPrix()." €";
//    }else{
//     echo "La voiture ".$car2->obtenirCouleur()." est plus chère que la voiture ".$car1->obtenirCouleur()." de ".$car2->obtenirPrix() - $car1->obtenirPrix()." €";
//    }
// $maVoiture1 = new Voiture("Jaune",1300.5,8000,"BMW");
// $maVoiture2 = new Voiture("Verte",1542.23,1000,"Audi");
// $maVoiture3 = new Voiture("Blanche",546.5,9999,"Fiat");
// $car = new Voiture("Mauve", 562.23,100000,"Tesla");

// echo $maVoiture1;
// echo $maVoiture2;
// echo $maVoiture3;
// echo $car;
$perso1 = new personnage("Charles",20,"H");
$perso2 = new personnage("Jean",18,"H");
$perso3 = new personnage("Remy",55,"H");
$perso4 = new personnage("Bertrand",37,"H");
$perso5 = new personnage("Bernadette",69,"F");

echo $perso1;
echo $perso2;
echo $perso3;
echo $perso4;
echo $perso5;

if($perso1->estplusage($perso2)){
    echo "La personne :".$perso1->obtenirprenom()." est plus age que :".$perso2->obtenirprenom();
}



//var_dump($voiture1);

?>