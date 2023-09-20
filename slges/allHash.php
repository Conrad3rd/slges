<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/assets/css/bulma.min.css">

  <title>Alle Hashtags</title>
</head>
<body>

</body>
</html>



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

<?php
  include 'src/php/var.php';
  include 'src/php/conn_open.php';
  $hashCounter = 1;

  echo "<a href='/'><button type='button' class='button is-success'>Home</button></a>";

  if (isset($_GET['bild_id'])){
    $bild_id = $_GET['bild_id'];

    echo "<a href='01_viewer.php?id=$bild_id'><button type='button' class='button is-link'>zurück</button></a>";
  }


  // https://slges.de/01_gallery.php?funk=filter_hash&hash_name=Katze
  $sql = "SELECT * FROM `hashs` ORDER BY `hash_id` DESC";
  $result = $conn->query($sql);
  // $count = $conn->mysqli::count($sql);


  $row_cnt = $result->num_rows;

  printf("Es gibt inzwischen  %d Hashtags. Weiter so!!!\n", $row_cnt);


  if ($result->num_rows > 0) {
    echo "<table>";
      echo "<tr>";
        echo "<th>";
          echo "Nr";
        echo "</th>";
        // echo "<th>";
        //   echo "Id";
        // echo "</th>";
        echo "<th align='left'>";
          echo "Hashtags";
        echo "</th>";
      // echo "<tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
          if ("$row[hash]" != "xxx") {
            echo "<tr>";
              echo "<td>";
                echo $row_cnt--;
              echo "</td>";

              // echo "<td>";
              //   echo $row['hash_id'];
              // echo "</td>";
              // $hash123 = $row[hash];

                // echo "";
                echo "<td><a href='01_gallery.php?funk2=filter_hash&hash_name=$row[hash]'>$row[hash]</a></td>";

                // echo "</td></a>";


              // echo "<td>";
              //   echo "<a href='01_gallery.php?funk=filter_hash&hash_name=$row[hash]'>$row[hash]</a>";
              // echo "</td>";
            echo "</tr>";
          }
        }

    echo "</table>";
    // $hashCounter++;
  }
  // echo $hash_name;
  // /home/conrad/RemoteMounts/slge/src/php/hashtag_set.php
  // src/php/hashtag_set.php
  include 'src/php/conn_close.php';
?>
