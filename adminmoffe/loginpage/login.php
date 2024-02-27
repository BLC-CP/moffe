<?php 
session_start();
include '../config/config.php';

if(isset($_POST['login'])){
	$username = $_POST['username'];
	$password = md5($_POST['password']);

	$query = mq("SELECT * FROM tb_admin WHERE username = '$username' && password = '$password' ");
	
	$dataUser = mfa($query);

	if(mnr($query) > 0){
		header("Location:index.php");

		if($dataUser['level'] == 'admin'){
			$_SESSION['status'] = 'logins';
			$_SESSION['level'] = 'admin';
			$_SESSION['idadmin'] = $dataUser['id_admin'];
			header("Location:../");
		}elseif($dataUser['level'] == 'user') {
			$_SESSION['status'] = 'logins';
			$_SESSION['level'] = 'user';
			$_SESSION['idadmin'] = $dataUser['id_admin'];
			header("Location:../");
		}else{
			header("Location:?status=loginLaDiak");
		}

	}else{
		header("Location:?status=loginLaDiak");
	}

}


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MOFFE-TL Login Form</title>
	<link rel="stylesheet" type="text/css" href="../../bootstrap/assets/css/login.css">
	<link rel="stylesheet" type="text/css" href="../../bootstrap/assets/css/bootstrap.min.css">
	<link href="http://infiniteiotdevices.com/images/logo.png" rel="icon" sizes="16x16" type="image/gif" />
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
	<div class="loginBox">
		<img src="img/logo.jpg" class="user">
		
		<?php if($_GET['status'] == "loginlai"){ ?>
			<div class="alert alert-success text-center">Favor Priennse  Usernname ho  Password hodi bele assesu sistema</div>
		<?php }elseif ($_GET['status'] ==  'loginLaDiak') { ?>
			<div class="alert alert-danger text-center">Usernname ka  Password Salah</div>
		<?php }elseif ($_GET['status'] == 'ok') { ?>
			<div class="alert alert-warning text-center">Ita boot sai ona husi sistema</div>
		<?php } ?>

		
		<form action="" method="post">
			<p>Username</p>
			<input type="text" name="username" placeholder="Hakerek Username">
			<p>Password</p>
			<input type="password" name="password" placeholder="••••••••">
			<input type="submit" name="login" value="Login">
			<a href="#" class="a">Forgot Password?</a>
			<h5>Sign Up Using</h5>
			<ul>
				<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#" class="google"><i class="fa fa-google"></i></a></li>
			</ul>
			<h4>Create account? <a class="txt2" href="#">Sign Up</a></h4>
		</form>
	</div>
</body>
</html>