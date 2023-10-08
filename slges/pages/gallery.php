<?php include("../init.php");?>
<?php include("./elements/header.php");?>
<?php include("./elements/pagecontroler.php");?>

<a href='/'><button type='button' class='button is-info'>Home</button></a>
<a href='../'><button type='button' class='button is-info'>Overview</button></a>

<h1>Gallery</h1>

<!-- Page per image  -->
<div class="text-center"><?php echo ppi(); ?></div>

<!-- Navigation previous picture and next picture -->
<div class="text-center"><?php echo paginator();?></div>

<!-- Load pictures from DB and set ipp + page -->
<?php
  $picturesRepository = new App\Picture\PicturesRepository($pdo);
  $res = $picturesRepository->fetchPictures(getImagePerPage(), pageNumber());
  // $res = fetch_images(getImagePerPage(), pageNumber());
?>

<?php foreach ($res as $row) : ?>
<?php
  // $id = $row['id'];
  $id = $row->id;
  $pfad = $row->pfad;
?>

<div class='card'>
  <a href='../01_viewer.php?id=<?php echo $id;?>'>
    <div><img src='<?php echo "../sl_Esche/S/$pfad";?>' alt="<?php echo $id ?>"></div>
    <div class="text-center nodeco"><?php echo $id;?></div>
  </a>
</div>

<?php endforeach ?>
<div style="clear: left;"></div>
<div class="text-center"><?php echo paginator();?></div>
<?php include("./elements/footer.php");?>
