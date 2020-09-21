<?php
include("mvc/models/oeuvres.php");

function adminController() {
    $utilisateurs = listeUsers();
    $oeuvres = listeOeuvres();
    include("mvc/views/adminAccueil.php");
}

function loginController() {
    include("mvc/views/loginAdmin.php");
}

function loginControllerSubmit() {
    include("mvc/views/loginSubmit.php");
    header("location:adminAcceuil.php");
    exit();
}

function ajoutController() {
    include("mvc/views/ajoutUser.php");
}

function ajoutControllerSubmit() {
    ajoutUser($_POST["utilisateur"], $_POST["courriel"], $_POST["motdepasse"] );
    header("location:adminAccueil.php");
    exit();
}

function listeControllerSubmit() {
    $utilisateurs = listeUsers();
    include("mvc/views/adminAccueil.php#users");
}

function userModifier() {
    $utilisateurs = getUser($_GET["id"]);

    include("mvc/views/userModifier.php");
}

function modifierUserSubmitController() {
    modifierUser($_POST["id"], $_POST["utilisateur"], $_POST["courriel"], $_POST["motdepasse"]);

    header("location:adminAccueil.php");
}

function userSupprimer() {
    supprimerUser($_GET["id"]);

    header("location:adminAccueil.php");
}

function ajoutOeuvresController() {
    include("mvc/views/ajoutOeuvres.php");
}

function ajoutOeuvresControllerSubmit() {
    ajoutOeuvre($_POST["image"], $_POST["titre"], $_POST["description"], $_POST["audio"]);

    echo $_POST["titre"] . "<br>";
    var_dump($_FILES["image"]);
    $ancien = $_FILES["image"]["tmp_name"];
    $nouveau = "uploads/" . $_FILES["image"]["titre"];

    move_uploaded_file($ancien, $nouveau);

    include("mvc/views/ajoutOeuvresSubmit.php");
}

function listeOeuvresControllerSubmit() {
    $oeuvres = listeOeuvres();
    include("mvc/views/adminAccueil.php#oeuvres");
}

function oeuvreSupprimer() {
    supprimerOeuvre($_GET["id"]);

    header("location:adminAccueil.php");
}

function oeuvreModifier() {
    $oeuvres = getOeuvre($_GET["id"]);

    include("mvc/views/modifier.php");
}

function modifierSubmitController() {
    modifierOeuvre($_POST["id"], $_POST["image"], $_POST["titre"], $_POST["description"], $_POST["audio"]);

    header("location:adminAccueil.php");
}

?>