<?php include_once '../View/admin/inc/header.php';?>
    <?php  include_once '../View/admin/inc/sidebar.php'; ?>
    <?php  include_once '../Model/sanpham.php'; ?>      

        <div class="grid_10">
            <div class="box round first grid">
            <div class="block copyblock">
                <?php  if(isset($_GET['idedit']) && ($_GET['idedit']) > 0){?>
                    <h2>Cập nhật sản phẩm</h2>
                        <?php
                            if (isset($_GET['idedit'])&&($_GET['idedit'] > 0)) {
                                $img = $pathimg.$infosp['img'];
                                if(is_file($img)){
                                    $img = "<img src='".$img."'width='70px'>";
                                }else{
                                    $img = "";
                                }
                            }
                        ?>
                            <form method="post" action="admin.php?act=qlsp" enctype="multipart/form-data" style="margin-left : 300px;">
                                <input type="text" name="name" id="" value = "<?=$infosp['name']?>" placeholder="Name" ><br>
                                <input type="file" name="img" id="" ><?=$img?><br>
                                <input type="text" name="price" id="" value = "<?=$infosp['price']?>" placeholder="Price"><br>
                                <input type="text" name="product_table" value = "<?=$infosp['product_table']?>" id="" placeholder="Bảng"><br>
                                <input type="text" name="sale" id="" value = "<?=$infosp['sale']?>" placeholder="Sale"><br>
                                <select name="idcatalog" id="" style="margin-left : 6px;">
                                    <?php
                                        foreach ($dsdm as $dm) {
                                            if($infosp['idcatalog'] == $dm['id']){
                                                $s1 = "selected";
                                            }else{
                                                $s1 = "";
                                            }
                                            echo '<option value="'.$dm['id'].'" '.$s1.'>'.$dm['name'].'</option>';
                                        }
                                    ?>
                                </select><br>
                                <select name="idsanxuat" id="" style="margin-left : 35px;">
                                    <?php
                                        foreach ($dsnsx as $sx) {
                                            if($infosp['idsanxuat'] == $sx['id']){
                                                $s1 = "selected";
                                            }else{
                                                $s1 = "";
                                            }
                                            echo '<option value="'.$sx['id'].'" '.$s1.'>'.$sx['name'].'</option>';
                                        }
                                    ?>
                                </select><br>
                                <input type="hidden" name="id" value = "<?=$infosp['id']?>">
                                <input type="submit" value="Cập nhật sản phẩm" name="capnhatsp" style="margin-left : 15px;"><br>
                        </form>
                <?php 
                }else{
                    ?>
                <h2>Thêm sản phẩm</h2>
                <form method="post" action="admin.php?act=qlsp" enctype="multipart/form-data" style="margin-left : 300px;">
                    <input type="text" name="name" id="" placeholder="Name" ><br>
                    <input type="file" name="img" id=""><br>
                    <input type="text" name="price" id="" placeholder="Price"><br>
                    <input type="text" name="product_table" value="1" id="" placeholder="Bảng"><br>
                    <input type="text" name="sale" id="" placeholder="Sale"><br>
                    <select name="idcatalog" id="" style="margin-left : 6px;">
                        <?php
                            foreach ($dsdm as $dm) {
                                echo '<option value="'.$dm['id'].'">'.$dm['name'].'</option>';
                            }
                        ?>
                    </select><br>
                    <select name="idsanxuat" id="" style="margin-left : 35px;">
                        <?php
                            foreach ($dsnsx as $sx) {
                                echo '<option value="'.$sx['id'].'">'.$sx['name'].'</option>';
                            }
                        ?>
                    </select><br>
                    <input type="submit" value="Thêm sản phẩm" name="themsp" style="margin-left : 25px;"><br>
                </form>
            <?php } ?>
                </div>
                <div class="block copyblock">
                    <h2>Danh sách sản phẩm</h2> 
                        <table class="form">
                            <?php 
                                foreach ($dssp as $sp) {
                                    $id = $sp['id'];
                                    $name = $sp['name'];
                                    $img = $pathimg.$sp['img'];
                                    $price = $sp['price'];
                                    $sale = $sp['sale'];
                                    $idcatalog = $sp['idcatalog'];
                                    $idsanxuat = $sp['idsanxuat'];
                                    if(is_file($img)){
                                        $img = '<img src="'.$img.'" width="70px">';
                                    }else{
                                        $img = "";
                                    }
                                    $product_table = $sp['product_table'];
                                    $linkedit = "admin.php?act=qlsp&idedit=".$id;
                                    $linkdelete = "admin.php?act=qlsp&iddel=".$id;

                                    if(empty($sale)){
                                        echo '<tr>
                                                <td>'.$id.'</td>
                                                <td>'.$name.'</td>
                                                <td>'.$img.'</td>
                                                <td>'.$price.'</td>
                                                <td>'.$idcatalog.'</td>
                                                <td>'.$product_table.'</td>
                                                <td>0%</td>
                                                <td>'.$idsanxuat.'</td>
                                                <td><a href="'.$linkedit.'"><i class="fas fa-edit"></i></a></td>
                                                <td><a href="'.$linkdelete.'"><i class="fa fa-remove"></i></a></td>
                                            </tr>';
                                    }else{
                                        echo '<tr>
                                            <td>'.$id.'</td>
                                            <td>'.$name.'</td>
                                            <td>'.$img.'</td>
                                            <td>'.$price.'</td>
                                            <td>'.$idcatalog.'</td>
                                            <td>'.$product_table.'</td>
                                            <td>'.$sale.'%</td>
                                            <td>'.$idsanxuat.'</td>
                                            <td><a href="'.$linkedit.'"><i class="fas fa-edit"></i></a></td>
                                            <td><a href="'.$linkdelete.'"><i class="fa fa-remove"></i></a></td>
                                        </tr>';
                                }
                            }

                            ?>
                        </table>
                
                </div>
            </div>
        </div>
<?php include_once '../View/admin/inc/footer.php';?>