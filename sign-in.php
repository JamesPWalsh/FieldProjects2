<!DOCTYPE html>
<html>
<!-- James Walsh 12/04/2019 -->
<!--Last Updated: 12/05/2019-->
<head>
<link rel="stylesheet" href="css/styles.css">
<link rel="stylesheet" href="css/sign-in-style.css">
<title>Sign-In</title>
</head>

<body>
	<div class="col-2">
		<header>
			<?php include "css/Navbar.html"?>
		</header>

		<div class="container">
			<form action="/action_page.php">
				<label for="fname">Username</label>
				<input type="text" id="uname" name="username" placeholder="Username">

				<label for="lname">Password</label>
				<input type="password" id="pword" name="password" placeholder="Password">

				<div style="margin: 0 auto; width: 656px; text-align: center;">
					<input type="submit" value="Log-In">
					<input type="submit" value="Sign-Up">
				</div>

				<style>
					input[type=submit] {
					  background-color: #840029;
					  color: white;
					  padding: 12px 20px;
					  border: none;
					  border-radius: 4px;
					  cursor: pointer;
					}

					input[type=submit]:hover {
					  background-color: #FAA41A;
					}
				</style>
			</form>
		</div>
		<footer class = "sign-in-footer">Footer - eSports Links and Info</footer>
	</div>
</body>

</html>
