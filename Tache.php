<?php

class Tache {
    private $id;
    private $libelle;
    private $description;
    private $date_echeance;
    private $priorite;
    private $etat;
    private $id_utilisateur;

    // Constructeur
    public function __construct($id, $libelle, $description, $date_echeance, $priorite, $etat, $id_utilisateur) {
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
}
