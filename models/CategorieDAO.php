<?php
require_once(PATH_MODELS.'DAO.php');
require_once(PATH_ENTITY.'Categorie.php');

class CategorieDAO extends DAO {
	
	public function getCat($cat){
		$sql = 'SELECT * FROM Categorie where catId = ?';
		$res=$this->queryRow($sql, array($cat));
		
		if ($res==false){
			return null;
		}
		
		else{
			$categorie = new Categorie($res['catId'], $res['nomCat']);
			return $categorie;
		}
	
	}
    
    public function getAllCat(){
		$sql = 'SELECT * FROM Categorie';
		$res=$this->queryAll($sql, array());
		
		if ($res==false){
			return null;
		}
		
		else{
			$i=0;
            foreach($res as $val){
                $categorie[$i] = new Categorie($val['catId'], $val['nomCat']);
                $i=$i+1;
            }
			return $categorie;
		}
	
	}
    
    public function addCat($cat){
        $sql = 'INSERT INTO Categorie (nomCat) VALUES (?)';
        $res = $this->queryBdd($sql, array($cat));
    }
    
    
}