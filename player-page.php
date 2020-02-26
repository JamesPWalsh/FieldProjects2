<!DOCTYPE html>
<html>
<?php 
		//this gets the variable for the search.
		$search = htmlspecialchars($_GET["name"]);
		include "php/database.php";
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		$sql = "SELECT * FROM players WHERE name = '".$search."'";
		$result = $conn->query($sql);
?>
<!-- James Walsh 11/26/2019 -->
<!--Last Updated: 01/06/2020-->
<head>
<link rel="stylesheet" href="css/player-style.css">
<title>IHCC ESports - Player Info</title>
</head>

<body>
	<div class="col-2">
		<header>
			<div id = "nav-bar">
				<img class = "team-logo" src="#" alt = "team-logo"/>
				<ul id="nav-bar-links">
					<li><a href="#">Blog</a></li>
					<li><a href="#">Events</a></li>
					<li><a href="team-page.html">Teams</a></li>
					<li><a href="#">About</a></li>
					<li><a href="index.html">Home</a></li>
				</ul>
			</div><!--End of nav-bar-->
		</header>

		<div class="row">
			<?php include "php/playerData.php" //this prints the data of a player from the tables. ?>
		</div>

		<footer>Footer - eSports Links and Info</footer>
	</div>
</body>

</html>