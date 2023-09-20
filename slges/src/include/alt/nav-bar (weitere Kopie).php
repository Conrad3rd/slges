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

<form onsubmit='return false;'>
  <table>
    <tr>
      <td>Input:</td>
      <td>
        <!-- Input form -->
        <input id='text' type='text' name='pattern' value='' autocomplete='off' size='10' style='display: block'>
        <!-- suggestion area -->
        <div id='suggest' style='display:none;'></div>
      </td>
    </tr>
  </table>
</form>
				</li>
			</ul>
		";
		echo "<img src='$medium$pfad' alt='Nature' class='responsive'>";
		echo "</div>";
?>
