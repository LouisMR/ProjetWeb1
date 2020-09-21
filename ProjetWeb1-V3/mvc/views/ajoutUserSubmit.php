<?php
session_start();

if ($_SESSION["estConnecte"] == true) {

} else {
    header("location:admin.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Utilisateur ajouté</title>
</head>
<body>
    <h1>L'utilisateur a été ajouté</h1>
</body>
</html>