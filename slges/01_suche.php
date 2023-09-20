<!DOCTYPE html>
<html lang="de">
	<head>
		<title>Suche AND</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="content-type" content="text/html" charset="utf-8" />
	<link rel="stylesheet" href="src/css/gallery.css" type="text/css" />

	</head>
<body>
<div class="gallery">

	<?php
	include 'src/php/conn_open.php';
	include 'src/php/var.php';
	include 'src/include/nav-bar2.php';

$hash_arr=array();

if(isset($_POST['hashs']))
{
	$hash_name = $_POST["hashs"];

	if (!empty($hash_name))
	{
	$look = "SELECT * FROM `hashs` WHERE `hash` in ($hash_name)";
	$result_look = $conn->query($look);
	if ($result_look->num_rows > 0) {
		// output data of each row
		while($row = $result_look->fetch_assoc()) {
			$hash_ids = $row["hash_id"];

//			$hash_ids = "$hash_ids ";
//			echo "$hash_ids";
			array_push($hash_arr, "$hash_ids");

		}
	} else {
		echo "0 results";

	}

//		$hash_count = explode (",", $hash_arr);

		$hash_id = implode(", ",$hash_arr);
		$hash_count = count($hash_arr);
		$hash_count = $hash_count -1;
		$sql_find = "SELECT id, pfad FROM Bilder WHERE id IN (select bild_id from bilder_hashs where hash_id in ($hash_id) group by bild_id having count(bild_id)>$hash_count)";

		echo "<div>$hash_name</div>";
		$result = $conn->query($sql_find);
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

	}
}


##################################
####### FULL TEXT SEARCH #########




if(isset($_POST['fullsearch'])){
	$fullsearch = $_POST["fullsearch"];
//	echo "$fullsearch";





//	$look = "SELECT * FROM `hashs` WHERE `hash` in ($fullsearch)";

	$look = "SELECT * FROM hashs WHERE hash REGEXP '$fullsearch';";
	$result_look = $conn->query($look);
	if ($result_look->num_rows > 0) {
		// output data of each row
		while($row = $result_look->fetch_assoc()) {
			$hash_ids = $row["hash_id"];

//			$hash_ids = "$hash_ids ";
//			echo "$hash_ids";
			array_push($hash_arr, "$hash_ids");

		}
	} else {
		echo "Die Suche nach $fullsearch ergabe 0 ergebnisse";

	}
//print_r($hash_arr);

		$hash_id = implode(", ",$hash_arr);
		$hash_count = count($hash_arr);
		$hash_count = $hash_count -1;
		$sql_find = "SELECT id, pfad FROM Bilder WHERE id IN (select bild_id from bilder_hashs where hash_id in ($hash_id) group by bild_id having count(bild_id)>$hash_count)";

//		echo "<div>$hash_name</div>";
		$result = $conn->query($sql_find);
		if ($result !== false && $result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				$pfad = $row["pfad"];
				$nummer = $row["id"];

				echo "\r\n"."<div id='$nummer' class='k'><div><a href='01_viewer.php?id=$nummer'><img src='$small$pfad' loading='lazy'></a><br><div class='t'>$nummer</div></div></div>";
			}
		} else {
			echo "Die Suche nach $fullsearch ergabe 0 ergebnisse";
		}


}

####### FULL TEXT SEARCH #########
##################################


##################################
########### FREI TEXT ############
if(isset($_POST['freitext'])){
	$freitext = $_POST["freitext"];




	$look = "SELECT * FROM hashs WHERE hash REGEXP '$freitext';";
	$result_look = $conn->query($look);
	if ($result_look->num_rows > 0) {
		// output data of each row
		while($row = $result_look->fetch_assoc()) {
			$hash_ids = $row["hash_id"];

//			$hash_ids = "$hash_ids ";
//			echo "$hash_ids";
			array_push($hash_arr, "$hash_ids");

		}
	} else {
		echo "Die Suche nach $freitext ergabe 0 ergebnisse";

	}
//print_r($hash_arr);

		$hash_id = implode("|",$hash_arr);
		$hash_count = count($hash_arr);
		$hash_count = $hash_count -1;


//		SELECT * FROM hashs WHERE hash REGEXP 'wasser|meer';
echo "<br>Suche nach: $freitext<br>";
		$sql_find = "SELECT * FROM `Bilder` WHERE `id` IN (SELECT bild_id FROM `bilder_hashs` WHERE `hash_id` REGEXP '$hash_id')";

//		echo "<div>$hash_name</div>";
		$result = $conn->query($sql_find);
		if ($result !== false && $result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				$pfad = $row["pfad"];
				$nummer = $row["id"];

				echo "\r\n"."<div id='$nummer' class='k'><div><a href='01_viewer.php?id=$nummer'><img src='$small$pfad' loading='lazy'></a><br><div class='t'>$nummer</div></div></div>";
			}
		} else {
			echo "Die Suche nach $freitext ergabe 0 ergebnisse";
		}


}









########### FREI TEXT ############
##################################
//	$hash_IDs=array("89","267","227");
//	$hash_count = count($hash_IDs) - 1;
//	$hash_id = implode(", ",$hash_IDs);









	include 'src/php/conn_close.php';
	?>
</div>

</body>
</html>
