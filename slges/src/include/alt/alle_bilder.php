<?php
	$sql = "SELECT id, pfad FROM Bilder";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			$pfad = $row["pfad"];
			$nummer = $row["id"];
			echo "\r\n"."<div id='$nummer' class='k'><div><a href='01_viewer.php?id=$nummer'><img src='$small$pfad' loading='lazy'></a><br><div class='t'>$nummer</div></div></div>";
		}
	} else {
		echo "0 results";
	}
?>
