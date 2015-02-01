<?php
session_start();
include_once("config.php");
?>


<body>
<div id="products-wrapper">
    <h1>Products</h1>
    <div class="products">
    <?php
    //current URL of the Page. cart_update.php redirects back to this URL
	$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    
	$results = $dbc->query("SELECT * FROM products ORDER BY id ASC");
    if ($results) { 
	
        //fetch results set as object and output HTML
        while($obj = $results->fetch_object())
        {
			echo '<div class="fundraiser">'; 
            echo '<form method="post" action="cart_update.php">';
			echo '<div class="product-thumb"><img src="images/'.$obj->product_img_name.'"></div>';
            echo '<div class="fundraiser"><h3>'.$obj->fundraiser.'</h3>';
            echo '<div class="name">'.$obj->name.'</div>';
			echo '<div class="price">'.$obj->price.'</div>';
			echo '<div class="stocks">'.$obj->stocks.'</div>';
			echo '<div class="image">'.$obj->image.'</div>';//this one's gonna have issues
            echo '<div class="product-info">';
			echo 'Price '.$currency.$obj->price.' | ';
            echo 'Qty <input type="text" name="product_qty" value="1" size="3" />';
			echo '<button class="add_to_cart">Add To Cart</button>';
			echo '</div></div>';
            echo '<input type="hidden" name="product_code" value="'.$obj->product_code.'" />';
            echo '<input type="hidden" name="type" value="add" />';
			echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
            echo '</form>';
            echo '</div>';
        }
		/* this is the donation sub category
			echo '<div class="donation">'; 
            echo '<form method="post" action="cart_update.php">';
			echo '<div class="product-thumb"><img src="images/'.$obj->product_img_name.'"></div>';
            echo '<div class="donation"><h3>'.$obj->donation.'</h3>';
			echo '<div class="name">'.$obj->name.'</div>';
            echo '<div class="description">'.$obj->description.'</div>';
			echo '<div class="price">'.$obj->price.'</div>';
			echo '<div class="stocks">'.$obj->stocks.'</div>';
			echo '<div class="image">'.$obj->image.'</div>';//this one's gonna have issues
            echo '<div class="product-info">';
			echo 'Price '.$currency.$obj->price.' | ';
            echo 'Qty <input type="text" name="product_qty" value="1" size="3" />';
			echo '<button class="add_to_cart">Add To Cart</button>';
			echo '</div></div>';
            echo '<input type="hidden" name="product_code" value="'.$obj->product_code.'" />';
            echo '<input type="hidden" name="type" value="add" />';
			echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
            echo '</form>';
            echo '</div>';	
		*/
    
    }
    ?>
    </div>


</body>
</html>
