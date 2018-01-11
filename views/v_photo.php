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
    <!--  Formulaire -->
    <div class = "col-md-6 col-sm-6 col-xs-12">
        <?php
        echo ' <div class = "col-md-4 col-sm-4 col-xs-8"> <a href="index.php?page=photo&id='.$photo->getPhotoId().'"><img class="img-responsive" src="'.PATH_IMAGES.$photo->getNomFich().'" alt="'.$photo->getDescription().'" /></a></div>';
        ?>
    </div>
    <div class = "col-md-6 col-sm-6 col-xs-12" >
        <table class="table table-bordered">
            <tr><th>Description</th><th><?php echo $photo->getDescription();?></th></tr>
            <tr><th>Nom du fichier</th><th><?php echo $photo->getNomFich();?></th></tr>
            <input type="hidden" name="Categorie" value="1"/>
            <tr><th>Catégorie</th> <th><a href=index.php?Categorie=<?php echo $categorie->getCatId();?> ><?php echo $categorie->getNomCat();?></a></th></tr>
        </table>
    </div>
    
<?php 
if(isset($_SESSION['logged'])){ ?>
    <p> <a href=index.php?page=photo&supp=true&id=<?php echo $photo->getPhotoId(); ?>>supprimer</a></p>
<?php } ?>



    <!--  Fin de la page -->


    <!--  Pied de page -->
<?php require_once(PATH_VIEWS.'v_footer.php');
