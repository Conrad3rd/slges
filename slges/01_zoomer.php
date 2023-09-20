<?
ob_start (); // Buffer output
?>

<!DOCTYPE html>
<html lang="de">
	<head>
		<title>Zoomer</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="content-type" content="text/html" charset="utf-8" />
		<link rel="stylesheet" href="src/css/zoomer.media.css" type="text/css" />
		<link rel="stylesheet" href="src/css/zoomer.css" type="text/css" />
		<style>



		</style>
	</head>
<!--This is a comment. Comments are not displayed in the browser-->
<body>


<?php
include 'src/php/var.php';
$id = $_GET['id'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM Bilder WHERE id = $id";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
		$pfad = $row["pfad"];
		$nummer = $row["id"];
		$next = $nummer + 1;
		$bevor = $nummer - 1;


	echo "

	    <div class='zoom_outer'>
      <div id='zoom'>
        <img src='$large$pfad' alt='zoom'>
      </div>
    </div>




	";








  }
} else {
  echo "0 results";
}

$pageTitle = $nummer; // Call this in your pages' files to define the page title

$pageContents = ob_get_contents (); // Get all the page's HTML into a string
ob_end_clean (); // Wipe the buffer

// Replace <!--TITLE--> with $pageTitle variable contents, and print the HTML
echo str_replace ('<!--TITLE-->', $pageTitle, $pageContents);


$conn->close();
echo "
<script>
	document.onkeydown = checkKey;

	function checkKey(e) {
		e = e || window.event;

		if (e.keyCode == '40') {
			window.open('01_viewer.php?id=$id', target='_self');
		}
		else if (e.keyCode == '37') {
			window.open('01_zoomer.php?id=$bevor', target='_self');
		}
		else if (e.keyCode == '39') {
			window.open('01_zoomer.php?id=$next', target='_self');
		}
	}
</script>
";

?>




<script type="text/javascript" src="src/js/zoomer.js"></script>


</body>
</html>
