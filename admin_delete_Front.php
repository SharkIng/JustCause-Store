
<html>
<form action="admin_delete.php" enctype="multipart/form-data" method="post">
<div class="modify_del">
	<fieldset class = "modify_del_field">
		<?php
			Include_once("./libs/global.conf.php");
			
			$product = $dbc -> query ("SELECT * FROM Donation");
			foreach ($product as $p){ ?>
				<input type="radio" name="select_product" value="<?= $p['ID']?>"/>
				<label for ="select_product"> <?= $p['Name']?></label><br>
			<?php
			}
			?>
			<input type="submit" name="delete" Value="Delete"/>
	</fieldset>
</div>


</form>
</html>