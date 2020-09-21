<?php
session_start();

if ($_SESSION["estConnecte"] == true) {

} else {
    header("location:admin.php");
}

?>

    <!-- modal oeuvres -->
    <div class="modal" id="modalOeuvres" tableindex="-1" aria-labelledby="modalOeuvresLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Ajout d'une oeuvres</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="ajoutOeuvresSubmit.php" method="post">
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