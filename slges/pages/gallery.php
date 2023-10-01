<?php include("../database.php");?>
<?php include("./elements/header.php");?>


  <h1>PDO Test2</h1>

  <?php
    $res = fetch_images();
  ?>

  <table>

    <?php foreach ($res as $row) : ?>
      <tr>
        <td><?php echo "$row[id]";?></td>
        <td>
          <a href="../sl_Esche/L/<?php echo "$row[pfad]";?>">
            <?php echo "$row[pfad]";?>
          </a>
          </td>
        </tr>
    <?php endforeach ?>

  </table>


  <?php include("./elements/footer.php");?>
