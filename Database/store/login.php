<?php
if( isset($_POST['email'])   && isset($_POST['password'] )){
		include $_SERVER['DOCUMENT_ROOT'].'\blog.com/Database/connection/conn.php';
		$pass    =  mysqli_real_escape_string($conn, $_POST['password']);
		$email =   mysqli_real_escape_string($conn, $_POST['email']);
		
		$stmt = mysqli_stmt_init($conn);
	
		$query_base = "SELECT *  from myblog where email = ? || password  = ? ";
		if(!mysqli_stmt_prepare($stmt, $query_base)){
				header('location:\blog.com/userpage/login?error with Database');
		}else{
				mysqli_stmt_bind_param($stmt,'ss',$email,$pass);
				mysqli_stmt_execute($stmt);
				$resultFrombase = mysqli_stmt_get_result($stmt);
				$count_user = mysqli_num_rows($resultFrombase);
				if($count_user >0){
					$row_data = mysqli_fetch_assoc($resultFrombase);
					$password_checking = password_verify($pass,$row_data['password'] );
					if($password_checking === false){
						echo "
						<div class='notification has-background-warning has-text-weight-semibold mb-4'  >
							PASSWORD NOT CORRECT
						</div>
						";
						}elseif($password_checking === true){
								session_start();
								$_SESSION['username'] = $row_data['username'];
								$_SESSION['email'] = $row_data['email'];
								$_SESSION['password'] = $row_data['password'];
								echo "<a class='has-text-weight-semibold' href='\blog.com/dashboard/userdash.php'>Enter Your Dashboard</a>";
								exit();
						}
						}else{
								echo "
										<div class='notification has-background-warning has-text-weight-semibold mb-4'  >
												THIS USER IS NOT FOUND
										</div>
								";
						}
				
		}
	
}






















// if(isset($_POST['email']) && isset($_POST['password'])){
	// 	include $_SERVER['DOCUMENT_ROOT'].'\blog.com/Database/connection/conn.php';
	// 	$email = mysqli_real_escape_string($conn, $_POST['email']);
	// 	$pass =mysqli_real_escape_string($conn, $_POST['password']);
	
		// 		$stmt = mysqli_stmt_init($conn);
		// 		$sql_statement = "SELECT * FROM myblog WHERE  email = ? or username = ?  ";
		// 		if(!mysqli_stmt_prepare($stmt,$sql_statement)){
			// 			header('location:\blog.com/userpage/login?error with Database');
			// 			exit();
		// 		}else{
			// 			mysqli_stmt_bind_param($stmt,'ss',$email,$pass);
			// 			mysqli_stmt_execute($stmt);
			// 			$resultFrombase = mysqli_stmt_get_result($stmt);
			// 			$count_user = mysqli_num_rows($resultFrombase);
			// 			if($count_user >0){
				// 				$row_data = mysqli_fetch_assoc($resultFrombase);
				// 				$password_checking = password_verify($pass,$row_data['password'] );
				// 				if($password_checking === false){
				// 				echo "
				// 				<div class='notification has-background-warning has-text-weight-semibold mb-4'  >
						// 					PASSWORD NOT CORRECT
						
				// 				</div>
				// 				";
				// 				}elseif($password_checking === true){
					// 					session_start();
					// 					$_SESSION['username'] = $row_data['username'];
					// 					$_SESSION['email'] = $row_data['email'];
						// 						$_SESSION['password'] = $row_data['password'];
											// 											echo "<a class='has-text-weight-semibold' href='\blog.com/dashboard/userdash.php'>Enter Your Dashboard</a>";
					// 					// header('location:\jamb/ZBLOG/Dashboard/check.php?');
					// 					exit();
				// 				}
			// 			}else{
				// 				echo "
				// 				<div class='notification has-background-warning has-text-weight-semibold mb-4'  >
						// 					THIS USER IS NOT FOUND
						
				// 				</div>
				// 				";
			// 			}
		// 		}
// }