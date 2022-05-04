<?php
  include "lib.php";
?>

<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="style2.css">
    <title>Simple Map</title>
    <fieldset>
    <div id="idx_top">
        </div>
    </fieldset>
    <a href='charge.html'>요금정보</a>
    <a href='insurance.php'>보험안내</a>
    <a href='business.php'>등록 업체 소개</a>
    <a href='charge.html'>정비소 안내</a>
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
      #tab {
        border-right:none;

border-left:none;

border-top:none;

border-bottom:none;
      }
      /* Optional: Makes the sample page fill the window. */
      html,
      body {
        height: 100%;
        margin: 100;
        padding: 100;
      }
      h1 { text-align: center; }
    </style>
  <script>
  
  function initMap() {
      const myLatLng = {
        lat: 36.8402,
        lng: 127.1850
      };

    var locations = [
      ['BU정비소', 36.838357, 127.177572],
      ['DB정비소', 36.840521, 127.179095],
      ['영덕정비소', 36.842307, 127.183161],
    ];

    var location = [
      ['목양관 앞 주차장', 36.840755, 127.183681],
      ['진리관 앞 주차장', 36.839939, 127.184349],
      ['지혜관 뒷 주차장', 36.838726, 127.184172],
      ['창조관 앞 주차장', 36.837427, 127.182435],
      ['본부동 뒷 주차장', 36.839278, 127.185886],
      ['승리관 앞 주차장', 36.841063, 127.185810],
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

  </head>
 <body>
 <h1>정비소 위치 안내</h1>

 <center> <div id="map" style="width: 800px; height:500px; margin-top:40px; margin-left:90px;float:left;"></div>
 <div>
 <table border ="1" style="width: 800px ;height:300px; margin-top:40px;margin-left:20px; float:left;">
        <tr>
            <th>정비소</th> <th>위치</th> <th>전화번호</th>
        </tr>
        <tr>
            <td>BU정비소</td>
            <td>충청남도 천안시 동남구 안서동 526-16</td>
            <td>02-6847-7542</td>
        </tr>
        <tr>
            <td>영덕정비소</td>
            <td>충청남도 천안시 동남구 안서동 417-11</td>
            <td>02-1235-7723</td>
        </tr>
        <tr>
            <td>DB정비소</td>
            <td>충청남도 천안시 동남구 안서동 231-52</td>
            <td>02-9200-4421</td>
        </tr>

        </table>

        <table id=marker cellpadding = 10>
        <tr>
            <td><img src="img/reed.png" alt="" style="width: 35px; height:50px;" align="center"></td>
            <td colspan="2">대여존 </td>
        </tr>
        <tr>
            <td><img src="img/greeen.png" alt="" style="width: 35px; height:50px;" align="center"></td>
            <td colspan="2">정비소 </td>
        </tr>
        </table>
 </div>
  </body>
</html>