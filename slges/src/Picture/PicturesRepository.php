<?php
namespace App\Picture;

use PDO;

class PicturesRepository {

  private $pdo;

  public function __construct(PDO $pdo) {
    $this->pdo = $pdo;
  }

  function fetchPictures(int $ipp = 21, int $pageNumer = 20) {

    // $ipp = 22; // image per page
    // $image_id = 95;
    // $image_id = $image_id - ($ipp / 2);

    $stmt = $this->pdo->prepare("SELECT * FROM Bilder ORDER BY id ASC LIMIT :ipp OFFSET :pageNumer");
    $stmt->execute(['pageNumer' => $pageNumer, 'ipp' => $ipp]);
    return $stmt;
  }

  function fetchPicture($id) {

    $stmt = $this->pdo->prepare("SELECT * FROM `Bilder` WHERE id = :id");
    $stmt->execute(['id' => $id]);
    return $stmt->fetch();
  }
}

?>
