<?php
function alle_bilder($conn, $small) {
    $sql = "SELECT id, pfad FROM Bilder";
    return pull_data([$hits, $output]);
    pull_data($conn, $sql);
}

function filter_hash($conn, $small, $hash_id) {
    $sql = "SELECT id, pfad FROM Bilder WHERE id IN (SELECT bild_id FROM bilder_hashs WHERE hash_id = $hash_id) ORDER BY Bilder.id ASC ";
    pull_data($conn, $sql, $small);
}

function filter_exclude($conn, $small, $exclude) {
    $sql = "SELECT pfad, b.id FROM Bilder b LEFT JOIN bilder_hashs bh ON bh.bild_id = b.id AND bh.hash_id IN ($exclude) WHERE bh.hash_id IS NULL";

    pull_data($conn, $sql, $small);
}

function pull_data($conn, $sql, $small) {
    $result = $conn->query($sql);

    $output = '';
    $hits = [];
    global $hits;
    global $output;
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $pfad = $row["pfad"];
            $bild_id = $row["id"];
            $output .= "\r\n"."<div id='$bild_id' class='k'><div><a href='01_viewer.php?id=$bild_id'><img src='$small$pfad' alt='img $bild_id' loading='lazy'></a><br><div class='t'>$bild_id</div></div></div>";
            array_push($hits, $bild_id);
        }
  } else {
        $output = "0 results";
    }

    $hits = count($hits);


}
?>
