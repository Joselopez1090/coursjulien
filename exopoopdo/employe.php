<?php 

class employe{
    private int $matricule;
    private string $nom;
    private string $prenom;
    private datetime $datenaissance;
    private datetime $dateembauche;
    private int $salaire;

public function __construct(int $unmatricule, string $unnom, string $unprenom, datetime $unedatenaissance, datetime $unedateembauche,int $unsalaire){
    $this->matricule= $unmatricule;
    $this->nom= $unnom;
    $this->prenom= $unprenom;
    $this->datenaissance= $unedatenaissance;
    $this->dateembauche=$unedateembauche;
    $this->salaire=$unsalaire;
}

public function Age() {
    $dateActuelle = new DateTime('now');
    $difference = $this->datenaissance->diff($dateActuelle);
    return $difference->y;
}

// Méthode pour obtenir l'ancienneté
public function Anciennete() {
    $dateActuelle = new DateTime('now');
    $difference = $this->dateembauche->diff($dateActuelle);
    return $difference->y;
}
public function AugmentationDuSalaire() {
    $anciennete = $this->Anciennete();

    if ($anciennete < 5) {
        $this->salaire *= 1.02; // Augmentation de 2%
    } elseif ($anciennete < 10) {
        $this->salaire *= 1.05; // Augmentation de 5%
    } else {
        $this->salaire *= 1.1;  // Augmentation de 10%
    }
}
public function AfficherEmploye() {
    echo "Matricule :".$this->matricule."<br>";
    echo "Nom complet : " . $this->nom . " " . $this->prenom . "<br>";
    echo "Age : " . $this->Age() . " ans<br>";
    echo "Ancienneté : " . $this->Anciennete() . " ans<br>";
    echo "Salaire : " . $this->salaire . " euros<br>";
}
}

?>