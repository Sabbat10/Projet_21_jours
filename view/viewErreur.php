<?php 
	$title = "Erreur";

	ob_start();
 ?>

	<h1>OUPS !</h1>
    <h2><?php echo $erreur; ?></h2>
<?php 
	$content = ob_get_clean();
	require('base.php');
 ?>    