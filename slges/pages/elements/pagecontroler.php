<?php
function getPosion() {
  if(isset($_GET['page'])){
    return $_GET["page"];
  }
}



  function paginator() {
    $page = getPosion();
    
    if(isset($_GET['ipp'])){
      $steps = $_GET["ipp"];
      $ipp = $_GET["ipp"];

      if($page == 1) {
        $position = $steps-$steps;
      } else if($page == 1) {
        $position = $steps;
      } else  {
        $position = $steps*$page;
      }

      $sumHashTags = 17009;
      $nextPage = $page;
      $prevPage = $page;

      $nextPage = ++$nextPage;
      $prevPage = --$prevPage;
      $string = "<div>Seite: $page</div>
                 <div style='margin-bottom: 20px;'><a href='?page=$prevPage&ipp=$ipp'>prev</a> === <a href='?page=$nextPage&ipp=$ipp'>next</a>
                 </div>";
      return $string;
    }
  }
?>
