<?php
require_once(PATH_MODELS.'DAO.php');
require_once(PATH_ENTITY.'Photo.php');

class PhotoDAO extends DAO {
	
	public function getPhotoByID($catId){
		$sql = 'SELECT * FROM Photo where catId = ?';
		$res=$this->queryAll($sql, array($catId));
		
		if ($res==false){
			return null;
		}
		
		else{
            foreach($res as $val){
                
			     $photo[] = new Photo($val['photoId'], $val['nomFich'], $val['description'], $val['catId']);
            }
			return $photo;
		}
    }
        
        
        public function getAllPhoto(){
		$sql = 'SELECT * FROM Photo';
		$res=$this->queryAll($sql);
		
		if ($res==false){
			return null;
		}
		
		else{
            foreach($res as $val){
                
			     $photo[] = new Photo($val['photoId'], $val['nomFich'], $val['description'], $val['catId']);
            }
			return $photo;
		}
	
	}

    public function getPhoto($id){
        $sql = 'SELECT * FROM Photo where photoId = ?';
        $res=$this->queryRow($sql, array($id));

        if ($res==false){
            return null;
        }

        else{
           $photo=new Photo($res['photoId'],$res['nomFich'],$res['description'],$res['catId']);
           return $photo;
        }
    }
    
    public function addPhoto($cat, $desc, $nomFich){
        $sql = 'INSERT INTO Photo (catId, description, nomFich) VALUES (?, ?, ?)';
        $res = $this->queryBdd($sql, array($cat, $desc, $nomFich));
    }
    
    
    public function getLastId(){
		$sql = 'SELECT photoId FROM Photo where photoId=(select max(photoId) from Photo)';
		$res=$this->queryAll($sql);
		
		if ($res==false){
			return null;
		}
		
		else{
            $id =$res[0]['photoId'];
            return $id;
		}
	
	}
    
    public function deletePhoto($id){
        $sql = 'DELETE FROM Photo WHERE PhotoId= ?';
        $res = $this->queryBdd($sql, array($id));
    }
    
    public function updateNomFich($id, $nomFich){
        $sql = 'UPDATE Photo set nomFich = ? where photoId = ?';
        $res = $this->queryBdd($sql, array($nomFich, $id));
    }
}