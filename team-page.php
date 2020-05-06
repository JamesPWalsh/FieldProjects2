<!DOCTYPE html>
<!-- Main Page for eSports Project -->
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
	<title>Indian Hills eSports - Team Page</title>
	<link rel="stylesheet" type="text/css" href="css/Style.css">
	<!--link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"-->
</head>
<body>
	<div class="col-2">
		<header>
			<?php include "css/Navbar.html"?>
		</header>
		
		<br><br>
		
		<!-- Kelsey, coppy from here-->
		<!-- Buttons -->
		<div class = "game-list" style="text-align:center;">
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
				<!-- This php loops and creates any number of buttons for the amount of games in the database -->
				<?php include "php/buttons.php" ?>
			</form>
		</div><!-- End of Buttons -->
				
		<main class="content">	<!-- MAIN content -->		
			<div class = "about"> <!-- DIV about -->	
					<!-- This php loops to create the player cards for any number of players for a game. -->
					  <?php include "php/playerCards.php" ?>
				
				<!-- to here for all the php ive worked on-->
				
				<h2>About the Team</h2>
				<center>
					<p>ESPORT – Lorem ipsum dolor sit amet, voluptua iracundia disputationi an pri, his utinam principes dignissim ad. Ne nec dolore oblique nusquam, 
					cu luptatum volutpat delicatissimi has. Sed ad dicam platonem, mea eros illum elitr id, ei has similique constituto. Ea movet saperet rationibus sit,
					pri autem aliquip invidunt an. Consetetur omittantur consequuntur eos et. Eleifend praesent iudicabit no mea, tollit persequeris ex pri, tota splendide
					voluptaria in pri. Ad per tale aliquip, ei sit.</p>
					<h3>“Novum blandit adolescens sea te. Ea eum cetero scaevola.”</h3>
					<p>In his meis porro viris, illud imperdiet reprimique et vim. Feugiat atomorum reprehendunt vix ei, ei facete regione pri. Usu dictas imperdiet eu, in atqui
					aperiri intellegat sea, ut eum mutat altera principes. Te sit quaeque oportere, has modus inani ceteros ad. Impedit blandit deseruisse duo ea, ne graecis 
					deleniti incorrupte usu. Ut mei splendide accommodare. An pri iisque meliore. In his meis porro viris, illud imperdiet reprimique et vim. Feugiat atomorum 
					reprehendunt vix ei pri.</p>
				</center>
				
				<h2>About the Game</h2>
				
				<?php include "php/gameData.php"; ?>
				
			</div> <!-- DIV about end -->
		</main> <!-- MAIN content end -->
		
		<footer>Footer - eSports Links and Info</footer>
</body>