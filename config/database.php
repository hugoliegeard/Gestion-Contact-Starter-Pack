<?php

# Documentation PDO : https://www.php.net/manual/fr /pdo.connections.php

try {
    # Création de la connexion à notre BDD
    $dbh = '';

} catch (PDOException $e) {
    # En cas d'erreur, celle-ci est capturée par le catch et affiché à l'utilisateur
    print 'Erreur !: ' . $e->getMessage() . '<br>';

    # Puis, je coupe l'exécution du code PHP
    die();
}