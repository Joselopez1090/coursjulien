<?php

$_SESSION['connected']=false;
unset($_SESSION['pseudo']);
header("location: /coursphp3/index.php");
