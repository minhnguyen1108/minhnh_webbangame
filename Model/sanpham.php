<?php
    function timkiem($keyword){
        if (!empty($keyword)) {
            $sql = "select * from sanpham where name like '%$keyword%'";
        }else{
            $sql = "select * from sanpham";
        }
        $conn = connect();
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }
    //editsp
    function capnhatsp($id,$name, $img, $price, $idcatalog, $product_table, $sale, $idsanxuat){
        if($img != "" ){
            $sql = "UPDATE sanpham set name='$name', img = '$img', price = '$price', idcatalog = '$idcatalog', product_table = '$product_table',  sale = '$sale',  idsanxuat = '$idsanxuat'  where id =".$id;
        }else{
            $sql = "UPDATE sanpham set name='$name', price = '$price', idcatalog = '$idcatalog', product_table = '$product_table',  sale = '$sale',  idsanxuat = '$idsanxuat'  where id =".$id;
        }
        $conn = connect();
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }
    //deletesp
    function delsp($id){
        $sql = "delete from sanpham where id = ".$id;
        $conn = connect();
        $conn -> exec($sql);
    }
    function delcart($id){
        $sql = "delete from cart where idsp = ".$id;
        $conn = connect();
        $conn -> exec($sql);
    }
    //admin themsp
    function themsp($name, $img, $price, $idcatalog, $product_table, $sale, $idsanxuat){
        $sql = "INSERT INTO sanpham (name, img, price, idcatalog, product_table, sale, idsanxuat) VALUES ('$name', '$img', '$price', '$idcatalog', '$product_table', '$sale', '$idsanxuat')";
        $conn = connect();
        $conn->exec($sql);
    }
    function dem(){
        $sql = "select count(id) from sanpham";
        $conn = connect();
        $conn -> exec($sql);
    }

    function product_i($product_table, $count){
        $sql = "select * from sanpham where 1";
        if(!empty($_GET['per_page']) && ($_GET['per_page'])){
            $item_page = $_GET['per_page'];
        }else{
            $item_page = 4;
        }
        if(!empty($_GET['page']) && ($_GET['page'])){
            $cur_page = $_GET['page'];
        }else{
            $cur_page = 1;
        }
        $total_page = ceil($count/$item_page);
        $offset = ($cur_page - 1) * $item_page;
        if ($product_table == 1) {
            $sql .= " AND product_table = 1 order by id asc limit 4 offset ".$offset;
        }
        if ($product_table == 2) {
            $sql .= " AND product_table = 2 order by id asc limit 4 offset ".$offset;
        }
        if ($product_table == 3) {
            $sql .= " AND product_table = 3 order by id asc limit 4 offset ".$offset;
        }
        $conn = connect();
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }

    function showsp($idcatalog){
        $sql = "select * from sanpham where 1";
        if($idcatalog > 0){
            $sql.=" AND idcatalog=".$idcatalog;
        }
        $conn = connect();
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }
    function showspct($idct){
        $sql = "select * from sanpham where 1";
        if($idct > 0){
            $sql.=" AND id=".$idct;
        }
        $conn = connect();
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetch();
    }
    
?>