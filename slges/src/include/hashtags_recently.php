
<?php
// Verfügbare Hashs
echo "<div class='allhashs'>

			<fieldset>

		<legend>Kürzliche Hashtags</legend>
";

$r_hashs = array("$eins", "$zwei", "$drei", "$vier",
                 "$fünf", "$sechs", "$sieben", "$acht", "$neun", "$zehn");

foreach ($r_hashs as $r_hash) {

  $sql = "SELECT * FROM hashs WHERE hash_id=$r_hash;";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $hash_id = $row['hash_id'];
      $hash_name = $row['hash'];


      echo "<span class='hashColl'><a class='text-deco' href='01_gallery.php?funk=filter_hash&hash_name=$hash_name'>$hash_name<a class='text-deco hashPlus' href='src/php/hashtag_set.php?hash_id=$hash_id&bild_id=$bild_id'>+</a></a></span>\r\n";

    }
  }
}

echo "</fieldset></div>";
//echo "<br><br><span class='hashColl'><a class='text-deco' href='../src/php/set_default.php'>set default Variable Hashtags</a></span></fieldset>";

?>
