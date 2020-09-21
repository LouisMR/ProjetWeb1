<?php
session_start();
include("mvc/utils/bdd.php");

// $_POST["username"];
// $_POST["password"];

if (isset($_POST["username"]) == false) {
    header("location:admin.php");
    exit();
}

$username = $_POST["username"];
$password = ($_POST["password"]);

$sql = "
    SELECT * 
    FROM utilisateurs
    WHERE
        utilisateur = '" . $username . "' AND
        motdepasse = '" . $password . "';
";

$resultats = mysqli_query($bdd, $sql);

if (!$resultats) {
    echo mysqli_error($bdd);
    exit();
}

if (mysqli_num_rows($resultats) > 0) {

    $utilisateurs = mysqli_fetch_assoc($resultats);

    $_SESSION["utilisateurID"] = $utilisateurs["id"];
    $_SESSION["utilisateurUtilisateur"] = $utilisateurs["utilisateur"];
    $_SESSION["estConnecte"] = true;
    header("location:adminAccueil.php");
    exit();
} else {
    $_SESSION["estConnecte"] = false;
    echo "Erreur de connexion";
}
?>