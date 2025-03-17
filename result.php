<?php 
require "./functions.php";
$user_password = passwordGenerator($_SESSION["password-length"]);
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
        echo "La password pensata per te è: $user_password"
        ?>
    </b></p>
</body>
</html>