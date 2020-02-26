<?php
	$sql = "SELECT * FROM players";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			if ($row["leader"] == "yes") {
				echo "<div class='card'>";
					echo "<img src='#' alt='" . $row["name"] ."' style='width:100%'>";
					echo "<h1>". $row["game_name"] ." Leader: </h1>";
					echo "<h1>" . $row["name"] . "</h1>";
					echo "<p class='title'>" .$row["user_id"] . "</p>";
					echo "<p>". $row["bio"] ."</p>";
					echo "<div style='margin: 24px 0;'>
							<a href='#'><i class='fa fa-dribbble'></i></a> 
							<a href='#'><i class='fa fa-twitter'></i></a>  
							<a href='#'><i class='fa fa-linkedin'></i></a>  
							<a href='#'><i class='fa fa-facebook'></i></a> 
						</div>";
					 echo "<p><form action='playerpage.php' method='get'><button type='submit' class='player-button' name='name' value='" . $row["name"] . "'>View Profile</button></form></p>";
				echo "</div>";//End of card
				}
			}
		} else {
		echo "0 results";
	}
?>