<?php 
  $title = "Acceuil";

  ob_start();
 ?>

  <?php require_once('header.php') ?>


  <?php  
      $article = $requete->fetch();
      ?>

      <article>
          <div class="container mt-5">
            <div class="row">
              <div class="col-lg-12">
                <h5 class="text-secondary"><img width="25" src="public/images/icones/article.png" alt=""> / Actualité:</h5>
                <h1><?php echo $article['titre']; ?></h1>
                <img src="" alt="">
                <p class="h6">
                  <a class="text-dark" href="#">
                    <img class="rounded-3" width="50" src="public/images/icones/facebook.png" alt="">
                    <img class=" rounded-3" width="50" src="public/images/icones/téléchargement (1).png" alt="">
                    <img class=" rounded-3" width="50" src="public/images/icones/twitter.png" alt="">
                  </a></p>

                  <p><i class="text-secondary">publié le: <?php echo $article['creation_date']; ?></i></p>
                  <p><i>Auteur :</i> <strong><?php echo $article['prenom'].' '.$article['nom'] ?></strong></p>
                  <img src="" alt="">

                  <h5 class="encouragent">
                    <?php echo $article['description'] ?>
                  </h5>
                  <p class="mt-5">
                    <?php echo $article['contenus'] ?>
                  </p>
              </div>
            </div>
          </div>
      </article>

      <!-- Section -->
      <section>
          <div class="contaire m-5">
            <div class="row article">
              <div class="card col-lg-4 col-sm-12 ms-3 mt-2" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title text-danger">Sport:</h5>
                  <h6 class="card-subtitle mb-2 text-muted"><i>15 Mai 2022</i></h6>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <p class="h6">
                    <a class="text-dark" href="#">
                      <img class="rounded-3" width="35" src="public/images/icones/facebook.png" alt="">
                      <img class=" rounded-3" width="35" src="public/images/icones/téléchargement (1).png" alt="">
                      <img class=" rounded-3" width="35" src="public/images/icones/twitter.png" alt="">
                      <img class=" rounded-3" width="35" src="public/images/icones/téléchargement.png" alt="">
                    </a></p>
                    <a href="#" class="card-link h5">Lire l'article</a>
                  <!-- <a href="#" class="card-link">Sabbat Lumpatshia</a> -->
                </div>
              </div>

              <div class="card col-lg-4 col-sm-12 ms-3 mt-2" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title text-danger">Actualité:</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <p class="h6">
                    <a class="text-dark" href="#">
                      <img class="rounded-3" width="35" src="public/images/icones/facebook.png" alt="">
                      <img class=" rounded-3" width="35" src="public/images/icones/téléchargement (1).png" alt="">
                      <img class=" rounded-3" width="35" src="public/images/icones/twitter.png" alt="">
                      <img class=" rounded-3" width="35" src="public/images/icones/téléchargement.png" alt="">
                    </a></p>
                  <a href="#" class="card-link h5">Lire l'article</a>
                </div>
              </div>

              <div class="card col-lg-4 col-sm-12 ms-3 mt-2" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title text-danger">Card title:</h5>
                  <h6 class="card-subtitle mb-2 text-muted"><i>12 juin 2022</i></h6>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <p class="h6">
                    <a class="text-dark" href="#">
                      <img class="rounded-3" width="35" src="public/images/icones/facebook.png" alt="">
                      <img class=" rounded-3" width="35" src="public/images/icones/téléchargement (1).png" alt="">
                      <img class=" rounded-3" width="35" src="public/images/icones/twitter.png" alt="">
                      <img class=" rounded-3" width="35" src="public/images/icones/téléchargement.png" alt="">
                    </a></p>
                    <a href="#" class="card-link h5">Lire l'article</a>
                </div>
              </div>

              <div class="card col-lg-4 col-sm-12 ms-3 mt-2" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title text-danger">Card title:</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <p class="h6">
                    <a class="text-dark" href="#">
                      <img class="rounded-3" width="35" src="public/images/icones/facebook.png" alt="">
                      <img class=" rounded-3" width="35" src="public/images/icones/téléchargement (1).png" alt="">
                      <img class=" rounded-3" width="35" src="public/images/icones/twitter.png" alt="">
                      <img class=" rounded-3" width="35" src="public/images/icones/téléchargement.png" alt="">
                    </a></p>
                    <a href="#" class="card-link h5 mt-4">Lire l'article</a>
                </div>
              </div>

            </div>
          </div>
      </section>
   <?php    
  // }
?>
  <?php require('footer.php') ?>

<?php 
  $content = ob_get_clean();
  require('base.php');

 ?>
