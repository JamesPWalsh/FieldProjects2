<!DOCTYPE html>
<html>
<!-- James Walsh 11/26/2019 -->
<!--Last Updated: 12/05/2019-->
<head>
<link rel="stylesheet" href="css/styles.css">
<link rel="stylesheet" href="css/sign-in-style.css">
<title>Sign-Up</title>
</head>

<body>
	<div class="col-2">
		<header>
			<?php include "css/Navbar.html"?>
		</header>

		<div class="container">
			<form action="/action_page.php">
				<label for="fname">First Name</label>
				<input type="text" id="fname" name="firstname" placeholder="First Name">

				<label for="fname">Last Name</label>
				<input type="text" id="lname" name="lastname" placeholder="Last Name">

				<label for="fname">Username</label>
				<input type="text" id="uname" name="username" placeholder="Username">

				<label for="fname">E-Mail</label>
				<input type="text" id="email" name="Email" placeholder="E-mail">

				<label for="fname">Password</label>
				<input type="password" id="pword" name="password" placeholder="Password">

				<label for="fname">Confirm Password</label>
				<input type="password" id="cpword" name="confirmpassword" placeholder="Password">

				<label for="fname">Leader Code(Provided By Team Leaders)</label>
				<input type="text" id="lcode" name="leadercode" placeholder="Leader Code">

				<div style="margin: 0 auto; width: 656px; text-align: center;">
					<input type="submit" value="Log-In">
					<input type="submit" value="Sign-Up">
				</div>
			</form>
		</div>
		<footer>Footer - eSports Links and Info</footer>
	</div>
</body>

</html>
