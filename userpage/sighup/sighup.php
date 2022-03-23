<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Main Page</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
	</head>
	<body>
		<div class="columns " style="position:relative; top: 90px;">
		<div class="column is-offset-4 is-4 box" style="position:relative; top:0px">
			<form action="\blog.com/Database/store/sighup.php" method="POST" id="forms">
				
				<!-- <div class="box"> -->
				<h1 class="title has-text-centered ">Blogs.com</h1>
				<hr class="login-hr">
				<div class="error"></div>
				
				<div class="field  name-field col">
					<div class="shift"></div>
					
					<p class="control  ">
						<label class="has-text-weight-semibold has-text-black is-size-5 ml-6">Username</label>
						<input class="input username column is-7 is-rounded ml-6 mt-3" type="text" placeholder="FirstName" name="names">
						
						
					</p>
				</div>
				
				<div class="field">
					<p class="control ">
						<label class="has-text-weight-semibold has-text-black is-size-5 pl-6">Emaill</label>
						<input class="input email column is-7 is-rounded ml-6 mt-3" type="email" placeholder="Email" name="email">
						
						
					</p>
				</div>
				<div class="field">
					<p class="control ">
						<label class="has-text-weight-semibold has-text-black is-size-5 pl-6">Password</label>
						<input class="input  password column is-7 is-rounded ml-6 mt-3" type="password" name="password" placeholder="Password">
						
					</p>
				</div>
				
				<div class="field">
					<p class="control">
						
						
						<button class="btn button is-primary has-text-weight-semibold py-4 btn is-normal is-fullwidth" type="submit" name="submit">
						Create Account
						</button>	
					</p>

						
				</div>
				<div class="has-text-weight-semibold has-text-centered ">
					<a href="\blog.com/userpage/login/loginuser.php" class="is-size-5">Login </a>
				</div>
				
				<!-- </div> -->
			</form>
		</div>
	</div>

	<script src="jquery-3.6.0.min.js"></script>
	<script src="\blog.com/userpage/script/usersighup.js"></script>






	</body>
	</html>