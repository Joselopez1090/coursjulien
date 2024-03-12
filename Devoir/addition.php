<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'header.php'; ?>
    <?php include 'footer.php'; ?>
</head>
<body>
<?php 
session_start();
$result = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['num1']) && isset($_POST['num2'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        if (is_numeric($num1) && is_numeric($num2)) {
            $result = $num1 + $num2;
            $_SESSION['addition_result'] = $result;
        }
    }
}
?>



<h1>Addition</h1>
<form method="post" action="">
    <input type="text" name="num1" placeholder="Nombre 1" required>
    <input type="text" name="num2" placeholder="Nombre 2" required>
    <input type="submit" value="Calculer">
</form>

<p>Résultat : <?php echo isset($_SESSION['addition_result']) ? $_SESSION['addition_result'] : $result; ?></p>


    
</body>
</html>