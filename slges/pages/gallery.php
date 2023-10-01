<?php include("../database.php");?>
<?php include("./elements/header.php");?>


  <h1>PDO Test2</h1>

  <?php $res = fetch_images();?>


    <?php foreach ($res as $row) : ?>
      <?php
        $id = $row["id"];
        $pfad = $row["pfad"];
      ?>
        <a href='viewer.php?id=<?php echo $id;?>'><img src='<?php echo "../sl_Esche/S/$pfad";?>' alt="<?php echo $id ?>"><?php echo $id;?></a>

    <?php endforeach ?>


  <?php include("./elements/footer.php");?>
