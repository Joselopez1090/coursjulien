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
<?php session_start();
?>

<h1>Debug</h1>

<pre>
<?php print_r($_SESSION); ?>
</pre>

    
</body>
</html>