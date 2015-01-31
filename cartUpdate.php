<?php

session_start();
include_once("./libs/global.conf.php");

// Empty Shopping Cart by Destroy session
if(isset($_GET["empty"]) && $_GET["empty"] != 0){
	$return_url = base64_decode($_GET["return"]);
	session_destroy();
	header('Location:'.$return_url);
}

// Add item to shopping cart
if (isset($_POST["type"]) && $_POST["type"] == 'add') {
	$id 	= filter_var($_POST["productsID"], FILTER_SANITIZE_STRING); //Product ID
	$qty 	= filter_var($_POST["quantity"], FILTER_SANITIZE_NUMBER_INT); //Product Quantity
	$return_url 	= base64_decode($_POST["return"]); //Return URL
	
	//Database Query to get detail price and information about products
	$sql="SELECT Name,Price FROM Donation WHERE DonationID = '$id' LIMIT 1";
	$results = $dbc->query($sql);
	$obj = $results->fetch_object();
	
	if ($results) { //If Get information from database
		
		//Prepare Array for the session
		$newProduct = array(array('name'=>$obj->Name, 'id'=>$id, 'quantity'=>$qty, 'price'=>$obj->Price));
		
		if(isset($_SESSION["cart"])) //If We have the session
		{
			$found = false; //Set found items to false
			
			foreach ($_SESSION["cart"] as $items) 
			{
				if($items["id"] == $id){ //The item exist in array

					$cartProducts[] = array('name'=>$items["name"], 'id'=>$items["id"], 'quantity'=>$qty, 'price'=>$items["price"]);
					$found = true;
				}else{
					//The item doesn't exist in the list
					$cartProducts[] = array('name'=>$items["name"], 'id'=>$items["id"], 'quantity'=>$items["quantity"], 'price'=>$items["price"]);
				}
			}
			
			if($found == false) //If No items are found in the current shopping cart
			{
				//Add new product to shopping cart
				$_SESSION["cart"] = array_merge($cartProducts, $newProduct);
			}else{
				//If the itmes is found in the shoppping cart
				//
				$_SESSION["cart"] = $cartProducts;
			}
			
		}else{
			//If SESSION not exist, create SESSION for shopping cart
			$_SESSION["cart"] = $newProduct;
		}
		
	}
	
	//redirect back to original page
	header('Location:'.$return_url);
}

// Remove item from shopping cart
if (isset($_GET["productsID"]) && isset($_GET["return"]) && isset($_SESSION["cart"])) {
	$productsID = $_GET["productsID"]; // Get products id which needed to delete
	$return_url = base64_decode($_GET["return"]); // Get return address

	foreach ($_SESSION["cart"] as $items) {
		
		if ($items["id"] != $productsID) {
			$cartProducts[] = array('name'=>$items["name"], 'id'=>$items["id"], 'quantity'=>$items["quantity"], 'price'=>$items["price"]);
		}

		// Create new shopping cart session
		$_SESSION["cart"] = $cartProducts;
	}
	
	//Redirect to home
	header('Location:'.$return_url);
}

?>