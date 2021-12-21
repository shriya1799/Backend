<!DOCTYPE html>
<html>
<head>
	<title>Access Google Maps API in PHP</title>
	<script type="text/javascript" src="js/googlemap.js"></script>
	<style type="text/css">
		.container{
			height: 450px;
		}
		#map{
			width: 100%;
			height: 100%;
			border: 1px solid blue;
		}
		#data, #allData {
			display: none;
		}
	</style>
</head>
<body>
	<div class="container">
		<center><h1>Access Google Maps API in PHP</h1></center>

			
		<div id="map"></div>
	</div>
</body>
<script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAN7SjtmyT3OraTlJ5gwEdK8DyE7r2_zvo&callback=loadMap"
      async></script>
</html>