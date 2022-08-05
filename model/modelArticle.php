<?php
    // require_once('manager.php');

  	function article() {
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
        }
            catch(Exception $e) {
           throw new Exception  ('Erreur : '.$e->getMessage());
        }
  		    $requete = $bdd->query('SELECT titre, description, contenus, creation_date, nom, prenom FROM auteur INNER JOIN articles ON auteur.id = articles.id_auteur ORDER BY id1 DESC');
  		    return $requete;
  	}