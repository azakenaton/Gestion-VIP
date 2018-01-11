<?php
if(isset($_GET['message'])){
    
    $erreur = htmlspecialchars($_GET['message']);
    $alert = choixAlert($erreur); 
}
if(isset($_SESSION['logged'])){
    
    if(isset($_POST['categorie'])){
        require_once(PATH_MODELS.'CategorieDAO.php');
        $nouvcat = htmlspecialchars($_POST['categorie']);
        $catDAO=new CategorieDAO();
        $cat = $catDAO->getAllCat();
        $Cat_erreur = $catDAO->getErreur();
        $nouvelle = true;
        foreach($cat as $categorie){
            if($nouvcat == $categorie->getNomCat()){
                $nouvelle = false;
            }
        }
        if(!$nouvelle){
            header("Location: index.php?page=ajoutcat&message=catexist");
        }
        elseif(!preg_match('/^[a-zA-Z]+$/', $nouvcat)){
            header("Location: index.php?page=ajoutcat&message=nomcat");
        }
        elseif(strlen($nouvcat)>20){
            header("Location: index.php?page=ajoutcat&message=taillecat");
        }
        else{
            $catDAO->addCat($nouvcat);
            header("Location: index.php?page=ajoutcat&message=ajoutcat");
        }
        
    }
    
    require_once(PATH_VIEWS.'v_ajoutcat.php');
}
else {
    header("Location: index.php");
}