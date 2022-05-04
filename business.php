<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="style.css">
        
    </head>
 <body>
    <fieldset>
    <div id="container">
    <div id="idx_top" onclick="location.href='mainpage.php'">
        </div>
    </fieldset>
    </div>
    <a href='charge.html'>요금정보</a>
    <a href='https://www.greencar.co.kr/customer/faq/list.do'>보험안내</a>
    <a href='business.php'>등록 업체 소개</a>
    <a href='charge.html'>정비소 안내</a>
    <a href="logout.php" style='float:right'>Logout</a>

 <fieldset>
        <center>
        <h1>업체 소개</h1>
        <h3>'한눈에! 카셰어링'에 등록되어 있는 업체 정보입니다.</h3>
    <br>
    
    <br>
        <table width = 80% border = 3 cellpadding = 10>
            <thead>
        <tr bgcolor='#BOC4DE' >
          <th>회사</th>
          <th>사업자 등록 번호</th>
          <th>주소 </th>
          <th>업체 번호 </th>
          <th>대표자</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $jb_conn = mysqli_connect( 'localhost', 'root', '1234', 'carsharing' );
          $jb_sql = 'select * from business';
          $jb_result = mysqli_query( $jb_conn, $jb_sql );
          while( $jb_row = mysqli_fetch_array( $jb_result ) ) {
            echo '<tr><td>' . $jb_row[ 'BusinessName' ] . '</td><td>'
            . $jb_row[ 'BusinessCode' ] . '</td><td>' . $jb_row[ 'Address' ] . '</td><td>' 
            . $jb_row[ 'Phone' ].'</td><td>' .$jb_row[ 'CeoName']. '</td></tr>';
          }
        ?>
      </tbody>
            </table>
             </center>

                    </fieldset>
    </body>
</html> 