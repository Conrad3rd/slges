<?php
# Standard Hashs
$hashs = array(
            "indischer Laden", "Myanmar", "Brücke", "Yangon", "Kopfbedeckung", "Handel",
            "Markt", "Laden", "Text", "Fest", "Wasserfest", "Wasser", "Wasserfahrzeug",
            "Bambus", "Holz", "Hütte", "Pier", "Wasserbüffel", "Tier", "Was ist das?",
            "Wer ist das?", "nicht Myanmar", "Rot", "Nummernschild", "Bus", "Auto",
            "Rikscha", "Fahrrad", "Schirm", "Mönch", "Buddha", "Musik", "Tanz", "Dorf",
            "Lastenträger", "Bagan", "Bago", "Berg", "Soldat", "Raucher", "Restaurant",
            "Hafen", "Stupa", "Korb"
          );


echo "<br><br>\r\n<fieldset><legend>Standard Hashtags</legend>\r\n";
foreach ($hashs as $hash) {
	$sql_hash_id = "SELECT * FROM hashs WHERE hash = '$hash'";
	$result_hash_id = $conn->query($sql_hash_id);

	if ($result_hash_id->num_rows > 0) {
		// output data of each row
		while($row = $result_hash_id->fetch_assoc()) {
			$hash_id = $row["hash_id"];
			$hash = $row["hash"];
			echo
      "<span class='hashColl'><a class='text-deco' href='01_gallery.php?funk2=filter_hash&hash_name=$hash'>$hash<a class='text-deco hashPlus' href='src/php/hashtag_set.php?hash_id=$hash_id&bild_id=$bild_id'>+</a></a></span>\r\n";

		}
	} else {
		$hash_id = "<p>0 results</p>";
	}
}


echo "</fieldset>\r\n";

?>
