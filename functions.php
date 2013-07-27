<?php


function Echo_Questions()
{
	static $server = "localhost";
	static $username = "root";
	static $pass = "";
	static $db = "nooki";
	
	$con = mysqli_connect($server,$username,$pass,$db);
	$result = mysqli_query($con,"SELECT question, username, time_posted FROM question");
	
	if($result === FALSE) {
    die(mysqli_error()); 
	}
	
	while($row = mysqli_fetch_array($result))
	{
		echo '<div>';
		echo '<h2>'.$row{'username'}.'</h2>';
		echo '<p>'.$row{'question'}.'</p>';
		echo '<br />'.$row{'time_posted'}.'<br />';
		echo '</div>';
		echo '<input type="submit" id="submit" value="Answer" class="submitbutton" /><br />';
		echo "-------------------------------------------------------------------------------------------";
	}
	mysqli_close($con);
}

function fetch_account()
{
	static $server = "localhost";
	static $username = "root";
	static $pass = "";
	static $db = "usercake";

	$con = mysqli_connect($server,$username,$pass,$db);
	
	$result = mysqli_query($con,"SELECT display_name, image FROM uc_users");
	
	if($result === FALSE) {
    die(mysql_error()); 
}
	
	while($row = mysqli_fetch_array($result))
	{	
		echo '<img src="'.$row{'image'}.'"width=50 height=50></img>';
		echo '<h1>'.$row{'display_name'}.'</h1>';
	}
	echo '<p>Welcome back.</p>';
	echo '<a href="user/login.php">Login</a>';
	mysqli_close($con);
}

?>
