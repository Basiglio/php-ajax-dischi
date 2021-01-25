<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/app.css">
  <title>Document</title>
</head>
<body>
  <span id="app">
	<!-- HEADER -->
    <header>
    <img :src="logo" alt="logo">
    </header>   
		<!-- /HEADER -->

		<!-- MAIN -->
    <main>
      <div class="albums_container">
				<div class="album" v-for="album in albums">
				<div class="cover">
					<img :src="album.poster" alt="">
				</div>
				<h3>{{album.title}}</h3>
				<h3>{{album.author}}</h3>
				<h4>{{album.year}}</h4>
				</div>
      </div>
    </main>
		<!-- /MAIN -->
  </span>
    <script src="js/app.js" charset="utf-8"></script>
</body>
</html>