<?php
	Include_once("./libs/global.conf.php");
	if (isset($_POST["select_product"])){
		$productID = $_POST['select_product'];
	}
	$dbc ->query("DELETE FROM Donation WHERE ID='$productID'");
	?>

	<html>
Your change has been saved!
	<a href="./admin_index.html">Go Back</a>
	</html>
	