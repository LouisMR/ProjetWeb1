<?php
session_start();

if ($_SESSION["estConnecte"] == true) {

} else {
    header("location:admin.php");
}

?>
<!-- modal modifierUtilisateurs -->
<div class="modal" id="modalmodifierUtilisateurs" tableindex="-1" aria-labelledby="modalUtilisateursLabel" aria-hidden="true">
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
                <input type="text" class="nomUtilisateur" id="modifierUser" name="utilisateur" placeholder="Entrez le nom d'utilisateur" value="<?php echo $utilisateur["utilisateur"]?>"><br><br>
                <input type="text" class="courriel" id="modifierCourriel" name="courriel" placeholder="Entrez le courriel" value="<?php echo $utilisateur["courriel"]?>"><br><br>
                <input type="password" class="password" id="modifierPassword" name="password" placeholder="Entrez le mot de passe" value="<?php echo $utilisateur["motdepasse"]?>">
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-dark" value="Valider">
            </div>
            </form>
        </div>
    </div>
</div>