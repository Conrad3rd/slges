<?php
function alle_bilder($conn, $small) {
    $sql = "SELECT id, pfad FROM Bilder";
    return pull_data($conn, $sql, $small);
}

function sortByHashCount($conn, $small) {
  // $sql = "SELECT id, count(*) as NUM FROM Bilder WHERE IN (SELECT bild_id FROM bilder_hashs GROUP BY bild_id ORDER BY `NUM` ASC, bild_id)";
  $sql = "SELECT bild_id, count(*) as NUM FROM bilder_hashs GROUP BY bild_id ORDER BY `NUM` ASC, bild_id";
  return pull_data2($conn, $sql, $small);

}

function filter_hash($conn, $small, $hash_id) {
    $sql = "SELECT id, pfad FROM Bilder WHERE id IN (SELECT bild_id FROM bilder_hashs WHERE hash_id = $hash_id) ORDER BY Bilder.id ASC ";
    return pull_data($conn, $sql, $small);
}

function filter_exclude($conn, $small, $exclude) {
    $sql = "SELECT pfad, b.id FROM Bilder b LEFT JOIN bilder_hashs bh ON bh.bild_id = b.id AND bh.hash_id IN ($exclude) WHERE bh.hash_id IS NULL ORDER BY `b`.`id` ASC";
    return pull_data($conn, $sql, $small);
}

function filter_hash_name($conn, $small, $hash_name) {
    $sql = "SELECT id, pfad FROM Bilder WHERE id IN (SELECT bild_id FROM bilder_hashs WHERE hash_id IN (SELECT hash_id FROM hashs WHERE hash = '$hash_name')) ORDER BY `Bilder`.`id` ASC";
    return pull_data($conn, $sql, $small, $hash_name);
}

function filter_hash_name2($conn, $small, $hash_name) {
  $sql = "SELECT id, pfad FROM Bilder WHERE id IN (SELECT bild_id FROM bilder_hashs WHERE hash_id IN (SELECT hash_id FROM hashs WHERE hash = '$hash_name')) ORDER BY `Bilder`.`id` ASC";
  return pull_data3($conn, $sql, $small, $hash_name);
}


function pull_data($conn, $sql, $small) {
    $result = $conn->query($sql);
    $output = '';
    $hits = [];
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $pfad = $row["pfad"];
            $bild_id = $row["id"];
            if (!isset($hash_name)) {
              $hash_name = "none";
            }
            $output .= "\r\n"."<div id='$bild_id' class='k'><div><a href='01_viewer.php?hash_name=$hash_name&id=$bild_id'><img src='$small$pfad' alt='img $bild_id' loading='lazy'></a><br><div class='t'>$bild_id</div></div></div>";
            array_push($hits, $bild_id);
        }
  } else {
        $output = "0 results";
    }

    $hits = count($hits);
    return [$hits, $output];
}

function pull_data3($conn, $sql, $small, $hash_name) {
  $result = $conn->query($sql);
  $output = '';
  $hits = [];
  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
          $pfad = $row["pfad"];
          $bild_id = $row["id"];
          if (!isset($hash_name)) {
            $hash_name = "none";
          }
          $output .= "\r\n"."<div id='$bild_id' class='k'><div><a href='01_viewer.php?hash_name=$hash_name&id=$bild_id'><img src='$small$pfad' alt='img $bild_id' loading='lazy'></a><br><div class='t'>$bild_id</div></div></div>";
          array_push($hits, $bild_id);
      }
} else {
      $output = "0 results";
  }

  $hits = count($hits);
  return [$hits, $output];
}

function pull_data2($conn, $sql, $small) {
  $result = $conn->query($sql);
  $output = '';
  $hits = [];
  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        // $pfad = $row["pfad"];
        $bild_id = $row["bild_id"];
        $num = $row["NUM"];
        $sql2 = "SELECT pfad FROM `Bilder` WHERE id = $bild_id";

        $result2 = $conn->query($sql2);
        if ($result2->num_rows > 0) {
          // output data of each row

          while($row = $result2->fetch_assoc()) {
            $pfad = $row["pfad"];
          }
        }

          $output .= "\r\n"."<div id='$bild_id' class='k'><div><a href='01_viewer.php?id=$bild_id'><img src='$small$pfad' alt='img $bild_id' loading='lazy'></a><br><div class='t'>$bild_id ($num)</div></div></div>";
          array_push($hits, $bild_id);
      }
} else {
      $output = "0 results";
  }

  $hits = count($hits);
  return [$hits, $output];
}

?>
<!-- (3) -->
