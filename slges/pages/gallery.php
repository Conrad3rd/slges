<?php include("../database.php");?>
<?php include("./elements/header.php");?>

<a href="/">Home</a>
<a href="../">overview</a>
<h1>Gallery</h1>

<?php

  if(isset($_GET['page'])){
    $page = $_GET["page"];
    echo "Seite: $page  <br>";
  }


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
    $previousPage = $page;

    $nextPage = ++$nextPage;
    $previousPage = --$previousPage;
    echo "<a href='?page=$previousPage&ipp=$ipp'>prev</a> === <a href='?page=$nextPage&ipp=$ipp'>next</a> <br> <br> <br>";

  }

?>

<?php $res = fetch_images();?>
<?php foreach ($res as $row) : ?>
<?php
  $id = $row["id"];
  $pfad = $row["pfad"];
?>



<div style="float:left; margin: 5px">
  <a href='viewer.php?id=<?php echo $id;?>'>


  <div><img src='<?php echo "../sl_Esche/S/$pfad";?>' alt="<?php echo $id ?>"></div>
  <div><?php echo $id;?></div>
</a>
</div>


<?php endforeach ?>
<div style="clear: left;"></div>
<?php include("./elements/footer.php");?>
