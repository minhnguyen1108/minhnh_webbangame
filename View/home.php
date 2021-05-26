<div class="banner-home">
        <div class="menu-1">
            <div class="container" style="margin-top: 6px;">
                <div class="menu-catalog">
                    <div class="left-menu">
                        <div class="bar-btn">
                            <i class="fas fa-bars"></i>
                            <span>Danh mục sản phẩm</span>
                        </div>
                        <div class="nav-menu">
                            <ul>

                                <?php
                                    foreach ($dsdm as $dm) {
                                        $id_dm = $dm['id'];
                                        $name = $dm['name'];
                                        $icon = $dm['icon'];
                                        $link = "index.php?act=product&idcatalog=".$id_dm;

                                        echo '<li>
                                                <a href="'.$link.'">
                                                    <i class="'.$icon.'"></i>
                                                    <span>'.$name.'</span>
                                                </a>
                                            </li>';
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="right-menu">
                        <div class="row menu-tab-all">
                            <div class="quick-menu ml">
                                <a href="index.php?act=muanhieu">
                                    <i class="fab fa-hotjar"></i>
                                    <span>Mua nhiều trong 24h</span>
                                </a>
                            </div>
                            <div class="quick-menu">
                                <a href="index.php?act=khuyenmai">
                                    <i class="fas fa-award"></i>
                                    <span>ĐANG KHUYẾN MẠI</span>
                                </a>
                            </div>
                            <div class="quick-menu">
                                <a href="index.php?act=thanhtoan">
                                    <i class="far fa-credit-card"></i>
                                    <span>Hình thức thanh toán</span>
                                </a>
                            </div>
                            <div class="quick-menu">
                                <a href="index.php?act=muahang">
                                    <i class="fas fa-gamepad"></i>
                                    <span>Hướng dẫn mua hàng</span>
                                </a>
                            </div>
                        </div>
                        <div class="row slider-container" style="max-width: 797px;">
                            <div class="home-slider">
                                <div class="slick-list">
                                    <a href="#">
                                        <img src="../View/images/Artboard 1-525x300.png" alt="">
                                    </a>
                                </div>
                                <div class="row sub-banner">
                                    <a href="#">
                                        <img src="../View/images/GARENA1.png" alt="#">
                                    </a>
                                    <a href="#">
                                        <img src="../View/images/ITUNES1.png" alt="#">
                                    </a>
                                </div>
                            </div>

                            <div class="row banner-bottom">
                                <div class="row sub-banner1">
                                    <a href="#">
                                        <img src="../View/images/STEAM1.png" alt="#">
                                    </a>
                                </div>
                                <div class="row sub-banner1">
                                    <a href="#">
                                        <img src="../View/images/FREEPIK1.png" alt="#">
                                    </a>
                                </div>
                                <div class="row sub-banner1">
                                    <a href="#">
                                        <img src="../View/images/viettel1.png" alt="#">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <div class="container three-banners">
        <div class="quick-view">
            <div class="row three-banner">
                <div class="hinh">
                    <a href="#">
                        <div class="item">
                            <div class="item-btn">Xem ngay</div>
                        </div>
                    </a>
                </div>
                <div class="hinh">
                    <a href="#">
                        <div class="item1">
                            <div class="item-btn1">Xem thêm</div>
                        </div>
                    </a>
                </div>
                <div class="hinh">
                    <a href="#">
                        <div class="item2">
                            <div class="item-btn2">Mua ngay</div>
                        </div>
                    </a>
                </div>
            </div>

        </div>

    </div>
    <hr>
    <div class="container">
        <div class="list-title">
            <h2>Sản phẩm nổi bật</h2>
            <a href="#">Xem chi tiết</a>
        </div>
        <div class="list-container">
            <div class="row">

                <?php
                    foreach ($spnb as $nb) {
                        $id_nb = $nb['id'];
                        $name_nb = $nb['name'];
                        $img_nb = $nb['img'];
                        $price = $nb['price'];
                        $sale = $nb['sale'];
                        $price_cur_nb = $nb['price'] - ($nb['price'] * $nb['sale'] /100);
                        $link = "index.php?act=detailproduct&idct=".$id_nb;

                        if (empty($nb['sale'])) {
                            echo'<div class="box">
                                    <div class="item-game">
                                        <a href="'.$link.'">
                                            <div class="img"><img src="../View/images/'.$img_nb.'" alt="#"></div>
                                        </a>
                                        <div class="item-info">
                                            <a href="'.$link.'">
                                                <div class="item-title">'.$name_nb.'</div>
                                            </a>
                                            <div class="item-price">
                                                <span class="cur-p">'.$price.'đ</span>
                                            </div>
                                            <div class="item-btn-c"><a href="#"><i class="fas fa-shopping-cart "></i></a></div>
                                            <div class="item-btn3"><a href="'.$link.'">Mua ngay</a></div>
                                        </div>
                                    </div>
                                </div>';
                        }else{
                            echo '<div class="box">
                                    <div class="item-game">
                                        <a href="'.$link.'">
                                            <div class="img"><img src="../View/images/'.$img_nb.'" alt="#"></div>
                                        </a>
                                        <div class="item-info">
                                            <a href="'.$link.'">
                                                <div class="item-title">'.$name_nb.'</div>
                                            </a>
                                            <div class="item-price">
                                                <span class="cur-p">'.$price_cur_nb.'đ</span>
                                                <span class="price-block">
                                                    <span class="old-p">'.$price.'đ</span>
                                                <span class="dis-p">-'.$sale.'%</span>
                                                </span>
                                            </div>
                                            <div class="item-btn-c"><a href="#"><i class="fas fa-shopping-cart "></i></a></div>
                                            <div class="item-btn3"><a href="'.$link.'">Mua ngay</a></div>
                                        </div>
                                    </div>
                                </div>';
                        }
                    }

                ?>
                <?php
                    include "page.php";
                ?>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="list-title">
            <h2>Sản phẩm bán chạy</h2>
            <a href="#">Xem chi tiết</a>
        </div>
        <div class="list-container">
            <div class="row">

            <?php
                    foreach ($spbc as $bc) {
                        $id_bc = $bc['id'];
                        $name_bc = $bc['name'];
                        $img_bc = $bc['img'];
                        $price = $bc['price'];
                        $sale = $bc['sale'];
                        $price_cur_bc = $bc['price'] - ($bc['price'] * $bc['sale'] /100);
                        $link = "index.php?act=detailproduct&idct=".$id_bc;

                        if (empty($bc['sale'])) {
                            echo'<div class="box">
                                    <div class="item-game">
                                        <a href="'.$link.'">
                                            <div class="img"><img src="../View/images/'.$img_bc.'" alt="#"></div>
                                        </a>
                                        <div class="item-info">
                                            <a href="'.$link.'">
                                                <div class="item-title">'.$name_bc.'</div>
                                            </a>
                                            <div class="item-price">
                                                <span class="cur-p">'.$price.'đ</span>
                                            </div>
                                            <div class="item-btn-c"><a href="#"><i class="fas fa-shopping-cart "></i></a></div>
                                            <div class="item-btn3"><a href="'.$link.'">Mua ngay</a></div>
                                        </div>
                                    </div>
                                </div>';
                        }else{
                            echo '<div class="box">
                                    <div class="item-game">
                                        <a href="'.$link.'">
                                            <div class="img"><img src="../View/images/'.$img_bc.'" alt="#"></div>
                                        </a>
                                        <div class="item-info">
                                            <a href="'.$link.'">
                                                <div class="item-title">'.$name_bc.'</div>
                                            </a>
                                            <div class="item-price">
                                                <span class="cur-p">'.$price_cur_bc.'đ</span>
                                                <span class="price-block">
                                                    <span class="old-p">'.$price.'đ</span>
                                                <span class="dis-p">-'.$sale.'%</span>
                                                </span>
                                            </div>
                                            <div class="item-btn-c"><a href="#"><i class="fas fa-shopping-cart "></i></a></div>
                                            <div class="item-btn3"><a href="'.$link.'">Mua ngay</a></div>
                                        </div>
                                    </div>
                                </div>';
                        }
                        }
                ?>
                <?php
                    include "page.php";
                ?>
            </div>
        </div>
    </div>
    <hr>
    <div class="container" style="margin-top: 15px;">
        <div class="list-title">
            <h2>Khám phá</h2>
        </div>
        <div class="list-container">
            <div class="row">
                <div class="boxk">
                    <a href="#">
                        <div class="item-bottom">
                            <img src="../View/images/san-pham-noi-bat.png">
                            <div class="item-info">
                                <div class="item-title">SẢN PHẨM NỔI BẬT</div>
                                <div class="item-des">Game hot trên thị trường, được mọi người mua nhiều.</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="boxk">
                    <a href="#">
                        <div class="item-bottom">
                            <img src="../View/images/khuyen-mai.png">
                            <div class="item-info">
                                <div class="item-title">KHUYẾN MÃI</div>
                                <div class="item-des">Cơ hội mua game khủng với giá cực tốt, chờ gì nữa vào thôi nào!</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="boxk">
                    <a href="#">
                        <div class="item-bottom">
                            <img src="../View/images/code_wallet.png">
                            <div class="item-info">
                                <div class="item-title">CODE WALLET</div>
                                <div class="item-des">Nạp tiền vào ví mua sản phẩm dễ dàng hơn bao giờ hết.</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="boxk">
                    <a href="#">
                        <div class="item-bottom">
                            <img src="../View/images/goi-nap.jpg">
                            <div class="item-info">
                                <div class="item-title">GÓI NẠP</div>
                                <div class="item-des">Giá cực rẻ, nạp cực nhanh chỉ có tại Divine shop.</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <br>
    <div class="container">
        <div class="list-title">
            <h2>Sản phẩm khuyến mãi</h2>
            <a href="#">Xem chi tiết</a>
        </div>
        <div class="list-container">
            <div class="row">

            <?php
                    foreach ($spkm as $km) {
                        $id_km = $km['id'];
                        $name_km = $km['name'];
                        $img_km = $km['img'];
                        $price = $km['price'];
                        $sale = $km['sale'];
                        $price_cur_km = $km['price'] - ($km['price'] * $km['sale'] /100);
                        $link = "index.php?act=detailproduct&idct=".$id_km;

                        if (empty($km['sale'])) {
                            echo'<div class="box">
                                    <div class="item-game">
                                        <a href="'.$link.'">
                                            <div class="img"><img src="../View/images/'.$img_km.'" alt="#"></div>
                                        </a>
                                        <div class="item-info">
                                            <a href="'.$link.'">
                                                <div class="item-title">'.$name_km.'</div>
                                            </a>
                                            <div class="item-price">
                                                <span class="cur-p">'.$price.'đ</span>
                                            </div>
                                            <div class="item-btn-c"><a href="#"><i class="fas fa-shopping-cart "></i></a></div>
                                            <div class="item-btn3"><a href="'.$link.'">Mua ngay</a></div>
                                        </div>
                                    </div>
                                </div>';
                        }else{
                            echo '<div class="box">
                                    <div class="item-game">
                                        <a href="'.$link.'">
                                            <div class="img"><img src="../View/images/'.$img_km.'" alt="#"></div>
                                        </a>
                                        <div class="item-info">
                                            <a href="'.$link.'">
                                                <div class="item-title">'.$name_km.'</div>
                                            </a>
                                            <div class="item-price">
                                                <span class="cur-p">'.$price_cur_km.'đ</span>
                                                <span class="price-block">
                                                    <span class="old-p">'.$price.'đ</span>
                                                <span class="dis-p">-'.$sale.'%</span>
                                                </span>
                                            </div>
                                            <div class="item-btn-c"><a href="#"><i class="fas fa-shopping-cart "></i></a></div>
                                            <div class="item-btn3"><a href="'.$link.'">Mua ngay</a></div>
                                        </div>
                                    </div>
                                </div>';
                        }
                        }
                ?>
                <?php
                    include "page.php";
                ?>
            </div>
        </div>
    </div>
    <hr>
    <div class="banner1">
        <div class="container">
            <div class="line">
                <span>Bạn là người mới?</span>
            </div>
            <div class="text">Hãy đăng kí tài khoản để cập nhật những ưu đãi mới nhất từ Divine Shop</div>
            <a href="dangky.php">
                <div class="btn-aqua">Đăng ký ngay</div>
            </a>
            <div class="text">Hoặc đăng nhập nếu bạn đã có tài khoản</div>
        </div>
    </div>