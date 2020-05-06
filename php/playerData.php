<?php
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo "<div class='column left data'>";
echo "<img src='images/".$row["name"].".jpg' alt='Profile Picture' class='player-img'>";
echo"<div class='info'>
		<h4>Username:</h4><label for='username'>".$row["user_id"]."</label><br>
		<h4>E-Mail:</h4><label for='email'>".$row["email"]."</label><br>
		<h4>Favorite Game:</h4><label for='favgame'>".$row["fav_game"]."</label><br>
		<h4>Schedule</h4>
	</div>";
echo "</div>
	<div class='column right information'>
		<div class='stroke'>
		<h2>".$row["name"]."</h2>
		<h3>Bio: ".$row["bio"]."</h3>
		<h3>Game Stats</h3>
		<h3>Player Ranking</h3>
	</div>
</div>";
			
?>