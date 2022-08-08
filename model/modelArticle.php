<?php
    // require_once('manager.php');
    
    require_once('manager.php');

  	function article() {

        $bdd = connexion();
       
  		    $requete = $bdd->query('SELECT id1, titre, description, contenus, creation_date, nom, prenom FROM auteur INNER JOIN articles ON auteur.id = articles.id_auteur ORDER BY id1 DESC  LIMIT 0,4');
  		    return $requete;
  	}