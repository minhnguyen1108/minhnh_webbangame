<div class="banner-home">
        <div class="menu-1">
            <div class="container" style="margin-top: 6px;">
                <div class="menu-catalog">
                    <div class="left-menu">
                        <div class="bar-btn">
                            <i class="fas fa-bars"></i>
                            <span>Danh mục sản phẩm</span>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: 20px;">
        <div class="list-title">
            <?php
                if(empty($search)){
                    echo '<h2 style="margin-left: 370px; margin-top: 105px">Không tìm thấy sản phẩm phù hợp</h2>';
                }else echo '<h2>Sản phẩm phù hợp</h2>';
            ?>
        </div>
        <div class="list-container">
            <div class="row">
                <?php
                    foreach ($search as $s) {
                        $id_s = $s['id'];
                        $name_s = $s['name'];
                        $img_s = "../uploaded/".$s['img'];
                        $price = $s['price'];
                        $sale = $s['sale'];
                        $price_cur_s = $s['price'] - ($s['price'] * $s['sale'] /100);
                        $link = "index.php?act=detailproduct&idct=".$id_s;
                        if(is_file($img_s)){
                            $img = '<img src="'.$img_s.'" alt="#">';
                        }else{
                            $img = "";
                        }
                        if (empty($s['sale'])) {
                            echo'<div class="box">
                                    <div class="item-game">
                                        <a href="'.$link.'">
                                            <div class="img">'.$img.'</div>
                                        </a>
                                        <div class="item-info">
                                            <a href="'.$link.'">
                                                <div class="item-title">'.$name_s.'</div>
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
                                            <div class="img"><img src="'.$img_s.'" alt="#"></div>
                                        </a>
                                        <div class="item-info">
                                            <a href="'.$link.'">
                                                <div class="item-title">'.$name_s.'</div>
                                            </a>
                                            <div class="item-price">
                                                <span class="cur-p">'.$price_cur_s.'đ</span>
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
            </div>
        </div>
    </div>
    <hr>
    
   