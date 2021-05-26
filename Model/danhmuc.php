<?php

    function dsdm(){
        $conn = connect();
        $sql = "select * from danhmuc order by sort asc";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }
    function getinfodm($id){
        $sql = "select * from danhmuc where id = ".$id;
        $conn = connect();
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetch();
    }
    function capnhatdm($id, $name, $sort, $icon){
        $sql = "update danhmuc set name='$name', sort = '$sort', icon = '$icon' where id =".$id;
        $conn = connect();
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }
    function deldm($id){
        $sql = "delete from danhmuc where id = ".$id;
        $conn = connect();
        $conn -> exec($sql);
    }
    function themdm($name, $sort, $icon){
        $sql = "INSERT INTO danhmuc(name, sort, icon) VALUES ('$name', '$sort', '$icon')";
        $conn = connect();
        $conn -> exec($sql);
    }

?>