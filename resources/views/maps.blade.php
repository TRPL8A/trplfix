<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>maps to drivers</title>
    <style>
   html { height: 100% }
   #panel{padding:5px;}
      .input {
   height: 25px;
   padding: 2px;
   width: 200px;
      }
   #btn{
     height: 31px;
     background: #267BA8;
     border: none;
     padding: 5px;
     color: #fff;
   }
   #map-canvas { height: 400px; width:100%; }
   *{
   margin: 0;
   padding: 0;
  }
  body {
   text-align:center;
   background-color:#FFFFFF;
   font-family:Arial, Helvetica, sans-serif;
   font-size:80%;
   color:#666;
  }
  .wrap {
   background: #f3f8fb;
   width:500px;
   margin:30px auto;
   border: 4px dashed #61b3de;
   border-radius:4px;
   padding: 20px 5px;
  }
  h1 {
   font-family:Georgia, "Times New Roman", Times, serif;
   font-size:24px;
   color:#645348;
   font-style:italic;
   text-decoration:none;
   font-weight:100;
   padding: 10px;
  }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?=3.exp"></script>
    <script>
  var directionsDisplay;
  var directionsService = new google.maps.DirectionsService();
  var map;
  
  function initialize() {
    directionsDisplay = new google.maps.DirectionsRenderer();
    var latlng = new google.maps.LatLng(-8.3613451,113.6267551);
    var mapOptions = {
   zoom: 15,
   center: latlng
    }
    map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
    directionsDisplay.setMap(map);
  }

        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
  function calcRoute() {
    var start = document.getElementById('start').value;
    var end = document.getElementById('end').value;
    var start1 = document.getElementById('start1').value;
    var request = {
     origin:start,
     destination:end,
     origin:end,
     destination:start1;
     travelMode: google.maps.TravelMode.DRIVING
    };
    directionsService.route(request, function(response, status) {
   if (status == google.maps.DirectionsStatus.OK) {
     directionsDisplay.setDirections(response);
   }
    });
  }

  google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  </head>
  <body>
 <div class="wrap">
  <h1>Smart Travel</h1>
  <h1>Masukan tujuan pelanggan</h1>
  <div id="panel">
    <input class="input" id="start" type="text" value="titik awal">
    <input class="input" id="end" type="text" value="titik tujuan 1">
     <input class="input" id="start1" type="text" value="titik tujuan 1">
    <input id="btn" type="button" value="Search" onclick="calcRoute()">
  </div>
  <div id="map-canvas"></div>
 </div>
  </body>
</html>