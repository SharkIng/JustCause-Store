<?php
session_start();
Include_once("./libs/global.conf.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>Just Cause Store Administrator Page</title>
</head>

<?php 
/*$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



$sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
*/
$new_pic = $_POST["add_pic"];
$new_name = $_POST["add_name"];
$new_description = $_POST["add_descrip"];
$new_price = $_POST["add_price"];
$new_stocks = $_POST["add_stocks"];
if (isset($_POST["add"])){
	if(isset($_POST["donation"])){
		$dbc->query("INSERT INTO Donation("$new_name", "new_pic", "$new_description", "new_price","new_stocks")");
	}
	else {
		$dbc->query("INSERT INTO Donation("$new_name", "new_pic", "$new_description", "new_price","new_stocks")");
	}
}
//need javascript to check if there is a product selected
$current_product = $_POST["current"];
$current_category = $_POST["category"];
if (isset($_POST["del"])){
	$dbc ->query("DELETE FROM $current_category WHERE Name=$current_product");
}



?>