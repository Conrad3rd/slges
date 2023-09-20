<?php
function alle_bilder($conn, $small) {
    $sql = "SELECT id, pfad FROM Bilder";
    return pull_data($conn, $sql, $small);
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
    return pull_data($conn, $sql, $small);
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
            $output .= "\r\n"."<div id='$bild_id' class='k'><div><a href='01_viewer.php?id=$bild_id'><img src='$small$pfad' alt='img $bild_id' loading='lazy'></a><br><div class='t'>$bild_id</div></div></div>";
            array_push($hits, $bild_id);
        }
  } else {
        $output = "0 results";
    }

    $hits = count($hits);
    return [$hits, $output];

}



















// TEMPORÄRE FUNKTION

//http://192.168.1.27/01_gallery.php?funk=filter_compare&bild_id=1
//
//function filter_compare($conn, $small) {
// //set_time_limit($time_in_second); // 0 for unlimited time
//set_time_limit(300);
//            $bild1 = "sl_Esche/S/Slg.11/Karton_QA-VZ/QP/00000013.jpg";
//            $bild1 = "sl_Esche/S/Slg.01/1-5.Kasten_02/00000052.jpg";
//
//
//
//
// //    $sql = "SELECT id, pfad FROM Bilder WHERE id IN (SELECT bild_id FROM bilder_hashs WHERE hash_id IN (SELECT hash_id FROM hashs WHERE hash = 'Kalibrierung')) ORDER BY `Bilder`.`id` ASC";
// //    $sql = "SELECT id, pfad FROM Bilder";
//    $sql = "SELECT pfad, b.id FROM Bilder b LEFT JOIN bilder_hashs bh ON bh.bild_id = b.id AND bh.hash_id IN (255,379,133,9031,381,384,9099,8896,490,300,312,3959,301,317) WHERE bh.hash_id IS NULL ORDER BY `b`.`id` ASC";
//    $result = $conn->query($sql);
//    $output = '';
//    $hits = [];
//    if ($result->num_rows > 0) {
//        // output data of each row
//        while($row = $result->fetch_assoc()) {
//            $pfad = $row['pfad'];
//            $bild_id = $row['id'];
//
//
//
//
//
//            // read in the images
//
//            $bild2 = $small.$pfad;
//            // init the image objects
//            $image1 = new imagick();
//            $image2 = new imagick();
//            // set the fuzz factor (must be done BEFORE reading in the images)
//            $image1->SetOption('fuzz', '10%');
//            $image1->readImage($bild1);
//            $image2->readImage($bild2);
//
//
//
//            // compare the images using METRIC=1 (Absolute Error)
//            $result1 = $image1->compareImages($image2, 1);
// //            $output .= "image $bild_id = " . $result1[1] . "<br>";
//
//            if ( $result1[1] < 7054 ) {
//                $output .= "\r\n"."<div id='$bild_id' class='k'><div><a href='01_viewer.php?id=$bild_id'><img src='$small$pfad' alt='img $bild_id' loading='lazy'></a><br><div class='t'>$bild_id / $result1[1]</div></div></div>";
//                array_push($hits, $bild_id);
//
//
//                $sql = "INSERT INTO bilder_hashs (hash_id, bild_id) VALUES ('9031', '$bild_id')";
//                //$conn->exec($sql);
//                if ($conn->query($sql) === TRUE) {
//	                $eins = 1;
//                }
//
//
//
//             }
// //            $output .= "\r\n"."<div id='$bild_id' class='k'><div><a href='01_viewer.php?id=$bild_id'><img src='$small$pfad' alt='img $bild_id' loading='lazy'></a><br><div class='t'>$bild_id</div></div></div>";
//
//
//
//
//
//        }
//  } else {
//        $output = "0 results";
//    }
//
//    $hits = count($hits);
//    return [$hits, $output];
//
//}
//
//
//



















// TEMPORÄRE FUNKTION
//function filter_excludeM($conn, $small) {
//    $sql = "SELECT pfad, b.id FROM Bilder b LEFT JOIN bilder_hashs bh ON bh.bild_id = b.id AND bh.hash_id IN (255,379,133,9031,381,384,9099,8896,490,9143,9141) WHERE bh.hash_id IS NULL ORDER BY `b`.`id` ASC";
//    $result = $conn->query($sql);
//    $output = '';
//    $hits = [];
//    if ($result->num_rows > 0) {
//        // output data of each row
//        while($row = $result->fetch_assoc()) {
//            $pfad = $row["pfad"];
//            $bild_id = $row["id"];
//            $output .= "\r\n"."<div id='$bild_id' class='k'><div><a href='01_viewer.php?id=$bild_id'><img src='$small$pfad' alt='img $bild_id' loading='lazy'></a><br><div class='t'>$bild_id</div></div></div>";
//            array_push($hits, $bild_id);
//
//
//
//                $sql1 = "INSERT INTO bilder_hashs (hash_id, bild_id) VALUES ('255', '$bild_id')";
//                //$conn->exec($sql);
//                if ($conn->query($sql1) === TRUE) {
//	                $eins = "OK 123";
//                } else {
//	                $eins = "fehler 123";
//                }
//                echo $eins;
//
//
//        }
//  } else {
//        $output = "0 results";
//    }
//
//    $hits = count($hits);
//    return [$hits, $output];
//
//}











?>
