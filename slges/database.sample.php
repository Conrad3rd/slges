<?php
  $pdo = new PDO(
    'mysql:host=database;dbname=DBNAME;charset=utf8',
    'USERNAME',
    'PSW'
  );

  $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  function fetch_images(int $ipp = 21, int $pageNumer = 20) {
    global $pdo;

    // $ipp = 22; // image per page
    // $image_id = 95;
    // $image_id = $image_id - ($ipp / 2);

    $stmt = $pdo->prepare("SELECT * FROM Bilder ORDER BY id ASC LIMIT :ipp OFFSET :pageNumer");
    $stmt->execute(['pageNumer' => $pageNumer, 'ipp' => $ipp]);
    return $stmt;
  }

  function fetch_image($id) {
    global $pdo;

    $stmt = $pdo->prepare("SELECT * FROM `Bilder` WHERE id = :id");
    $stmt->execute(['id' => $id]);
    return $stmt->fetch();
  }
?>
