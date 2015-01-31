<?php
	Include_once("./libs/global.conf.php");
	if (isset($_POST["select_product"])){
		$productID = $_POST['select_product'];
	}
	$dbc ->query("DELETE FROM Donation WHERE ID='$productID'");
	?>
	
	