<?php
// Nav Bar

if(isset($_POST['value']))
{
	$value = $_POST["value"];
	$hash_name = $_POST["hash_name"];


//	$add = $value . ", " .$hash_name;
	if (empty($value))
	{
		$add = '"' . $hash_name . '"';
	} else {
		$add = $value . ", " . '"' . $hash_name . '"';
}



} else {
	$add = "";

}






		echo "

<span>
	<form action='01_suche.php' method='post'>
		<fieldset>
		<legend>Hashtagsuche:</legend>
		<input type='text' name='hashs' value='$add' placeholder='Search...'>
		<button type='submit'>Suche</button>
	</form>


	<form action='01_suche.php' method='post'>
		<input type='text' placeholder='Wähle Hashtags...' name='hash_name' list='hashs'>
		<input type='hidden' name='value' value='$add'>
		<datalist id='hashs'>
";




$sql = "SELECT hash FROM `hashs`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
		$hashname = $row["hash"];
		echo "<option value='$hashname'> ";
  }
}

echo "
		</datalist>
		<button type='submit'>add Hashtag</button>
				</fieldset>
	</form>

</span>
		";



echo "<br><br>
<form action='01_suche.php' method='post'>
	<fieldset>
		<legend>In-Bild-Suche: Wasserfa|Lwin = Wasserfall in  Pyin Oo Lwin ;
		Wasserf|Lwin = kein ergebnis. Weil Wasserfest und Wasserfall gibt es nicht auf einem (1) Bild.</legend>


		<input type='text' name='fullsearch' value='' placeholder='Search...'>
		<button type='submit'>Suche</button>

	</fieldset>
</form>


";

echo "<br><br>
<form action='01_suche.php' method='post'>
	<fieldset>
		<legend>Freitextsuche: wasser = Wasser, Wasserfest, Wasserfall </legend>


		<input type='text' name='freitext' value='' placeholder='Search...'>
		<button type='submit'>Suche</button>

	</fieldset>
</form>


";




?>
