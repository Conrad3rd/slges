<?php
# Standard Hashs
$d_hashs = array("Myanmar", "Brücke", "Nummernschild", "Yangon",
						"Stupa", "Text", "Wasser", "Boot", "Hafen", "Tier", "Was ist das?",
						"Wer ist das?", "Markt", "Karte", "Kalender", "fehlerhaft", "nicht Myanmar");


echo "<br><br>\r\n<fieldset><legend>Standard Hashtags</legend>\r\n";
foreach ($d_hashs as $d_hash) {
	$sql_hash_id = "SELECT * FROM hashs WHERE hash = '$d_hash'";
	$result_hash_id = $conn->query($sql_hash_id);

	if ($result_hash_id->num_rows > 0) {
		// output data of each row
		while($row = $result_hash_id->fetch_assoc()) {
			$hash_id = $row["hash_id"];
			$hash = $row["hash"];
			echo "<span class='hashColl'><a class='text-deco' href='01_gallery.php?funk=filter_hash&hash_name=$d_hash'>$d_hash<a class='text-deco hashPlus' href='src/php/hashtag_set.php?d_hash_id=$hash_id&bild_id=$bild_id'>+</a></a></span>\r\n";

		}
	} else {
		$hash_id = "<p>0 results</p>";
	}
}


echo "</fieldset>\r\n";

?>
