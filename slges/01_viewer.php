<?php
//session_start();
ob_start (); // Buffer output

if (!isset($_SESSION['eins'])){
//	include 'test_umgebung/last/last.php';
	include 'src/php/last.php';
}

?>

<!DOCTYPE html>
<html lang="de">
	<head>
		<title>Viewer: <!--TITLE--></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="content-type" content="text/html" charset="utf-8" />
		<link rel="stylesheet" href="src/css/viewer.css" type="text/css" />
		<link rel="stylesheet" href="src/css/viewer.media.css" type="text/css" />
		<link rel="stylesheet" href="src/css/viewer-nav.css" type="text/css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/bulma.min.css">

		<style>
      .button {
        margin: 5px 5px 5px 5px;
      }
		</style>
	</head>
<body>

<section class="layout">

<?php
include 'src/php/conn_open.php';
include 'src/php/var.php';
//include 'src/php/h_var.php';

$id = $_GET['id'];



// show image
$sql_hash_id = "SELECT hash_id FROM bilder_hashs WHERE bild_id = $id";
$result_hash_id = $conn->query($sql_hash_id);








$sql = "SELECT * FROM Bilder WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
		$pfad = $row["pfad"];
		$bild_id = $row["id"];
		$next = $bild_id + 1;
		$bevor = $bild_id - 1;



include 'src/include/nav-bar.php';


// Right Side
		echo "<div class='right'>";


    if (isset($_GET['hash_name'])){
      $hash_name = $_GET['hash_name'];

      include 'src/include/hashNav.php';
    }




		echo "<p>Bildnummer: $bild_id</p>";
		echo "<p>Original: <a href='$large$pfad'>$pfad</a></p>";

		echo "
			<form action='src/php/hashtag_set.php' method='post'>
				Hashtag: <input type='text' name='hash_name' list='hash_list'>
				<datalist id='hash_list'>
			";


// vorschläge beim eintippen
include 'src/php/search_suggestion.php';

		echo "
		</datalist>
				<input type='hidden' name='bild_id' value='$bild_id' />
				<input type='submit' value='add'>
			</form>
";

	}
}

include 'src/include/hashtags_gesetzt.php';



// include 'src/include/hashtags_recently.php';
include 'src/include/hashtags_default.php';

// echo "<br><a href='01_gallery.php?funk=filter_exclude&exclude=9031,9143,379,381,384,9141,133,490,9099,358#$bild_id'>Gallery nur mit Bilder von Myanmar (13181)<br></a></li>";
// echo "<br><a href='../allHash.php?bild_id=$bild_id'>Liste mit allen Hashtags<br></a></li>";
// echo "<br><a href='https://slges.de/'>Home<br></a></li>";
// echo "<br><a href='https://slges.de/notes.php'>Notizen<br></a></li>";

echo "<a href='.'><button type='button' class='button is-success'>Home</button></a>";
echo "<a href='01_gallery.php?funk=filter_exclude&exclude=9031,9143,379,381,384,9141,133,490,9099,358#$bild_id'><button type='button' class='button is-link'>Galerie</button></a>";
echo "<a href='allHash.php?bild_id=$bild_id'><button type='button' class='button is-link'>Hashtags</button></a>";
echo "<a href='notes.php?bild_id=$bild_id'><button type='button' class='button is-link'>Notizen</button></a>";
// echo "<a href='/lessHash.php?bild_id=$bild_id'><button type='button' class='button is-link'>Hashtags anzahl</button></a>";
echo "<a href='01_gallery.php?&hash_used=0'><button type='button' class='button is-link'>Hashtags Anzahl</button></a>";


//<span class='hashColl'><a class='text-deco' href='01_search_gallery.php?hash_id=$hash_ids'><span class='count'>$count_hash</span> $hash_names<a class='text-deco hashPlus' href='01_insert.php?hash_id=$hash_ids&bild_id=$bild_id'>+</a></a></span>

echo "</div>";

echo "</div>";
$pageTitle = $bild_id; // Call this in your pages' files to define the page title

$pageContents = ob_get_contents (); // Get all the page's HTML into a string
ob_end_clean (); // Wipe the buffer

// Replace <!--TITLE--> with $pageTitle variable contents, and print the HTML
echo str_replace ('<!--TITLE-->', $pageTitle, $pageContents);

// Tastatur Steuerung
include 'src/include/keyboard-control.php';


include 'src/php/conn_close.php';
?>

</section>
</body>
</html>
