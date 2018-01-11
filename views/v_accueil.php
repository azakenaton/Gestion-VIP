<?php
/*
 * DS PHP
 * Vue page index - page d'accueil
 *
 * Copyright 2016, Eric Dufour
 * http://techfacile.fr
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 *
 */
//  En tête de page
?>
<?php require_once(PATH_VIEWS.'v_header.php');?>
<?php require_once(PATH_ENTITY.'Photo.php');?>


<!--  Zone message d'alerte -->
<?php require_once(PATH_VIEWS.'v_alert.php');?>

<!--  Début de la page -->
<h1><?php  echo TITRE_PAGE_ACCUEIL;?></h1>

<!--  Formulaire -->
<?php if(!isset($_GET['message'])){?>
    <form method= "POST" action="index.php">
    <label for="CategorieId">Quelles photos souhaitez-vous afficher ?</label>
    <select name="Categorie" id="CategorieId" >
        <option value="0">Toutes les photos</option>
            <?php foreach($cat as $categorie){
            echo '<option value="'.$categorie->getCatId().'">'.$categorie->getCatId().'</option>';}?>
    </select>
    <input type="submit" value="valider"> <br>
</form>
    <?php 
foreach($ph as $photo){
    $nomfich = $photo->getNomFich();
    echo ' <div class = "col-md-2 col-sm-4 col-xs-8"> <a href="index.php?page=photo&id='.$photo->getPhotoId().'"><img class ="img-responsive" width="100%" src="'.PATH_IMAGES.$nomfich.'" alt="'.$photo->getDescription().'" /></a> </div>';
}} 

?>



<!--  Fin de la page -->


<!--  Pied de page -->
<?php require_once(PATH_VIEWS.'v_footer.php');
