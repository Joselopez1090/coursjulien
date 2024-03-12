<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mon Site</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<header>
    <nav>
        <ul>
            <li><a href="index.php" <?php if(basename($_SERVER['PHP_SELF']) == 'index.php' && basename($_SERVER['PHP_SELF']) != 'logout.php') echo 'class="active"'; ?>>Accueil</a></li>
            <li><a href="debug.php" <?php if(basename($_SERVER['PHP_SELF']) == 'debug.php' && basename($_SERVER['PHP_SELF']) != 'logout.php') echo 'class="active"'; ?>>Debug</a></li>
            <li><a href="reset.php" <?php if(basename($_SERVER['PHP_SELF']) == 'reset.php' && basename($_SERVER['PHP_SELF']) != 'logout.php') echo 'class="active"'; ?>>Reset</a></li>
            <li><a href="addition.php" <?php if(basename($_SERVER['PHP_SELF']) == 'addition.php' && basename($_SERVER['PHP_SELF']) != 'logout.php') echo 'class="active"'; ?>>Addition</a></li>
            <li><a href="multiplication.php" <?php if(basename($_SERVER['PHP_SELF']) == 'multiplication.php' && basename($_SERVER['PHP_SELF']) != 'logout.php') echo 'class="active"'; ?>>Multiplication</a></li>
            <li><a href="division.php" <?php if(basename($_SERVER['PHP_SELF']) == 'division.php' && basename($_SERVER['PHP_SELF']) != 'logout.php') echo 'class="active"'; ?>>Division</a></li>
            <li><a href="substraction.php" <?php if(basename($_SERVER['PHP_SELF']) == 'subtraction.php' && basename($_SERVER['PHP_SELF']) != 'logout.php') echo 'class="active"'; ?>>Soustraction</a></li>
            <li><a href="profil.php" <?php if(basename($_SERVER['PHP_SELF']) == 'profile.php' && basename($_SERVER['PHP_SELF']) != 'logout.php') echo 'class="active"'; ?>>Mon Profil</a></li>
            
           
            <?php echo (isset($_SESSION['username'])) ? '<li><a href="logout.php">Logout</a></li>' : '<li><a href="login.php">Login</a></li>'; ?>

        </ul>
    </nav>
</header>

    <main>
