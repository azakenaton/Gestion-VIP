<?php
class Categorie{
	private $_catId;
	private $_nomCat;

	
	public function __construct($catid, $nomcat){
		$this->_nomCat=$nomcat;
		$this->_catId=$catid;
	}
	
		function setCatId($id){
			$this->_catId=$id;
		}
		
		function setNomCat($nom){
			$this->_nomCat=$nom;
		}
		
		function getCatId(){
			return $this->_catId;
		}
		
		function getNomCat(){
			return $this->_nomCat;
		}

}