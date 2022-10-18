<?php

class test extends db{
    public function getProductsPrepareStmt($nameProduct, $descProduct){

        $sql = "SELECT * FROM product WHERE Name = ? AND Description = ?";

        $consulta = $this->connect()->prepare($sql);

        $consulta->execute([$nameProduct, $descProduct]);

        $products = $consulta->fetchAll();

        foreach ($products as $product){
            echo $product['Name'].'<br>';
        }

    }

    public function setProductsPrepareStmt ($nameProduct , $descProduct, $priceProduct){
        $sql = "INSERT INTO product(Name, Description, price) VALUES (?, ?, ?)";

        $consulta = $this->connect()->prepare($sql);

        $consulta->execute([$nameProduct, $descProduct, $priceProduct]);
    }

}

?>





