<?php
class Photo{
	private $_photoId;
	private $_nomFich;
	private $_description;
	private $_catId;
	
	public function __construct($photoid, $nomfich, $desc, $catid){
		$this->_photoId=$photoid;
		$this->_nomFich=$nomfich;
		$this->_description=$desc;
		$this->_catId=$catid;
	}
	
		function setPhotoId($id){
			$this->_photoId=$id;
		}
		
		function setNomFich($nom){
			$this->_nomFich=$nom;
		}
		
		function setDescription($desc){
			$this->_description=$desc;
		}
		
		function setCatId($id){
			$this->_catId=$id;
		}
		
		public function getPhotoId(){
			return $this->_photoId;
		}
		
		function getNomFich(){
			return $this->_nomFich;
		}
		
		function getDescription(){
			return $this->_description;
		}
		
		function getCatId(){
			return $this->_catId;
		}
}