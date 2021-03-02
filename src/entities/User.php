<?php
class User {

    private $id;
    private $nom;
    private $prenom;
    private $email;
    private $password;
    private $etat;

    public function setId($id){
        return $this->id = $id;
    }
    public function setNom($nom){
        return $this->nom = $nom;
    }
    public function setPrenom($prenom){
        return $this->prenom = $prenom;
    }
    public function setEmail($email){
        return $this->email = $email;
    }
    public function setPassword($password){
        return $this->password = $password;
    }
    public function setEtat($etat){
        return $this->etat = $etat;
    }

    public function getId(){
        return $this->id;
    }
    public function getNom(){
        return $this->nom;
    }
    public function getPrenom(){
        return $this->prenom;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPassword(){
        return $this->password;
    }
    public function getEtat(){
        return $this->etat;
    }

}