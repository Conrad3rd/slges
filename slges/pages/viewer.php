<?php include("../database.php");?>
<?php include("./elements/header.php");?>
<a href="../pages/gallery.php">new Gallery</a>

<h1>Viewer</h1>


<?php
  if(isset($_GET['id'])){
    $id = $_GET["id"];
  }
?>

<?php $res = fetch_image($id);?>
<?php $pfad = $res["pfad"];?>
<?php $gid = $res["id"];?>



<img src="<?php echo "../sl_Esche/S/$pfad";?>" alt="img">
<?php echo $gid;?>




<?php include("./elements/footer.php");?>
