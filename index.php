<?php
	// if(isset($_COOKIE['flag'])){
	// 		// setcookie('flag','',0);
	// 		header('location:DashBoard.php?error_auth=true');
	// }else{
	// 	// header('location:index.php');
	// }
	// if(isset($_GET["CookieError"])){
	// 	echo"<script>alert('il a un problem svp log in');</script>";
	// }
	// if(isset($_GET['error'])){
	// 	echo"<script>alert('Wrong Password or Username');</script>";
	// }
// 	if(isset($_COOKIE['flag'])){
// 		header('location:DashBoard.php');
// 		echo"<script>alert('flag exist');</script>";
// 	}
// 	function Auth(){
// 		if(isset($_POST["User"],$_POST["Pass"])){
// 			if($_POST["User"]=="emsi" AND $_POST["Pass"]=="emsi")
// 			{
// 				header('location:DashBoard.php?');
// 				return true;
// 			}else{
// 				echo"<script>alert('Check your password or your Username');</script>";
// 				return false;
// 			}
// 		}
// 	}
// 	if(!isset($_COOKIE['flag'])){
// 		if(Auth()==true){
// 			Auth();
// 			setcookie('flag',0,time()+3600);
// 		}
// 	}
// 	else{
// 		if($_COOKIE['flag']==0){
// 			if(Auth()){
// 				setcookie('flag',1,time()+60);
// 				Auth();
// 				echo"<script>alert('1st flag');</script>";
// 			}
// 			if($_COOKIE['flag']==1){
// 				 }
// 		header('location:DashBoard.php?AlreadyAuth');
// 	}
// }
	//
	// }else{
	// 	if($_COOKIE['flag']==0){
	// 		if(Auth()){
	// 			Auth();
	// 			setcookie('flag',1,time()+60);
	// 			echo"<script>alert('1st flag');</script>";
	// 		}
	// 	}
	// 	if($_GET[])
	// }
	if(isset($_COOKIE['flag'])){
		if($_COOKIE['flag']==2){
			header('location:DashBoard.php?AuthTry=');
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<title>Login|Emsi</title>
</head>
<body>
	<form action="DashBoard.php" method="POST">
		<h1> LOG IN</h1>
		<input name="User" type="text" placeholder="Username">
		<input name="Pass" type="text" placeholder="Password">
		<input type="submit" value="S'authentifier">
	</form>
</body>
</html>
