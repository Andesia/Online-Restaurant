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
	<title>Rameyeon | Profile</title>
	<!--Ion Icons-->
	<link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
	<!--Google Fonts-->
	<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Aldrich&display=swap" rel="stylesheet">
	<!--Our own stylesheet-->
	<link rel="stylesheet" type="text/css" href="styles.css">
	<!-- table css -->
	<link rel="stylesheet" type="text/css" href="registration.css"> 
	<!-- <link rel="stylesheet" type="text/css" href="login.php"> -->
</head>

<body class = "class-for-table" >
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
					<a href="#" class="nav-link">About</a>
				</li>
				<li class="nav-item">
					<a href="view_food.php" class="nav-link">Menu</a>
				</li>				
			
				<li class="nav-item">
					<a href="logout.php" class="nav-link">Logout</a>
				</li>

			</ul>
			</nav>
		</div>
	</header>

	<div class="filter">
		
	</div style=" margin-top: 30px ">
		
		<p class="username">
			<?php
			echo $user;
			?>
		</p>
	</div>

	<table>
		<tr>
			<th>First Name</th>
			<th>Second Name</th>
			<th>User type</th>
			<th>Username</th>
			<th>Email</th>
		</tr>

		<?php
		// require_once("connect.php"); 
		// if(mysqli_query($link, $sql)){
	echo "<br><br>";

	$result1 = mysqli_query($link, "SELECT  FirstName, SecondName, UserType, Username, Password, Email FROM users WHERE UserId= UserId")or die($link->error);

	foreach($result1 as $row) {
	
	$first_name= $row["FirstName"];
	$second_name = $row["SecondName"];
	$Type = $row["UserType"];
	$Username = $row["Username"];
	$Password=$row["Password"];
	$Email_address =$row["Email"];

	echo "<tr>
		<td>".$first_name."</td> 
		<td>".$second_name."</td>  
		<td>".$Type."</td> 
		<td>".$Username."</td>
		<td>".$Email_address."</td> 
		
		</tr>";

	}
	
	echo "</table>";

	$link->close();
		 ?>
		  
	<script type="text/javascript" src="scripts.js"></script>
</body>
</html>