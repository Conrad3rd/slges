<?php
$hash_id = $_GET['hash_id'];
$bild_id = $_GET['bild_id'];


include 'var.php';

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // sql to delete a record
  $sql = "DELETE FROM bilder_hashs WHERE `bilder_hashs`.`hash_id` = $hash_id AND bild_id = $bild_id";

  // use exec() because no results are returned
  $conn->exec($sql);
  header('Location: ' . $_SERVER['HTTP_REFERER']);

} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;


?>
