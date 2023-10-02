<!-- header -->
<?php include 'partials/_header.php' ?>

<div class="container">
    <div class="col">
        <div class="jumbotron mt-4">
            <h1 class="display-4">[Prénom & Nom]</h1>
            <p class="lead">[Email]</p>
            <p class="lead">[Téléphone]</p>
            <hr class="my-4">
            <a class="btn btn-warning btn-sm" href="contact-edit.php?ID=XXX" role="button">Modifier la fiche</a>
            <a class="btn btn-danger btn-sm" href="contact-delete.php?ID=XXX" role="button">Supprimer le contact</a>
            <a class="btn btn-primary btn-sm" href="index.php" role="button">Retourner aux contacts</a>
        </div>
    </div>
</div>

<!-- footer -->
<?php include 'partials/_footer.php' ?>