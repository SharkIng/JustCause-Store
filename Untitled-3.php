<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="textContainer.css" rel="stylesheet" type="text/css" />
<script type="text/javascript"     src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>
<div id="menu_about">
<a class="link" href="#about" data-link="first">
    &nbsp;&nbsp; Donation
</a> &#8226; 
<a class="link" href="#about" data-link="second">Fund</a> 
</div>

<div id="pages_about" class="textContainer_about">
<div class="textWord_about" data-link="first">
 <p>donation</p>
 </div>
<div class="textWord_about" data-link="second">
  <p>fund</p>
</div>
</div>
</body>

<script type="text/javascript">
$('.textWord_about').hide();

$('.link').click(function() {
    $('.textWord_about').hide();       
    $('.textWord_about[data-link=' + $(this).data('link') + ']').fadeIn({
        width: '200px'
    }, 300);
});
</script>


</html>