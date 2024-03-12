<?php 
class personnage{

    private string $prenom;
    private int $age;
    private string $sexe;

public function __toString():string{
    return "Prenom : ".$this->prenom."<br>".
           "Age : ".$this->age."<br>".
           "Sexe : ".$this->sexe."<br>";
}
public function __construct(string $unprenom, int $unage, string $unsexe){
    $this->prenom= $unprenom;
    $this->age= $unage;
    $this->sexe= $unsexe;
}
public function obtenirprenom(): string{
         return $this->prenom;
}
public function obtenirage(): int{
    return $this->age;
}
public function obtenirsexe(): string{
    return $this->sexe;
}
 public function changerprenom(string $newprenom): void{
     $this->prenom = $newprenom;
}
public function changerage(int $newage): void{
    $this->age = $newage;
}
public function changersexe(string $newsexe): void{
    $this->sexe = $newsexe ;
}
public function estplusage(personnage $autrepersonne):bool{
   return $this->age > $autrepersonne->obtenirage();
}
}

?>