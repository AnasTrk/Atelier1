<?php
    // if(isset($_COOKIE['flag'])){
    //     if($_POST['User']=="emsi" && $_POST['Pass']=="emsi"){
    //         setcookie('flag','emsi',time()+24*3600);
    //     }else{
    //         header('location:index.php');
    //     }
    // }
    // if(!isset($_COOKIE['flag'])){
    //     if(isset($_POST['User']) AND isset($_POST['Pass'])){
    //         if($_POST['User']=="emsi" && $_POST['Pass']=="emsi"){
    //             setcookie('flag','emsi',time()+24*3600);
    //             }else{
    //                header('location:index.php?error');
    //           }
    //     }else{
    //         header('location:index.php?CookieError');
    //     }
    //     }
    //     if(isset($_GET['error_auth'])){
    //         if($_GET['error_auth']==true){
    //             echo"<script>alert('Tu es deja Auth ...');</script>";
    //         }
    //         // header('location:DashBoard.php');
    //     }
    // if(!isset($_COOKIE['flag'])){
    //     header('location:index.php?AuthError');
    // }
    // if(isset($_COOKIE['flag'])){
    //         if($_COOKIE['flag']==1){
    //             header('location:DashBoard.php');
    //     }
    // }
    if(!isset($_COOKIE['flag'])){
        if($_POST['User']=="emsi" AND $_POST['Pass']=="emsi"){
            setcookie('flag',0,time()+3600);
            echo"Hi";
        }else{
            header('location:index.php?error');
        }
    }
    else{
        if($_COOKIE['flag']==0){
            echo 'Hi,Emsi';
            setcookie('flag',1,time()+3600);
            header('location:index.php?error2');
        }
        if($_COOKIE['flag']==1){
            setcookie('flag',2,time()+3600);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <title>DashBoard</title>
</head>
<body>
    <div class="dash">
        <a href="ListAchete.php">List</a>
        <a href="#">Panier</a>
        <a href="logout.php">Log out</a>
    </div>
    <div class="container">
        <div class="card">
            <img src="product.png" alt="">
            <h3>Product 1</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, sit!</p>
            <a href="#">Buy</a>
        </div>
        <div class="card"><img src="product.png" alt="">
            <h3>Product 2</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, sit!</p>
            <a href="#">Buy</a></div>
        <div class="card">
        <img src="product.png" alt="product.jpg">
        <h3>Product 3</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, harum!</p>
            <a href="#">Buy</a>
        </div>
    </div>
</body>
</html>