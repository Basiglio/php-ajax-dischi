<?php  
  include __DIR__."/db.php";

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/app.css">
  <title>PHP DISCHI</title>
</head>
<body>
  <div class="wrapper_90">
    <header>
      <img src="img/spotify_toplogo.png" alt="">
    </header>
    <main>
      <div class="albums_container">
         <?php foreach ($albums as $album ) {  
           echo "<div class='album'>"."<div class='cover'>".
            "<img src='".$album['poster']."'"."alt=''>".
            "</div>".
            "<h3>".$album['title']."</h3>".
            "<h3>".$album['author']."</h3>".
            "<h4>".$album['year']."</h4>".
            "</div>";
          } ?> 
      </div>
    </main>
  </div>
</body>
</html>