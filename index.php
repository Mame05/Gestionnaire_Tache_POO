<?php
// Ces lignes de code permettra de nous renvoyer les types d'erreurs
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Inclure le fichier config
require_once "config.php";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestionnaire de Tâches</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Gestionnaire de Tâches</h1>
        
        <!-- Formulaire pour créer une nouvelle tâche -->
        <form action="creer_tache.php" method="post">
            <label for="libelle">Libellé :</label>
            <input type="text" id="libelle" name="libelle" required>
            
            <label for="description">Description :</label>
            <textarea id="description" name="description" required></textarea>
            
            <label for="date_echeance">Date d'échéance :</label>
            <input type="datetime" id="date_echeance" name="date_echeance" required>
            
            <label for="priorite">Priorité :</label>
            <select id="priorite" name="priorite" required>
                <option value="faible">Faible</option>
                <option value="moyenne">Moyenne</option>
                <option value="elevee">Élevée</option>
            </select>
            <label for="etat">État :</label>
            <select id="etat" name="etat" required>
                <option value="a_faire">À Faire</option>
            </select>
            <input type="submit" value="Ajouter le Tâche">
        </form>

        <!-- Liste des tâches de l'utilisateur -->
        <div class="liste-taches">
            <h2>Mes Tâches</h2>
            <table>
                <tr>
                    <th>Libellé</th>
                    <th>Description</th>
                    <th>Date d'Echéance</th>
                    <th>Priorité</th>
                    <th>État</th>
                    <th>Action</th>
                </tr> 
                <!-- Autres tâches ici -->
            </table>
        </div>
    </div>
</body>
</html>
