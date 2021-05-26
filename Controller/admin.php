<?php
    session_start();
    include_once "../Model/sanpham.php";
    include_once "../Model/tacgia.php";
    include_once "../Model/danhmuc.php";
    include_once "../Model/connect.php";
    include_once "../global.php";
    if(isset($_SESSION['sid']) && ($_SESSION['sid'] > 0)){
    include_once "../View/admin/inc/header.php";
    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch ($act) {
            case 'qldm':
                //themdm
                if(isset($_POST['themdm']) && ($_POST['themdm'])){
                    $name = $_POST['name'];
                    $sort = $_POST['sort'];
                    $icon = $_POST['icon'];
                    themdm($name,$sort,$icon);
                }
                //edit
                if(isset($_GET['idedit']) && ($_GET['idedit']) > 0){
                    $infodm = getinfodm(($_GET['idedit']));
                }
                //delete
                if(isset($_GET['iddel']) && ($_GET['iddel']>0)){
                    $id = $_GET['iddel'];
                    deldm($id);
                }
                if(isset($_POST['capnhatdm']) && ($_POST['capnhatdm'])){
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    $sort = $_POST['sort'];
                    $icon = $_POST['icon'];
                    capnhatdm($id,$name,$sort,$icon);
                }
                $dsdm = dsdm();
                include_once "../View/admin/catadd.php";
                break;
            case 'qlsp':
                //themsp
                if(isset($_POST['themsp']) && ($_POST['themsp'])){
                    $idcatalog = $_POST['idcatalog'];
                    $name = $_POST['name'];
                    $img = $_FILES['img']['name'];
                    $target_file = $pathimg . basename($img);
                    if(move_uploaded_file($_FILES['img']['tmp_name'], $target_file)){
                        $err_upload = "Upload thành công!";
                    }else{
                        $err_upload = "";
                    }
                    $product_table = $_POST['product_table'];
                    $price = $_POST['price'];
                    $sale = $_POST['sale'];
                    $idsanxuat = $_POST['idsanxuat'];
                    themsp($name, $img, $price, $idcatalog, $product_table, $sale, $idsanxuat);
                }
                //editsp
                if(isset($_GET['idedit']) && ($_GET['idedit']) > 0){
                    $infosp = showspct(($_GET['idedit']));
                }
                if(isset($_POST['capnhatsp']) && ($_POST['capnhatsp'])){
                    $id = $_POST['id'];
                    $idcatalog = $_POST['idcatalog'];
                    $name = $_POST['name'];
                    if(!empty($_FILES['img']['name'])){
                        $img = $_FILES['img']['name'];
                        $target_file = $pathimg . basename($img);
                        if(move_uploaded_file($_FILES['img']['tmp_name'], $target_file)){
                            $err_upload = "Upload thành công!";
                        }else{
                            $err_upload = "";
                        }
                    }
                    $product_table = $_POST['product_table'];
                    $price = $_POST['price'];
                    $sale = $_POST['sale'];
                    $idsanxuat = $_POST['idsanxuat'];
                    capnhatsp($id,$name, $img, $price, $idcatalog, $product_table, $sale, $idsanxuat);
                }
                //deletesp
                if(isset($_GET['iddel']) && ($_GET['iddel']) > 0){
                    delsp($_GET['iddel']);

                }
                $dsnsx = dsnsx();
                $dsdm = dsdm(0);
                $dssp = showsp(0);
                include "../View/admin/productadd.php";
                break;
            case 'user':
                //logout
                if(isset($_GET['logout'])&&($_GET['logout']==1)){
                    unset($_SESSION['sid']);
                    unset($_SESSION['suser']);
                    header('location: dangnhap.php');
                }
                break;
            default:
                include_once "../View/admin/inc/sidebar.php";
                break;
        }
    }else{
        include_once "../View/admin/inc/sidebar.php";
    }
    include_once "../View/admin/inc/footer.php";
}else{
    header('location: dangnhap.php');
}
?>