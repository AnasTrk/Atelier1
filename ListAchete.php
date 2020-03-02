<?php
    if(!isset($_COOKIE['flag'])){
        header('location:DashBoard.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <title>ARTICLES</title>
</head>

<body>
<div class="dash">
        <a href="DashBoard.php">Retour</a>
        <a href="logout.php">Log out</a>
    </div>
    <div class="container">
    <?php
            // $allProducts=unserialize($_COOKIE['Products']);
            // foreach ($allProducts as $Pr ) {
                for($i=0;$i<12;$i++){
                    echo"<div class='card'>
                    <img src='product.png' alt='product'>
                    <h3>Product".$i."</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, harum!</p>
                        <a href='Panier.php?IdProduct=".$i."'>Buy</a>
                </div>";
                }
        ?>
    </div>
</body>
</html>