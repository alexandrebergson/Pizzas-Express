<?php ob_start(); ?>
<h1>gestion des users</h1>
<section>

    <?php foreach($bestUser as  $user){ ?>
    <div class="card_articles">
        <p><?= $user["userId"] ?></p>
        <p><?= $user["userName"] ?></p>
        <p><?= $user["order_date"] ?></p>
        <p><?= $user["order_price"] ?></p>
       
  
    </div>
    <?php   } ?>

</section>

<?php $content = ob_get_clean(); ?>
<!--ob_get_clean — Lit le contenu courant du tampon de sortie puis l'efface-->
<?php require 'templates/template.php'; ?>