<?php
session_start();
if (isset($_POST['note']) && isset($_POST['email'])) {
	include $_SERVER['DOCUMENT_ROOT'].'\blog.com/Database/connection/conn.php';
	
	$sendtext  =   mysqli_real_escape_string($conn, $_POST['note']);
	$sendEmail =   mysqli_real_escape_string($conn, $_POST['email']);
	$current_user = $_SESSION['email'];
	
	$stmt = mysqli_stmt_init($conn);
	$checking_email_exist =" SELECT email FROM myblog where email  = ? ";
	if(!mysqli_stmt_prepare($stmt,$checking_email_exist)) {
		echo "ERROR WITH Database";
	}
	mysqli_stmt_bind_param($stmt,'s',$sendEmail);
	mysqli_stmt_execute($stmt);
	$resultFromChecking = mysqli_stmt_get_result($stmt);
	
	
	$row_user  =    mysqli_num_rows($resultFromChecking);
	if ( $row_user >  0  ) {
		
		$sendMessaging = "INSERT INTO messages(email,message,sentby) VALUES(?,?,?)";
		if (!mysqli_stmt_prepare($stmt,$sendMessaging)) {
			echo "ERROR WITH DATABASE ";
		}
		mysqli_stmt_bind_param($stmt,'sss',$sendEmail,$sendtext,$current_user);
		mysqli_stmt_execute($stmt);
		echo "
			<div class='mt-5 notification has-background-success has-text-weight-semibold mb-4'  >
						Message Devilverd
			</div>";
		mysqli_stmt_close($stmt);
		
	}else{
		echo "<div class='mt-5 notification has-background-warning has-text-weight-semibold mb-4'>
						THIS USER IS NOT FOUND
		</div>";
	}
}