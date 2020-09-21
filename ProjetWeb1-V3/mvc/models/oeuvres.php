<?php
include("mvc/utils/bdd.php");

function ajoutOeuvre($ajoutOeuvre) {
    global $bdd;

    $sql = "
        INSERT INTO oeuvres (image, titre, description, audio)
        VALUES ('".$_POST["image"]."', '".$_POST["titre"]."', '".$_POST["description"]."', '".$_POST["audio"]."' )
    ";

    mysqli_query($bdd, $sql);
}

function listeOeuvres() {
    global $bdd;

    $sql = "
        SELECT id, image, titre, description, audio
        from oeuvres
    ";

    $resultat = mysqli_query($bdd, $sql);
    return $resultat;
}

function getOeuvre($id) {
    global $bdd;

    $sql = "
        SELECT id, image, titre, description, audio
        FROM oeuvres
        WHERE id = $id
    ";

    $resultat = mysqli_query($bdd, $sql);

    return mysqli_fetch_assoc($resultat);
}

function modifierOeuvre ($id, $image, $titre, $description, $audio) {
    global $bdd;

    $sql = "
        UPDATE oeuvres
        SET image = '$image', titre = '$titre', description = $description, audio = '$audio'
        WHERE id = $id
    ";

    $resultat = mysqli_query($bdd, $sql);
    return $resultat;
}


function supprimerOeuvre($id) {
    global $bdd;

    $sql = "
        DELETE FROM oeuvres
        WHERE id = $id
    ";

    $resultat = mysqli_query($bdd, $sql);
    return $resultat;
}

function ajoutUser($ajoutUser) {
    global $bdd;

    $sql = "
        INSERT INTO utilisateurs (utilisateur, courriel, motdepasse)
        VALUES ('".$_POST["utilisateur"]."', '".$_POST["courriel"]."', '".$_POST["password"]."')
    ";

    mysqli_query($bdd, $sql);
}

function listeUsers() {
    global $bdd;

    $sql = "
        SELECT id, utilisateur, courriel, motdepasse
        from utilisateurs
    ";

    $resultat = mysqli_query($bdd, $sql);
    return $resultat;
}

function getUser($id) {
    global $bdd;

    $sql = "
        SELECT id, utilisateur, courriel, motdepasse
        FROM utilisateurs
        WHERE id = $id
    ";

    $resultat = mysqli_query($bdd, $sql);

    return mysqli_fetch_assoc($resultat);
}

function modifierUser ($id, $utilisateur, $courriel, $motdepasse) {
    global $bdd;

    $sql = "
        UPDATE utilisateurs
        SET utilisateur = '$utilisateur', courriel = '$courriel', motdepasse = '$motdepasse'
        WHERE id = $id
    ";

    $resultat = mysqli_query($bdd, $sql);
    return $resultat;
}

function supprimerUser($id) {
    global $bdd;

    $sql = "
        DELETE FROM utilisateurs
        WHERE id = $id
    ";

    $resultat = mysqli_query($bdd, $sql);
    return $resultat;
}

?>