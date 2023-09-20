<!DOCTYPE html>
<html lang="de">
	<head>
		<title>nicht Myanmar</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="content-type" content="text/html" charset="utf-8" />
	<link rel="stylesheet" href="../css/gallery.css" type="text/css" />
		<link rel="stylesheet" href="style.css" type="text/css" />
		<style>



		</style>
	</head>
<!--This is a comment. Comments are not displayed in the browser-->
<body>
<?php
include '../php/var.php';
include '../php/conn_open.php';



$sql_hash_id = "SELECT pfad, b.id FROM Bilder b LEFT JOIN bilder_hashs bh ON bh.bild_id = b.id AND bh.hash_id IN (255, 379, 133, 9031, 381, 384) WHERE bh.hash_id IS NULL";
$result_hash_id = $conn->query($sql_hash_id);
	echo "<div class='gallery'>";
if ($result_hash_id->num_rows > 0) {
  // output data of each row
  while($row = $result_hash_id->fetch_assoc()) {
			$pfad = $row["pfad"];
			$nummer = $row["id"];
//			echo "$id: $pfad <br>";
//			echo "<a href='../../$pfad'>$id</a>";

			echo "\r\n"."<div id='$nummer' class='k'><div><a href='../../01_viewer.php?id=$nummer'><img src='../../$small$pfad' loading='lazy'></a><br><div class='t'>$nummer</div></div></div>";
}
} else {
			$pfad = "<p>0 results</p>";
}






?>





<script>
</script>
<script type="text/javascript" src="javascript.js"></script>


</body>
</html>
