<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstname = $_POST['firstname'];
    $password = $_POST['password'];
    if ($firstname === 'josé' && $password === 'mdp') {
        $_SESSION['firstname'] = $firstname;
        header("Location: profil.php");
    }
}
?>


<?php include 'header.php'; ?>
<h1>Connexion</h1>
<form method="post" action="">
    <input type="text" name="firstname" placeholder="Votre prénom" required>
    <input type="password" name="password" placeholder="Mot de passe" required>
    <input type="submit" value="Se connecter">
</form>
<?php include 'footer.php'; ?>

</body>
</html>