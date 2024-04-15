<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once "crud_tache.php";

class Tache implements CRUD_Tache{
    private $conn;
    private $libelle;
    private $description;
    private $date_echeance;
    private $priorite;
    private $etat;
    //private $id_utilisateur;

    // Constructeur
    public function __construct($conn, $libelle, $description, $date_echeance, $priorite, $etat) {
        $this->conn = $conn;
        $this->libelle = $libelle;
        $this->description = $description;
        $this->date_echeance = $date_echeance;
        $this->priorite = $priorite;
        $this->etat = $etat;
    }

    // Getters
    public function getLibelle() {
        return $this->libelle;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getDateEcheance() {
        return $this->date_echeance;
    }

    public function getPriorite() {
        return $this->priorite;
    }

    public function getEtat() {
        return $this->etat;
    }
    // Setters
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setDateEcheance($date_echeance) {
        $this->date_echeance = $date_echeance;
    }

    public function setPriorite($priorite) {
        $this->priorite = $priorite;
    }

    public function setEtat($etat) {
        $this->etat = $etat;
    }
    //Méthode pour ajouter une tâche
    public function creer_tache($libelle, $description, $date_echeance, $priorite, $etat)
    {
        try{
            $sql= "INSERT INTO tache(libelle,description,date_echeance,priorite,etat) VALUES(:libelle,:description,:date_echeance,:priorite,:etat)";
    
               
            //preparation de la requete
            $stmt=$this->conn->prepare($sql);
    
            //faire la liaison des valeurs aux paramètres
            $stmt->bindParam(':libelle',$libelle, PDO::PARAM_STR);
            $stmt->bindParam(':description',$description, PDO::PARAM_STR);
            $stmt->bindParam(':date_echeance',$date_echeance, PDO::PARAM_STR);
            $stmt->bindParam(':priorite',$priorite, PDO::PARAM_STR);
            $stmt->bindParam(':etat',$etat, PDO::PARAM_STR);
    
            //execute la requete
    
            $stmt->execute();
    
            //rediriger la page 
            header("location: index.php");
            exit();
    
    
        }catch (PDOException $e) {
            die("erreur: impossible d'inserer des données" .$e->getMessage());
        }
    }
    //Méthode pour lire une tâche
    public function lire_tache()
    {}
    //Méthode pour modifier une tâche
    public function modifier_tache($id, $libelle, $description, $date_echeance, $priorite, $etat)
    {}
    //Méthode pour supprimer une tâche
    public function supprimer_tache($id)
    {}

}
