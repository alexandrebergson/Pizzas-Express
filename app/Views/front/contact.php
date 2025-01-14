<?php ob_start(); ?>
<main class="contact">

    <h1>Contacte</h1>
    <p>Commander au 02 97 27 12 **<p>

    <h2>notre magasin</h2>
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10749.333714569675!2d-2.7725067327741333!3d47.65851869238424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48101e997277959f%3A0xaf89c0c724c958d3!2s2%20Place%20de%20la%20Lib%C3%A9ration%2C%2056000%20Vannes!5e0!3m2!1sfr!2sfr!4v1617021675983!5m2!1sfr!2sfr"
        width="800" height="600" style="border:0;" allowfullscreen loading="lazy"></iframe>

    <h3>nous laisser un message</h3>
    <div class="form_contact">

        <form action="index.php?action=contactMail" method="post" id="inscription">

            <label for="name">Nom :</label>
            <input type="text" id="name" name="name" placeholder="Legrand">
            <span class="error">
                <?php if(isset($errorContact["required_name"])){echo $errorContact["required_name"];} ?>
            </span>

            <label for="email">Email :</label>
            <input type="email" id="email" name="mail" placeholder="JohnLegrand@gmx.fr">
            <span class="error">
                <?php if(isset($errorContact["invalid_email"])){ echo  $errorContact["invalid_email"];} ?>
            </span>
            <span class="error">
                <?php if(isset($errorContact["required_email"])){echo  $errorContact["required_email"];} ?>
            </span>

            <label for="sujet">Sujet :</label>
            <input type="text" id="sujet" name="sujet" placeholder="L'objet de votre message">
            <span class="error">
                <?php if(isset($errorContact["required_sujet"])){echo $errorContact["required_sujet"]; }?>
            </span>

            <label for="message">votre message :</label>
            <textarea id="message" name="content"></textarea>
            <span class="error">
                <?php if(isset($errorContact["required_content"])){echo  $errorContact["required_content"]; }?>
            </span>
            <span class="error">
                <?php if(isset($errorContact["too_long_message"])){echo $errorContact["too_long_message"];}?>
            </span>

            <input id="submit" type="submit" value="Envoyer">

        </form>

    </div>

</main>

<aside>
    <h2>A la une</h2>

    <?php foreach($allALaUne as $aLaUne){ ?>
    <article class="article_show_on">
        <p><?= $aLaUne["title"] ?></p>
        <p> <img src="<?= $aLaUne["imgAdress"] ?>" alt="<?= $aLaUne['title'] ?>"> </p>
    </article>
    <?php   } ?>

</aside>

<?php $content = ob_get_clean(); ?>
<?php require "templates/template.php"; ?>