
<html>
<form action="admin.php" enctype="multipart/form-data" method="post">
<div class="add_div">
	<fieldset class="add_product">
	Photo:
	<input type="file" name="new_pic" accept="image/*"/> <br />
	Name:
	<input type="text" name="new_name" />
	Description:
	<input type="textarea" name="new_description" />
	Price:
	<input type="text" name="new_price" />
	<input type = "submit" name ="add" Value="Add"/>
	</fieldset>
</div>
<div class="modify_del">
	<fieldset class = "modify_del_field">
		<?php
			Include_once("./libs/global.conf.php");
			
			$product = $dbc -> query ("SELECT * FROM Donation");
			foreach ($product as $p){ ?>
				<input type="radio" name="<?= $p['ID']?>" value="<?= $p['Name']?>"/>
				<label for ="<?= $p['ID']?>"> <?echo $p['Name']?></label>
			<?php
			}
			?>
			<input type="submit" name="modify" Value="Modify"/>
			<input type="submit" name="delete" Value="Delete"/>
	</fieldset>
</div>


</form>
</html>