<?php 
	include $_SERVER['DOCUMENT_ROOT'].'\blog.com/Database/connection/conn.php';

$username = 'olas';

$selectAll = "SELECT  username from myblog where username = 'ola'  ";
// $stmt = mysqli_stmt_init($conn);
// mysqli_stmt_bind_param($stmt,'s',$username);
// mysqli_execute($stmt);
// $get_data = mysqli_stmt_get_result($stmt);

$query_base = mysqli_query($conn,$selectAll);

while ($row_data =mysqli_fetch_assoc($query_base)) {
	 // echo $row_data['username'];
	
	 
}



























if(isset($_POST['email']) && isset($_POST['username'])  && isset($_POST['pass'])){
	include $_SERVER['DOCUMENT_ROOT'].'\blog.com/Database/connection/conn.php';


	$username =trim( mysqli_real_escape_string($conn, $_POST['username']));
	$email =trim( mysqli_real_escape_string($conn, $_POST['email']));
	$password =trim( mysqli_real_escape_string($conn, $_POST['pass']));




	$stmt = mysqli_stmt_init($conn);
	
	$exist_user = "SELECT * FROM myblog where   email = ? || username = ? ";

	if(!mysqli_stmt_prepare($stmt, $exist_user)){
		echo "ERROR WITH THE Database";
	}
		mysqli_stmt_bind_param($stmt, 'ss',$email,$username);
		mysqli_stmt_execute($stmt);
		$resultFrombase =   mysqli_stmt_get_result($stmt);

		$find_exist_user =  mysqli_num_rows($resultFrombase);
		if ($find_exist_user > 0 ) {
			echo "<div class='notification has-background-warning has-text-weight-semibold mb-4'  >
					THIS USER IS ALREADY REGISTED
				</div>";

		}else{
			$insert_user = "INSERT INTO myblog (email,username,password) VALUES(?,?,?)";
			if (!mysqli_stmt_prepare($stmt, $insert_user)) {
				echo "ERROR WITH THE Database";
			}

			$hash_password = password_hash($password,PASSWORD_DEFAULT);
			mysqli_stmt_bind_param($stmt,'sss',$email,$username,$hash_password);
			mysqli_stmt_execute($stmt);
			echo " 
				<div class=' has-background-success has-text-weight-semibold is-size-4 is-4'>
				<h1>Your Account has been Created Procced to login  </h1>
				</div>
    		";


		}
}
