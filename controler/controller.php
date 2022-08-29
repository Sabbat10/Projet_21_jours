<?php

require('model/ArticleModel.php');
require('model/AviModel.php');

function articleUser() {

	$userArticle = new UserArticle();
	$requete = $userArticle->article();	

	require('view/viewAcceuil.php');
}

function getAvis(){

	$avisManager = new AvisManager();
	$requete = $avisManager->avis();

	require('view/contact.php');
}