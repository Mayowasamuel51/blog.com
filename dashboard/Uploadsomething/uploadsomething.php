<?php 
session_start();

// echo $_SESSION['email'];
?>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Dashboard </title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
		<!-- <link rel="stylesheet" type="text/css" href="fontawesome-free-6.0.0-beta3-web/css/all.css"> -->
	</head>
	<body>
		<style>
			*{
				margin: 0;
				padding: 0;
			}
			body{
				/*background-image: linear-gradient(to left bottom, #18273f, #12233f, #0c1f3e, #051b3e, #00173d);*/
				background-image: linear-gradient(to left bottom, #09111d, #071325, #05152d, #021635, #00173d);
				/*height:	 130vh;*/
			}
			.topper{
				position: relative;
				top: 40px;
			}
		</style>
		<form action="\blog.com/Database/uploadblog/blogupload.php" method="post" >
			<div class="columns topper ">
				<div class="card column is-offset-2 is-8 for">
					<span class="span"></span>
					<div class="shift"></div>
					<div class="card-header"><header class="card-header-title pl-5">Upload Blog </header></div>
					<div class="card-content">
						<div class="is-flex is-flexible">
							<div class="mt-3">
								<p class="has-text-weight-semibold">Blog Title</p>
								<input type="text"class="input mt-5" id="blogTitle">
							</div>
							<div class="ml-6 column">
								<p class="has-text-weight-semibold">Time of Uploading</p>
								<input type="time"class="input mt-5" id="time">
							</div>
						</div>
						<div class="is-flex is-flexible mt-3">
							<div class="mt-3">
								<p class="has-text-weight-semibold">Date</p>
								<input type="date"class="input mt-5" id="date">
							</div>
							<div class="ml-6 column ">
								<p class="has-text-weight-semibold pl-4">Name of Author </p>
								<input type="text"class="input mt-5 ml-4" id="author">
							</div>
							
						</div>
						<div class="is-flex is-flexible">
							<p class="has-text-weight-semibold"> public This blog</p>
							<input type="checkbox" name="checkbox " class="checkbox mt-2 ml-3" id="check">
						</div>
						<p class="has-text-weight-semibold mt-3">Blog Content </p>
						<textarea class="textarea content mt-4"id="content" placeholder="10 lines of textarea" rows="5"></textarea>
						<div class="spinner"></div>
						<div class="final has-text-weight-semibold  has-text-grey"></div>
						<button class="submit mt-5 has-text-weight-semibold button is-primary" id="uploadblog">Upload blog</button>
					</div>
				</div>
			</div>
		</form>


		<form action="\blog.com/Database/uploadblog/storyupload.php" method="post" style="margin-top: 120px;">
			<div class="columns mt-5">
				<div class="card column is-offset-2 is-8 fors">
					<span class="spans"></span>
					<div class="shift"></div>
					<div class="card-header"><header class="card-header-title pl-5">Upload Story </header></div>
					<div class="card-content">
						<div class="is-flex is-flexible">
							<div class="mt-3">
								<p class="has-text-weight-semibold">Story Title</p>
								<input type="text"class="input mt-5" id="storytitles">
							</div>
							<div class="ml-6 column">
								<p class="has-text-weight-semibold">Time of Uploading</p>
								<input type="time"class="input mt-5" id="times">
							</div>
						</div>
						<div class="is-flex is-flexible mt-3">
							<div class="">
								<p class="has-text-weight-semibold">Date</p>
								<input type="date"class="input mt-5" id="dates">
							</div>
							
						</div>
						<p class="has-text-weight-semibold mt-3">Story Content </p>
						<textarea class="textarea content mt-3" placeholder="10 lines of textarea" id="storycontent" rows="5"></textarea>
						<div class="spins"></div>
						<div class="story has-text-weight-semibold  has-text-grey"></div>
						<button class="submit mt-5 has-text-weight-semibold button is-dark" id="uploadstory">Upload Story </button>
					</div>
				</div>
			</div>
		</form>
















		<!-- <form action="uploadDatabase/uploadblog.php" method="post" style="margin-top: 120px;">
				<div class="columns  ">
						<div class="column is-6   is-offset-3 col">
								<div class="shift"></div>
								
								<h1  class="has-text-weight-semibold mb-3 ">Upload Blog</h1>
								<p class="has-text-weight-semibold pb-2 pt-1">Blog Title </p>
								<input type="text" placeholder="blog title" class="input title">
								<p class="has-text-weight-semibold pb-2 pt-1">Time of Uploading </p>
								<input type="time" placeholder="blog title" class="input time ">
								<p class="has-text-weight-semibold pb-2 pt-1">Date</p>
								<input type="date" class="input date">
								<p class="has-text-weight-semibold pb-2 pt-1">Blog Content</p>
								<textarea class="textarea content" placeholder="10 lines of textarea" rows="10"></textarea>
							
								<div class="spinner"></div>
								<div class="show"></div>
								<button class="submit mt-5 has-text-weight-semibold button is-primary">finsh blog</button>
						</div>
				</div>
					
		</form> -->
		<!--
		<form action="uploadDatabase/uploadstory.php" method="post">
				<div class="columns mt-6">
						<div class="column is-6   is-offset-3 tops">
								<div class="add"></div>
								<h1  class="has-text-weight-semibold mb-6 ">Upload  Story</h1>
								<p class="has-text-weight-semibold pb-2 pt-1">Story  Title </p>
								<input type="text" placeholder="Story  title" class="input title">
								<p class="has-text-weight-semibold pb-2 pt-1">Time </p>
								<input type="time" placeholder="blog title" class="input time">
								<p class="has-text-weight-semibold pb-2 pt-1 time">Date</p>
								<input type="date" class="input date ">
								<p class="has-text-weight-semibold pb-2 pt-1">Story Content</p>
								<textarea class="textarea content" placeholder="10 lines of textarea" rows="10"></textarea>
								
								<div class="spinner"></div>
								<div class="shows"></div>
								
								<button type="submit" class="submit_story mt-5 has-text-weight-semibold button is-dark">finsh story</button>
						</div>
						
				</div>
					
		</form> -->
		<script src="jquery-3.6.0.min.js"></script>
		<script src="upload.js"></script>
		<script src="uploads.js"></script>
		
	</body>
</html>