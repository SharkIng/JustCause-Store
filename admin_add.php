<?php

	Include_once("./libs/global.conf.php");
	$new_category = $_POST["category"];
	$new_name = $_POST["new_name"];
	$new_description = $_POST["new_description"];
	$new_price = $_POST["new_price"];
	//$new_stocks = $_POST["new_stocks"];
	$pic_name = $new_name . basename($_FILES["new_pic"]["name"]);
	move_uploaded_file($_FILES["new_pic"]["tmp_name"], $pic_name);
	$dbc->query("INSERT INTO Donation('Category', 'Name', 'Image', 'Description', 'Price', 'Stocks') VALUES ('$new_category', '$new_name', '$pic_name', '$new_description', '$new_price', '200')");
	
?>