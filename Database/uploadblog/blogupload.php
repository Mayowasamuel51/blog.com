<?php 
session_start();

if (isset($_POST['author']) && isset($_POST['time']) && isset($_POST['date']) && isset($_POST['titleblog'] ) && isset($_POST['blogcontent']) ) {
	include $_SERVER['DOCUMENT_ROOT'].'\blog.com/Database/connection/conn.php';



	$email = $_SESSION['email'];

	$author =  mysqli_real_escape_string($conn, $_POST['author']);
	$time =  mysqli_real_escape_string($conn, $_POST['time']);
	$date =  mysqli_real_escape_string($conn, $_POST['date']);
	$blogcontent =  mysqli_real_escape_string($conn, $_POST['blogcontent']);
	$titleblog  =  mysqli_real_escape_string($conn, $_POST['titleblog']);



	$stmt = mysqli_stmt_init($conn);

	$insert_blog_content = "INSERT INTO uploadblog(email,blogtitle,time,date,blogcontent,author)
	VALUES(?,?,?,?,?,?)";
	if (!mysqli_stmt_prepare($stmt, $insert_blog_content)) {
		echo "ERROR WITH Database";
	}
	

		mysqli_stmt_bind_param($stmt,'ssssss',$email, $titleblog,$time,$date,$blogcontent,$author);
		mysqli_stmt_execute($stmt);
		echo "<div class='title'>
				<h3>YOUR BLOG  HAS BEEN UPLOADED</h3>
		</div";



	














}