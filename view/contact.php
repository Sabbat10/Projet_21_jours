<?php
$title = "Avis";
ob_start();

require('header.php');
?>

<div class="container">
    <div class="row">
        <div class="col-lg-6 col-sm-8 ">
            <h2>Vous pouvez nous laisser un message d'accourangement</h2>
            <p class="encouragent">
                C'est toujours un grand plaisir de récevoir toutes les accourangement venant de votre part nous vous
                sommes toujours
                réconnaissant; voir que vous êtes toujours à l'écoute de nos dernières nouvelles et de pouvoir en
                contruibués nous donne les raison de continuer
            </p>
            <form action="" method="post" class="text-start">
                <div class="card contact bg-secondary p-2 ">
                    <h3 class="text-decoration-underline text-light m-2 mb-3">*Laisser votre avis</h3>
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
                        <textarea name="" id="Message" cols="50" rows="10"></textarea>
                    </p>
                    <button class="button btn-outline-success rounded-3" type="submit">Ajouter un avis</button>
                </div>
            </form>
        </div>

        <!-- note de l'auteur -->
        <div class="col-lg-6 col-sm-12">
            <div class="card m-5" style="width: 20rem;">
                <img src="../public/images/photos/istockphoto-891010944-170667a.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Note de l'auteur</h5>
                    <p class="card-text">
                        Bonjour, personne ne parfait ou parfaite da la vie.. Il y a toujours mieux
                        que c'est que nous croyons détenir.
                    </p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Encouuragement</li>
                    <li class="list-group-item">Idées</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">A-propos de l'auteur</a>
                    <a href="#" class="card-link">Voir le blog</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require('base.php');
require_once('footer.php');
?>