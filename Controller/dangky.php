<?php
    session_start();
    include_once "../Model/connect.php";
    include_once "../Model/user.php";
    if(isset($_POST['register']) && ($_POST['register'])){
        $user = $_POST['name'];
        $pass = $_POST['pass'];
        $email = $_POST['email'];
        $role = 0;
        //kiểm tra thông tin
        if(empty($user) || empty($pass) || empty($email)){
            $warn = "<h2>Vui lòng nhập đầy đủ thông tin</h2>";
        }else{
            $check = check($user, $pass);
        if (is_array($check)) {
            $warn = "<h2>Tài khoản đã tồn tại</h2>";
        }else{
        //thêm user
            themuser($user, $pass, $email, $role);
            $checkuser = checkuser($user, $pass);
            if(is_array($checkuser)){
                $_SESSION['sid'] = $checkuser['id'];
                $_SESSION['suser'] = $checkuser['name'];
                if($checkuser['role'] == 1) header('location: admin.php');
                else header('location: index.php');
            }
        }
        }
        
    }
    //quay lại trang login
    // if(isset($_POST['login']) && ($_POST['login'])){
    //     header('location: dangnhap.php');
    // }
    


?>

<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Register</title>
    <link rel="stylesheet" type="text/css" href="../View/admin/css/stylelogin.css" media="screen" />
</head>
<body class="body1">
<div class="container1">
	<section id="content1">
		<form action="dangky.php" method="post">
			<h1>Đăng ký</h1>
            
			<span>
			 	
			 </span>
			<div>
				<input type="text" placeholder="Nhập tên tài khoản"  name="name"/>
			</div>
			<div>
				<input type="password" placeholder="Nhập mật khẩu"  name="pass"/>
			</div>
            <div>
				<input type="text" placeholder="Nhập email"  name="email"/>
			</div>
            <div>
				<input type="submit" value="Đăng ký" name="register" style = "margin-left: 120px"; />
			</div>
		</form><!-- form -->
    <?php
        if(isset($warn) && ($warn)!="") echo $warn;
    ?>
	</section><!-- content -->
</div><!-- container -->
</body>
</html>