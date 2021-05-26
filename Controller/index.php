<?php
    session_start();
    include_once "../model/connect.php";
    include_once "../model/danhmuc.php";
    include_once "../model/tacgia.php";
    include_once "../model/sanpham.php";
    include_once "../model/user.php";
    include_once "../model/cart.php";
    include_once "../global.php";
    //load data cho trang chu
    connect();
    
    $dsdm = dsdm();
    
    $count = dem();
    $spnb = product_i(1, $count);
    $spbc = product_i(2, $count);
    $spkm = product_i(3, $count);
    

    include_once "../View/header.php";
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }
    if(isset($_GET['act'])){
        $act =$_GET['act'];
        switch ($act) {
            case 'product':
                if(isset($_GET['idcatalog']) && ($_GET['idcatalog']>0)){
                    $iddm = $_GET['idcatalog'];
                }else{
                    $iddm = 0;
                }
                $dssp=showsp($iddm);
                include_once "../View/product.php";
                break;
            case 'detailproduct':
                if(isset($_GET['idct']) && ($_GET['idct']>0)){
                    $idct = $_GET['idct'];
                }else{
                    $idct = 0;
                }
                $dsspct = showspct($idct);
                if (isset($_GET['cart']) && ($_GET['cart']==1)) {
                    $name = $dsspct['name'];
                    $iduser = $_SESSION['sid'];
                    $sale = $dsspct['sale'];
                    $price = $dsspct['price'] - ($dsspct['price']*$sale / 100);
                    $idsp = $dsspct['id'];
                    $soluong = 0;
                    if (isset($_GET['cart']) && ($_GET['cart']==1)) {
                        $soluong += 1;
                    }else{
                        $soluong = 0;
                    }
                    themspcart($name, $idsp, $iduser, $price, $sale, $soluong);
                    }
                $scart = showcart();
                if (is_array($scart)) {
                    $_SESSION['cart']['sname'] = $scart['name'];
                    $_SESSION['cart']['sidsp'] = $scart['idsp'];
                    $_SESSION['cart']['ssoluong'] = $scart['soluong'];
                    $_SESSION['cart']['sprice'] = $scart['price'];
                    $_SESSION['cart']['stotalprice'] = $_SESSION['cart']['ssoluong']*$_SESSION['cart']['sprice'];
                }
                if(isset($_GET['dele'])&&($_GET['dele']==1)){
                    delcart($_SESSION['cart']['sidsp']);
                    unset($_SESSION['cart']['sname']);
                    unset($_SESSION['cart']['ssoluong']);
                    unset($_SESSION['cart']['sprice']);
                    unset($_SESSION['cart']['stotalprice']);
                }
                include_once "../View/detailproduct.php";
                break;
            case 'user':
                //logout
                if(isset($_GET['logout'])&&($_GET['logout']==1)){
                    unset($_SESSION['sid']);
                    unset($_SESSION['suser']);
                }
                include_once "../View/home.php";
                break;
            case 'search':
                if(isset($_POST['timkiem']) && ($_POST['timkiem'])){
                    $keyword = $_POST['search'];
                    if(empty($keyword)){
                        $keyword = "";
                    }
                }
                $search = timkiem($keyword);
                include_once "../View/search.php";
                break;    
            
            case 'del':
                
                break;
            case 'muahang':
                include_once "../View/muahang.php";
                break;
            default:
                include_once "../View/home.php";
                break;
        }
        }else{
            include_once "../View/home.php";
    }
    include_once "../View/footer.php";
?>