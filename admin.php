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
$new_name = $_POST["new_name"];
$new_description = $_POST["new_description"];
$new_price = $_POST["new_price"];
//$new_stocks = $_POST["new_stocks"];
$pic_name = $new_name . basename($_FILES["new_pic"]["name"]);
move_uploaded_file($_FILES["new_pic"]["tmp_name"], $pic_name);
if (isset($_POST["add"])){
		$dbc->query("INSERT INTO Donation('Category', 'Name', 'Image', 'Description', 'Price', 'Stocks') VALUES ('$new_category', '$new_name', '$pic_name', '$new_description', '$new_price', '200')");
	}
else{
//need javascript to check if there is a product selected
	$productID = $_POST['select_product'];
	if (isset($_POST["del"])){
		$dbc ->query("DELETE FROM Donation WHERE ID='$productID'");
}



?>