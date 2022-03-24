<?php 
session_start();
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CHeck in</title>
</head>
<body>
	<?php




	if(isset($_SESSION['username']) || isset($_SESSION['email'])){
		echo '<a href="userdash.php">Enter Dashboard</a>';
	}esle{
		echo 
	}


	?>
	
</body>
</html>