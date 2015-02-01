<html>

<div align="center"><img src="./images/logo.png" width="80%" height="180" align="center"></div>

<body>
<?php
	include_once("./libs/global.conf.php");
	$id = $_POST["select_product"]; //$_POST["select_product"];
	$results = $dbc->query("SELECT * FROM Donation WHERE ID = '$id' LIMIT 1");
	$obj = $results->fetch_object();
		//sqlUpdate="UPDATE Donation SET Name='What', Image='Whats', Description='WHat', Price='100', Stocks = 'Y' WHERE ID = '1';"
	
	echo '<form action="./updateProducts.php" enctype="multipart/form-data" method="post">';
	echo '<div class="mod_div">';
	echo '<fieldset class="mod_product">';
	echo 'Photo:';
	echo '<input type="file" name="new_pic" accept="image/*"/><br />';
	echo 'Name:';
	echo '<input type="text" name="new_name" value="'.$obj->Name.'"/><br />';
	echo 'Description:';
	echo '<input type="textarea" name="new_description" rows="5" cols="100" value="'.$obj->Description.'"/><br />';
	echo 'Price:';
	echo '<input type="text" name="new_price" value="'.$obj->Price.'"/><br />';
	echo '<input type = "submit" name ="add" Value="Modify"/>';
	echo '<input type="hidden" name="new_id" value="'.$id.'" />';
	echo '</fieldset>';
	echo '</div>';

?>

</html>