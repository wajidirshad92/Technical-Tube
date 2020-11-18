<?php
if(isset($_POST["btn_contactus"]))
{
	$name=$_POST["txtname"];
	$institute=$_POST["txtinstitute"];
	$mobile=$_POST["txtmobile"];
	$subject=$_POST["txtsubject"];
	$userEmail=$_POST["txtemail"];
	$msg = "<html><body>";
$msg .= "<h3 style='color:#f40;'>Name: ".$name."</h3>";
$msg .= "<h3 style='color:#f40;'>Email: ".$userEmail."</h3>";
$msg .= "<h3 style='color:#f40;'>Institute: ".$institute."</h3>";
$msg .= "<h3 style='color:#f40;'>Mobile: ".$mobile."</h3>";
$msg .= "<p>".$_POST["txtmessage"]."</p>";
$msg .= "</body></html>";
$headers="From:no-reply.com\r\n" ;
	$headers .= "Content-type: text/html\r\n";
			$msg=wordwrap($msg,70);
			$to="wajidirshad92@gmail.com";
			mail($to,$subject,$msg,$headers);
			header('location:contact-us.php?email='.$to);
}
?>
<html>
<head>
<title>Contact us</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
</head>
<body>
<section class="hero is-info">
<div class="box">
<div class="column is-6 is-offset-2" id="contact-us">
	  <h1 class="title has-text-centered has-text-black"><i class="fas fa-envelope"></i> &nbsp;Contact Us</h1>
<form action="contact-us.php" method="post"> 
<div class="columns">
<div class="column">
<input type="text" class="input is-medium is-info" name="txtname" placeholder="Your Name" />
</div>
<div class="column">
<input type="text" class="input is-medium is-info" name="txtinstitute" placeholder="Your Institute Name" />
</div>
</div>
<div class="columns">
<div class="column">
<input type="text" class="input is-medium is-info" name="txtmobile" placeholder="Your Mobile Number" />
</div>
<div class="column">
<input type="text" class="input is-medium is-info" name="txtemail" placeholder="Your Email" />
</div>
</div>
<div class="columns">
<div class="column">
<input type="text" class="input is-medium is-info" name="txtsubject" placeholder="Subject" />
</div>
</div>
<div class="columns">
<div class="column">
<textarea class="textarea is-medium is-info" name="txtmessage" placeholder="Your Message" cols="6" rows="6"></textarea>
</div>
</div>
<div class="column is-offset-4">
<input type="submit" class="button is-link is-large" name="btn_contactus" id="btn_contactus" value="Send Message" />
</div>
</form>
</div>
</div>
</section>
</body>
</html>
