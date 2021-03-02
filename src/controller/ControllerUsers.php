<?php
session_start();
require_once '../entities/User.php';
require_once '../model/UserBD.php';
require_once '../model/BD.php';
$user = new UserBD();
   
if(isset($_POST['connexion'])){
    extract($_POST);
    $u = $user->connexion($login,$mdp);
    if( $u != null){
        $_SESSION['id'] = $u['id'];
        $_SESSION['nomComplet'] = $u['prenom'].' '.$u['nom'];
        header('location:/suiviStock/accueil');
    }else{
        echo 'erreur le l\'ajout';
        header('location:/suiviStock/?connexion=0');
    }
}

if(isset($_GET['deco'])){
    session_destroy();
    session_unset();
    header('location:/suiviStock');

}

?>


