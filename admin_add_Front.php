<html>
<div align="center"><img src="./images/logo.png" width="80%" height="180" align="center"></div>
<form action="admin_add.php" enctype="multipart/form-data" method="post">
<div class="add_div" width="80%">
	<fieldset class="add_product">
	Photo:
	<input type="file" name="new_pic" accept="image/*"/> <br />
	Name:
	<input type="text" name="new_name" /><br />
	Description:<br>
	<textarea name="new_description" rows="10" cols="100" ></textarea><br />
	Price:
	<input type="text" name="new_price" /><br />
	
	<input type="radio" name="category" Value = "Donation"/>
	<label for="Donation">Donation Item</label>
	<input type="radio" name="category" Value = "Fundraiser"/>
	<label for="Fundraiser">Fundraiser Item</label><br />
	
	<input type = "submit" name ="add" Value="Add"/>
	</fieldset>
</div>
</html>