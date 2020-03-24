<?php
	$sql = "SELECT * FROM players WHERE game_name = '".$search."'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			if ($row["leader"] == "yes") {
				echo "
				.title {
				  color: grey;
				  font-size: 18px;
				}";
				echo "
				.player-button {
				  border: none;
				  outline: 0;
				  display: inline-block;
				  padding: 8px;
				  color: white;
				  background-color: #000;
				  text-align: center;
				  cursor: pointer;
				  width: 100%;
				  font-size: 18px;
				}";
				echo "
				.player-button a {
				  text-decoration: none;
				  font-size: 22px;
				}";
				echo "
				a {
				  text-decoration: none;
				  font-size: 22px;
				  color: black;
				}

				.player-button:hover, a:hover {
				  opacity: 0.7;
				} </style>";
				
				echo "<div class='card'>";
					echo "<img src='#' alt='" . $row["name"] ."' style='width:100%'>";
					echo "<h1>Leader: " . $row["name"] . "</h1>";
					echo "<p class='title'>" .$row["user_id"] . "</p>";
					echo "<p>". $row["bio"] ."</p>";
					echo "<div style='margin: 24px 0;'>
							<a href='#'><i class='fa fa-dribbble'></i></a> 
							<a href='#'><i class='fa fa-twitter'></i></a>  
							<a href='#'><i class='fa fa-linkedin'></i></a>  
							<a href='#'><i class='fa fa-facebook'></i></a> 
						</div>";
					 					 echo "<p><form action='player-page.php' method='get'><button type='submit' class='player-button' name='name' value='" . $row["name"] . "'>View Profile</button></form></p>";
				echo "</div>";//End of card
			} else {
				echo "<div class='card'>";
					echo "<img src='#' alt='" . $row["name"] ."' style='width:100%'>";
					echo "<h1>Player: " . $row["name"] . "</h1>";
					echo "<p class='title'>" .$row["user_id"] . "</p>";
					echo "<p>". $row["bio"] ."</p>";
					echo "<div style='margin: 24px 0;'>
						<a href='#'><i class='fa fa-dribbble'></i></a> 
						<a href='#'><i class='fa fa-twitter'></i></a>  
						<a href='#'><i class='fa fa-linkedin'></i></a>  
						<a href='#'><i class='fa fa-facebook'></i></a> 
					  </div>";
					 					 echo "<p><form action='player-page.php' method='get'><button type='submit' class='player-button' name='name' value='" . $row["name"] . "'>View Profile</button></form></p>";
				echo "</div>";//End of card
			}
			//End of if statement
		}
	} else {
		echo "0 results";
	}
?>