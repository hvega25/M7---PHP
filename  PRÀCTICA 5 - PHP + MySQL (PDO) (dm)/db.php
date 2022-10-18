<?php

class db{
    //atributs
    private $host = "localhost";
    private $user = "root";
    private $passwd = "";
    private $dbName = "products";

    //Mètodes
    protected function connect(){
        $myCon = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
        $pdo = new db($myCon, $this->user, $this->passwd);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);


        return $pdo;
    }

}

?>
