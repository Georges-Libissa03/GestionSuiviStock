<?php

class BD {
    private $host;
    private $mysqluser;
    private $mysqlpassword;
    private $dbname;

    public function connexion() {
        $host = "localhost";
        $mysqluser = "root";
        $mysqlpassword = "";
        $dbname = "suivistock";

        $dns = "mysql:host=$host;dbname=$dbname";
        try {
            $db = new PDO($dns, $mysqluser, $mysqlpassword);
            //echo 'connecte';
        } catch (Throwable $th) {
            throw $th;
        }
        
        return $db;
    }

    function lastInsertIdForTable($nom)
        {
            $sql = "SELECT max(id) FROM $nom";
            $BD = new BD();
            $db = $BD->connexion();
            //global $db;
            $array =  $db -> query($sql) -> fetch(); 
            if($array == NULL){   // array est nul dans le cas ou il ne recoit aucun id , dans ce cas l'id           
                $id = 1;         // est initialise a 1
            }else{
                $array[0]++;      // sinon on incremente la premiere valeur du tableau numerote renvoye
                $id = $array[0]; // et notre id seras la valeur +1
            }
            return $id;
        }
}

?>