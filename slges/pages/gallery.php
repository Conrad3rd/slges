<?php include("../init.php");?>
<?php include("./elements/header.php");?>
<?php include("./elements/pagecontroler.php");?>

<a href="/">Home</a>
<a href="../">overview</a>
<h1>Gallery</h1>

<!-- <button onclick="myFunction()">Click me</button>
<p id="demo"></p> -->
<!-- Page per image  -->
<div class="text-center"><?php echo ppi(); ?></div>



<div class="text-center"><?php echo paginator();?></div>


<?php
  $picturesRepository = new App\Picture\PicturesRepository;
  $res = $picturesRepository->fetchPictures(getImagePerPage(), pageNumber());
  // $res = fetch_images(getImagePerPage(), pageNumber());
?>

<?php foreach ($res as $row) : ?>
<?php
  $id = $row["id"];
  $pfad = $row["pfad"];
?>


<!--
<?php
  $sample .= "\r\n".
  "<div id='$bild_id' class='k'>
    <div>
      <a href='01_viewer.php?hash_name=$hash_name&id=$bild_id'>
        <img src='$small$pfad' alt='img $bild_id' loading='lazy'>
      </a>
      <br>
      <div class='t'>
        $bild_id
      </div>
    </div>
  </div>";
?>
-->

<div class='card'>
  <!-- <a href='viewer.php?id=<?php echo $id;?>'> -->
  <a href='../01_viewer.php?id=<?php echo $id;?>'>
    <div><img src='<?php echo "../sl_Esche/S/$pfad";?>' alt="<?php echo $id ?>"></div>
    <div class="text-center nodeco"><?php echo $id;?></div>
  </a>
</div>


<?php endforeach ?>
<div style="clear: left;"></div>
<div class="text-center"><?php
echo goToImage(7832);
echo paginator();


?></div>
<?php include("./elements/footer.php");?>
