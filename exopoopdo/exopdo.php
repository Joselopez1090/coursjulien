<?php 
//La connexion à la base de données coursmysql
//$pdo = new PDO('mysql:dbname=coursmysql2;host=localhost', "root",""); 
//On utilise une méthode de la classe PDO qui permet de faire une 
//requête et qui reçoit donc une requête en paramètre. Cette méthode 
//retourne un objet de type PDOStatement qu'on mettra dans 
//une variable $resultat
//$resultat = $pdo->query('SELECT * from users' );
//On va ensuite utiliser une méthode de classe de PDOStatement 
//qui permet de récupérer le résultat sous forme de tableau. 
//On fait un vardump pour voir ce qu'il contient.
// var_dump($resultat->fetchAll());
$prenom = "Julien";
    $nom = "Dunia";
    $genre = "M";
    $datetime = new DateTime("1998/11/18");
    $dateDeNaiss = $datetime->format('Y-m-d'); 
    $ville = "Bruxelles";
    $poids = 87;
    
    try{
        
        $req = $pdo->prepare('INSERT INTO users VALUES(:id_user, :firstname, :lastname, :gender, :date_of_birth, :city, :weight_kg)');

        $req->execute([
            'id_user' => NULL,
            'firstname' => $prenom,
            'lastname' => $nom,
            'gender' => $genre,
            'date_of_birth' => $dateDeNaiss,
            'city' => $ville,
            'weight_kg' => $poids
        ]);
        
        echo "Le nouvel utilisateur " . $prenom . " ". $nom ." a bien été ajouté";
    }catch (PDOException $e){
        echo "Erreur : " . $e->getMessage();
    }

?>