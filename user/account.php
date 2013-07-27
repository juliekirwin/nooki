<?php
/*
UserCake Version: 2.0.2
http://usercake.com
*/

require_once("models/config.php");
if (!securePage($_SERVER['PHP_SELF'])){die();}

?> 
<html>
<head>
<link rel="stylesheet" type="text/css" href="../styles/style.css">
<?php INCLUDE '../functions.php'; 
	  INCLUDE '../header.php';
?>
	  
</head>
<body>
		<div class="banner">
			<?php Echo_Header(); ?>	
		</div>
<?php



include("left-nav.php");

echo "
</div>
<div class='content'>
<h1>Hey, $loggedInUser->displayname.</h1>
<p>This is an example secure page designed to demonstrate some of the basic features of UserCake. Just so you know, your title at the moment is $loggedInUser->title, and that can be changed in the admin panel. You registered this account on</p> " . date("M d, Y", $loggedInUser->signupTimeStamp()) . ".
</div>
</body>
</html>";

?>
