<?php 
    $title = "Laisser un avis";
    ob_start();

    require('header.php');
 ?>
<div class="container">
    <div class="row">
        <p class="text-center mt-5">Tous les avis des utilisateurs</p>
        <div class="col-lg-4 col-sm-8 ">

            <form action="" method="post" class="text-start">
                <div class="card contact bg-secondary p-2 mt-5">
                    <h5 class=" text-light m-2 mb-3">*Laissez nous votre avis</h5>
                    <p>
                        <input type="text" name="Nom" id="nom" placeholder="*Nom">
                    </p>

                    <p>
                        <input type="text" name="prenom" id="prenom" placeholder="*Prenom">
                    </p>
                    <p>
                        <input type="number" name="note" id="note" placeholder="*Note / 10">
                    </p>

                    <p>
                        <textarea name="" id="Message" cols="30" rows="5"></textarea>
                    </p>
                    <button class="button btn-outline-success rounded-3" type="submit">Ajouter un
                        avis</button>
                </div>
            </form>
        </div>

        <!-- note de l'auteur -->
        <div class=" avis col-6 col-ms-12 m-5">


            <div class=" avis col-lg-8 col-ms-12 ms-5">
                <p class="h5">Sabbat Lumpatshia</p>
                <p>19 Aout 2022</p>
                <p class="h5">4 / 5</p>
                <p>C'est un site vraiment beau C'est un site vraiment beau C'est un site vraiment beau C'est un site
                    vraiment beau</p>
                <hr>
            </div>

            <div class=" avis col-lg-8 col-ms-10 ms-5">
                <p class="h5">Sabbat Lumpatshia</p>
                <p>14 juin 2022</p>
                <p class="h5">3 / 5</p>
                <p>C'est un site vraiment beau C'est un site vraiment beau C'est un site vraiment beau C'est un site
                    vraiment beau</p>
                <hr>
            </div>

        </div>
    </div>
</div>

<?php 
    $content = ob_get_clean();
    require('base.php');

    require('footer.php');
 ?>