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
?>


<?php include 'header.php'; ?>
<h1>Mon Profil</h1>
<?php if(isset($_SESSION['firstname'])): ?>
    <p>Bienvenue, <?php echo $_SESSION['firstname']; ?>, sur votre page de profil.</p>
<?php else: ?>
    <p>Veuillez vous connecter pour accéder à votre profil.</p>
<?php endif; ?>
<?php include 'footer.php'; ?>

</body>
</html>