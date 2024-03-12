<?php 

class Voiture{
    // attributs
    private string $couleur;
    private float $poids;
    private int $prix;
    private string $marque;

    //constructeur (construir objet en une ligne au lieu de 4)

    public function __construct(string $unecouleur, float $unpoids, int $unprix, string $unemarque){
        $this->couleur= $unecouleur;
        $this->poids= $unpoids;
        $this->prix= $unprix;
        $this->marque= $unemarque;
    }
// les getters
//public function pluschere(voiture $autreVoiture): bool {
//     return $this->prix > $autreVoiture->obtenirprix();
// }
// public function augmenterPrix(int $augmentation) : void{
//         $this->prix += $augmentation;
//       }
// public function obtenirmarque(): string{
//         return $this->marque;
// }
// public function obtenircouleur(): string{
//         return $this->couleur;
// }
// public function obtenirpoids(): float{
//        return $this->poids;
// }
// public function obtenirprix(): int{
//        return $this->prix;
// }    
// public function changerleprix(int $nouveauprix): void{
//     $this->prix = $nouveauprix;
// }
// public function changerlacouleur(string $nouvellecouleur): void{
//     $this->couleur = $nouvellecouleur;
// }
// public function changermarque(): string{
//     return $this->marque;
// }
 public function __toString() : string{
        return  "Couleur : " . $this->couleur."<br>".
                "Poids : " . $this->poids." Kg<br>".
                "Prix : " . $this->prix ." Euros<br>".
                "Marque : " . $this->marque ."<br><br>";
    }
}


?>