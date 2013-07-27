<?php
//hammer
//fetchaccount.php

	require_once("user/models/config.php");
	if (!securePage($_SERVER['PHP_SELF'])){die();}
	
	static $server = "localhost";
	static $username = "root";
	static $pass = "";
	static $db = "usercake";
	
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
	echo '<p>Welcome back.<br /><a href="user/login.php">Login</a></p>';
	mysqli_close($con);

?>