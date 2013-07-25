<?php


function Echo_Questions()
{
	static $server = "localhost";
	static $username = "root";
	static $pass = "";
	static $db = "nooki";
	
	$con = mysql_connect($server,$username,$pass);
	mysql_select_db($db,$con);
	$result = mysql_query("SELECT question, username, time_posted FROM question");
	while($row = mysql_fetch_array($result))
	{
		echo '<div>';
		echo '<h2>'.$row{'username'}.'</h2>';
		echo '<p>'.$row{'question'}.'</p>';
		echo '<br />'.$row{'time_posted'}.'<br />';
		echo '</div>';
		echo '<input type="submit" id="submit" value="Answer" class="submitbutton" /><br />';
		echo "-------------------------------------------------------------------------------------------";
	}
	
}

function fetch_account()
{
	static $server = "localhost";
	static $username = "root";
	static $pass = "";
	static $db = "nooki";

	$con = mysql_connect($server,$username,$pass);
	mysql_select_db($db,$con);
	
	
	$result = mysql_query("SELECT username, password, image_url FROM account");
	
	while($row = mysql_fetch_array($result))
	{	
		echo '<img src="'.$row{'image_url'}.'"width=50 height=50></img>';
		echo '<h1>'.$row{'username'}.'</h1>';
	}
	echo '<p>Welcome back.</p>';
		
	mysql_close($con);
}

?>
