<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0,
		  minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Rameyeon | Registration</title>
	<!--Ion Icons-->
	<link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
	<!--Google Fonts-->
	<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Aldrich&display=swap" rel="stylesheet">
	<!--Our own stylesheet-->
	<link rel="stylesheet" href="styles.css">
	<a href="homepage.php"></a>
</head>

<body class = "class-for-Registration" >
	<header>
		<div class= "container">
			<nav>
				<div class="nav-brand">
					<a href="Homepage.php">
						<img src="images/logo.jpg" alt="">
					</a>
				</div>

			<div class="menu-icons open">
				<i class="icon ion-md-menu"></i>
			</div>

			<ul class="nav-list">
				<div class="menu-icons close">
					<i class="icon ion-md-close"></i>
				</div>
				<li class="nav-item">
					<a href="Homepage.php" class="nav-link current">Home</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">Menu</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">Pricing</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">About</a>
				</li>				
			</ul>
			</nav>
		</div>
	</header>

<form action="process_register.php" method="post">
	<fieldset>
		<div class= "register-box">
			<h1>REGISTRATION</h1>
		</div>

		<div class="text-box">
			<label for= "first_name"> First name: </label>
			<input type= "text", name = "fname" id = "first_name">
		</div>

		<div class="text-box">
			<label for= "second_name"> Second name: </label>
			<input type= "text", name = "sname" id = "second_name">
		</div>

		<div class="text-box">
			<label for= "username"> Username: </label>
			<input type= "text", name = "uname" id = "username">
		</div>

		<div class="text-box">
			<label for= "password"> Password: </label>
			<input type= "password", name = "pass" id = "password">
		</div>

		<div class="text-box">
			Type of user: <br>
			<label for= "user1"> Average user </label> <input type="radio" name= "user_type" id= "user1" value= "Average">	
			<label for= "user2"> Contributor </label> <input type="radio" name= "user_type" id= "user2" value="Contributor">
		</div>

		<div class="text-box">
			<label for= "email_add"> Email: </label>
			<input type="text" name= "email_address" id= "email_add">
		</div>
		
		<div>
			<input type= "submit" name= "register" value= "Register">
		</div>

		<div>
			Already have an account?
			<a href="login.php">Login</a>
		</div>
	</fieldset>

	<script type="text/javascript" src="scripts.js"></script>
	
</form>
</body>
</html>

