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
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">Gestion de Contacts</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link" href="index.php">Mes Contacts</a>
            <a class="nav-link" href="ajouter-un-contact.php">Ajouter un Contact</a>
        </div>
    </div>
</nav>

<div class="p-3 mx-auto text-center">
    <h1 class="display-4">Connexion</h1>
</div>

<div class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card shadow-sm p-4">
                    <form method="post">

                        <!-- Email -->
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control" id="email" name="email" placeholder="Email." type="email">
                            <small class="form-text text-muted">
                                Saisissez votre email.
                            </small>
                        </div>

                        <!-- Password -->
                        <div class="form-group">
                            <label for="password">Mot de passe</label>
                            <input class="form-control" id="password" name="password" placeholder="Mot de passe." type="password">
                            <small class="form-text text-muted">
                                Saisissez votre mot de passe.
                            </small>
                        </div>

                        <!-- Submit -->
                        <button class="btn btn-block btn-dark">
                            <i class="fas fa-lock"></i>
                            Connexion
                        </button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- footer -->
<div class="container">
    <footer class="mt-4 pt-4 border-top">
        <div class="row">
            <div class="col-12 col-md">
                <h5>Gérer facilement mes contacts !</h5>
                <small class="d-block text-muted">
                    &copy; 2023
                </small>
            </div>
            <div class="col-6 col-md">
                <h5>En Plus</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-muted">Mentions Légales</a></li>
                    <li><a href="#" class="text-muted">Confidentialité</a></li>
                    <li><a href="#" class="text-muted">Plan du Site</a></li>
                </ul>
            </div>
        </div>
    </footer>
</div>


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
