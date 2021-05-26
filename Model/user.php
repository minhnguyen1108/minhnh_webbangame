<?php
    function checkuser($user, $pass){
        $sql = "select * from user where name='".$user."' and pass='".$pass."'";
        $conn = connect();
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetch();
    }
    function check($user, $email){
        $sql = "select * from user where name='".$user."' or email='".$email."'";
        $conn = connect();
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetch();
    }
    function themuser($user, $pass, $email, $role){
        $sql = "INSERT INTO user(name, pass, email, role) VALUES ('$user', '$pass', '$email', '$role')";
        $conn = connect();
        $conn -> exec($sql);
    }

?>