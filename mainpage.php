<html>
<link href="textContainer.css" rel="stylesheet" type="text/css" />
<script type="text/javascript"     src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<style type="text/css">
.buttons {
	text-align: center;
}

.link {
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
	position:relative;
	top:1px;
}
.description table tr td h3 {
	font-size: 24px;
	font-weight: bold;
	color: #900;
}
</style>

	<div class = "description">
<table width="1099" border="1">
  <tr>
    <td width="350"><img src="image/description.png" width="389" height="486"></td>
    <td width="733"><h3>DONATE</h3>
      <p>There are many ways you can make a difference through donations to our projects.</p>
      <p>In July and August 2015, Just Cause will be purchasing and delivering all donated supplies directly to schools in southern rural Uganda.<br>
      </p>
      <p>A small amount of Canadian money can make a BIG difference in Africa. It is amazing just how far a donation can go! <br>
      </p>
      <p>Please scroll down for details on our current giving options and click "add to cart" to select one. </p>
      <p>Or, simply click the Donate button below to enter your own amount and request where it goes.</p>
      <p>Thank you!</p></td>
  </tr>
</table>



<input type="button" onclick="demoDisplay1()" value="Donation">
<input type="button" onclick="demoDisplay2()" value="Fundraiser">

<div id="pages_about" class="textContainer_about">
<div id="myP1" class="textWord_about" data-link="first" style="display:None">
 <p>donation</p>
 </div>
<div id="myP2" class="textWord_about" data-link="second" style="display:None">
  <p>fundraiser</p>
</div>
</div>


<script>
function demoDisplay1() {
    document.getElementById("myP1").style.display = "block";
	document.getElementById("myP2").style.display = "none";
}

function demoDisplay2() {
    document.getElementById("myP2").style.display = "block";
	document.getElementById("myP1").style.display = "none";
}

</script>

<!--
    </div>
    <div class = "buttons">
      <p><a href="donation.php" target="view_php" class="myButton">DONATION</a>
      <a href="fundraiser.php" target="view_php" class="myButton">FUNDRAISER</a></p>
			
    </div>
-->
    
    
</html>