<?php

class AvisManager extends Manager{

	function avis() {

		$bdd = $this->connexion();

		$requete = $bdd->query('SELECT * FROM users');

		return $requete;
	}
}