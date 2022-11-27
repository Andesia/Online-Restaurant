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
	<title>Rameyeon | View Food</title>
	<!--Ion Icons-->
	<link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
	<!--Google Fonts-->
	<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Aldrich&display=swap" rel="stylesheet">
	<!--Our own stylesheet-->
	<link rel="stylesheet" type="text/css" href="styles.css">
	<!-- table css -->
	<link rel="stylesheet" type="text/css" href="registration.css"> 
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
					<a href="#" class="nav-link">Menu</a>
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

	<div class="filter">
		
	</div>

	<div>
		
	<p class="username">
			<?php
			echo $user;
		?>
	</p>  

	</div>


	<table>
		<tr>
			<th>Image</th>
			<th>Name</th>
			<th>Type</th>
			<th>Price</th>
			<th>Action</th>

		</tr>

		<?php
		
	echo "<br><br>";

	$result1 = mysqli_query($link, "SELECT originalname, file_path, food_name, food_type, price FROM product")or die($link->error);
    
	foreach($result1 as $row) {
    $new_file_name= $row["file_path"];
    $foodname= $row["food_name"];
	$foodtype = $row["food_type"];
	$foodprice = $row["price"];

		echo "<tr>
		<td><div class='foodImage'><img src='images/".$new_file_name."' height=20 width= 20 ></div>
		</td> 
		<td>".$foodname."</td> 
		<td>".$foodtype."</td>  
		<td>".$foodprice."</td> 
		<td>
		<p><input type= 'submit' name= 'order' value= 'Order' ></p>
		</td>
		
		</tr>";
	}
	echo "</table>";	


$link->close();
		 ?>
		 <div class="image">
	<script type="text/javascript" src="scripts.js"></script>
</body>
</html>