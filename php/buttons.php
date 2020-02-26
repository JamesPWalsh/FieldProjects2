<?php
	$sql = "SELECT game_name FROM games";
	$result = $conn->query($sql);	
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo "<button class='game' type='submit' name='name' value='" . $row["game_name"] . "'>" . $row["game_name"] . "</button>";
		}
	} else {
		echo "0 results";
	}