    <?php include_once '../View/admin/inc/header.php';?>
    <?php  include_once '../View/admin/inc/sidebar.php'; ?>
    <?php  include_once '../Model/danhmuc.php'; ?>      

        <div class="grid_10">
            <div class="box round first grid">
            <div class="block copyblock">
                <?php  if(isset($_GET['idedit']) && ($_GET['idedit']) > 0){?>
                    <h2>Cập nhật danh mục</h2>
                    <form method="post" action="admin.php?act=qldm" style="margin-left : 150px;">
                        <input type="text" name="name" id="" value = "<?=$infodm['name']?>" placeholder="Name" >
                        <input type="text" name="sort" value = "<?=$infodm['sort']?>" id="" placeholder="Sort">
                        <input type="text" name="icon" value = "<?=$infodm['icon']?>" id="" placeholder="Icon">
                        <input type="hidden" name="id" value = "<?=$infodm['id'] ?>">
                        <input type="submit" value="Cập nhật danh mục" name="capnhatdm" style="margin-left: 190px;">
                    </form>
                <?php 
                }else{
                    ?>
                <h2>Thêm danh mục</h2>
                <form method="post" action="admin.php?act=qldm" style="margin-left : 150px;">
                    <input type="text" name="name" id="" placeholder="Name" >
                    <input type="text" name="sort" value="0" id="" placeholder="Sort">
                    <input type="text" name="icon" id="" placeholder="Icon">
                    <input type="submit" value="Thêm danh mục" name="themdm" style="margin-left : 190px;">
                </form>
            <?php } ?>
                </div>
                <div class="block copyblock">
                    <h2>Danh sách danh mục</h2>
                        <table class="form">
                            <?php 
                                foreach ($dsdm as $dm) {
                                    $name = $dm['name'];
                                    $id = $dm['id'];
                                    $sort = $dm['sort'];
                                    $icon = $dm['icon'];
                                    $linkedit = "admin.php?act=qldm&idedit=".$id;
                                    $linkdelete = "admin.php?act=qldm&iddel=".$id;

                                    echo '<tr>
                                            <td>'.$id.'</td>
                                            <td>'.$name.'</td>
                                            <td>'.$id.'</td>
                                            <td>'.$icon.'</td>
                                            <td><a href="'.$linkedit.'"><i class="fas fa-edit"></i></a></td>
                                            <td><a href="'.$linkdelete.'"><i class="fa fa-remove"></i></a></td>
                                        </tr>';
                                }

                            ?>
                        </table>
                
                </div>
            </div>
        </div>
<?php include_once '../View/admin/inc/footer.php';?>