

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/app.css">
  <title>GENERI</title>
</head>
<body>
  <!-- HEADER -->
  <?php include __DIR__."/partials/header.php" ?>
  <!-- HEADER -->
  <main>
    <?php 
      echo "Genere ".$_GET["genre"];
    ?>
  </main>
</body>
</html>



