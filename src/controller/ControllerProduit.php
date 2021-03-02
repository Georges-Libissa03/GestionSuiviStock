<?php
session_start();
require_once '../entities/Produit.php';
require_once '../model/ProduitBD.php';
    
if(isset($_POST['addProduit'])){
    extract($_POST);
    $produit = new ProduitBD();
    $produit->setRef($ref);
    $produit->setLibelle($libelle);
    $produit->setQtStock($qtStock);
    $produit->setId($idU);
    ;
    if($produit->addProduit()){
       header('location:/suiviStock/successAddProduit');
    }else{
        header('location:/suiviStock/failAddProduit');
    }
}

if(isset($_GET['idDelete'])){
    $id = $_GET['idDelete'];
    $produit = new ProduitBD();
    if($produit->deleteProduit($id)){
        header('location:/suiviStock/successDeleteProduit');  
    }else{
        header('location:/suiviStock/failDeleteProduit');
    }
}

if(isset($_POST['editP'])){
    extract($_POST);
    $produit = new ProduitBD();
    $produit->setLibelle($libelle);
    $produit->setQtStock($qtStock);
    $id = $_GET['id'];
    if($produit->updateProduit($id)){
        header('location:/suiviStock/successEditProduit');
    }else{
        header('location:/suiviStock/failEditProduit');
    }
}

//echo "pas de probleme ici";

?>


