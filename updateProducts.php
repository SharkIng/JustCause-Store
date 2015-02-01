<?php
	
	include_once("./libs/global.conf.php");

	$id = $_POST["new_id"];
	$new_name = $_POST["new_name"];
	$new_description = $_POST["new_description"];
	$new_price = $_POST["new_price"];

	$dbc->query("UPDATE Donation SET Name='$new_name', Description='$new_description', Price='$new_price' WHERE ID='$id'");

?>

	<html>
Your change has been saved!
	<a href="./admin_index.html">Go Back</a>
	</html>
