<?php
// Attention on reprend la session ouverte


$title = "Dashboard";
$nav = "dashboard";
require "header.php";
//verifie sion est connecte,dans le cas ou on est pas connecte il nous redirige vers login
if(!is_connected()){
    header('location: /coursphp3/login.php');
}




?>
<h1 align="center">Bienvenue <?php echo $_SESSION['pseudo'];?> dans votre Dashboard</h1>
<p>Voici le contenu de dashboard</p>
<?php
require "footer.php";
?>