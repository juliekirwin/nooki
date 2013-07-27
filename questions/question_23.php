<?php require_once("user/models/config.php");
if (!securePage($_SERVER["PHP_SELF"])){die();} ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="styles/style.css">
<?php INCLUDE "functions.php"; 
	  INCLUDE "header.php";
?>
	  
</head>
<body>
		<div class="banner">
			<?php Echo_Header(); ?>	
		</div>
		
</body>
</html>
";