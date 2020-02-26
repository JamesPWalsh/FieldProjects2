<!DOCTYPE html>
<html>
<!-- James Walsh 01/16/2020 -->
<!--Last Updated: 01/16/2020-->
<head>
<link rel="stylesheet" href="css/edit-game.css">
<title>IHCC ESports - Leader Page</title>
</head>

<body>
	<div class="col-2">
		<header>
			<div id = "nav-bar"><!--Beginging of nav-bar-->
				<img class = "team-logo" src="#" alt = "team-logo"/>
				<ul id="nav-bar-links">
					<li><a href="#">Blog</a></li>
					<li><a href="#">Events</a></li>
					<li><a href="team-page.php">Teams</a></li>
					<li><a href="about-page.html">About</a></li>
					<li><a href="index.php">Home</a></li>
				</ul>
			</div><!--End of nav-bar-->
		</header>
		
		<h3>Edit Game Information</h3>
		Game Name: <input type="text" name="username"><br>
		Game Description: <input type="text" name="email"><br>

		<form action="leaderpage.php">
			<input id="btnsubmit" type="submit" value="Confirm Edit" />
		</form>
		<br>
		<form action="leaderpage.php">
			<input id="btncancel" type="submit" value="Cancel" />
		</form>
		
		<footer>Footer - eSports Links and Info</footer>
</body>

</html>