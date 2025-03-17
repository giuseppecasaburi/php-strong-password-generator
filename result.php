<?php 
require "./functions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generata ✔</title>
</head>
<body>
    <h1>Password Generata con successo</h1>
    <p><b>
        <?php 
        passwordGenerator($_SESSION["password-length"]);
        ?>
    </b></p>
</body>
</html>