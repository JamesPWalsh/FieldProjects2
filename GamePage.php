<!DOCTYPE html>
<html>
<?php
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
	}
	?>
 <head>
	 <title>Game Page</title>
	 <meta name="viewport" content="width=device-width, initial-
	 scale=1">
	 <link rel="stylesheet" href="css/bootstrap.min.css" />
	 <link rel="stylesheet" href="css/gamepagestyle.css" />
 </head>
 
 <body>
	<nav class="navbar navbar-expand-md navbar-dark bg-dark justify-content-center">
	
		<div class="container">
			<a  class="navbar-brand"><h2>Game Page</h2></a>

			<button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
				<span class="navbar-toggler-icon"></span>
			</button>
			
			<?php include "css/Navbar.html"?>
		</div>
	</nav>
	<center>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
	<button type="submit" name="name"	    id="btnShow" value="Overwatch">Overwatch</button>
	<button type="submit" name="name"		id="btnShow" value="Smash">Smash</button>
	<button type="submit" name="name"		id="btnShow" value="Rocket League">Rocket League</button>
	<button type="submit" name="name"		id="btnShow" value="CSGO">CSGO</button>
	</form>
	</center>
	<div class="container-fluid">
		<div id="container" class="row">
			<div id="col-a1" class="col-lg-2 text-center">
				
			</div>
			<div id="col-b" class="col-lg-2">
				<h1>Players</h1>
				<?php include "php/players.php"; ?>
			</div>
			<div id="col-c" class="col-lg-8">
				<?php include "php/gameData.php"; ?>
			</div>
		</div>
	</div>
	
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
 </body>
 </html>
 