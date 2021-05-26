<?php
    session_start();
    include_once "../Model/connect.php";
    include_once "../Model/user.php";
    if(isset($_POST['login']) && ($_POST['login'])){
        $user = $_POST['name'];
        $pass = $_POST['pass'];

        $checkuser = checkuser($user, $pass);
        if(is_array($checkuser)){
            $_SESSION['sid'] = $checkuser['id'];
            $_SESSION['suser'] = $checkuser['name'];
            if($checkuser['role'] == 1) header('location: admin.php');
            else header('location: index.php');
        }else{
            $warn = "<h2>Tài khoản không tồn tại</h2>";
        }
    }
    if(isset($_POST['register']) && ($_POST['register'])){
        header('location: dangky.php');
    }


?>

<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Login</title>
    <link rel="stylesheet" type="text/css" href="../View/admin/css/stylelogin.css" media="screen" />
</head>
<body class="body1">
<div class="container1">
	<section id="content1">
		<form action="dangnhap.php" method="post">
			<h1>Đăng nhập</h1>
            
			<span>
			 	
			 </span>
			<div>
				<input type="text" placeholder="Tài khoản"  name="name"/>
			</div>
			<div>
				<input type="password" placeholder="Mật khẩu"  name="pass"/>
			</div>
			<div>
				<input type="submit" value="Đăng nhập" name="login" style = "margin-left: 120px"; />
			</div>
            <div>
				<input type="submit" value="Đăng ký" name="register" style = "margin-left: 120px; margin-top: -20px"; />
			</div>
		</form><!-- form -->
    <?php
        if(isset($warn) && ($warn)!="") echo $warn;
    ?>
	</section><!-- content -->
</div><!-- container -->
</body>
</html>