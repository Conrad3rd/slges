<?php
  $pdo = new PDO(
    'mysql:host=database;dbname=DBNAME;charset=utf8',
    'USERNAME',
    'PSW'
  );

  $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

  function fetch_images() {
    global $pdo;

    $image_id = 95;
    $image_id = $image_id - 6;

    $stmt = $pdo->prepare("SELECT * FROM Bilder ORDER BY id ASC LIMIT 11 OFFSET :image_id");
    $stmt->execute(['image_id' => $image_id]);
    return $stmt;
    // return $pdo->query("SELECT * FROM Bilder ORDER BY id ASC LIMIT 11 OFFSET $image_id");
    // return $pdo->query("SELECT * FROM `Bilder`");
  }

  function fetch_image($id) {
    global $pdo;

    $stmt = $pdo->prepare("SELECT * FROM `Bilder` WHERE id = :id");
    $stmt->execute(['id' => $id]);
    return $stmt->fetch();
    /*
    */

    /*
    $query = "SELECT * FROM `Bilder` WHERE id = '{$id}'";
    var_dump($query);
    $q = $pdo->query($query);
    return $q->fetch();
    */
  }
?>
