<?php
  function getPosition() {
    if(isset($_GET['page'])){
      return $_GET["page"];
    }
  }

  function getImagePerPage() {
    $page = getPosition();

    if(isset($_GET['ipp'])){
      $steps = $_GET["ipp"];
      return $_GET["ipp"];
    }
  }

  function pageNumber() {
    $page = getPosition();
    $steps = getImagePerPage();
    if($page == 1) {
      return $steps-$steps;
    } else if($page == 1) {
      return $steps;
    } else  {
      return $steps*$page;
    }
  }

  function paginator() {
    $page = getPosition();
    $ipp = getImagePerPage();

    $sumHashTags = 17009;
    $nextPage = $page;
    $prevPage = $page;

    $nextPage = ++$nextPage;
    $prevPage = --$prevPage;


    $string =
      "<div>Seite: $page</div>
        <a href='?page=$prevPage&ipp=$ipp'><button type='button' class='button is-warning'>prev</button></a>
        ===
        <a href='?page=$nextPage&ipp=$ipp'><button type='button' class='button is-warning'>next</button></a>
        </div>
      ";
    return $string;

  }

  function ppi() {

    $prev = getImagePerPage() - 1;
    $next = getImagePerPage() + 1;
    $page = getPosition();

    $string = "
    <div>
      <a href='gallery.php?page=$page&ipp=$prev'><button type='button' class='button is-info'>-</button></a>
      <a href='gallery.php?page=$page&ipp=$next'><button type='button' class='button is-info'>+</button></a>
    </div>
    ";
    return $string;
  }

  function goToImage($image_id) {
    // if(isset($_GET['id'])){
    //   $image_id = $_GET["id"];
    // }

    $page = getPosition();
    $ipp = getImagePerPage();

    // $goToPage = (($page * $ipp)+($ipp/2));
    // $sumHashTags = 17009;
    $goToPage = floor($image_id / 33);
    // $goToPage = floor(7940 / $ipp);
    return $goToPage;
  }

?>
