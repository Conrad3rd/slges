<!DOCTYPE html>
<html lang="de">
	<head>
		<title>Less Hashs</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="content-type" content="text/html" charset="utf-8" />
		<link rel="stylesheet" href="style.css" type="text/css" />
    <link rel="stylesheet" href="/assets/css/bulma.min.css">

    <style>
      th, td {
        padding: 2px 15px 2px 15px;
      }
      a {
        text-decoration: none;
        color: blue;
      }

      .button {
        margin: 5px 5px 5px 5px;
      }
  </style>
	</head>
<!--This is a comment. Comments are not displayed in the browser-->
<body>


<?php
  include 'src/php/var.php';
  include 'src/php/conn_open.php';

  echo "<a href='/'><button type='button' class='button is-success'>Home</button></a>";

  if (isset($_GET['bild_id'])){
    $bild_id = $_GET['bild_id'];

    echo "<a href='01_viewer.php?id=$bild_id'><button type='button' class='button is-link'>zurück</button></a>";
  }

echo "<br>";
$sql = "SELECT bild_id, count(*) as NUM FROM bilder_hashs GROUP BY bild_id ORDER BY `NUM` ASC, bild_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  echo "<table>";
  echo "<tr>";
    echo "<th>";
      echo "Anzahl";
    echo "</th>";
    // echo "<th>";
    //   echo "Id";
    // echo "</th>";
    echo "<th align='left'>";
      echo "Bildnummer";
    echo "</th>";
  echo "<tr>";



  while($row = $result->fetch_assoc()) {
			$Bild_id = $row["bild_id"];
			$Hash_id = $row["NUM"];

      echo "<tr>";
        echo "<td>$Hash_id</td><td><a href='https://slges.de/01_viewer.php?id=$Bild_id'>$Bild_id</a></td>";
      echo "</tr>";




// $sql2 = "SELECT COUNT(*) AS total FROM bilder_hashs WHERE hash_id=$hash_id;";
// $result2 = $conn->query($sql2);
// $data =  $result2->fetch_assoc();
// echo $hash_id . " = " .$data['total'] . "<br>";




}
} else {
			$hash_id = "<p>0 results</p>";
}

echo "</table>";





?>




<script>
</script>
<script type="text/javascript" src="javascript.js"></script>


</body>
</html>
