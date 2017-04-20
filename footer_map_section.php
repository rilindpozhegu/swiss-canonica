
<link rel="stylesheet" type="text/css" href="css/maps-pointer.css">
<!-- 
<div class="clearfix" id="contact_section"></div>
    <section class="map_section_bottom_home">
        <div class="container-fluid no_padding">		  
        </div>
        <div class="wrapper">
		   <div class="tooltip">Chemin des Batailles 18, 1214 Vernier, Switzerland<br>+41 22 900 44 00</div>
		   <i class="fa fa-circle-thin pulse" aria-hidden="true"></i>
		</div>

		<div class="wrapper1 wrapper">
		   <div class="tooltip">Hello From<br>Emirates</div>
		   <i class="fa fa-circle-thin pulse" aria-hidden="true"></i>
		</div>
    </section>
 -->

<style type="text/css">
	#map {
		width: 100%;
		height: 600px;
	}
</style>
<div id="map"></div>

    <script>
      function initMap() {
        var uluru = {lat: 47.3794416, lng: 8.5395089};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 13,
        scrollwheel: false,
          center: uluru,styles: [{"featureType":"all","elementType":"all","stylers":[{"hue":"#ff0000"},{"saturation":-100},{"lightness":-30}]},{"featureType":"all","elementType":"labels.text.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"color":"#353535"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#656565"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"color":"#505050"}]},{"featureType":"poi","elementType":"geometry.stroke","stylers":[{"color":"#808080"}]},{"featureType":"road","elementType":"geometry","stylers":[{"color":"#454545"}]},{"featureType":"transit","elementType":"labels","stylers":[{"hue":"#000000"},{"saturation":100},{"lightness":-40},{"invert_lightness":true},{"gamma":1.5}]}]
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC_9zYtPwgoaIppzEr9J9QcFozrI-sK0g&callback=initMap">
    </script>
