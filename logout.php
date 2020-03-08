<?php
    session_start();
    if(isset($_SESSION['flag'])){
       session_destroy();
        header('location:index.php');
    }
?>