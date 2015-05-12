<html>
	<head>
		<meta charset="UTF-8" />
		<title>Congo Maps | Carte Equateur</title>
		<link href="css/style.css" rel="stylesheet" type="text/css">
		<script src="http://maps.googleapis.com/maps/api/js"></script>

		<script>
			var Equateur=new google.maps.LatLng(1.2149005,21.8763308);
			var myCenter=new google.maps.LatLng(0.0343061,18.2877222);
			var Salonga=new google.maps.LatLng(-2.446782,20.902977);
			var Lomako=new google.maps.LatLng(0.8586395,20.7109865);
			var Aeroport=new google.maps.LatLng(0.0225,18.288611);
			function initialize()
			{
				var mapProp = 
				{
					center:Equateur,
					zoom:6,
					disableDefaultUI:true,
					panControl:true,
					zoomControl:true,
					zoomControlOptions:
					{
						style:google.maps.ZoomControlStyle.SMALL
					},
					mapTypeId:google.maps.MapTypeId.ROADMAP
				};
				
				var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
				var marker=new google.maps.Marker
				({
					position:myCenter,//animation:google.maps.Animation.BOUNCE
				});
				
				var marker2=new google.maps.Marker
				({
					position:Salonga,
				});
				
				var marker3=new google.maps.Marker
				({
					position:Lomako,
				});

				marker.setMap(map);
				marker2.setMap(map);
				marker3.setMap(map);
				
				// Zoomer le maps lorsqu'on clique sur le marqueur
				google.maps.event.addListener(marker,'click',function() 
				{
					map.setZoom(15);
					map.setCenter(marker.getPosition());
				});
				
				google.maps.event.addListener(marker2,'click',function() 
				{
					location.href='tourisme.php/#salonga';
				});
				
				var infowindow = new google.maps.InfoWindow
				({
					content:"Mbandaka"
				});
				infowindow.open(map,marker);
				
				var infowindow1 = new google.maps.InfoWindow
				({
					content:"Salonga"
				});
				infowindow1.open(map,marker2);
				
				var infowindow2 = new google.maps.InfoWindow
				({
					content:"Lomako"
				});
				infowindow2.open(map,marker3);
				
			}
			google.maps.event.addDomListener(window, 'load', initialize);
		</script>
	</head>
	
	<body>
		<div class="contenair">
		<?php
			include_once('header.php');
		?>
		<section id="sous_contenair">
			<article style="width:96%;	max-width:96%; margin:auto;">
				
				<center><h1>Equateur</h1></center>
				<div id="googleMap" style="margin:auto; width:80%;height:90%; border:5px groove;"></div>
				<?php
					$f = fopen("text/maps_text.txt", "r");
					while(!feof($f)) 
					{
					echo fgets($f);
					}
					fclose($f);
				?>
			</article>
		</section>
		
		<footer>
		</footer>
		</div>
	</body>
</html>