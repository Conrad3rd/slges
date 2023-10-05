<?php


    // if ($hash_id == 9099) {

    // }
    function goBack() {
      return header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
  $sql = "SELECT hash_id FROM `bilder_hashs` WHERE bild_id = $bild_id";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $hash_id = $row["hash_id"];
      echo $hash_id;
      if ($hash_id == 9099) {
        goBack();
      }
    }
  }
  include("pages/elements/pagecontroler.php");
  $page = goToImage($bild_id);
// Nav Bar
// <li><a href='01_gallery.php#$bild_id'>Alle Bilder</a></li>
		echo "<div class='left'>";
		echo "
			<ul>
				<li><a href='pages/gallery.php?page=$page&ipp=33'>Alle Bilder</a></li>
				<li><a href='01_viewer.php?id=$bevor'><</a></li>
				<li><a href='01_viewer.php?id=$next'>></a></li>
				<li id='media_hide'><a href='01_zoomer.php?id=$bild_id'>zoom</a></li>
				<li>

<div class='search-container'>
	<form action='01_gallery.php' method = 'post'>
		<input type='text' placeholder='Search..' name='hash_name' list='hashs'>
		<datalist id='hashs'>
";


require_once 'search_suggestion.php';

echo "
		</datalist>
		<button type='submit'><i class='fa fa-search'></i></button>
	</form>
</div>


				</li>
				<li><a href='01_suche.php'> erweitert Suche</a></li>
			</ul>
		";
		echo "<div class='K_container'>
<img src='$medium$pfad' alt='Bild' class='responsive'>";
		echo "
			<a href='01_viewer.php?id=$next'><div class='K_right'></div></a>
			<a href='01_viewer.php?id=$bevor'><div class='K_left'></div></a>
			</div>
		";
		echo "</div>";
?>
