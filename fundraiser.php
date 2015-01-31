<html>
	<table style = "width:100%">
		<?php
			Include_once("./libs/global.conf.php");
			
			$product = $dbc -> query ("SELECT * FROM Donation WHERE Category = 'fundraiser' ");
			
			foreach ($product as $p) { ?>
			<tr> 
				<td> <?= $p['Image']?> </td>
				<td> <?= $p['Name']?> </br>
					 <?= $p['Description']?> </td>
				<td> Price: </br>
					<?= $p['Price']?> 
					<Button type="button"> Add </Button>
					</td>
			</tr>
			<?php
				} 
			?>
</html>