<?php
function dsnsx(){
    $conn = connect();
    $sql = "select * from nhasanxuat order by sort asc";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    return $stmt->fetchAll();
}


?>