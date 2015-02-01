<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1" />
<link href="../textContainer.css" rel="stylesheet" type="text/css" />
<script type="text/javascript"     src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<style type="text/css">

.login {
	-moz-box-shadow:inset 0px 1px 0px 0px #ffffff;
	-webkit-box-shadow:inset 0px 1px 0px 0px #ffffff;
	box-shadow:inset 0px 1px 0px 0px #ffffff;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ffffff), color-stop(1, #f6f6f6));
	background:-moz-linear-gradient(top, #ffffff 5%, #f6f6f6 100%);
	background:-webkit-linear-gradient(top, #ffffff 5%, #f6f6f6 100%);
	background:-o-linear-gradient(top, #ffffff 5%, #f6f6f6 100%);
	background:-ms-linear-gradient(top, #ffffff 5%, #f6f6f6 100%);
	background:linear-gradient(to bottom, #ffffff 5%, #f6f6f6 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#f6f6f6',GradientType=0);
	background-color:#ffffff;
	-moz-border-radius:6px;
	-webkit-border-radius:6px;
	border-radius:6px;
	border:1px solid #dcdcdc;
	display:inline-block;
	cursor:pointer;
	color:#666666;
	font-family:arial;
	font-size:15px;
	font-weight:bold;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:0px 1px 0px #ffffff;
}
.login:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #f6f6f6), color-stop(1, #ffffff));
	background:-moz-linear-gradient(top, #f6f6f6 5%, #ffffff 100%);
	background:-webkit-linear-gradient(top, #f6f6f6 5%, #ffffff 100%);
	background:-o-linear-gradient(top, #f6f6f6 5%, #ffffff 100%);
	background:-ms-linear-gradient(top, #f6f6f6 5%, #ffffff 100%);
	background:linear-gradient(to bottom, #f6f6f6 5%, #ffffff 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#f6f6f6', endColorstr='#ffffff',GradientType=0);
	background-color:#f6f6f6;
}
.login:active {
	position: relative;
	top: 1px;
	text-align: right;
}


    .black_overlay{
        display: none;
        position: absolute;
        top: 0%;
        left: 0%;
        width: 100%;
        height: 100%;
        background-color: black;
        z-index:1001;
        -moz-opacity: 0.8;
        opacity:.80;
        filter: alpha(opacity=80);
    }
    .white_content {
        display: none;
        position: absolute;
        top: 25%;
        left: 25%;
        width: 50%;
        height: 50%;
        padding: 16px;
        border: 16px solid orange;
        background-color: white;
        z-index:1002;
        overflow: auto;
    }

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
.description table tr td h3 {
	text-align: center;
	font-size: 24px;
	font-weight: bold;
	color: #900;
}
.description table tr td a {
	text-align: center;
	font-weight: bold;
	color: #900;
	font-size: x-large;
}
.description {
	text-align: center;
}
.donate {
	color: #933;
}
.donate {
	font-style: italic;
}
.context {
	font-size: medium;
	
; 	color: #350417;
}

</style>

<table width="90%" border="0" align="center">
  <tr>
    <td width="30%"><img src="../image/description.png" width="389" height="486"></td>
    <td width="60%">
      <p>
        <input type="button" onClick="window.open('donation.php')" value="Donation" class="link" align="center">
        <input type="button" onClick="demoDisplay2()" value="Fundraiser" class="link" align="center">
      </p>
<p>
        <input type="image" style="border: 0px; width: 92px; height:26px" src="https://www.paypal.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="Donate"> 
      <span class="donate">Donate Through PayPal </span></p>
      <p class="context">There are many ways you can make a difference through donations to our projects.</p>
      <p class="context">In July and August 2015, Just Cause will be purchasing and delivering all donated supplies directly to schools in southern rural Uganda.<br>
      </p>
      <p class="context">A small amount of Canadian money can make a BIG difference in Africa. It is amazing just how far a donation can go! <br>
      </p>
      <p class="context"><span class="context">Please scroll down for details on our current giving options and click "add to cart" to select one. </p>
      <p class="context"><span class="context">Or, simply click the Donate button below to enter your own amount and request where it goes.</p>
      <p class="context">Thank you!</p>
          <p align="right"><a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'" class="login">Login</a></p>
    <div id="light" class="white_content">
    <form action="verify.php" method="post">
    User Name:<br>
    <input type="text" name="username"><br><br>
    Password:<br>
    <input type="password" name="password"><br><br>
    <input type="submit" name="submit" value="Login">
</form><a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'">Close</a></div>
    <div id="fade" class="black_overlay"></div></td>
  </tr>
</table>


<!--
    </div>
    <div class = "buttons">
      <p><a href="donation.php" target="view_php" class="myButton">DONATION</a>
      <a href="fundraiser.php" target="view_php" class="myButton">FUNDRAISER</a></p>
			
    </div>
-->
    
    
</html>