<?php
//hammer
//fetchaccount.php

	require_once("user/models/config.php");
	if (!securePage($_SERVER['PHP_SELF'])){die();}
if(isUserLoggedIn())
{
	$server = "localhost";
	$username = "root";
	$pass = "";
	$db = "usercake";
	
	$con = mysqli_connect($server,$username,$pass,$db);
	
	$result = mysqli_query($con,"SELECT image FROM uc_users WHERE user_name = '".$loggedInUser->username."'");
	
	if($result === FALSE) {
    die(mysql_error()); 
}
	
	while($row = mysqli_fetch_array($result))
	{	
		echo '<img src="'.$row{'image'}.'"width=50 height=50></img>';
		echo '<h1>'.$loggedInUser->displayname.'</h1>';
	}
	echo '<p>Welcome back.<br /><a href="user/logout.php">Logout</a></p>';
	mysqli_close($con);
}
else
{
	echo '<img src="images/logo.png "width=50 height=50></img>';
		echo '<h1>Guest</h1>';
	echo '<p>Welcome.<br /><a href="user/login.php">Login</a></p>';
}


?>