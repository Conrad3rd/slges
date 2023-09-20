<?php
// Nav Bar


if(isset($_POST['value']))
{
	$value = ", " . $_POST["value"];
	$hash_name = $_POST["hash_name"];

	$add = $value . $hash_name ;

} else {
	$add = "";

}





		echo "

<span>
	<form action='01_suche_AND.php' method='post'>
		<input type='text' name='hashs' value='$add' placeholder='Search..'>
		<button type='submit'>Suche</button>
	</form>


	<form action='01_suche_AND.php' method='post'>
		<input type='text' placeholder='Search..'  name='hash_name' list='hashs'>
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
		<button type='submit'>wähle</button>
	</form>

</span>
		";
?>
