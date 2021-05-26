<?php
    function themspcart($name, $idsp, $iduser, $price, $sale, $soluong){
        $sql = "INSERT INTO cart (name, idsp, iduser, price, sale, soluong) VALUES ('$name', '$idsp', '$iduser', '$price', '$sale', '$soluong')";
        $conn = connect();
        $conn->exec($sql);
    }
    function cnsl($soluong){
        $sql = "INSERT INTO cart (soluong) VALUES ('$soluong')";
        $conn = connect();
        $conn->exec($sql);
    }
    function showcart(){
        $sql = "select * from cart";
        $conn = connect();
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetch();
    }


?>