<?php
session_start();
include_once("./libs/global.conf.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Shopping Cart Check Out</title>
<link href="./css/style.css" rel="stylesheet" type="text/css"></head>
<body>
<div id="products-wrapper">
 <h1>View Cart</h1>
 <div class="view-cart">
 	<?php
    $current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	if(isset($_SESSION["cart"]))
    {
	    $total = 0;
		echo '<form method="post" action="./PaypalAPI/process.php">';
		echo '<ul>';
		$cart_items = 0;
		foreach ($_SESSION["cart"] as $items)
        {
           $productsID = $items["id"];
		   $results = $dbc->query("SELECT Name, Description, Price FROM Donation WHERE ID='$productsID' LIMIT 1");
		   $obj = $results->fetch_object();
		   
		    echo '<li class="cart-itm">';
			echo '<span class="remove-itm"><a href="cartUpdate.php?productsID='.$items["id"].'&return_url='.$current_url.'">&times;</a></span>';
			echo '<div class="p-price"> $'.$obj->Price.'</div>';
            echo '<div class="product-info">';
			echo '<h3>'.$obj->Name.'</h3> ';
            echo '<div class="p-qty">Qty : '.$items["quantity"].'</div>';
            echo '<div>'.$obj->Description.'</div>';
			echo '</div>';
            echo '</li>';
			$subtotal = ($items["price"]*$items["quantity"]);
			$total = ($total + $subtotal);

			echo '<input type="hidden" name="item_name['.$cart_items.']" value="'.$obj->Name.'" />';
			echo '<input type="hidden" name="item_code['.$cart_items.']" value="'.$productsID.'" />';
			echo '<input type="hidden" name="item_desc['.$cart_items.']" value="'.$obj->Description.'" />';
			echo '<input type="hidden" name="item_qty['.$cart_items.']" value="'.$items["quantity"].'" />';
			$cart_items ++;
			
        }
    	echo '</ul>';
		echo '<span class="check-out-txt">';
		echo '<strong>Total : $'.$total.'</strong>  ';
		echo '<input type="submit" value="Pay Now" />';
		echo '</span>';
		echo '</form>';
		
    }else{
		echo 'Your Cart is empty';
	}
	
    ?>
    </div>
</div>
</body>
</html>
