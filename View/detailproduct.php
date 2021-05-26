
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
    <div class="trangchitiet">
        <div class="container-title title-detail-product">
                    <div class="fontSize-title">
            <?php
                    $idct = $dsspct['id'];
                    if(isset($_GET['idct']) && ($_GET['idct']==$idct)){
                        $namect = $dsspct['name'];
                        echo $namect;
                    }
            ?>  
        </div>
        </div>
    </div>
    <div class="container">
        <div class="container-body">

            <?php
                    $name = $dsspct['name'];
                    $id = $dsspct['id'];
                    $img = '../uploaded/'.$dsspct['img'];
                    $price = $dsspct['price'];
                    $sale = $dsspct['sale'];
                    $price_cur_ct = $dsspct['price'] - ($dsspct['price'] * $dsspct['sale'] /100);
                    $link = "index.php?act=detailproduct&idct=".$id."&cart=1";

                    if(is_file($img)){
                        $img = '<img src="'.$img.'" alt="#">';
                    }else{
                        $img = "";
                    }

                    if (!empty($dsspct['sale'])) {
                        echo'<div class="sp-header clearfix">
                        <div class="slider-container">
                            <div class="slider sp-slider-big">
                                <div class="img-item">
                                    <div class="click_show_slide"style="height: 100%;width: 100%;">
                                        '.$img.'
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sp-info">
                            <div class="sp-info-top">
                                <div class="sp-info-top-item">
                                    <div class="sp-top-info-item-icon">
                                        <img style="width: 20px;" src="../View/images/item-icon-1.png"> 
                                    </div>
                                    <div class="text-wrap">
                                        <div class="text">Mã sản phẩm</div>
                                        <div class="text-1">divine</div>
                                    </div>
                                </div>
                                <div class="sp-info-top-item">
                                    <div class="sp-info-top-item-icon">
                                        <img style="width: 20px;" src="../View/images/item-icon-2.png">
                                    </div>
                                    <div class="text-wrap">
                                        <div class="text">Tình trạng</div>
                                        <span style="color:#53af2e; font-weight:bold;">Còn hàng</span>
                                    </div>
                                </div>
                                <div class="sp-info-top-item">
                                    <div class="sp-info-top-item-icon">
                                            <img style="width: 20px;" src="../View/images/item-icon-3.png">
                                        </div>
                                        <div class="text-wrap">
                                            <div class="text">Link gốc</div>
                                            <div class="text-1">Sản phẩm</div>
                                        </div>
                                    </div>
                                    </div>
                                <div class="sp-price-text">Giá sản phẩm</div>
                                <div class="sp-price-old">'.$price.'đ</div>
                                <div class="sp-price-new">
                                    <div class="price">'.$price_cur_ct.'đ</div>
                                    <div class="price-info">
                                        <span class="dis-p">- '.$sale.'%</span>
                                        &nbsp;&nbsp;
                                        <a href="#" id="promotion-request" alt="Thông báo cho tôi khi có giá tốt hơn" title="Thông báo cho tôi khi có giá tốt hơn"><i class="fas fa-bell"></i><b style="color: #928e8e"> Chuông báo giảm giá</b></a>
                                    </div>
                                </div>
                                <div id="product">
                                    <hr>
                                    <div class="row bar-info-product d-flex">
                                    <div class="col-md-3 col-xs-12" style="padding: 0 0 10px 15px;">
                                        <label>Số lượng:</label>
                                        <br>
                                        <div class="qty" style="display: -webkit-inline-box;">
                                            <a class="qtyBtn mines" href="#">-</a>
                                            <input type="text" name="quantity" value="1" size="2" id="input-quantity" class="form-control" style="width:46px;height:26px;font-weight: bold;text-align: center;border-radius:0">
                                            <a class="qtyBtn plus" href="#">+</a>
                                            <input type="hidden" id="product_id" name="product_id" value="7898">
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-xs-12 bar-buy-product">
                                        <div id="button-cart-redirect" data-loading-text="Đang tải..." class="btn btn-green-bg col-md-5" style="margin-top: 12px;width: 144px">Mua Ngay
                                    </div>
                                        <div id="button-cart" data-loading-text="Đang tải..." class="btn btn-orange-bg col-md-5 add-cart-orange" style="width: 144px">
                                            <i class="fa fa-shopping-cart text-left"> </i> &nbsp;<a href="'.$link.'" style="color: #fff;">Thêm vào giỏ</a>
                                        </div>
                                    </div>
                                </div>
        
                            </div>
                        </div>
                    </div>';
                    }else{
                        echo '<div class="sp-header clearfix">
                        <div class="slider-container">
                            <div class="slider sp-slider-big">
                                <div class="img-item">
                                    <div class="click_show_slide"style="height: 100%;width: 100%;">
                                        '.$img.'
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sp-info">
                            <div class="sp-info-top">
                                <div class="sp-info-top-item">
                                    <div class="sp-top-info-item-icon">
                                        <img style="width: 20px;" src="../View/images/item-icon-1.png"> 
                                    </div>
                                    <div class="text-wrap">
                                        <div class="text">Mã sản phẩm</div>
                                        <div class="text-1">Divine</div>
                                    </div>
                                </div>
                                <div class="sp-info-top-item">
                                    <div class="sp-info-top-item-icon">
                                        <img style="width: 20px;" src="../View/images/item-icon-2.png">
                                    </div>
                                    <div class="text-wrap">
                                        <div class="text">Tình trạng</div>
                                        <span style="color:#53af2e; font-weight:bold;">Còn hàng</span>
                                    </div>
                                </div>
                                <div class="sp-info-top-item">
                                    <div class="sp-info-top-item-icon">
                                            <img style="width: 20px;" src="../View/images/item-icon-3.png">
                                        </div>
                                        <div class="text-wrap">
                                            <div class="text">Link gốc</div>
                                            <div class="text-1">Sản phẩm</div>
                                        </div>
                                    </div>
                                    </div>
                                <div class="sp-price-text">Giá sản phẩm</div>
                                <div class="sp-price-new">
                                    <div class="price">'.$price.'đ</div>
                                    <div class="price-info">
                                        &nbsp;&nbsp;
                                        <a href="#" id="promotion-request" alt="Thông báo cho tôi khi có giá tốt hơn" title="Thông báo cho tôi khi có giá tốt hơn"><i class="fas fa-bell"></i><b style="color: #928e8e"> Chuông báo giảm giá</b></a>
                                    </div>
                                </div>
                                <div id="product">
                                    <hr>
                                    <div class="row bar-info-product d-flex">
                                    <div class="col-md-3 col-xs-12" style="padding: 0 0 10px 15px;">
                                        <label>Số lượng:</label>
                                        <br>
                                        <div class="qty" style="display: -webkit-inline-box;">
                                            <a class="qtyBtn mines" href="#">-</a>
                                            <input type="text" name="quantity" value="1" size="2" id="input-quantity" class="form-control" style="width:46px;height:26px;font-weight: bold;text-align: center;border-radius:0">
                                            <a class="qtyBtn plus" href="#">+</a>
                                            <input type="hidden" id="product_id" name="product_id" value="7898">
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-xs-12 bar-buy-product">
                                        <div id="button-cart-redirect" data-loading-text="Đang tải..." class="btn btn-green-bg col-md-5" style="margin-top: 12px;width: 144px">Mua Ngay
                                    </div>
                                        <div id="button-cart" data-loading-text="Đang tải..." class="btn btn-orange-bg col-md-5 add-cart-orange" style="width: 144px">
                                            <i class="fa fa-shopping-cart text-left"> </i> &nbsp;<a href="'.$link.'" style="color: #fff;">Thêm vào giỏ</a>
                                        </div>
                                    </div>
                                </div>
        
                            </div>
                        </div>
                    </div>';
                    }
                

            ?>
            <div class="cmt">
                    <iframe src="binhluan.php?idct=<?=$_GET['idct']?>" width="100%" height="400px" frameborder="0"></iframe>
            </div>
        </div>
    </div>
    

    <hr>
    
   