<?php
// gesetzte Hashs
$sql_hash = "SELECT hash, hash_id FROM hashs WHERE hash_id IN (SELECT hash_id FROM bilder_hashs WHERE bild_id = $id)";
$result_hash = $conn->query($sql_hash);
echo "<div class='selected_hashs'>";
		if ($result_hash->num_rows > 0) {
			// output data of each row
			while($row = $result_hash->fetch_assoc()) {
			$hash_id = $row["hash_id"];
			$hash_name = $row['hash'];

      echo "<span class='hash'><a class='text-deco' href='01_gallery.php?funk2=filter_hash&hash_name=$hash_name'>$hash_name<a class='text-deco loeschen' href='src/php/hashtag_unset.php?bild_id=$bild_id&hash_id=$hash_id'>x</a></a></span>\r\n";
			}
		}

echo "</div>";
?>
