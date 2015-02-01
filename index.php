<?php

session_start();
include_once("./libs/global.conf.php");
?>
<!DOCTYPE html>
<html>
<head>
    <style type=text/css>
        .img{
            position: fixed;
            padding-left: 260px; 
            margin-bottom: 70px;
        }
        h1{
            color: red;
        }
        h3{
            color: red;
        }
    </style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Just Cause Donation</title>
<link href="./css/style.css" rel="stylesheet" type="text/css">
<div align="center"><img src="./images/logo.png" width="80%" height="180" align="center"></div>
</head>

<body>
<div id="products-wrapper">
    <h1>Donations</h1>
    <div class="products">
    <?php
    //current URL of the Page. cart_update.php redirects back to this URL
	$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    
	$results = $dbc->query("SELECT * FROM Donation WHERE Category = 'donation' ORDER BY ID ASC");
    if ($results) { 
	
        //fetch results set as object and output HTML
        while($obj = $results->fetch_object())
        {
			echo '<div class="product" heig8ht="250px">'; 
            echo '<form method="post" action="cartUpdate.php">';
			echo '<div class="img" ><img height="75px" src="'.$obj->Image.'" ></div>';
            echo '<div class="name"><h3>'.$obj->Name.'</h3>';
            echo '<div class="desc">'.$obj->Description.'</div>';
            echo '<div class="info">';
			echo 'Price $'.$obj->Price.' | ';
            echo 'Qty <input type="text" name="quantity" value="1" size="3" />';
			echo '<button class="add_to_cart">Add To Cart</button>';
			echo '</div></div>';
            echo '<input type="hidden" name="productsID" value="'.$obj->ID.'" />';
            echo '<input type="hidden" name="type" value="add" />';
			echo '<input type="hidden" name="return" value="'.$current_url.'" />';
            echo '</form>';
            echo '</div>';
        }
    }
    ?>
    </div>
    
<div class="shopping-cart">
<h2>Your Shopping Cart</h2>
<?php
if(isset($_SESSION["cart"]))
{
    $total = 0;
    echo '<ol>';
    foreach ($_SESSION["cart"] as $items)
    {
        echo '<li class="cart-itm">';
        echo '<span class="remove-itm"><a href="cartUpdate.php?productsID='.$items["id"].'&return='.$current_url.'">&times;</a></span>';
        echo '<h3>'.$items["name"].'</h3>';
        echo '<div class="p-code">P code : '.$items["id"].'</div>';
        echo '<div class="p-qty">Qty : '.$items["quantity"].'</div>';
        echo '<div class="p-price">Price : $'.$items["price"].'</div>';
        echo '</li>';
        $subtotal = ($items["price"]*$items["quantity"]);
        $total = ($total + $subtotal);
    }
    echo '</ol>';
    echo '<span class="check-out-txt"><strong>Total : $'.$total.'</strong> <a href="viewCart.php">Check-out!</a></span>';
	echo '<span class="empty-cart"><a href="cartUpdate.php?empty=1&return='.$current_url.'">Empty Cart</a></span>';
}else{
    echo 'Your Cart is empty';
}
?>
</div>
    
</div>

</body>
</html>