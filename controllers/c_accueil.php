<?php
/*
 * DS PHP
 * Controller page accueil
 *
 * Copyright 2017, Eric Dufour
 * http://techfacile.fr
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 */
if(isset($_GET['message'])){
    
    $erreur = htmlspecialchars($_GET['message']);
    $alert = choixAlert($erreur); 
}

else{
    if(isset($_POST['Categorie'])&&$_POST['Categorie']>0){
        require_once(PATH_MODELS.'PhotoDAO.php');
        require_once(PATH_MODELS.'CategorieDAO.php');
        
        $phDAO = new PhotoDAO();
        $ph = $phDAO->getPhotoById($_POST['Categorie']);
        $Photo_erreur = $phDAO->getErreur();
        
        $catDAO=new CategorieDAO();
        $cat = $catDAO->getAllCat();
        $Cat_erreur = $catDAO->getErreur();
        if($Photo_erreur!=null||$ph==false){
            header("Location: index.php?&message=pasdephoto");
            exit();
        }
        elseif($Cat_erreur!=null||$cat==false){
        header("Location: index.php?&message=".$Cat_erreur);
        exit();
    }
        else{
        require_once(PATH_VIEWS.'v_accueil.php');
        }
    }
    else if(isset($_GET['Categorie'])&&$_GET['Categorie']>0){
        require_once(PATH_MODELS.'PhotoDAO.php');
        require_once(PATH_MODELS.'CategorieDAO.php');
        
        $phDAO = new PhotoDAO();
        $ph = $phDAO->getPhotoById($_GET['Categorie']);
        $Photo_erreur = $phDAO->getErreur();
        
        $catDAO=new CategorieDAO();
    $cat = $catDAO->getAllCat();
    $Cat_erreur = $catDAO->getErreur();
        if($Photo_erreur!=null||$ph==false){
            header("Location: index.php?&message=".$Photo_erreur);
            exit();
        }
        elseif($Cat_erreur!=null||$cat==false){
        header("Location: index.php?&message=".$Cat_erreur);
        exit();
    }
        else{
        require_once(PATH_VIEWS.'v_accueil.php');
        }
    }
    else{
    require_once(PATH_MODELS.'PhotoDAO.php');
    require_once(PATH_MODELS.'CategorieDAO.php');
        
    $phDAO = new PhotoDAO();
    $ph = $phDAO->getAllPhoto();
    $Photo_erreur = $phDAO->getErreur();
        
    $catDAO=new CategorieDAO();
    $cat = $catDAO->getAllCat();
    $Cat_erreur = $catDAO->getErreur();
    if($Photo_erreur!=null||$ph==false){
        header("Location: index.php?&message=".$Photo_erreur);
        exit();
    }
    elseif($Cat_erreur!=null||$cat==false){
        header("Location: index.php?&message=".$Cat_erreur);
        exit();
    }
    else{
    require_once(PATH_VIEWS.'v_accueil.php');
    }
    }
   require_once(PATH_VIEWS.'v_accueil.php');
}
//appel de la vue
require_once(PATH_VIEWS.'v_accueil.php');

