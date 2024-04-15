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
    $tache = new Tache($conn, "config", "connection à la base", "2024-04-12", "elevee", "à faire");
    //Appel de la méthode d'affichage
    //$resultats= $tache->lire_tache();
}
catch(PDOException $e){
    // Affichage d'un message d'erreur et arreter le script soi la connexion echoue
    echo "erreur::impossible de se connecter à la base de donnée" .$e->getMessage();
}
?>
