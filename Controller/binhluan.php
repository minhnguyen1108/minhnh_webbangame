<?php
    session_start();
    include "../model/connect.php";
    include "../model/binhluan.php";
    if(isset($_SESSION['sid']) && ($_SESSION['sid']>0)){
        if(isset($_SESSION['suser']) && (!empty($_SESSION['suser']))){
            $user = $_SESSION['suser'];
        }else{
            $user ="";
        }

        if(isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])){
            $name = $_POST['name'];
            $noidung = $_POST['noidung'];
            $idsp = $_POST['idsp'];
            $iduser = $_SESSION['sid'];
            $postdate = date("F j, Y, g:i a");

            binhluan($iduser, $idsp, $noidung, $name, $postdate);
            // showbl($idsp);
        }
        $idct = $_GET['idct'];
        $dsbl = showbl($idct);
        
        
        


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bình luận</title>
    <link rel="stylesheet" href="../View/css/binhluan.css">
</head>
<body>
    <hr>
    <h1>Bình luận</h1>
    <form action="binhluan.php?idct=<?=$_GET['idct']?>" method="post">
        <input type="text" name="name" value = "<?=$user?>" >
        <input type="hidden" name="idsp" value="<?=$_GET['idct']?>">
        <textarea name="noidung" id="" cols="30" rows="10"></textarea>
        <input class="submit" type="submit" value="Gửi bình luận" name="guibinhluan">
    </form>
        
    <?php
        echo '<h2 class="show">Danh sách bình luận</h2>';
        foreach ($dsbl as $bl) {
            
            echo '<div class="showbl"><strong> '.$bl['name'].'</strong> : '.$bl['comment'].' - '.$bl['postdate'].'<br> </div>';
        }
    ?>
    
</body>
</html>
    <?php }else{
        echo "<a style='text-decoration: none; font-size: 25px;font-weight: bold;' href ='dangnhap.php' target='_parent'>Bạn vui lòng đăng nhập để bình luận</a>";
    }?>