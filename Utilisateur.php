<?php

class Utilisateur {
    private $conn;
    private $id;
    private $nom;
    private $prenom;
    private $email;

    // Constructeur
    public function __construct($conn, $id, $nom, $prenom, $email) {
        $this->conn = $conn;
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
    }

    // Getters et Setter
    public function getId() {
        return $this->id;
    }

    public function getNom() {
        return $this->nom;
    }
    public function setNom($nouveauNom){
        $this->nom=$nouveauNom;
    }
    public function getPrenom() {
        return $this->prenom;
    }
    public function setPrenom($nouveauPrenom){
        $this->prenom=$nouveauPrenom;
    }

    public function getEmail() {
        return $this->email;
    }
    public function setEmail($nouveauEmail){
         $this->email=$nouveauEmail;
    }

    // Méthode pour récupérer les tâches associées à l'utilisateur
    public function getTache() {
        // Code pour récupérer les tâches associées à cet utilisateur depuis la base de données
        // Retourner les tâches récupérées
    }

    // Méthode pour vérifier les informations d'identification de l'utilisateur
    public static function verifierIdentifiantMotDePasse($email, $mot_de_passe) {
        // Code pour vérifier l'identifiant et le mot de passe dans la base de données
        // Retourner true si les informations sont valides, false sinon
    }

    // Méthode pour créer un nouvel utilisateur dans la base de données
    public static function creerUtilisateur($nom, $email, $mot_de_passe) {
        // Code pour insérer un nouvel utilisateur dans la base de données avec les données fournies
        // Retourner true si l'insertion a réussi, false sinon
    }
}
