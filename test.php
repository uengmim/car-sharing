<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <fieldset>
        <div id="idx_top">
        </div>
    </fieldset>
       <center> <div id="map" style="width: 1800px; height:650px; margin-top:40px"></div></center>
           
    
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyADE6zw1xt9mEbQYvRuJS7_rGDX5Su0Et0&callback=initMap&libraries=&v=weekly"
      defer
    >
    </script>
    
    
  <script>
  
  function initMap() {
      const myLatLng = {
        lat: 36.8402,
        lng: 127.1850
      };

    var locations = [
      ['정비소1', 36.838357, 127.177572],
      ['정비소2', 36.840521, 127.179095],
      ['정비소3', 36.842307, 127.183161],
    ];

    var location = [
      ['목양001', 36.840755, 127.183681],
      ['진리002', 36.839939, 127.184349],
      ['지혜003', 36.838726, 127.184172],
      ['창조004', 36.837427, 127.182435],
      ['본부005', 36.839278, 127.185886],
      ['승리006', 36.841063, 127.185810],
    ];


    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 16,
      center: myLatLng,
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    var GreenIcon = new google.maps.MarkerImage(

"http://labs.google.com/ridefinder/images/mm_20_green.png",

new google.maps.Size(12, 20),

new google.maps.Point(0, 0),

new google.maps.Point(6, 20)

);

    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map,
        icon : GreenIcon
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }  
    for (i = 0; i < location.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(location[i][1], location[i][2]),
        map: map,
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(location[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }  
      
  }
    
    </script>
    </body>

</html>