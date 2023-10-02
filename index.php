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
    <h1 class="display-4">Mes Contacts</h1>
</div>

<div class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card shadow-sm">
                    <div class="alert alert-info m-2">
                        Bonjour John Doe, vous êtes connecté.
                        <a href="deconnexion.php">Déconnexion</a>
                    </div>

                    <table id="contactTable" class="table">
                        <thead>
                        <tr>
                            <th scope="col">Prénom</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Email</th>
                            <th scope="col">Tel</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>John</td>
                            <td>DOE</td>
                            <td>john.doe@gmail.com</td>
                            <td>07 43 17 08 25</td>
                            <td>
                                <a class="btn btn-primary" href="contact.php?ID=XXX">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a class="btn btn-warning" href="contact-edit.php?ID=XXX">
                                    <i class="fas fa-pen"></i>
                                </a>
                                <a class="btn btn-danger" href="contact-delete.php?ID=XXX">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="6">
                                <p class="text-center">Pas de contact pour le moment.</p>
                            </td>
                        </tr>

                        </tbody>
                    </table>
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
