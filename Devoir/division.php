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
$result = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['num1']) && isset($_POST['num2'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        if (is_numeric($num1) && is_numeric($num2)) {
            $result = $num1 / $num2;
            $_SESSION['division_result'] = $result;
        }
    }
}
?>

<?php include 'header.php'; ?>

<h1>Division</h1>
<form method="post" action="">
    <input type="text" name="num1" placeholder="Nombre 1" required>
    <input type="text" name="num2" placeholder="Nombre 2" required>
    <input type="submit" value="Calculer">
</form>

<p>Résultat : <?php echo isset($_SESSION['division_result']) ? $_SESSION['division_result'] : $result; ?></p>
<?php include 'footer.php'; ?>

</body>
</html>