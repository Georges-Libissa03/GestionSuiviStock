<?php
    require_once '../src/model/BD.php';
    $db = new BD();

    $req = "SELECT * FROM produit ORDER BY id"; 
    $con = $db->connexion();   
    echo json_encode($con->query($req)->fetchAll());

?>