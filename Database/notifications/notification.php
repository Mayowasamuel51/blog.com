<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
		
		<title>Yor</title>
	</head>
	<body>
		<style>
			body{
				background-image: linear-gradient(to right top, #d16ba5, #a45e99, #7a5286, #53436f, #333454, #2e3d5c, #2a4562, #264d67, #2a7591, #2ba0b8, #3acdd8, #5ffbf1);
			}
		</style>
		
		<?php
		session_start();
		$current_user = $_SESSION['email'];
		if($current_user){
			include $_SERVER['DOCUMENT_ROOT'].'\blog.com/Database/connection/conn.php';
			$stmt =   mysqli_stmt_init($conn);
			
			$query_base = " SELECT * from messages where email ='".$current_user."'  ";
			$mysqli_query = mysqli_query($conn,$query_base);
			while($row_data =  mysqli_fetch_assoc($mysqli_query)){
				echo  "
				<div class='columns'>
						<div class='column is-offset-3 is-6 card'>
								<div class='card-header'><div class='card-header-title'> Message from : ".$row_data['sentby']."   </div>  </div>
								<div class='card-content'>
									".$row_data['message']."
								</div>
						</div>
				</div>
				";
				
				
			}
		}?>
	</body>
</html>