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
$new_category = $_POST["category"];
$new_pic = $_POST["new_pic"];
$new_name = $_POST["new_name"];
$new_description = $_POST["new_descrip"];
$new_price = $_POST["new_price"];
$new_stocks = $_POST["new_stocks"];
if (isset($_POST["add"])){
		$dbc->query("INSERT INTO Donation("$category","$new_name", "new_pic", "$new_description", "new_price","new_stocks")");
	}
//need javascript to check if there is a product selected
$productID = $_POST['select_product'];
if (isset($_POST["del"])){
	$dbc ->query("DELETE FROM Donation WHERE ID='$productID'");
}



?>