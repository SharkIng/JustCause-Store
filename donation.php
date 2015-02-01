<style type="text/css">
.link {
	text-align: center;
	-moz-box-shadow:inset 0px 34px 0px -15px #b54b3a;
	-webkit-box-shadow:inset 0px 34px 0px -15px #b54b3a;
	box-shadow:inset 0px 34px 0px -15px #b54b3a;
	background-color:#a73f2d;
	border:1px solid #ffffff;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:arial;
	font-size:28px;
	font-weight:bold;
	padding:10px 52px;
	text-decoration:none;
	text-shadow:0px -1px 0px #7a2a1d;
}
.link:hover {
	background-color:#b34332;
}
.link:active {
	position: relative;
	top: 1px;
	text-align: center;
}
.p{
	max-height:30%;
	}
.name{
	font-weight: bold;
	color: #900;
	font-size: x-large;
	}
.des{
	color: #900;
	font-size: medium;
	}
.priceN{
	front-size:350%;
	text-align:center
	}
.image{
	max-height:30%		
	}



.AddButton {
	-moz-box-shadow:inset 0px 1px 0px 0px #fff6af;
	-webkit-box-shadow:inset 0px 1px 0px 0px #fff6af;
	box-shadow:inset 0px 1px 0px 0px #fff6af;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ffec64), color-stop(1, #ffab23));
	background:-moz-linear-gradient(top, #ffec64 5%, #ffab23 100%);
	background:-webkit-linear-gradient(top, #ffec64 5%, #ffab23 100%);
	background:-o-linear-gradient(top, #ffec64 5%, #ffab23 100%);
	background:-ms-linear-gradient(top, #ffec64 5%, #ffab23 100%);
	background:linear-gradient(to bottom, #ffec64 5%, #ffab23 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffec64', endColorstr='#ffab23',GradientType=0);
	background-color:#ffec64;
	-moz-border-radius:6px;
	-webkit-border-radius:6px;
	border-radius:6px;
	border:1px solid #ffaa22;
	display:inline-block;
	cursor:pointer;
	color:#d60808;
	font-family:arial;
	font-size:15px;
	font-weight:bold;
	padding:8px 13px;
	text-decoration:none;
	text-shadow:0px 1px 0px #ffee66;
}
.AddButton:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ffab23), color-stop(1, #ffec64));
	background:-moz-linear-gradient(top, #ffab23 5%, #ffec64 100%);
	background:-webkit-linear-gradient(top, #ffab23 5%, #ffec64 100%);
	background:-o-linear-gradient(top, #ffab23 5%, #ffec64 100%);
	background:-ms-linear-gradient(top, #ffab23 5%, #ffec64 100%);
	background:linear-gradient(to bottom, #ffab23 5%, #ffec64 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffab23', endColorstr='#ffec64',GradientType=0);
	background-color:#ffab23;
}
.AddButton:active {
	position:relative;
	top:1px;
}

.price {
	font-size: 24px;
	color: #350417;
}


.dddddd {
	font-size: 36px;
	color: #9F3;
}
.table{
	border-style: solid;
	}
</style>

<?php
session_start();
?>
<html>

        <p> <input type="button" onClick="window.open('donation.php')" value="Donation" class="link" align="center">
        <input type="button" onClick="window.open('fundraiser.php')" value="Fundraiser" class="link" align="center"></p>
        
	<table class="table" width="90%" align="center" border="1px" bgcolor="#CCCCCC" bordercolor="#FFFFFF" background="#CCCCCC">
		<?php
			Include_once("./libs/global.conf.php");
			$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
			$product = $dbc -> query ("SELECT * FROM Donation WHERE category = 'donation'");?>
			<form action="cartUpdate.php" method="post">
			<?php
			foreach ($product as $p) { ?>
			<tr class="p"> 
				<td class="image" width="20%"> <img src="<?= $p['Image']?>" width="100%"></td>
				<td width="40%"> 
                <table border="0">
               	  <tr class="name"><b><?= $p['Name']?></b></tr></br>
					<tr class="des"><?= $p['Description']?> </tr></table></td>
				<td width="30%"> 
                <table border="0">
                <tr class="price">Price: </tr>
					<tr class="priceN"><?= $p['Price']?> </tr>
					<input type="hidden" name="type" value="add" />
					<input type="hidden" name="return" value="<?= $current_url ?>" />
					<input type="hidden" name="productsID" value="<?= $p['ID'] ?>" />
					<input type="text" name="quantity" value="1" size="3" />
					<tr><input type="submit" value = "Add to Cart" class="AddButton"/></tr>
                  </table>
			  </td>
			</tr>
			<?php
				} 
			?>

</html>
