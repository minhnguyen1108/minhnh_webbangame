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
            <h2><?php
            foreach ($dsdm as $dm) {
                $id_dm = $dm['id'];
                if(isset($_GET['idcatalog']) && ($_GET['idcatalog']==$id_dm)){
                    $name_dm = $dm['name'];
                    // $name_dm = strtoupper($name_dm);
                    echo $name_dm;
                }
                }
            ?></h2>
            <?php
                if(empty($dssp)){
                    echo '<h2 style="margin-left: 370px; margin-top: 55px">Không có sản phẩm phù hợp</h2>';
                }
            ?>
        </div>
        <div class="list-container">
            <div class="row">

                <?php
                    foreach ($dssp as $sp) {
                        $id_sp = $sp['id'];
                        $name_sp = $sp['name'];
                        $img_sp = "../uploaded/".$sp['img'];
                        $price = $sp['price'];
                        $sale = $sp['sale'];
                        $price_cur_sp = $sp['price'] - ($sp['price'] * $sp['sale'] /100);
                        $link = "index.php?act=detailproduct&idct=".$id_sp;
                        if(is_file($img_sp)){
                            $img = '<img src="'.$img_sp.'" alt="#">';
                        }else{
                            $img = "";
                        }
                        if (empty($sp['sale'])) {
                            echo'<div class="box">
                                    <div class="item-game">
                                        <a href="'.$link.'">
                                            <div class="img">'.$img.'</div>
                                        </a>
                                        <div class="item-info">
                                            <a href="'.$link.'">
                                                <div class="item-title">'.$name_sp.'</div>
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
                                            <div class="img"><img src="'.$img_sp.'" alt="#"></div>
                                        </a>
                                        <div class="item-info">
                                            <a href="'.$link.'">
                                                <div class="item-title">'.$name_sp.'</div>
                                            </a>
                                            <div class="item-price">
                                                <span class="cur-p">'.$price_cur_sp.'đ</span>
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
    
   