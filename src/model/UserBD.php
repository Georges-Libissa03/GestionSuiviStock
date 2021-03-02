<?php
require_once 'BD.php';
class UserBD extends User {

    public function __construct(){

    }

    public function connexion($login,$mdp) {
        $db = new BD();
        $req = "SELECT * FROM users WHERE email = '$login' AND password = '$mdp'";
        $con = $db->connexion();
        return $con->query($req)->fetch();
      }

      public function getUsersAll() {
        $req = "SELECT * FROM users";
        $res = $this->db->query($req);
        if($res->num_rows>0) {
            while($row = $res->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        }
    }
}