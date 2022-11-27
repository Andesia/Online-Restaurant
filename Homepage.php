<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0,
		  minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Rameyeon | Home</title>
	<!--Ion Icons-->
	<link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
	<!--Google Fonts-->
	<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Aldrich&display=swap" rel="stylesheet">
	<!--Our own stylesheet-->
	<link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" type="text/css" href="Registration.php">
</head>

<body>
	<header>
		<div class= "container">
			<nav>
				<div class="nav-brand">
					<a href="Homepage.html">
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
					<a href="#" class="nav-link current">Home</a>
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

	<main>
		<section class="hero">
			<div class="container">
				<div class="main-message">

					<h1>RAMEYEON</h1>
					<p>
						We provide top-tier class korean dishes that will leave you craving for more.
						Sign up today and make your order
					</p>
					<div class="cta">
						<a href="Registration.php" class= "btn">Sign up</a>
					</div>
				</div>
			</div>
		</section>

        <section class="experience-outdoors">
            <div class="container">
                <div class="title-heading">
                    <h3>Experience </h3>
                    <h1>the tastiest korean cuisines</h1>
                    <p> Go beyond your culture today and have a taste of our dishes</p>
                </div>

                <div class="activities-grid">
                <!--grid item no 1-->
                    <div class="activities-grid-item healthy">
                    <i class="ion-md-heart outline"></i>
                        <h1>Healthy foods</h1>
                        <p>We provide healthy and nutritious dishes that are good for your heart</p>
					</div>

                    <!--grid item no 2-->
                    <div class="activities-grid-item drinks">
						<i class="ion-md-beer outline"></i>
                        <h1>Drinks</h1>
                        <p>We provide a variety of drinks that will satiate your thirst</p>
					</div>

                    <!--grid item no 3-->
                    <div class="activities-grid-item quick_and_easy">
                    <i class="ion-md-alarm"></i>
                        <h1>Fast foods</h1>
                        <p>We provide quick and easy meals that will save your time on busy days</p>
					</div>
                </div>
            </div>
        </section>

		<section class="testimonials">
			<div class="container">
				<div class="testimonial">
					<div class="testimonial-text-box">
						<p>The dishes are to die for.Truly incomparable </p>
						<i class="ico ion-md-quote"></i>
					</div>

					<div class="testimonial-customer">
						<img src="images/profile-pic.jpg" alt="profile pic">
						<h1>Hyun J.</h1>
					</div>
				</div>
			</div>
		</section>

		<section class="begin Adventure">
			<div class="container">
				<div class="title-heading">
					<h1>Values</h1>
					<h3>we uphold</h3>
					
				</div>


				<div class="adventure-grid">
					<!--adventure grid item 1-->
					<div class="adventure-grid-item">
						<p>
							Motto: Good food is not only classified by the
						taste but also the experience that comes along with it.

						</p>
					</div>

					<!--adventure grid item 2-->
						<div class="adventure-grid-item">
							<p>
								Mission: Just keep swimming. Just keep swimming

							</p>
						</div>
				</div>
			</div>
		</section>

	</main>
	<footer>
		<p>&copy; 2020 Rameyeon.All rights reserved</p>
	</footer>

<script type="text/javascript" src="scripts.js"></script>
</body>
</html>