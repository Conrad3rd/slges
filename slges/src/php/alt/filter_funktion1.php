<?php


function alle_bilder($conn) {
    $sql = "SELECT id, pfad FROM Bilder";
    $result = $conn->query($sql);
    $output = '';
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
           $pfad = $row["pfad"];
           $bild_id = $row["id"];
           $output .= "\r\n"."<div id='$bild_id' class='k'><div><a href='01_viewer.php?id=$bild_id'><img src='$small$pfad' loading='lazy'></a><br><div class='t'>$bild_id</div></div></div>";
        }
  } else {
        $output = "0 results";
    }
    return $output;
}

function filter_hash($conn, $small, $hash_id) {
    $sql = "SELECT id, pfad FROM Bilder WHERE id IN (SELECT bild_id FROM bilder_hashs WHERE hash_id = 255) ORDER BY `Bilder`.`id` ASC ";
    $result = $conn->query($sql);
    $output = '';
    $hits = [];
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $pfad = $row["pfad"];
            $bild_id = $row["id"];
            $output .= "\r\n"."<div id='$bild_id' class='k'><div><a href='01_viewer.php?id=$bild_id'><img src='$small$pfad' loading='lazy'></a><br><div class='t'>$bild_id</div></div></div>";
            array_push($hits, $bild_id);
        }
  } else {
        $output = "0 results";
    }
    $hits = count($hits);
//    $hits = ksort($output);
    return [$hits, $output];
}

function filter_exclude($conn, $small, $exclude) {
    $sql = "SELECT pfad, b.id FROM Bilder b LEFT JOIN bilder_hashs bh ON bh.bild_id = b.id AND bh.hash_id IN ($exclude) WHERE bh.hash_id IS NULL";
    $result = $conn->query($sql);
    $output = '';
    $hits = [];
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $pfad = $row["pfad"];
            $bild_id = $row["id"];
            $output .= "\r\n"."<div id='$bild_id' class='k'><div><a href='01_viewer.php?id=$bild_id'><img src='$small$pfad' loading='lazy'></a><br><div class='t'>$bild_id</div></div></div>";
            array_push($hits, $bild_id);
        }
  } else {
        $output = "0 results";
    }
    $hits = count($hits);
    return [$hits, $output];
}





?>
