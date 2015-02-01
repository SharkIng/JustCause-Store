<?php
session_start();
?>
<html>
	<table style = "width:100%">
		<?php
			Include_once("./libs/global.conf.php");
			
			$product = $dbc -> query ("SELECT * FROM Donation WHERE Category = 'fundraiser' ");?>
			<form action="cartUpdate.php" enctype="multipart/form-data" method="post">
			<?php
			foreach ($product as $p) { ?>
			<tr> 
				<td> <input type="radio" name="productsID" value="<?= $p['ID']?>"/>
				  <label for ="productsID"> <?= $p['Name']?></label>  </td>
				<td> <?= $p['Name']?> </br>
					 <?= $p['Description']?> </td>
				<td> Price: </br>
					<?= $p['Price']?> 
					<input type="submit" value = "Add to Cart" class="AddButton"/>
					</td>
			</tr>
			<?php
				} 
			?>
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
        echo '<span class="remove-itm"><a href="cartUpdate.php?productsID='.$items["id"].'&return_url='.$current_url.'">&times;</a></span>';
        echo '<h3>'.$items["name"].'</h3>';
        echo '<div class="p-code">P code : '.$items["id"].'</div>';
        echo '<div class="p-qty">Qty : '.$items["quantity"].'</div>';
        echo '<div class="p-price">Price : $'.$items["price"].'</div>';
        echo '</li>';
        $subtotal = ($items["price"]*$items["quantity"]);
        $total = ($total + $subtotal);
    }
    echo '</ol>';
    echo '<span class="check-out-txt"><strong>Total : $'.$total.'</strong> <a href="view_cart.php">Check-out!</a></span>';
	echo '<span class="empty-cart"><a href="cartUpdate.php?empty=1&return='.$current_url.'">Empty Cart</a></span>';
}else{
    echo 'Your Cart is empty';
}
?>
</div>
</html>