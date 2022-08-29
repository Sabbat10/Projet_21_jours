<?php
    
require_once('Manager.php');

class UserArticle extends Manager {

    public function article() {

         $bdd = $this->connexion();

        $requete = $bdd->query('SELECT id1, titre, description, contenus, creation_date, nom, prenom FROM auteur INNER JOIN articles ON auteur.id = articles.id_auteur ORDER BY id1 DESC  LIMIT 0,5');

        return $requete;
    }
}