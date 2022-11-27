<?php 
session_start();
$user=$_SESSION['user_id'];
require_once("connect.php"); 
 ?> 

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0,
		  minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Rameyeon | Add Food</title>
	<!--Ion Icons-->
	<link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
	<!--Google Fonts-->
	<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Aldrich&display=swap" rel="stylesheet">
	<!--Our own stylesheet-->
	<link rel="stylesheet" href="styles.css">

</head>

<body class = "class-for-Products" >
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
					<a href="homepage.php" class="nav-link current">Home</a>
				</li>
				<li class="nav-item">
					<a href="view_food.php" class="nav-link">Menu</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">About</a>
				</li>
				<li class="nav-item">
					<a href="logout.php" class="nav-link">Logout</a>
				</li>
					

			</ul>
			</nav>
		</div>
	</header>

	<form action="process_upload.php" method="post" enctype="multipart/form-data">
	<fieldset>

		<div>		
		<p class="username">
			<?php
			echo $user;
		?> 
		</p>  
		</div>
		
		
		<div class= "register-box">
			<h1>PRODUCTS</h1>
		</div>

		<div class="text-box">
			<label for= "foodimage">Food Image</label>
			<input type= "file" name= "food-image" required="true" id=foodimage>
		</div>

		<div class="text-box">
			<label for= "foodname"> Food name: </label>
			<input type= "text" name = "FoodName" id = "foodname">
		</div>
		
		<div class="text-box">
		Foodtype: <br>
		<label for= "type1"> Healthy </label> 
		<input type="radio" name= "FoodType" id= "type1" value= "healthy">	
		<label for= "type2"> Drink </label> 
		<input type="radio" name= "FoodType" id= "type2" value="drinks">
		<label for= "type3"> Fast food </label> 
		<input type="radio" name= "FoodType" id= "type3" value="quick">  
		</div>

		<div class="text-box">
			<label for= "FoodPrice"> Price: </label>
			<input type= "text", name = "FoodPrice" id = "username">
		</div>
		
		<div>
			<input type= "submit" name= "submitImage" value= "SAVE">
		</div>

	</fieldset>


	<script type="text/javascript" src="scripts.js"></script>
</body>
</html>