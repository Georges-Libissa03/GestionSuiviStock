<?php 
require_once "BD.php";
 class ProduitBD extends Produit {

    public function addProduit()
        {
            $db = new BD();
            $ref = parent::getRef();
            $libelle = parent::getLibelle();
            $qtStock = parent::getQtStock();
            $idU = parent::getId();
            $id = $db->lastInsertIdForTable("produit");
            $req = "INSERT INTO produit(id,ref,libelle,qtStock,idUsers) VALUES($id,'$ref', '$libelle', '$qtStock', '$idU')";
            $con = $db->connexion();
            return $con->query($req);
        }

        public function produitAll()
        {
            $db = new BD();
            $req = "SELECT * FROM produit ORDER BY libelle";
            $con = $db->connexion();
            return $con->query($req)->fetchAll();
        }

        public function deleteProduit($id){
            $db = new BD();
            $req = "DELETE FROM produit WHERE id = $id";
            $con = $db->connexion();
            return $con->query($req);
        }

        public function findProduit($id){
            $db = new BD();
            $req = "SELECT * FROM produit WHERE id = $id";
            $con = $db->connexion();
            return $con->query($req)->fetch();
        }

        public function updateProduit($id)
        {
            $db = new BD();
            $libelle = parent::getLibelle();
            $qtStock = parent::getQtStock();
            $req = "UPDATE produit 
                    SET libelle = '$libelle',
                        qtStock = '$qtStock' 
                        WHERE id = $id";
            $con = $db->connexion();
            return $con->query($req);
        }

        public function genererRefProduit(){
            $db = new BD();
            $idMax = $db->lastInsertIdForTable("produit");
            return 'PD_'.date('dmY').'_'.$idMax;
        }

 }
  
 
?>