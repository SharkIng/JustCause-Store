<html>
<div align="center"><img src="./images/logo.png" width="80%" height="180" align="center"></div>
<form action="./modifyProducts.php" enctype="multipart/form-data" method="post">
<div class="modify">
	<fieldset class = "modify_field">
		<?php
			Include_once("./libs/global.conf.php");
			
			$product = $dbc -> query ("SELECT * FROM Donation");
			foreach ($product as $p){ ?>
				<input type="radio" name="select_product" value="<?= $p['ID']?>"/>
				<label for ="<?= $p['Name']?>"> <?= $p['Name']?></label></br>
			<?php
			}
			?>
			<input type="submit" name="modify" Value="Modify"/>
	</fieldset>
</div>
</form>
</html>