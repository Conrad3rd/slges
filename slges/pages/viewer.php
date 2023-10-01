<?php include("../database.php");?>
<?php include("./elements/header.php");?>
<h1>Viewer</h1>


<?php
  if(isset($_GET['id'])){
    $id = $_GET["id"];
  }
?>

<?php $res = fetch_image($id);?>
<?php var_dump($res);?>


<a href="../sl_Esche/L/">asdfs</a>



<?php foreach ($res as $row) : ?>
  <img src="<?php echo "../sl_Esche/S/$row[pfad]";?>" alt="img">
  <?php echo "../sl_Esche/L/$row[pfad]";?>
<?php endforeach ?>

<?php include("./elements/footer.php");?>
