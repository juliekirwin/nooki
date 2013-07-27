<?php
//Hammer 
//post_question.php

require_once("user/models/config.php");
if (!securePage($_SERVER['PHP_SELF'])){die();}

$new_question = $_POST['question'];
$url = "";
$addedShit = '<?php require_once("../user/models/config.php");
if (!securePage($_SERVER["PHP_SELF"])){die();} ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../styles/style.css">
<?php INCLUDE "../functions.php"; 
	  INCLUDE "../header.php";
?>
	  
</head>
<body>
		<div class="banner">
			<?php Echo_Header(); ?>	
		</div>
		<div class="content">
			
		</div>

		<div class="clearfooter">
		</div>
		
	</div>
	<div class="footer">
		<p>footer</p>
	</div>
</body>
</html>';
if($new_question != "")
{
	$server = "localhost";
	$username = "root";
	$pass = "";
	$db = "nooki";

	$con = mysqli_connect($server,$username,$pass,$db);
	if(IsUserLoggedIn())
	$result = mysqli_query($con,"INSERT into question(username,question,url) values('".$loggedInUser->displayname."','".$new_question."')",$url);
	Else
	$result = mysqli_query($con,"INSERT into question(username,question) values('Guest','".$new_question."')");
	
	if($result === FALSE) {
    die(mysql_error()); 
	}
	$result = mysqli_query($con,"SELECT * from question ORDER BY id desc limit 1;");
	$row = mysqli_fetch_array($result);
	$url = "questions/question_".(string)$row{'id'}.".php";
	$file = fopen("questions/question_".$url,"x");
	file_put_contents((string)$url,$addedShit);
	$result = mysqli_query($con,"UPDATE question SET url='".$url."' WHERE id='".$row{'id'}."';");
	
	mysqli_close($con);

	header('Location: '."index.php");
	
	
	

}
?>