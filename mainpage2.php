<?php
  include "lib.php";
?>

<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="style.css">
    <title>Simple Map</title>
    <fieldset>
    <div id="idx_top">
        </div>
    </fieldset>
    <a href='charge.html'>요금정보</a>
    <a href='insurance.php'>보험안내</a>
    <a href="mypage.php" style='float:right'>MyPage</a>
    <a href="logout.php" style='float:right'>Logout</a>
    <fieldset>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyADE6zw1xt9mEbQYvRuJS7_rGDX5Su0Et0&callback=initMap&libraries=&v=weekly"
      defer
    ></script>
    
    <style type="text/css">
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        width: 70%;
        height: 70%;
      }

      /* Optional: Makes the sample page fill the window. */
      html,
      body {
        height: 100%;
        margin: 100;
        padding: 100;
      }
    </style>
    <script>
      let map;

      function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
          center: { lat: 36.8402, lng: 127.1850 },
          zoom: 17,
        });

  <?php
  $query = "select * from parkinglot ";
  $result = mysqli_query($connect, $query);

  while($data = mysqli_fetch_array($result)){
  ?>
    const myLatLng<?=$data['ParkinglotID']?> = { lat: <?=$data['Parkinglat']?>, lng: <?=$data['Parkinglng']?> };

    new google.maps.Marker({
    position: myLatLng<?=$data['ParkinglotID']?>,
    map,
    animation : google.maps.Animation.DROP,
    title: "<?=$data['ParkinglotName']?>",
    });
    
<?php } ?>
      }
    </script>
  </head>
 <body>
 <center> <div id="map" style="width: 800px; height:500px; margin-top:40px"></div>
 <a href="select.php"><input type="button" name="back" id="btnjoin" value="예약 페이지로 이동"></a></center>
    
  </body>
</html>