<?php
require_once('controler/article.php');

if (isset($_GET['page'])) {
	if ($_GET['page'] == "Acceuil") {
		acceuil();
	} else {
		throw new Exception("Cette page n'existe pas ou a été suprimée.");
	}
} else {
	acceuil();
}