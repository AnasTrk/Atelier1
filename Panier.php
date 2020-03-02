<?php
    if(isset($_COOKIE['flag'])){
        if(isset($_GET["IdProduct"])){
            if(!isset($_COOKIE["Products"]))
            {
                $products;
                $products[0]=$_GET["IdProduct"];
                setcookie('Products',serialize($products),time()+3600);
                setcookie('counter',0,time()+3600);
                $counter=$_COOKIE['counter'];
                echo "--$counter--";
                header('location:Panier.php');
            }
            else
            {
                $counter=$_COOKIE['counter'];
                echo $counter;
                setcookie('counter',(integer)$counter+1,time()+3600);
                echo $_COOKIE['counter'];
                $products=unserialize($_COOKIE['Products']);
                        $products[$_COOKIE['counter']+1]=$_GET["IdProduct"];
                        setcookie('Products',serialize($products),time()+3600);
                        header('location:Panier.php');
            }
        }
        if(isset($_GET['RemoveProduct'])){
            $products=unserialize($_COOKIE['Products']);
           $diff=array_diff($products,array($_GET['RemoveProduct']));
           setcookie('Products',serialize($diff),time()+3600);
           header('location:Panier.php');
        }
    }else{
        header('location:index.php?fromPanier');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <title>Panier|Emsi</title>
</head>
<body>
    <div class="dash">
        <a href="DashBoard.php">Retour</a>
        <a href="logout.php">Log out</a>
    </div>
    <div class="container">
        <?php
            $allProducts=unserialize($_COOKIE['Products']);
            sort($allProducts);
            function CountElement($E){
                $allProducts=unserialize($_COOKIE['Products']);
                sort($allProducts);
                $count=0;
                for($i=0;$i<count($allProducts);$i++){
                    if($allProducts[$i]==$E){
                        $count++;
                    }
                }
                return $count;
            }
            foreach ($allProducts as $Pr ) {
                    echo"<div class='card'>
                    <img src='product.png' alt='product'>
                    <h3>Product ".$Pr."</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, harum!</p>
                    <h3>Quantity ".CountElement($Pr)."</h3>
                        <a href='Panier.php?RemoveProduct=".$Pr."'>Remove</a>
                </div>";
            }
        ?>
    </div>
    
    <!-- <div class='card'>
            <img src='product.png' alt='product'>
            <h3>Product 1</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, harum!</p>
                <a href='#'>Remove</a>
        </div> -->
</body>
</html>