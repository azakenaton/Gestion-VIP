<?php require_once(PATH_VIEWS.'v_header.php');?>
<?php require_once (PATH_VIEWS.'v_alert.php');?>
<?php require_once(PATH_ENTITY.'Categorie.php'); ?>


<h1><?php echo TITRE_AJOUTCAT;?></h1>
<form method= "POST" action="index.php?page=ajoutcat">
<div class="form-group">
<label>Nom de la nouvelle catégorie :
<input type="text" name="categorie" size="20" maxlength="20">
</label>
<button type="submit" class="btn">Envoyer</button>
</div>
</form>


<!--  Pied de page -->
<?php require_once(PATH_VIEWS.'v_footer.php');