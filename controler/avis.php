<?php
	// require_once('../model/modelAvis.php');

	require('../model/modelAvis.php');
   
    // $requette = postAvis();

    $requette = avisManager();

    require('../view/contact.php');