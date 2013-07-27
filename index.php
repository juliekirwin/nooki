<html>
<head>
<link rel="stylesheet" type="text/css" href="styles/style.css">
<?php INCLUDE 'functions.php'; 
	  INCLUDE 'header.php';
?>
	  
</head>
<body>
		<div class="banner">
			<?php Echo_Header(); ?>	
		</div>
		
	<div class="container">
		<div class="accountcontainer">
		<?php fetch_account() ?>
		</div>
		<div class="content">
			<h1>Top Questions</h1>
			<?php Echo_Questions(); ?>
		</div>

		<div class="clearfooter">
		</div>
		
	</div>
	<div class="footer">
		<p>footer</p>
	</div>

</body>
</html>