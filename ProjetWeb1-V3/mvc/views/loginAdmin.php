<?php
include("mvc/utils/bdd.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="././styles.css">
    <title>Gabriel Forion</title>
</head>
<body>
    <nav class="navbar nav">
        <div class="row align-items-center">
            <div class="col-lg-1">
                <img src="images/Logo.png">
            </div>
            <div class="col-lg-4">
                <h3>Gabriel Forion</h3>
            </div>
            <div class="col-lg-7">
                <a href="accueil.html">Accueil</a>
                <a href="accueil.html#compositions">Compositions</a>
                <a href="accueil.html#nouvelles">Nouvelles</a>
                <a href="#">Se Connecter</a>
            </div>
        </div>
    </nav>
    <div class="container-fluid admin">
        <div class="row">
            <div class="col-lg-6">
                <img src="images/Logo-Gabriel_Forion.svg" width="1000px";>
            </div>
            <div class="col-lg-6">
                <h1>Zone Administrative<h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg">
                <form action="loginSubmit.php" method="post">
                    <input type="text" class="connexionAdmin" id="connexion" name="username" placeholder="Nom d'utilisateur"><br><br>
                    <input type="password" class="passwordAdmin" id="password" name="password" placeholder="Mot de passe"><br><br>
                    <input type="submit" class="btn btn-light" value="Se connecter">
                </form>
            </div>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>