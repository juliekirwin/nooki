<?php
//Hammer 
//post_question.php

require_once("user/models/config.php");
if (!securePage($_SERVER['PHP_SELF'])){die();}

$new_question = $_POST['question'];

if($new_question != "")
{

	$server = "localhost";
	$username = "root";
	$pass = "";
	$db = "nooki";

	$con = mysqli_connect($server,$username,$pass,$db);

	$result = mysqli_query($con,"INSERT into question(username,question) values('".$loggedInUser->displayname."','".$new_question."')");
	
	if($result === FALSE) {
    die(mysql_error()); 
	}
	
	mysqli_close($con);

	header('Location: '."index.php");
	

}
?>