<?php
	require('model/modelArticle.php');

	function acceuil() { 
		$requete = article();
		require('view/viewAcceuil.php');
}	