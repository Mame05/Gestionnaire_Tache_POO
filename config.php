<?php
require_once "Utilisateur.php";
require_once "Tache.php";

//Définition des constances pour les infos de la base de données
define('DB_SERVEUR','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','Gestionnaire_tache_POO');

//Connexion à la base de donnée en utilisant PDO
try{
    $conn = new PDO('mysql:host='.DB_SERVEUR.';dbname='.DB_NAME,DB_USERNAME,DB_PASSWORD);
}
catch(PDOException $e){
    // Affichage d'un message d'erreur et arreter le script soi la connexion echoue
    echo "erreur::impossible de se connecter à la base de donnée" .$e->getMessage();
}
?>
