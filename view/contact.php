<?php 
  $title = "Commentaire";

  ob_start();
 ?>

  <?php require_once('header.php') ?>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-8 text-center">
                <h2>Vous pouvez nous laisser un message d'accourangement</h2>
                <p class="encouragent">
                    C'est toujours un grand plaisir de récevoir toutes les accourangement venant de votre part nous vous sommes toujours
                    réconnaissant; voir que vous êtes toujours à l'écoute de nos dernières nouvelles et de pouvoir en contruibués nous donne les raison de continuer
                </p>
                <form action="" method="post" class="text-start">
                    <div class="card contact bg-secondary p-2 ">
                        <h3 class="text-decoration-underline text-light m-2 mb-3">*Commentaire</h3>
                        <p>
                            <input type="text" name="Nom" id="nom" placeholder="*Nom">
                        </p>

                        <p>
                            <input type="text" name="prenom" id="prenom" placeholder="*Prenom">
                        </p>
                        <p>
                            <input type="email" name="email" id="email" placeholder="*Email">
                        </p>

                        <p>
                            <textarea name="" id="Message" cols="50" rows="10"></textarea>
                        </p>
                        <button class="button btn-outline-success rounded-3" type="submit">Envoyer le commentaire</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php require('footer.php') ?>

<?php 
  $content = ob_get_clean();
  require('base.php');

 ?>