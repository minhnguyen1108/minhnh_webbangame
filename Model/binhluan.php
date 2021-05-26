<?php
    function binhluan($iduser,  $idsp,  $noidung, $name, $postdate){
        $sql = "INSERT INTO comment (iduser, idsp, comment, name, postdate) VALUES ('$iduser', '$idsp',  '$noidung','$name', '$postdate')";
        $conn = connect();
        $conn->exec($sql);
    }
    function showbl($idct){
        $sql = "select * from comment where 1";
        if ($idct > 0) {
            $sql .= " AND idsp=".$idct;
        }
        $sql .= " order by id desc";
        $conn = connect();
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }

?>