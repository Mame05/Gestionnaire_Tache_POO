<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once "crud_tache.php";

class Tache implements CRUD_Tache{
    private $conn;
    private $id;
    private $libelle;
    private $description;
    private $date_echeance;
    private $priorite;
    private $etat;
    private $id_utilisateur;

    // Constructeur
    public function __construct($conn, $id, $libelle, $description, $date_echeance, $priorite, $etat, $id_utilisateur) {
        $this->conn = $conn;
        $this->id = $id;
        $this->libelle = $libelle;
        $this->description = $description;
        $this->date_echeance = $date_echeance;
        $this->priorite = $priorite;
        $this->etat = $etat;
        $this->id_utilisateur = $id_utilisateur;
    }

    // Getters
    public function getId() {
        return $this->id;
    }

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
    public function getIdUtilisateur() {
        return $this->id_utilisateur;
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
    {}
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
