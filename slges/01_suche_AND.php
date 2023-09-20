<!DOCTYPE html>
<html lang="de">
	<head>
		<title>Suche AND</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="content-type" content="text/html" charset="utf-8" />
	<link rel="stylesheet" href="src/css/gallery.css" type="text/css" />
		<style>


		</style>
	</head>
<!--This is a comment. Comments are not displayed in the browser-->
<body>
<div class="gallery">

<?php
include 'src/php/conn_open.php';
include 'src/php/var.php';


$sql_find = "select bild_id from bilder_hashs where hash_id in (89, 267) group by bild_id having count(bild_id)>1";

$result_find = $conn->query($sql_find);

if ($result_find->num_rows > 0) {
	// output data of each row
	while($row = $result_find->fetch_assoc()) {
		//$pfad = $row["pfad"];
		$bild_id = $row["bild_id"];


		$bild_pfad = "SELECT * FROM Bilder WHERE id = $bild_id";
		$result = $conn->query($bild_pfad);

		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {

				$bild_pfad = $result->fetch_assoc();
				$pfad = $row["pfad"];
				$nummer = $row["id"];
				echo "\r\n"."<div id='$nummer' class='k'><div>asdf<a href='01_viewer.php?id=$nummer'><img src='$small$pfad' loading='lazy'></a><br><div class='t'>$nummer</div></div></div>";
			}
		}


//		echo "<p>$nummer</p>";
//		echo "\r\n"."<div id='$nummer' class='k'><div><a href='01_viewer.php?id=$nummer'><img src='$small$pfad' loading='lazy'></a><br><div class='t'>$nummer</div></div></div>"
//		echo "\r\n"."<div id='$nummer' class='k'><div><a href='01_viewer.php?id=$nummer'><img src='$small$pfad' loading='lazy'></a><br><div class='t'>$nummer</div></div></div>";
//		echo "\r\n"."<div id='$nummer' class='k'><div><a href='01_viewer.php?id=$nummer'>$nummer</div>";
  }
}

include 'src/php/conn_close.php';

?>
</div>
<script>
</script>
<script type="text/javascript" src="javascript.js"></script>


</body>
</html>
