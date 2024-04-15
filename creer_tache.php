<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//inclusion du fichier de connexion
require_once "config.php"; 


//verifier si le formulaire a été soumis
if(isset($_POST['submit'])){

    //recuperation des données
    $libelle = $_POST['libelle'];
    $description = $_POST['description'];
    $date_echeance = $_POST['date_echeance'];
    $priorite = $_POST['priorite'];
    $etat = $_POST['etat'];

    //verifier si les champs ne sont pas vide 
    if($libelle !="" && $description !="" && $date_echeance !="" && $priorite !="" && $etat !=""){
        //appel de la methode 
        $tache->creer_tache($libelle, $description, $date_echeance, $priorite, $etat);
    }
}
?>