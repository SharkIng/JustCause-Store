<html>
	<table style = "width:100%">
		<?php
			$product = $dbc -> query ("SELECT * FROM Donation ")
			foreach ($product as $p) { ?>
			<tr> 
				<td> <?= $p['Image']?> </td>
				<td> <?= $p['Name']?> 
					 <?= $p['Description']?> </td>
				<td> Price: 
					<?= $p['Price']?> 
					<Button type="button"> Add </Button>
					</td>
			</tr>
			<?php
				} 
			?>
</html>