<?php
  session_start();
  include 'var.php';
  include 'conn_open.php';
  // echo "hello";

  if (isset($_POST["bild_id"])) {
    $bild_id = $_POST['bild_id'];
    // echo "slkdfjkl";
  }
  if (isset($_GET['bild_id'])){
    $bild_id = $_GET['bild_id'];
  }



  # add new Hash
  # set $hash_id from $hash_name
  if (isset($_POST['hash_name'])){
    $hash_name = $_POST['hash_name'];

    # check if entry alredy exist
    $sql = "SELECT * FROM hashs WHERE hash = '$hash_name'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      # set $hash_id from $hash_name
      $sql = "SELECT hash_id FROM hashs WHERE hash='$hash_name'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          $hash_id = $row['hash_id'];
        }
      }
    } else {
    # add new Hash
    $sql = "INSERT INTO hashs (hash) VALUES ('$hash_name')";
    mysqli_query($conn,$sql);
    // header('Location: ' . $_SERVER['HTTP_REFERER']);

    }

  }



  // get Hash Name from Hash ID
  //if (isset($_GET['hash_name'])){
  //	$hash_name = $_GET['hash_name'];
  //	$sql = "SELECT hash_id FROM hashs WHERE hash='$hash_name'";
  //	$result = $conn->query($sql);
  //	if ($result->num_rows > 0) {
  //		// output data of each row
  //		while($row = $result->fetch_assoc()) {
  //			$hash_id = $row['hash_id'];
  //		}
  //	}
  //}




  //if (isset($_POST['hash_id'])){
  //$hash_id = $_POST['hash_id'];
  //}






  if (isset($_GET['hash_id'])){
  $hash_id = $_GET['hash_id'];
  }


  if (isset($_GET['d_hash_id'])){
  $hash_id = $_GET['d_hash_id'];
  }

  //unset($_SESSION['eins']);
  //unset($_SESSION['zwei']);
  //unset($_SESSION['drei']);
  //unset($_SESSION['vier']);
  //unset($_SESSION['fünf']);
  //unset($_SESSION['sechs']);
  //unset($_SESSION['sieben']);
  //unset($_SESSION['acht']);
  //unset($_SESSION['neun']);
  //unset($_SESSION['zehn']);





  $eins = $_SESSION['eins'];
  $zwei = $_SESSION['zwei'];
  $drei = $_SESSION['drei'];
  $vier = $_SESSION['vier'];
  $fünf = $_SESSION['fünf'];
  $sechs = $_SESSION['sechs'];
  $sieben = $_SESSION['sieben'];
  $acht = $_SESSION['acht'];
  $neun = $_SESSION['neun'];
  $zehn = $_SESSION['zehn'];


  if (!isset($_GET['d_hash_id'])){

    if ($hash_id != $eins and
      $hash_id != $zwei and
      $hash_id != $drei and
      $hash_id != $vier and
      $hash_id != $fünf and
      $hash_id != $sechs and
      $hash_id != $sieben and
      $hash_id != $acht and
      $hash_id != $neun and
      $hash_id != $zehn
    )
    {
      //		$_SESSION['zehn'] = $neun ;
      //		$_SESSION['neun'] = $acht ;
      //		$_SESSION['acht'] = $sieben ;
      //		$_SESSION['sieben'] = $sechs ;
      //		$_SESSION['sechs'] = $fünf ;
      //		$_SESSION['fünf'] = $vier ;
      //		$_SESSION['vier'] = $drei ;
      //		$_SESSION['drei'] = $zwei ;
      //		$_SESSION['zwei'] = $eins ;
      //		$_SESSION['eins'] = $hash_id ;


      $_SESSION['eins'] = $hash_id ;
      $_SESSION['zwei'] = $eins ;
      $_SESSION['drei'] = $zwei ;
      $_SESSION['vier'] = $drei ;
      $_SESSION['fünf'] = $vier ;
      $_SESSION['sechs'] = $fünf ;
      $_SESSION['sieben'] = $sechs ;
      $_SESSION['acht'] = $sieben ;
      $_SESSION['neun'] = $acht ;
      $_SESSION['zehn'] = $neun ;
    }
  }


  $sql = "INSERT INTO bilder_hashs (hash_id, bild_id) VALUES ('$hash_id', '$bild_id')";
  // $conn->exec($sql);
  if ($conn->query($sql) === TRUE) {
  	// echo "hello yes";
    header('Location: ' . $_SERVER['HTTP_REFERER']);
  }

  else {
    // echo "hello";
  	header('Location: ' . $_SERVER['HTTP_REFERER']);
    // echo "Error: " . $sql . "<br>" . $conn->error;
  }

  include 'conn_close.php';


?>
