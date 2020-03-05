<!DOCTYPE html>
<!-- About Page for eSports Project -->
<html lang="en-US">
<head>
	<title>Indian Hills eSports - About Page </title>
</head>
<body>
	<link rel="stylesheet" type="text/css" href="css/style.css">
		<header>
			<div id = "nav-bar">
				<?php include "css/Navbar.html"?>
		</header>


		<div class="slideshow-container">
			<div class="mySlides fade">
			  <img src="images/overwatch-bg.jpg" style="width:100%">
			</div>

			<div class="mySlides fade">
			  <img src="images/CSGO-bg.jpg" style="width:100%">
			</div>

			<div class="mySlides fade">
			  <img src="images/rocket-league-bg.jpg" style="width:100%">
			</div>

			<div class="mySlides fade">
			  <img src="images/super-smash-bros-bg.jpg" style="width:100%">
			</div>

			<!-- Slideshow Buttons -->
			<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			<a class="next" onclick="plusSlides(1)">&#10095;</a>
		</div><!-- End of Slideshow-Container -->

		<!-- Slideshow Animation JavaScript -->
		<script>
			var slideIndex = 1;
			showSlides(slideIndex);
			function plusSlides(n) {
			  showSlides(slideIndex += n);
			}
			function currentSlide(n) {
			  showSlides(slideIndex = n);
			}
			function showSlides(n) {
			  var i;
			  var slides = document.getElementsByClassName("mySlides");
			  if (n > slides.length) {slideIndex = 1}
			  if (n < 1) {slideIndex = slides.length}
			  for (i = 0; i < slides.length; i++) {
				  slides[i].style.display = "none";
			  }
			  slides[slideIndex-1].style.display = "block";
			}
		</script>

		<main style = "background-color:#840029; height: 50px;"></main>

		<!-- <h1>About Page</h1> -->

		<main class="content" id="AP">
			<article>
				<center>
				<h2> About Us - Where It All Started </h2>
					<p> (background and intentions for club)   </p>
					<p> ESPORT – Lorem ipsum dolor sit amet, voluptua iracundia disputationi an pri, his utinam principes dignissim ad. Ne nec dolore oblique nusquam,
					cu luptatum volutpat delicatissimi has. Sed ad dicam platonem, mea eros illum elitr id, ei has similique constituto. Ea movet saperet rationibus sit,
					pri autem aliquip invidunt an. Consetetur omittantur consequuntur eos et. Eleifend praesent iudicabit no mea, tollit persequeris ex pri, tota splendide
					voluptaria in pri. Ad per tale aliquip, ei sit.</p>
					<h3>“Novum blandit adolescens sea te. Ea eum cetero scaevola.”</h3>
					<p>In his meis porro viris, illud imperdiet reprimique et vim. Feugiat atomorum reprehendunt vix ei, ei facete regione pri. Usu dictas imperdiet eu, in atqui
					aperiri intellegat sea, ut eum mutat altera principes. Te sit quaeque oportere, has modus inani ceteros ad. Impedit blandit deseruisse duo ea, ne graecis
					deleniti incorrupte usu. Ut mei splendide accommodare. An pri iisque meliore. In his meis porro viris, illud imperdiet reprimique et vim. Feugiat atomorum
					reprehendunt vix ei pri.</p>
				</center>
				<br><br>
			</article>
		</main>


		<footer>
			<article>
			<center>
				<h2> Contact Us </h2>
				<h3> eSports Club - Indian Hills Community College </h3>

				<br>
				<p> Do you enjoy playing video games? Would you like to meet other students who play the same games  you do? Call or email us to get more information about the club and ask to join us!</p>
				<p> Phone Number: </p>
				<p> Email: </p>
			</center>
		
		</footer>
	</div>
</body>
