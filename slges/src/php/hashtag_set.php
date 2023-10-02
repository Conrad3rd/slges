<?php
  session_start();
  include 'var.php';
  include 'conn_open.php';

  // echo "<h1>under construction</h1><br>";

  function getHashIdFromHashName($hash_name) {
    #global $hash_id;
    global $conn;

    # set $hash_id from $hash_name
    $sql = "SELECT hash_id FROM hashs WHERE hash='$hash_name'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        return $hash_id = $row['hash_id'];
      }
    }
  }

  function goBack() {
    return header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
  }

  if (isset($_POST['bild_id'])){
    $bild_id = $_POST['bild_id'];
    // echo "<code>   Bild ID = $bild_id POST<br></code>";
  }

  if (isset($_GET['bild_id'])){
    $bild_id = $_GET['bild_id'];
    // echo "<code>   Bild ID = $bild_id GET bild_id<br></code>";


  }

  if (isset($_GET['hash_id'])){
    $hash_id = $_GET['hash_id'];
    // echo "<code>   Hash ID = $hash_id GET hash_id<br></code>";

    $sql = "SELECT hash FROM hashs WHERE hash_id ='$hash_id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        $hash_name = $row['hash'];
      }
    }

    // echo $hash_name;
  }

  if (isset($_POST['hash_name'])){
    $hash_name = $_POST['hash_name'];
    // echo "<code>HashName = $hash_name<br></code>";
  }

  # check if Hashname alredy exist
  $sql = "SELECT * FROM hashs WHERE hash = '$hash_name'";
  if (mysqli_num_rows(mysqli_query($conn, $sql)) > 0) {
    // echo "<code>HashName '$hash_name' alredy exist<br></code>";

    # get HashID from Hashname
    $hash_id = getHashIdFromHashName($hash_name);
    // echo "<code>HashNameF '$hash_name' = $hash_id<br></code>";

  } else {
    // // echo "<code>HashName '$hash_name' does not exist<br></code>";

    # Add new Hashname in DB and get HashID

    if (!empty($hash_name)) {
      // echo "xxxxxxxxxxxxxxx";
      $sql = "INSERT INTO hashs (hash) VALUES ('$hash_name')";
      mysqli_query($conn,$sql);
      $hash_id = getHashIdFromHashName($hash_name);
      // echo "<code>NewHashNameF '$hash_name' = $hash_id<br></code>";
   }


  }

  # check if Hashname + HashID alredy exist
  // echo "Bild1 = $bild_id<br>";
  // echo "Hash = $hash_id<br>";
  $sql = "SELECT * FROM bilder_hashs WHERE hash_id = '$hash_id' AND bild_id = '$bild_id'";
  // $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows(mysqli_query($conn, $sql)) > 0) {
    // echo "schon vorhanden";
    // go back to view
    goBack();
  } else {
    // add Hashname + HashID
    if (!empty($hash_name)) {
      // echo "noch nicht vorhanden";
      $sql = "INSERT INTO bilder_hashs (hash_id, bild_id) VALUES ('$hash_id', '$bild_id')";

      mysqli_query($conn,$sql);
      // go back to view
      goBack();
    }
  }








  include 'conn_close.php';

?>
