<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divine Shop</title>
    <link rel="stylesheet" href="../View/css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/../View/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <!-- <link rel="stylesheet" type="text/css" href="../View/admin/css/stylelogin.css" media="screen" /> -->
</head>
<body>
    <div class="top-header">
        <div class="container">
            <div class="top1">
                <a href="#">
                    <i class="fab fa-hotjar"></i> Gia hạn Spotify Premium 12 tháng chỉ 120K
                </a>
            </div>
            <div class="hotline">Hỗ trợ 1900 633 305</div>
        </div>
    </div>
    <header class="fixed-header">
        <div class="header-container">
            <div class="logo">
                <a href="index.php">
                    <img src="../View/images/logo_divine_pure_white.png" style="margin-right: 10px;width: 60px">
                    <img src="../View/images/logo-1.png" style="width: 100px;">
                </a>
            </div>
            <div class="search">
                <div class="search-control">
                    <form action="index.php?act=search" method="POST">
                        <input type="text" name="search" id="filter-name" class="box-search" placeholder="Nhập sản phẩm cần tìm...">
                        <div class="search-btn">
                        <input type="submit" name="timkiem" style = "display: none;"><i class="fas fa-search" ></i>
                        </div>
                    </form>
                </div>
            </div>
            <div class="header-btn">
                <div class="header-btn align-items-center flex">
                    <div class="dropdow">
                        <a href="dangnhap.php">
                            <?php
                                if(isset($_SESSION['sid'])&&($_SESSION['sid']>0)){
                            ?>
                            <div class="login">
                                <i class="fas fa-user" style = "color: #fff";></i>
                                <span style = "color: #fff";><?=$_SESSION['suser']?></span>
                                <span ><a href="index.php?act=user&logout=1" style = "color: #fff; margin-left: 10px";>Logout</a></span>
                            </div>
                            <?php
                                }else{
                            ?>
                            <div class="login">
                                <i class="fas fa-user"></i>
                                <span>Đăng nhập</span>
                            </div>
                            <?php } ?>
                        </a>
                    </div>
                </div>
                <div id="home-cart" class=" dropdow dropdow-header shopping-cart mg-cart">
                    <div class="heading dropdown-toggle">
                        <div class="align-items-center flex">
                            <i class="fas fa-shopping-cart cart-size text-white"></i>
                            <b class="cart-text">Giỏ hàng</b>
                            <?php if (isset($_GET['cart']) && ($_GET['cart']==1)) { ?>
                                <span class="quantity"><?=$_SESSION['cart']['ssoluong']+=1?></span>
                            <?php }else{ ?>
                                <span class="quantity"><?=$_SESSION['cart']['ssoluong']=0?></span>
                            <?php } ?>
                        </div>
                        <?php if (isset($_GET['cart']) && ($_GET['cart']==1)) { ?>
                        <ul class="dropdown-menu drop-mini-cart" id="dropdown-detail-cart">
                            <div class="text-cart-current">Giỏ hàng hiện tại</div>
                            <li class="dropdown-item padding-table-cart">
                                <table class="table" id="detail_cart">
                                    <tbody>
                                        <tr>
                                            <td class="text-left hide-text-option-cart"> <a href="#"><?=$_SESSION['sname']?></a></td>
                                            <td class="text-right"><i style="color: black">Số lượng: <?=$_SESSION['cart']['ssoluong']?></i></td>
                                            <td class="text-right"><?=$_SESSION['cart']['sprice']?> VNĐ</td>
                                            <td class="text-center">
                                                <button type="button" title="Loại bỏ" class="btn btn-danger btn-xs remove">
                                                    <a href="index.php?act=detailproduct&idct=<?=$_SESSION['cart']['sidsp']?>&dele=1"><i class="fa fa-times text-remove"></i></a>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </li>
                            <li class="dropdown-item padding-table-cart">
                                <div class="total-cart">
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <td class="text-right">
                                                    <strong>Thành tiền</strong>
                                                </td>
                                                <td class="text-right"><?=$_SESSION['cart']['sprice']?> VNĐ</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right">
                                                    <strong>Tổng đơn hàng</strong>
                                                </td>
                                                <td class="text-right"><?=$_SESSION['cart']['stotalprice']?> VNĐ</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right">
                                                    <strong>Số dư hiện tại</strong>
                                                </td>
                                                <td class="text-right">0 VNĐ</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right">
                                                    <strong>Tổng tiền phải nạp thêm</strong>
                                                </td>
                                                <td class="text-right"><?=$_SESSION['cart']['stotalprice']?> VNĐ</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p class="checkout">
                                        <a class="btn btn_cart_bottom" href="#" style="width: 50%;"><i class="fa fa-eye icon-cart-bottom"></i>
                                        Xem chi tiết giỏ hàng   
                                        </a>
                                        <a class="btn btn-primary" style="color:#fff; width: 34%; padding: 6px 30px 6px 30px; background-image:linear-gradient(to right, #5db8ec 0%, #2584e4 51%) !important " href="#"><i class="fas fa-wallet"></i>
                                            Nạp tiền
                                        </a>
                                        <br>
                                    </p>
                                </div>
                            </li>
                        </ul>
                        <?php }else{ ?>
                            <ul class="dropdown-menu drop-mini-cart" id="dropdown-detail-cart">
                            <div class="text-cart-current">Giỏ hàng hiện tại</div>
                            <li class="dropdown-item padding-table-cart">
                                <table class="table" id="detail_cart">
                                    <tbody>
                                        <tr>
                                            <td class="text-left hide-text-option-cart"> <a href="#"></a></td>
                                            <td class="text-right"><i style="color: black"></i></td>
                                            <td class="text-right"></td>
                                            <td class="text-center">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </li>
                            <li class="dropdown-item padding-table-cart">
                                <div class="total-cart">
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <td class="text-right">
                                                    <strong>Thành tiền</strong>
                                                </td>
                                                <td class="text-right">0 VNĐ</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right">
                                                    <strong>Tổng đơn hàng</strong>
                                                </td>
                                                <td class="text-right">0 VNĐ</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right">
                                                    <strong>Số dư hiện tại</strong>
                                                </td>
                                                <td class="text-right">0 VNĐ</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right">
                                                    <strong>Tổng tiền phải nạp thêm</strong>
                                                </td>
                                                <td class="text-right">0 VNĐ</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p class="checkout">
                                        <a class="btn btn_cart_bottom" href="#" style="width: 50%;"><i class="fa fa-eye icon-cart-bottom"></i>
                                        Xem chi tiết giỏ hàng   
                                        </a>
                                        <a class="btn btn-primary" style="color:#fff; width: 34%; padding: 6px 30px 6px 30px; background-image:linear-gradient(to right, #5db8ec 0%, #2584e4 51%) !important " href="#"><i class="fas fa-wallet"></i>
                                            Nạp tiền
                                        </a>
                                        <br>
                                    </p>
                                </div>
                            </li>
                        </ul>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </header>
</body>
</html>