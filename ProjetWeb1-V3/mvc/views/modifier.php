<?php
session_start();

if ($_SESSION["estConnecte"] == true) {

} else {
    header("location:admin.php");
}

?>

<!-- modal modifierOeuvres -->
<div class="modal" id="modalModifierOeuvres" tableindex="-1" aria-labelledby="modalModifierOeuvresLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modifier une oeuvres</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="modifierSubmit.php" method="post">
                <div class="modal-body">
                    <input type="file" name="image"><br><br>
                    <!-- <img src="images/64x64.png" class="ajoutImage" id="ajoutImage"> -->
                    <input type="hidden" name="id" value="<?php echo $oeuvre["id"] ?>">
                    <input type="text" class="titreOeuvre" name="titre" id="ajoutOeuvresTitre" value="<?php echo $oeuvres["titre"]?>"><br><br>
                    <textarea name="rdescription" rows="5" cols="30" class="Description" id="OeuvresDesc" value="<?php echo $oeuvres["description"]?>"></textarea><br><br>
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
</div>