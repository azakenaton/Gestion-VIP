<?php
if(isset($_GET['message'])){

    $erreur = htmlspecialchars($_GET['message']);
    $alert = choixAlert($erreur);
}
elseif(isset($_GET['supp'])&&isset($_SESSION['logged'])&&isset($_GET['id'])){
    require_once(PATH_MODELS.'PhotoDAO.php');
    require_once(PATH_MODELS.'CategorieDAO.php');
    $supp = htmlspecialchars($_GET['supp']);
    $phDAO= new PhotoDAO();
    $photo = $phDAO->getPhoto($_GET['id']);
    $Photo_erreur = $phDAO->getErreur();
    $nomFich = $photo->getNomFich();
    unlink(PATH_IMAGES.$nomFich);
    $phDAO -> deletePhoto($photo->getPhotoId());
    header("Location: index.php?&message=suppsucces");
    
}
elseif(isset($_GET['id'])){
        require_once(PATH_MODELS.'PhotoDAO.php');
        require_once(PATH_MODELS.'CategorieDAO.php');
        
        $phDAO= new PhotoDAO();
        $photo = $phDAO->getPhoto($_GET['id']);
        $Photo_erreur = $phDAO->getErreur();
        if($Photo_erreur!=null||$photo==false){
            header("Location: index.php?&message=id");
            exit();
        }
        else{
            $catDAO= new CategorieDAO();
            $categorie = $catDAO->getCat($photo->getCatId());

            $Categorie_erreur = $catDAO->getErreur();

            if($Categorie_erreur!=null||$categorie==false){
                header("Location: index.php?&message=".$Categorie_erreur);
                exit();
            }
            else{
                require_once (PATH_VIEWS.'v_photo.php');
            }
    }
    }
else{
    
}