<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PDO Test</title>
</head>
<body>
  <h1>PDO Test</h1>
  <?php
    $pdo = new PDO('mysql:host=database;dbname=Sammlung', 'root', 'tiger')
  ?>
</body>
</html>
