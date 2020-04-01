<?php
		$sql = "SELECT * FROM games WHERE game_name = '".$search."'";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		echo "<h1>" . $row["Game_name"] . "</h1><br><p>" . $row["game_info"] . "</p><br>" .  "<p>  Developer: <i>" . $row["developer"] . "</i></p><br><p>  Publisher: <i>" . $row["publisher"] . "</i></p><br>";
	?>