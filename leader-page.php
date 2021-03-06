<!DOCTYPE html>
<html>
<!-- James Walsh 01/16/2020 -->
<!--Last Updated: 04/01/2020-->
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
<link rel="stylesheet" href="css/Style.css">
<title>IHCC ESports - Leader Page</title>
</head>

<body>
	<div class="leader-col-2">
		<header>
			<?php include "css/Navbar.html"?>
		</header>
		
		<div class="leader-col-container"><!--Begining of top-row-->
			<div class="leader-col-left"  style="border-right: 2px solid black;"><!--Begining of game-edit-->
				<h2>Edit Games</h2>
				<select>
					<option value="overwatch">Overwatch</option>
					<option value="rocketleague">Rocket League</option>
					<option value="csgo">CS:GO</option>
					<option value="smashbro">Smash Bros.</option>
				</select>
				<button class="editgamebtn" onclick="window.location.href = 'edit-game-page.php';">Edit Page</button>
			</div><!--End of game-edit-->
			<div class="leader-col-middle" style="border-right: 2px solid black;"><!--Begining of game-delete-->
				<h2>Delete Pages</h2>
				<p>Delete Player/Game</p>
				<select>
					<option value="overwatch">Overwatch</option>
					<option value="rocketleague">Rocket League</option>
					<option value="csgo">CS:GO</option>
					<option value="smashbro">Smash Bros.</option>
					<option value="player">Player</option>
				</select>
				<button class="deletebtn">Delete Page</button>
				<br>
			</div><!--End of game-delete-->
			
			<div class="leader-col-right"><!--Begining of player-invite-->
				<h2>Player Invites</h2>
				<p>Choose Team: Invite Link</p>
				<button class="invitebtn">Generate Invite Link</button>
				<input style="width: 80px;" type="text" name="invitecode" value="" readonly>
			</div><!--End of player-invite-->
		</div><!--End of top-row-->
		
		<div class="leader-col-container"><!--Begining of bottom-row-->
			<div class="leader-col-left"  style="border-right: 2px solid black;  border-top: 2px solid black; border-bottom: 2px solid black;"><!--Begining of player-edit-->
				<h2>Edit Players</h2>
				<select>
					<option value="player">Player</option>
				</select>
				<button class="editplayerbtn" onclick="window.location.href = 'edit-player-page.php';">Edit Page</button>
			</div><!--End of player-edit-->

			<div class="leader-col-middle"  style="border-right: 2px solid black; border-top: 2px solid black; border-bottom: 2px solid black;"><!--Begining of add-player/game-->
				<h2>Add Pages</h2>
				<p>Add Game</p>
				<input type="text" name="newgamename" value="">
				<button class="addgamebtn">Add New Game</button>
			</div><!--End of add-player/game-->

			<div class="leader-col-right" style="border-bottom: 2px solid black;"><!--Empty row-->
			</div>			
		</div><!--End of bottom-row-->
		
		<footer>Footer - eSports Links and Info</footer>
	</div>
</body>

</html>