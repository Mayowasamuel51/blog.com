<!-- ?php
session_start();
?> -->
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login - Free Bulma template</title>
	<link href="https://fonts.googleapis.com/css?family=Questrial&display=swap" rel="stylesheet">
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
	<link rel="stylesheet" type="text/css" href="\jamb/fontawesome-free-6.0.0-beta3-web/css/all.css">
	 <link rel="stylesheet" href="/jamb/node_modules/bulma-extensions/bulma-pageloader/dist/css/bulma-pageloader.min.css">
</head>
<body>

	<style>
		body{
			margin-bottom: 400px;
		}
	</style>
	<div class="show"></div>
	
	<div class="columns ">
		<div class="column is-offset-4 is-5">
			<!-- <form action="backendsigh.php" method="POST" id="forms">
				
				
				<h1 class="title has-text-centered ">Past_Qusetions.com</h1>
				 -->
				
				<!-- <h2>Sigh Up</h2> -
				<p>please fill this from </p>
				<div class="field  name-field">
					<div class="shift"></div>
					<div class="shift"></div>
					<p class="control has-i.cons-left has-icons-right">
						<label class="has-text-weight-semibold has-text-black is-size-5">First Name</label>
						<input class="input FirstName " type="text" placeholder="FirstName" name="names">
						<span class="icon is-small is-left pt-6">
							<i class="fas fa-user"></i>
						</span>
						
					</p>
				</div>
				<div class="field">
					<p class="control has-icons-left has-icons-right">
						<label class="has-text-weight-semibold has-text-black is-size-5">Phone</label>
						<input class="input Phone" type="text" placeholder="Phone" name="Phone">
						<span class="icon is-small is-left pt-6">
							<i class="fas fa-phone-alt"></i>
						</span>
						
					</p>
				</div>
				<div class="field">
					<p class="control has-icons-left has-icons-right">
						<label class="has-text-weight-semibold has-text-black is-size-5">Emaill</label>
						<input class="input email " type="email" placeholder="Email" name="email">
						<span class="icon is-small is-left pt-6">
							<i class="fas fa-envelope"></i>
						</span>
						
					</p>
				</div>
				<div class="field">
					<p class="control has-icons-left">
						<label class="has-text-weight-semibold has-text-black is-size-5">Password</label>
						<input class="input has-icons-left password" type="password" name="password" placeholder="Password">
						<span class="icon is-small is-left pt-6">
							<i class="fas fa-lock"></i>
						</span>
					</p>
				</div>
				
				<div class="field">
					<p class="control">
						<input type="submit" value="submit" class="button is-primary">
						
						<button class="btn button is-primary has-text-weight-semibold py-4 btn" type="submit" name="">
						Create Account
						</button>
						<a href="login.php" class="button btn is-dark ml-6 has-text-weight-semibold py-4" formaction="login.php">
							Login
						</a>
					</p>
				</div>
			</form>
		</div>
	</div>-->
<!-- <div class="pageloader is-active has-background-dark "><span class="title">Loading Please wait </span></div>
 -->

	<div class="load"></div>

<!-- 
	<form action="backendsigh.php" method="post">
		<input type="text" name="name" class="item"><br>
		<input type="submit" value="submit" class="submit">

		<button class="btn">load in  data</button>

	</form -->

	<!-- <button class="btn">load data</button> -->




	<form action="backendsigh.php" method="post">

		<h1 class="title">  RETRIVE DATA </h1>

		<input type="text" name="name" class="item"><br>

		<!-- <input type="submit" value="submit" class="submit"> -->,
		<br><br><br><br>

	<button id="finds" >retrive data </button> 

	</form>


	<!-- <button id="finds" type="submit">retrive data </button> -->


<button class="extx">extarct </button>

	<script src="jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="work.js">

	</script>
	
<!-- Code injected by live-server -->
<script type="text/javascript">
	// <![CDATA[  <-- For SVG support
	
	// ]]>
</script></body>
</html>