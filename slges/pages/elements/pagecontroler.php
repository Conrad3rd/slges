<?php
  function getPosion() {
    if(isset($_GET['page'])){
      return $_GET["page"];
    }
  }

  function getImagePerPage() {
    $page = getPosion();

    if(isset($_GET['ipp'])){
      $steps = $_GET["ipp"];
      return $_GET["ipp"];
    }
  }

  function pageNumber() {
    $page = getPosion();
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
    $page = getPosion();
    $ipp = getImagePerPage();

    $sumHashTags = 17009;
    $nextPage = $page;
    $prevPage = $page;

    $nextPage = ++$nextPage;
    $prevPage = --$prevPage;


    $string = "<div>Seite: $page</div>
                <a href='?page=$prevPage&ipp=$ipp'><button type='button' class='button is-success'>prev</button></a>
                ===
                <a href='?page=$nextPage&ipp=$ipp'><button type='button' class='button is-success'>next</button></a>
                </div>";
    return $string;

  }
?>
