<!DOCTYPE html>
<!-- 
	Name: Osman Fazlić
	Course name: Web Applications Development
	Professor: Ali Almisreb
	Date: December 1st, 2019
 -->
<html>
	<head>
		<title>My Hotel</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="projekat2css.css" type="text/css" rel="stylesheet">
		<link href="slider_css.css" type="text/css" rel="stylesheet">
	</head>
	
	<body>
		<div class="top">
			<a href="index.php">Home</a>
			<a href="aboutUs.php">About us</a>
			<a href="reserve.php">Reservation</a>
			<a href="#map">Location</a>	
		</div>
		
		<h1>Welcome to my hotel</h1>
		
            <div class="slide">
              <img class="image-slide" src="slide-1.jpg" alt="No two are the same" />
            </div>
            <div class="slide">
              <img class="image-slide" src="slide-2.jpg" alt="Monsieur Mints"  />
            </div>
            <div class="slide">
              <img class="image-slide" src="slide-3.jpg" alt="The Flower Series"  />
            </div>
            <div class="slide">
              <img class="image-slide" src="slide-4.jpg" alt="Salt o' The Sea"  />
            </div>
			<div class="slide">
              <img class="image-slide" src="slide-5.jpg" alt="Salt o' The Sea"  />
            </div>
          


		<div id="map"></div>
		
	    <script src="mapa_projekat2.js"></script>
		<script src="jquery-1.11.0.min.js"></script>
		<script src="slider_js.js"></script>
	</body>
</html>