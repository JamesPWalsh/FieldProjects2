<!DOCTYPE html>
<html>
<!-- James Walsh 01/16/2020 -->
<!--Last Updated: 01/16/2020-->
<head>
<link rel="stylesheet" href="css/leader-style.css">
<title>IHCC ESports - Leader Page</title>
</head>

<body>
	<div class="col-2">
		<header>
			<div id = "nav-bar"><!--Begining of nav-bar-->
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
		
		<div class="col-container"><!--Begining of top-row-->
			<div class="col-left"  style="border-right: 2px solid black;"><!--Begining of game-edit-->
				<h2>Edit Games</h2>
				<select>
					<option value="overwatch">Overwatch</option>
					<option value="rocketleague">Rocket League</option>
					<option value="csgo">CS:GO</option>
					<option value="smashbro">Smash Bros.</option>
				</select>
				
				<button class="editgamebtn" onclick="window.location.href = 'edit-game-page.php';">Edit Page</button>
			</div><!--End of game-edit-->
			<div class="col-middle" style="border-right: 2px solid black;"><!--Begining of game-delete-->
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
			
			<div class="col-right"><!--Begining of player-invite-->
				<h2>Player Invites</h2>
				<p>Choose Team: Invite Link</p>
				<button class="invitebtn">Generate Invite Link</button>
				<input style="width: 80px;" type="text" name="invitecode" value="" readonly>
			</div><!--End of player-invite-->
		</div><!--End of top-row-->
		
		<div class="col-container"><!--Begining of bottom-row-->
			<div class="col-left"  style="border-right: 2px solid black;  border-top: 2px solid black; border-bottom: 2px solid black;"><!--Begining of player-edit-->
				<h2>Edit Players</h2>
				<select>
					<option value="player">Player</option>
				</select>
				<button class="editplayerbtn" onclick="window.location.href = 'edit-player-page.php';">Edit Page</button>
			</div><!--End of player-edit-->

			<div class="col-middle"  style="border-right: 2px solid black; border-top: 2px solid black; border-bottom: 2px solid black;"><!--Begining of add-player/game-->
				<h2>Add Pages</h2>
				<p>Add Game</p>
				<input type="text" name="newgamename" value="">
				<button class="addgamebtn">Add New Game</button>
			</div><!--End of add-player/game-->

			<div class="col-right" style="border-bottom: 2px solid black;"><!--Empty row-->
			</div>			
		</div><!--End of bottom-row-->
		
		<footer>Footer - eSports Links and Info</footer>
	</div>
</body>

</html>