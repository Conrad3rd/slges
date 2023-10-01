<?php include("../database.php");?>
<?php include("./elements/header.php");?>


  <h1>PDO Test</h1>

  <?php
    $res = fetch_posts();
  ?>

  <table>

    <?php foreach ($res as $row) : ?>
      <tr>
        <td><?php echo "$row[id]";?></td>
        <td><?php echo "$row[pfad]";?></td>
      </tr>
    <?php endforeach ?>

  </table>


  <?php include("./elements/footer.php");?>
