<?php
interface CRUD_Tache
{
    public function creer_tache($libelle, $description, $date_echeance, $priorite, $etat);
    public function lire_tache();
    public function modifier_tache($id,$libelle, $description, $date_echeance, $priorite, $etat);
    public function supprimer_tache($id);
}
?>