<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Access Map Here</title>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>

      function initMap() {

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 12,
          center: {lat: 14.599512, lng: 120.984219}
        });

        // Create an array of alphabetical characters used to label the markers.
        var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

        // Add some markers to the map.
        // Note: The code uses the JavaScript Array.prototype.map() method to
        // create an array of markers based on a given "locations" array.
        // The map() method here has nothing to do with the Google Maps API.
        var markers = locations.map(function(location, i) {
          return new google.maps.Marker({
            position: location,
            label: labels[i % labels.length]
          });
        });

        // Add a marker clusterer to manage the markers.
        var markerCluster = new MarkerClusterer(map, markers,
            {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
      }
      var locations = [
        <?php
      
      
      $db_host='localhost';
    $db_username='root';
    $db_password='';
    $db_name='foodnonfood';
    $db_connect = mysqli_connect($db_host, $db_username, $db_password, $db_name) or die(mysqli_error());
    $link = mysqli_connect($db_host, $db_username, '', $db_name);
    
    $query = mysqli_query($link, "SELECT latitude, longtitude FROM food_requests");
    
    while($row=mysqli_fetch_assoc($query)){
      echo "{lat:" . $row['latitude'] . ", lng:" . $row['longtitude'] . "},";
    }
    ?>
      ]
    </script>
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwH6EdcfQ29qFbPI8cclfHP-1IBQyZFcI&callback=initMap">
    </script>
  </body>
</html>