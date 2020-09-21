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
                <a href="admin.php">Se Connecter</a>
            </div>
        </div>
    </nav>
    <div class="container-fluid adminAcceuil">
        <div class="row">
            <div class="col-lg">
                <h1>Acceuil de la zone administrative</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg">
            <a href="#oeuvres"><button type="button" class="btn btn-dark">Liste des oeuvres</button></a>
            </div>
            <div class="col-lg">
                <a href="#users"><button type="button" class="btn btn-dark">Liste des utilisateurs</button></a>
            </div>
        </div>
    </div>
    <div class="container-fluid listes">
        <div class="row" id="oeuvres">
            <div class="col-lg">
                <h1>Liste des oeuvres</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg">
                <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modalOeuvres">Ajouter</button>
            </div>
        </div>
        <div class="row">
            <?php 
            foreach ($oeuvres as $oeuvre) { ?>
            <div class="col-lg-2">
                <img src="<?php echo $oeuvre["image"]?>">
                <!-- <img src="images/Aime-moi.png"> -->
            </div>
            <div class="col-lg-7">
                <h2><?php echo $oeuvre["titre"]?></h2>
                <p><?php echo $oeuvre["description"]?></p>
                <p><audio controls><?php echo $oeuvre["audio"]?></audio></p>
            </div>
            <div class="col-lg supprimer">
                <p><a href="oeuvreSupprimer.php?id=<?php echo $oeuvre["id"]; ?> "><input type="button" class="btn btn-dark" value="Supprimer"></a></p>
                <p><input type="button" class="btn btn-dark" data-toggle="modal" data-target="#modalModifierOeuvres-<?php echo $oeuvre["id"] ?>" value="Modifier"></p>
            </div>
            <?php
                }
            ?>
        </div>
        <div class="row" id="users">
            <div class="col-lg">
                <h1>Liste des utilisateurs</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg">
                <button type="button" class="btn btn-dark ajouterUsers" data-toggle="modal" data-target="#modalUtilisateurs">Ajouter</button>
            </div>
        </div>
        <div class="row listeUtilisateurs">
            <?php 
                foreach ($utilisateurs as $utilisateur) { ?>
                <div class="col-lg-3">
                <h6>Nom d'utilisateur</h6>
                    <p><?php echo $utilisateur["utilisateur"]?></p>
                </div>
                <div class="col-lg-3">
                <h6>Courriel</h6>
                    <p><?php echo $utilisateur["courriel"]?></p>
                </div>
                <div class="col-lg-3">
                <h6>Mot de passe</h6>
                    <p><?php echo $utilisateur["motdepasse"]?></p>
                </div>
                <div class="col-lg-3">
                    <p><a href="userSupprimer.php?id=<?php echo $utilisateur["id"]; ?> "><input type="submit" class="btn btn-dark" value="Supprimer"></button></a></p>
                    <p><input type="button" class="btn btn-dark" data-toggle="modal" data-target="#modalmodifierUtilisateurs-<?php echo $utilisateur["id"] ?>" value="Modifier"></p>
                </div>
            <?php
                }
            ?>
        </div>
    </div>

    <!-- modal oeuvres -->
    <div class="modal" id="modalOeuvres" tableindex="-1" aria-labelledby="modalOeuvresLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Ajout d'une oeuvre</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="ajoutOeuvresSubmit.php" method="post">
                        <div class="modal-body">
                            <input type="file" name="image"><br><br>
                            <!-- <img src="images/64x64.png" class="ajoutImage" id="ajoutImage"> -->
                            <input type="text" class="titreOeuvre" name="titre" id="ajoutOeuvresTitre" placeholder="Entrez le titre"><br><br>
                            <textarea name="description" rows="5" cols="30" class="description" id="ajoutOeuvresDesc" placeholder="Entrez la description"></textarea><br><br>
                            <input type="file" name="audio">
                            <!-- <img src="images/notes.png" class="audio" id="audio"> -->
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-dark" value="Valider">
                    </div>
                    </form>
                </div>
            </div>
        </div>

    <!-- modal utilisateurs -->
    <div class="modal" id="modalUtilisateurs" tableindex="-1" aria-labelledby="modalUtilisateursLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Ajout d'un utilisateur</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="ajoutUserSubmit.php" method="post">
                <div class="modal-body">
                    <input type="text" class="nomUtilisateur" id="ajoutUser" name="utilisateur" placeholder="Entrez le nom d'utilisateur"><br><br>
                    <input type="text" class="courriel" id="ajoutCourriel" name="courriel" placeholder="Entrez le courriel"><br><br>
                    <input type="password" class="password" id="ajoutPassword" name="password" placeholder="Entrez le mot de passe">
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-dark" value="Valider">
                </div>
                </form>
            </div>
        </div>
    </div>

        <!-- modal modifierOeuvres -->
        <?php 
            foreach ($oeuvres as $oeuvre) { ?>
        <div class="modal" id="modalModifierOeuvres-<?php echo $oeuvre["id"] ?>" tableindex="-1" aria-labelledby="modalModifierOeuvresLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Modifier une oeuvre</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="modifierOeuvreSubmit.php" method="post">
                    <div class="modal-body">
                        <input type="hidden" name="id" value="<?php echo $oeuvre["id"] ?>">
                        <input type="file" name="image"><br><br>
                        <!-- <img src="images/64x64.png" class="ajoutImage" id="ajoutImage"> -->
                        <input type="text" class="titreOeuvre" name="titre" placeholder="Entrez le titre" value="<?php echo $oeuvre["titre"]?>"><br><br>
                        <textarea name="description" rows="5" cols="30" class="Description" placeholder="Entrez la description" value="<?php echo $oeuvre["description"]?>"></textarea><br><br>
                        <input type="file" name="audio">
                        <!-- <img src="images/notes.png" class="audio" id="audio"> -->
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-dark" value="Valider">
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <?php
            }
        ?>

    <!-- modal modifierUtilisateurs -->
    <?php 
        foreach ($utilisateurs as $utilisateur) { ?>
    <div class="modal" id="modalmodifierUtilisateurs-<?php echo $utilisateur["id"] ?>" tableindex="-1" aria-labelledby="modalUtilisateursLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Modifier un utilisateur</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="modifierUserSubmit.php" method="post">
                <div class="modal-body">
                    <input type="hidden" name="id" value="<?php echo $utilisateur["id"] ?>">
                    <input type="text" class="nomUtilisateur" name="utilisateur" placeholder="Entrez le nom d'utilisateur" value="<?php echo $utilisateur["utilisateur"]?>"><br><br>
                    <input type="text" class="courriel" name="courriel" placeholder="Entrez le courriel" value="<?php echo $utilisateur["courriel"]?>"><br><br>
                    <input type="password" class="password" name="password" placeholder="Entrez le mot de passe" value="<?php echo $utilisateur["motdepasse"]?>">
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-dark" value="Valider">
                </div>
                </form>
            </div>
        </div>
    </div>
    <?php
        }
    ?>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>