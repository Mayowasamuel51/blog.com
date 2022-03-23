<?php 
session_start();

if ( isset($_POST['time']) && isset($_POST['date']) && isset($_POST['storytitle'] ) && isset($_POST['storycontent']) ) {
	include $_SERVER['DOCUMENT_ROOT'].'\blog.com/Database/connection/conn.php';



	$email = $_SESSION['email'];

	
	$time =  mysqli_real_escape_string($conn, $_POST['time']);
	$date =  mysqli_real_escape_string($conn, $_POST['date']);
	$storycontent =  mysqli_real_escape_string($conn, $_POST['storycontent']);
	$storytitle  =  mysqli_real_escape_string($conn, $_POST['storytitle']);



	$stmt = mysqli_stmt_init($conn);

	$insert_story_content = "INSERT INTO uploadstory(email,storytitle,time,date,storycontent)
	VALUES(?,?,?,?,?)";
	if (!mysqli_stmt_prepare($stmt, $insert_story_content)) {
		echo "ERROR WITH Database";
	}
	

		mysqli_stmt_bind_param($stmt,'sssss',$email, $storytitle,$time,$date,$storycontent,);
		mysqli_stmt_execute($stmt);
		echo "<div class='title'>
				<h3>YOUR STORY  HAS BEEN UPLOADED</h3>
		</div";



	














}