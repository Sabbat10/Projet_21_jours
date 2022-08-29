<?php
	
require_once('controler/controller.php');

try {

	if (isset($_GET['page'])) {
	
		if ($_GET['page'] == "Acceuil") {
			articleUser();

		}elseif ($_GET['page'] == "avis") {
			getAvis();
		}else{
			throw new Exception("Cette page n'existe pas ou a été suprimée.");
		}

	}else{
		articleUser();
	}
	
} catch (Exception $e) {
	$error = $e->getMessage();
    require('view/errorView.php');
}