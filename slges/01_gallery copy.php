<!DOCTYPE html>
<html>
  <head>
    <title>Gallerie</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/gallery.css" type="text/css" />
  </head>
<body>

<?php
require_once 'src/php/conn_open.php';
require_once 'src/php/var.php';
require_once 'src/php/filter_funktion.php';
?>
<div class="gallery">
<?php


  // Prüft ob POST oder GET gesetzt ist
  if(isset($_GET['funk'])){
      $value = $_GET["funk"];
      runfunGET($value, $conn, $small);
  } else if(isset($_POST['hash_name'])) {
        $hash_name= $_POST["hash_name"];
        getHahsID($conn, $small, $hash_name);

  } else {
        $array = alle_bilder($conn, $small);
              echo "Es gibt " . $array[0] . " Treffer<br>";
        echo $array[1];
    }


/* ++++++++++++++++++++++++++++++++++++++
Funktionen die mit GET aufgerufen werden
++++++++++++++++++++++++++++++++++++++.*/
  function runfunGET($value, $conn, $small) {

    // filter_hash erwartet den Hashname
    // (?funk=filter_hash&hash_name=Myanmar)
    if ( $value == "filter_hash" ) {
      if(isset($_GET['hash_name'])){
        $hash_name = $_GET["hash_name"];
        $array = filter_hash_name($conn, $small, $hash_name);
        echo "Es gibt " . $array[0] . " Bilder mit dem Hashtag '$hash_name'<br>";
        echo $array[1];
      }
    }


    // filter_exclude erwartet hash_IDs
    // (?funk=filter_exclude&exclude=255,9143,9031,9141,133)
    if ($value == "filter_exclude") {
      if(isset($_GET['exclude'])){
        $exclude = $_GET["exclude"];
        $array = filter_exclude($conn, $small, $exclude);
        echo "Es gibt " . $array[0] . " Treffer<br>";
        echo $array[1];
      }
    }


  }

  /* ++++++++++++++++++++++++++++++++++++++
  Funktionen die mit POST aufgerufen werden
  ++++++++++++++++++++++++++++++++++++++.*/
  function getHahsID($conn, $small, $hash_name) {
    $array = filter_hash_name($conn, $small, $hash_name);
    echo "Es gibt " . $array[0] . " Treffer mit '$hash_name'<br>";
    echo $array[1];
  }


?>
</div>

</body>
</html>
