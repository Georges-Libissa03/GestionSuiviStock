<?php
session_start();
require_once '../../entities/produit.php';
require_once '../../model/produitBD.php';
$produit = new ProduitBD();

if (empty($_SESSION)){
    header("location:/suivistock");
}

include_once '../../../header.php';
include_once '../../../topBar.php';

if (isset($_GET['p'])){
    switch ($_GET['p']){
        case 'accueil':
            include_once '../statistique/stat.php';
            break;
        case 'gProduit': 
            $list = $produit->produitAll();
            include_once '../produit/index_produit.php';
            break;
        case 'gUsers':
            include_once '../users/index_user.php';
            break;
        case 'ajoutProduit':
            $ref =  $produit->genererRefProduit();
            $id = $_SESSION['id'];
            include_once '../produit/add_produit.php';
            break;
        case 'ajoutUser':
            include_once '../users/add_user.php';
            break;
        case 'editProduit':
            $id = $_GET['id'];
            //echo $_GET['id'];
            $res = $produit->findProduit($id);
            include_once '../produit/edit_produit.php';
            break;
        default:
            include_once 'erreur.php';
    }
} else{
    include_once '../statistique/stat.php';
}


include_once '../../../footer.php';