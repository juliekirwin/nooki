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
	static $db = "nooki";

	$con = mysqli_connect($server,$username,$pass,$db);
	
	$result = mysqli_query($con,"SELECT username, password, image_url FROM account");
	
	if($result === FALSE) {
    die(mysql_error()); 
}
	
	while($row = mysqli_fetch_array($result))
	{	
		echo '<img src="'.$row{'image_url'}.'"width=50 height=50></img>';
		echo '<h1>'.$row{'username'}.'</h1>';
	}
	echo '<p>Welcome back.</p>';
		
	mysqli_close($con);
}

?>
