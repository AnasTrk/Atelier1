<?php
    if(isset($_COOKIE['flag'])){
        setcookie('flag',0);
        header('location:index.php');
    }
?>