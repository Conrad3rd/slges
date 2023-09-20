<?php
// Verfügbare Hashs
echo "<div class='allhashs'>

			<fieldset>
		<legend>Variable Hashtags</legend>

";


$sql = "SELECT * FROM hashs WHERE hash_id=$eins;";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		$hash_id = $row['hash_id'];
		$hash_name = $row['hash'];
		echo "
		<span class='hashColl'><a class='text-deco' href='01_search_gallery.php?hash_id=$hash_id'>$hash_name<a class='text-deco hashPlus' href='01_insert.php?hash_id=$hash_id&bild_id=$bild_id'>+</a></a></span>
		";

	}
}

$sql = "SELECT * FROM hashs WHERE hash_id=$zwei;";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		$hash_id = $row['hash_id'];
		$hash_name = $row['hash'];
		echo "
		<span class='hashColl'><a class='text-deco' href='01_search_gallery.php?hash_id=$hash_id'>$hash_name<a class='text-deco hashPlus' href='01_insert.php?hash_id=$hash_id&bild_id=$bild_id'>+</a></a></span>
		";

	}
}

$sql = "SELECT * FROM hashs WHERE hash_id=$drei;";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		$hash_id = $row['hash_id'];
		$hash_name = $row['hash'];
		echo "
		<span class='hashColl'><a class='text-deco' href='01_search_gallery.php?hash_id=$hash_id'>$hash_name<a class='text-deco hashPlus' href='01_insert.php?hash_id=$hash_id&bild_id=$bild_id'>+</a></a></span>
		";

	}
}

$sql = "SELECT * FROM hashs WHERE hash_id=$vier;";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		$hash_id = $row['hash_id'];
		$hash_name = $row['hash'];
		echo "
		<span class='hashColl'><a class='text-deco' href='01_search_gallery.php?hash_id=$hash_id'>$hash_name<a class='text-deco hashPlus' href='01_insert.php?hash_id=$hash_id&bild_id=$bild_id'>+</a></a></span>
		";

	}
}

$sql = "SELECT * FROM hashs WHERE hash_id=$fünf;";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		$hash_id = $row['hash_id'];
		$hash_name = $row['hash'];
		echo "
		<span class='hashColl'><a class='text-deco' href='01_search_gallery.php?hash_id=$hash_id'>$hash_name<a class='text-deco hashPlus' href='01_insert.php?hash_id=$hash_id&bild_id=$bild_id'>+</a></a></span>
		";

	}
}

$sql = "SELECT * FROM hashs WHERE hash_id=$sechs;";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		$hash_id = $row['hash_id'];
		$hash_name = $row['hash'];
		echo "
		<span class='hashColl'><a class='text-deco' href='01_search_gallery.php?hash_id=$hash_id'>$hash_name<a class='text-deco hashPlus' href='01_insert.php?hash_id=$hash_id&bild_id=$bild_id'>+</a></a></span>
		";

	}
}

$sql = "SELECT * FROM hashs WHERE hash_id=$sieben;";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		$hash_id = $row['hash_id'];
		$hash_name = $row['hash'];
		echo "
		<span class='hashColl'><a class='text-deco' href='01_search_gallery.php?hash_id=$hash_id'>$hash_name<a class='text-deco hashPlus' href='01_insert.php?hash_id=$hash_id&bild_id=$bild_id'>+</a></a></span>
		";

	}
}

$sql = "SELECT * FROM hashs WHERE hash_id=$acht;";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		$hash_id = $row['hash_id'];
		$hash_name = $row['hash'];
		echo "
		<span class='hashColl'><a class='text-deco' href='01_search_gallery.php?hash_id=$hash_id'>$hash_name<a class='text-deco hashPlus' href='01_insert.php?hash_id=$hash_id&bild_id=$bild_id'>+</a></a></span>
		";

	}
}

$sql = "SELECT * FROM hashs WHERE hash_id=$neun;";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		$hash_id = $row['hash_id'];
		$hash_name = $row['hash'];
		echo "
		<span class='hashColl'><a class='text-deco' href='01_search_gallery.php?hash_id=$hash_id'>$hash_name<a class='text-deco hashPlus' href='01_insert.php?hash_id=$hash_id&bild_id=$bild_id'>+</a></a></span>
		";

	}
}

$sql = "SELECT * FROM hashs WHERE hash_id=$zehn;";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		$hash_id = $row['hash_id'];
		$hash_name = $row['hash'];
		echo "
		<span class='hashColl'><a class='text-deco' href='01_search_gallery.php?hash_id=$hash_id'>$hash_name<a class='text-deco hashPlus' href='01_insert.php?hash_id=$hash_id&bild_id=$bild_id'>+</a></a></span>
		";
//		echo "			</fieldset>";
	}
}

echo "<br><br><span class='hashColl'><a class='text-deco' href='../src/php/set_default.php'>set default Variable Hashtags</a></span></fieldset>";

?>
