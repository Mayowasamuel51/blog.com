
<!Doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Main Page</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
	</head>
	<body>
		<style>
			body{
				/*background-color: #5B616A;*/
				height: 180vh;
				/*margin-bottom: 100px;*/
			}
			.columns{
				position: relative;
				top: 70px;
				/*background-color: #5B616A;*/
			}
			.columns p{
				margin-top: 4px;
			}
		</style>
		
		<div  class="columns col">
			<div class="column is-offset-3 is-6 box ">
				<div  class="spinner"></div>
				<div class="final"></div>
				<div class="shift"></div>
				<h1 class="has-text-weight-semibold has-text-centered is-size-5 pb-5"> Blogs.com</h1>
				<form class="for" autocomplete="yes"  method="POST"  action="\blog.com/Database/store/login.php">
					
					<p for=""class="has-text-weight-semibold">Email</p>
					<input type="text"  class="input  mt-4" id="email" placeholder="Email" >
					<span class="span"></span>
					
					
					
					<p class="has-text-weight-semibold pt-5 " >Password</p>
					<input class="input  mt-4" type="password" id="password" placeholder="Password" id="nam" >
					
					<div class="field mt-5">
						<p class="control ">
							<button type="submit" class="has-text-weight-semibold button is-success is-fullwidth btn">
							Login
							</button>
						</p>
					</div>
					<div class="has-text-weight-semibold has-text-centered ">
					<a href="\blog.com/userpage/sighup/sighup.php" class="is-size-5">Register </a>
				</div>
				</form>
			</div>
		</div>
		<!-- <button type="submit" class="button ext" >ext </button> -->
		<script src="jquery-3.6.0.min.js"></script>
		<script src="../script/userlogin.js"></script>
		<!--window.location.replace("http://localhost/jamb/Dashboard/-->
	</body>
</html>