    <!DOCTYPE html>
    <html>
    <head>
      <meta charset="UTF-8">
      <title>That's How I Roll</title>
      <link rel="stylesheet" type="text/css" href="styles/all.css" media="all">
      <script src="scripts/jquery-3.2.1.min.js"></script>
      <script src="scripts/googlemaps.js" type="text/javascript"></script>
    </head>
    <body id="location-page">

      <?php
       include "includes/header-navigation.php";
      ?>

        <img class="food-truck" alt="Food truck icon" src="images/food-truck.png">
      <div  id="north-toggle-div">
        <table>
          <tr class="table-title">
            <th colspan="2"> Choose a Location! </th>
          <tr id="north-toggle">
            <th class="toggle-selected"><a href="location.php">North Campus</a></th>
            <th><a href="location2.php">Collegetown</a></th>
          </tr>
        </table>
      </div>
      <div class="maps-section">
      <div id ="north">
          <h1> North Campus </h2>
          <h2> Sunday — Wednesday: 11:00AM-9:30PM </h2>
          <h2>500 Thurston Ave. </h2>
      </div>
      <div id=map-photo-1-div>
        <img id="map-photo-1" img alt="North Location" src="images/location1.jpg"/>
      </div>

        <!--code from https://www.w3schools.com/html/html_googlemaps.asp-->
        <figure class="googlemap-figure">
          <figcaption> Find Us on Google Maps </figcaption>
        <div id="googleMap"></div>
        </figure>

        <script>
        function myMap1() {
        var mapProp= {center:new google.maps.LatLng(42.45364199999999,-76.48368149999999),zoom:18,};

        var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

        }
        </script>


         <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnOj1Zal2plK_twtE3gQsLsdlvNwfS7jo&callback=myMap1"></script>



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
