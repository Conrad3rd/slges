<?php
//vorschläge beim eintippen
$sql = "SELECT * FROM `hashs`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		$hashname = $row["hash"];
		$hash_id = $row["hash_id"];
		echo "<option value='$hashname'> ";
	}
}
?>
