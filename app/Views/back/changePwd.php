<?php ob_start();?>
<h1> change pwd</h1>



<form action="indexAdmin.php?action=changementMdpUser" method="post">

        <label for="ancienMdp">password : </label>
        <input type="password" placeholder="ancienMdp" name="ancienMdp" id="ancienMdp">

        <label for="nouveauMdp">new Password: </label>
        <input type="password" placeholder="nouveauMdp" name="nouveauMdp" id="nouveauMdp">

        <label for="toto">new Password: </label>
        <input type="password" placeholder="confirmer votre mot de passe " name="toto" id="toto">


        <input type="submit" value="OK">
    
    </form>
  

<?php $content = ob_get_clean()?>
<?php require 'templates/templateUser.php'?>

