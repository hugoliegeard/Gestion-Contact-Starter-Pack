<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestion de Contacts</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
          integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
          crossorigin="anonymous"/>
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="css">
</head>
<body>

<!-- header -->
<?php include 'partials/_header.php' ?>

<div class="p-3 mx-auto text-center">
    <h1 class="display-4">Ajouter un Contact</h1>
</div>

<div class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card shadow-sm p-4">
                    <form method="post">

                        <!-- TODO FORMULAIRE ICI -->

                        <!-- Submit -->
                        <button class="btn btn-block btn-dark">
                            <i class="fas fa-plus-circle"></i>
                            Ajouter le Contact
                        </button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- footer -->
<?php include 'partials/_footer.php' ?>

<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script>
    // https://datatables.net/
    $(document).ready( function () {
        $('#contactTable').DataTable();
    } );
</script>
</body>
</html>