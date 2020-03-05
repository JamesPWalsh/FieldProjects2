<!DOCTYPE html>
<!--
		Main Page for Indian Hills eSports Website
		Author: Kelsey Crosby
		Revision Date: 01/22/2020

		Revisions Made:
			- Fixed Slideshow Buttons
			- Added Automatic Fade Animation to Slideshow
			- Added Team Profile Cards under Meet the Teams article
			- Added Comments to Main-Styles Stylesheet
			- Added Comments to Body
			- Added About Page to Nav-bar and about button
-->
<html lang="en-US">
<?php
	//if reloaded, get variable, else set first in table
	if(isset($_GET['name']))
	{
		$search = htmlspecialchars($_GET["name"]);
		include "php/database.php";
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		$sql = "SELECT * FROM players WHERE game_name = '".$search."'";
		$result = $conn->query($sql);
	} else {
		$search = "Overwatch";
		include "php/database.php";
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		$sql = "SELECT game_name FROM games";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		$search = $row["game_name"];

		$sql = "SELECT * FROM players WHERE game_name = '".$search."'";
		$result = $conn->query($sql);
	}
	?>
<head>
	<title>Indian Hills eSports</title>
	<style>
	/*About*/
	.about {
		padding-top: 15px;
		text-align: center;
		display: inline-block;
	}

	/*About Button*/
	.about-button {
	  background: #840029;
	  border: white 1px solid;
	  color: white;
	  display: inline-block;
	  height: 40px;
	  text-align: center;
	  cursor: pointer;
	  width: 15%;
	  font-size: 18px;
	}

	.about-button:hover 
	{ 
	background-color: #FAA41A; /*Yellow Gold*/ 
	}
	
	/*meet the leaders*/
	.game {
	  background: #840029;
	  border: white 2px solid;
	  color: white;
	  outline: 0;
	  display: inline-block;
	  padding: 8px;
	  text-align: center;
	  cursor: pointer;
	  width: 15%;
	  font-size: 18px;
	}

	/*Removes inherited padding*/
	.game a {
	  padding: 0;
	  margin: 0;
	}

	.game:hover { 
	background-color: black; 
	}
	.team-list {
		padding-top: 20px;
		text-align: center;
		display: inline-block;
	}
	.team-profile-container {
		background-color:#840029; /*Maroon*/
		display: inline-block;
		text-align: center;
	}
	</style>
</head>

<body>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<div class="main-column">
	<header>
			<?php include "css/Navbar.html"?>
		</header>

		<!-- Game Image Slideshow Container -->
			<div class="slideshow-container">
				<!--Overwatch Image-->
				<div class="mySlides fade">
				  <img src="images/overwatch-bg.jpg" style="width:100%">
				</div>
				<!--CS:GO Image-->
				<div class="mySlides fade">
				  <img src="images/CSGO-bg.jpg" style="width:100%">
				</div>
				<!--Rocket League Image-->
				<div class="mySlides fade">
				  <img src="images/rocket-league-bg.jpg" style="width:100%">
				</div>
				<!--Super Smash Bros Image-->
				<div class="mySlides fade">
				  <img src="images/super-smash-bros-bg.jpg" style="width:100%">
				</div>

				<!-- Slideshow Buttons -->
				<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
				<a class="next" onclick="plusSlides(1)">&#10095;</a>
			</div><!-- End of Slideshow-Container -->

			<!-- Slideshow Animation Javascript -->
			<script>
				var myIndex = 0;
				carousel();		//Calls the automatic slideshow fade animation
				showSlides(slideIndex);	//Cycles through images when button pressed

				//Automatic animation at page load
				function carousel() {
				  var i; //image index
				  var x = document.getElementsByClassName("mySlides");	//images variable
				  for (i = 0; i < x.length; i++) {
						x[i].style.display = "none";	//removes display style
				  }
				  myIndex++; //moves to next image
				  if (myIndex > x.length) {myIndex = 1}
				  x[myIndex-1].style.display = "block";	//displays next image in container
				  setTimeout(carousel, 9000);	//animation time set to 9 secs until next image
				}

				// Next/previous controls
				function plusSlides(n) {
				  showSlides(myIndex += n);	//calls showSlides function when button pressed
				}

				//Cycles through images when button pressed
				function showSlides(n) {
				  var i; //index
				  var slides = document.getElementsByClassName("mySlides"); //images variable
				  if (n > slides.length) {myIndex = 1}	//starts slideshow at first image
				  if (n < 1) {myIndex = slides.length}	//get num of images in slideshow
				  for (i = 0; i < slides.length; i++) {
				      slides[i].style.display = "none";	//removes display style
				  }
				  slides[myIndex-1].style.display = "block"; //displays next image in container
				}
			</script><!-- End of Slideshow Animation Javascript -->

		<main style = "background-color:#840029; height: 50px;"></main>

		<main class="content">
			<article class = "about">
				<h2>About the eSports Club</h2>
				<center><!-- Centers text in article -->
					<!-- Space filler -->
					<p>ESPORT – Lorem ipsum dolor sit amet, voluptua iracundia disputationi an pri, his utinam principes dignissim ad. Ne nec dolore oblique nusquam,
					cu luptatum volutpat delicatissimi has. Sed ad dicam platonem, mea eros illum elitr id, ei has similique constituto. Ea movet saperet rationibus sit,
					pri autem aliquip invidunt an. Consetetur omittantur consequuntur eos et. Eleifend praesent iudicabit no mea, tollit persequeris ex pri, tota splendide
					voluptaria in pri. Ad per tale aliquip, ei sit.</p>
					<h3>“Novum blandit adolescens sea te. Ea eum cetero scaevola.”</h3>
					<p>In his meis porro viris, illud imperdiet reprimique et vim. Feugiat atomorum reprehendunt vix ei, ei facete regione pri. Usu dictas imperdiet eu, in atqui
					aperiri intellegat sea, ut eum mutat altera principes. Te sit quaeque oportere, has modus inani ceteros ad. Impedit blandit deseruisse duo ea, ne graecis
					deleniti incorrupte usu. Ut mei splendide accommodare. An pri iisque meliore. In his meis porro viris, illud imperdiet reprimique et vim. Feugiat atomorum
					reprehendunt vix ei pri.</p>
					<a href="about-page.html"><button class="about-button">Read More</button></a>
				</center>
			</article>
		</main>

		<!-- Team Profile Cards -->
		<main class="content">
			<article class="team-profile-container">
				<h2 style="color:white;">Meet the Leaders</h2>

				<!--View Teams Members by Game Buttons-->
				<div class = "team-list">
				<!-- Team List with Player Profiles-->
				<?php include "php/leaderCards.php"; //this prints just the leaders?>
				</div><!--End of Team List-->
			</article>
		</main> <!-- End of Team Profile Cards -->

		<main class="content">
			<article>
				<h2>Upcoming Events</h2>
				<!-- Upcoming events posted here -->
			</article>
		</main>

		<footer>Footer - eSports Links and Info</footer>
	</div><!-- End of main-column -->
</body>
