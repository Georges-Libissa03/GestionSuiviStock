<?php
class Produit {

    private $ref;
    private $libelle;
    private $qtStock;
    private $id;

    public function __construct(){
        
    }

    public function getRef(){
        return $this->ref;
    }
    public function getLibelle(){
        return $this->libelle;
    }
    public function getQtStock(){
        return $this->qtStock;
    }
    public function getId(){
        return $this->id;
    }

    public function setRef($ref){
        return $this->ref = $ref;
    }
    public function setLibelle($libelle){
        return $this->libelle = $libelle;
    }
    public function setQtStock($qtStock){
        return $this->qtStock = $qtStock;
    }
    public function setId($id){
        return $this->id = $id;
    }

}