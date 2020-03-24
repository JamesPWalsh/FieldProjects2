<!DOCTYPE html>
<html>
<!-- James Walsh 01/16/2020 -->
<!--Last Updated: 01/16/2020-->
<head>
<link rel="stylesheet" href="css/edit-player.css">
<title>IHCC ESports - Leader Page</title>
</head>

<body>
	<div class="col-2" id="EPP">
		<header>
			<?php include "css/Navbar.html"?>
		</header>
		
		<h3 id="EPP">Edit Player Information</h3>
		Username: <input type="text" name="username"><br>
		E-mail: <input type="text" name="email"><br>
		Phone Number: <input type="text" name="phone"><br>
		Favorite Game: <input type="text" name="favgame"><br>
		Bio: <input type="text" name="bio"><br>
		
		<form action="leaderpage.php">
			<input id="button1" type="submit" value="Confirm Edit" />
		</form>
		<br>
		<form action="leaderpage.php">
			<input id="button2" type="submit" value="Cancel" />
		</form>
		
		<footer>Footer - eSports Links and Info</footer>
	</div>
</body>

</html>