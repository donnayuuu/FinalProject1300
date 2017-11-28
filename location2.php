  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="UTF-8">
    <title>That's How I Roll</title>
    <link rel="stylesheet" type="text/css" href="styles/all.css" media="all">
  </head>
  <body id="location-page">

    <?php
     include "includes/header-navigation.php";
    ?>

        <img class="food-truck" alt="Food truck icon" src="images/food-truck.png">

        <div id="ctown-toggle-div">
          <table>
            <tr class="table-title">
              <th colspan="2"> Choose a Location! </th>
            <tr id="ctown-toggle">
              <th><a href="location.php">North Campus</a></th>
              <th class="toggle-selected"><a href="location2.php">Collegetown</a></th>
            </tr>
          </table>
        </div>

        <div class="maps-section">
          <div id = "ctown">
            <h1> Collegetown </h2>
            <h2> Thursday — Saturday: 4:30PM-2:00AM </h2>
            <h2>215 College Ave. </h2>
          </div>

        <div id=map-photo-2-div>
          <img id="map-photo-2" img alt="Collegetown Location" src="images/location2.jpg"/>
        </div>

        <figure class="googlemap-figure">
          <figcaption> Find Us on Google Maps </figcaption>
        <div id="googleMap-2"></div>
        </figure>

      <script>
        function myMap2() {
        var mapProp2= {center:new google.maps.LatLng(42.440108,-76.484669),zoom:18,};
        var map2=new google.maps.Map(document.getElementById("googleMap-2"),mapProp2);
      }
      </script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgVg_TPIgB5fosTp1KJo3ss4nXqlQ7bEs&callback=myMap2"></script>
      </div>
      <footer>
      <p>
      Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik
      </a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a>
      is licensed by <a href="http://creativecommons.org/licenses/by/3.0/"
      title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a>
      </p>
      </footer>
  </body>
  </html>
