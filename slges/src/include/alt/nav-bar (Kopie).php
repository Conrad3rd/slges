<?php
// Nav Bar
		echo "<div class='left'>";
		echo "
			<ul>
				<li><a href='01_gallery.php#$bild_id'>Alle Bilder</a></li>
				<li><a href='01_viewer.php?id=$bevor'><</a></li>
				<li><a href='01_viewer.php?id=$next'>></a></li>
				<li><a href='01_zoomer.php?id=$bild_id'>zoom</a></li>
				<li><a href='#about'></a></li>
				<li>

<div class='search-container'>
    <form action='/action_page.php'>
      <input type='text' placeholder='Search..' name='search'>
      <button type='submit'><i class='fa fa-search'></i></button>
    </form>
  </div>




				</li>
			</ul>
		";
		echo "<img src='$medium$pfad' alt='Nature' class='responsive'>";
		echo "</div>";
?>
