<?php 
	$title = "Erreur";
	ob_start();

	require('header.php');
 ?>

<article>
    <div class="container mt-5">
      <div class="row">
        <div class="col-lg-12">
          <h1>OUP'S</h1>
          <h5><?php echo $error ?></h5>
        </div>
      </div>
    </div>
</article>

<?php 
	$content = ob_get_clean();
	require('base.php');
 ?>