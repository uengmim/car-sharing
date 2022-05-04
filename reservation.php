<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="style.css">
    </head>
    <style>
        .changeColor{
            background-color:#bff0ff;
        }
        </style>
 <body>
    <fieldset>
    <div id="container">
        <div id="idx_top">
        </div>
    </fieldset>
    </div>
    <a href='charge.html'>요금정보</a>
    <a href='Insurance.php'>보험안내</
    <a href='business.php'>등록 업체 소개</a>
    <a href='charge.html'>정비소 안내</a>a>
    <a href="logout.php" style='float:right'>Logout</a>


 <fieldset>
        <center>
        <h1>예약 목록</h1>

        <table width = 80% border = 3 cellpadding = 10>
            <thead>
        <tr bgcolor='#B0E0DD' >
          <th>예약자</th>
          <th>차번호</th>
          <th>시작시간</th>
          <th>종료시간</th>
          <th>이용시간</th>
          <th>가격</th>
          <th>위치</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $jb_conn = mysqli_connect( 'localhost', 'root', '1234', 'carsharing' );
          session_start();  
          $CustomerID = $_SESSION['CustomerID'];
          $jb_sql = "select * from reservation where ResCustomerID='$CustomerID'";
          $jb_result = mysqli_query( $jb_conn, $jb_sql );
          while( $jb_row = mysqli_fetch_array( $jb_result ) ) {
            echo '<tr><td>' . $jb_row[ 'ResCustomerID' ] . '</td><td>'. $jb_row[ 'ResCarNum' ] . 
            '</td><td>' . $jb_row[ 'ResStart' ]. '</td><td>' . $jb_row[ 'ResEnd' ]. '</td>
            <td>' . $jb_row[ 'ResTime' ]. '</td><td>' . $jb_row[ 'ResPrice' ]. '</td><td>' . $jb_row[ 'ResParkinglot']. '</td>
            </tr>';
          }
        ?>
      </tbody>
            </table>
             </center>

                    </fieldset>

    <script>
      $(document).ready(function(){
      changeColor;
      clicktd();
      clicktr();
    })

    function changeColor(){
            $('#table tr').mouseover(function(){
                $(this).addClass('changeColor');
            }).mouseout(function(){
                $(this).removeClass('changeColor');
            });
        }
        </script>

    </body>
</html> 