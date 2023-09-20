<?php
  require_once 'src/php/conn_open.php';
  require_once 'src/php/var.php';
  if (isset($_GET['id'])){
    $id = $_GET['id'];
  }


  if (isset($_GET['hash_name'])){
    $hash_name = $_GET['hash_name'];
    $sql = "SELECT * FROM Bilder WHERE id IN (SELECT bild_id FROM bilder_hashs WHERE hash_id IN (SELECT hash_id FROM hashs WHERE hash = '$hash_name')) ORDER BY `Bilder`.`id` ASC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
      $hash_bilder = [];
      while($row = $result->fetch_assoc()) {
        array_push($hash_bilder, $row["id"]);
      }

      $prev = array_search($bild_id, $hash_bilder);
      $next = array_search($bild_id, $hash_bilder);

      if ($prev > 0) {
        $prev = $hash_bilder[--$prev];
      }


      if (!empty($prev)) {
          echo "<a href='01_viewer.php?hash_name=$hash_name&id=$prev'>prev</a>";
        } else {
          echo "prev";
        }


        echo " < $hash_name > ";

        $endOf = count($hash_bilder) - 1;
        if ($next < $endOf) {
          $next = $hash_bilder[++$next];
          echo "<a href='01_viewer.php?hash_name=$hash_name&id=$next'>next</a>";

        } else {
          echo "next";

        }
      }
  }










  // include '/var/www/html/src/php/conn_close.php';
?>
