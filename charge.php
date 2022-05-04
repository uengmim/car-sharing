<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>요금안내페이지</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method ="post" action="login.php">
        <fieldset>
        <div id="container">
            <div id="idx_top">
            </div>
        </fieldset>
        </div>
        <a href='charge.html'>요금정보</a> 
        <a href='insurance.php'>보험안내</a>
        <a href="logout.php" style='float:right'>Logout</a>
      

        <fieldset>
        <center>
            <h1>요금안내</h1>
        <table border ="1" style="width: 500 ;height:500" align="center">
        <tr>
            <th>대여요금</th> <th>보험</th>
        </tr>
        <tr>
            <td>1시간 사용에 기본요금이 적용되며<br> 
                차기종마다 대여요금이 다릅니다.<br>
                연료는 직접 결제하셔야 합니다.</td>
        
            <td>운전 중 발생하는 사고에 대비해<br>
            자동차 종합보험과 차량손해 면책제도를 제공합니다.<br>
            대여시간에 비례해 보험료가 책정됩니다.<br>
            자세한 사항은 보험목록에서 확인 부탁드립니다.
        </td>
        </tr>
        </table>
        <br>
        <br>
        <div>2021-05-11기준 등록된 차량</div>
        <table border ="1" style="width: 700; height:500" align="center">
        <tr>
            <th>이미지</th><th>차종</th><th>보유업체명</th><th>기본요금</th><th>색상</th><th>연료</th><th>평균 대여비</th>
        </tr>
        <tr>
            <td rowspan="2"><img src="하이브리드.jpg"width="200" height="200"></td><td rowspan="2">올뉴아반떼하이브리드</td><td>그린카</td><td>6250원</td><td>흰색</td><td rowspan="2">휘발유</td>
            <td rowspan="2">
                <?php
                $jb_conn = mysqli_connect( 'localhost', 'root', '1234', 'carsharing' );
                $jb_sql = "CALL 올뉴아반떼하이브리드(); ";
                $jb_result = mysqli_query( $jb_conn, $jb_sql );
                while( $jb_row = mysqli_fetch_array( $jb_result ) ) {
                    echo $jb_row[ '올뉴아반떼하이브리드 평균 가격' ] ;}
              ?>
            </td>
        </tr>
        <tr>
           <td>피플카</td><td>6420원</td><td>검은색</td>
        </tr>
        <tr>
            <td><img src="베뉴.png" width="200" height="180"></td><td>베뉴</td><td>그린카</td><td>6071원</td><td>흰색</td><td>휘발유</td>
            <td>
                <?php
                $jb_conn = mysqli_connect( 'localhost', 'root', '1234', 'carsharing' );
                $jb_sql = "CALL 베뉴(); ";
                $jb_result = mysqli_query( $jb_conn, $jb_sql );
                while( $jb_row = mysqli_fetch_array( $jb_result ) ) {
                    echo $jb_row[ '베뉴 평균 가격' ] ;}
              ?>
            </td>
        </tr>
        <tr>
            <td rowspan="2"><img src="코나.jpg" width="200" height = "200"></td><td rowspan="2">코나</td><td>피플카</td><td>7216원</td><td>검은색</td><td rowspan="2">전기</td>
            <td rowspan="2">
                <?php
                $jb_conn = mysqli_connect( 'localhost', 'root', '1234', 'carsharing' );
                $jb_sql = "CALL 코나(); ";
                $jb_result = mysqli_query( $jb_conn, $jb_sql );
                while( $jb_row = mysqli_fetch_array( $jb_result ) ) {
                    echo $jb_row[ '코나 평균 가격' ] ;}
              ?>
            </td>
        </tr>
        <tr>
            <td>쏘카</td><td>6942원</td><td>흰색</td>
        </tr>
        <tr>
            <td><img src="셀토스.jpg"width="200" height="180"></td><td>셀토스1.6</td><td>쏘카</td><td>7175원</td><td>흰색</td><td>디젤</td>
            <td>
                <?php
                $jb_conn = mysqli_connect( 'localhost', 'root', '1234', 'carsharing' );
                $jb_sql = "CALL 셀토스(); ";
                $jb_result = mysqli_query( $jb_conn, $jb_sql );
                while( $jb_row = mysqli_fetch_array( $jb_result ) ) {
                    echo $jb_row[ '셀토스1.6 평균 가격' ] ;}
              ?>
            </td>
        </tr>
        <tr>
            <td><img  src="올뉴카니발.png"width="200" height="200"></td><td>올뉴카니발</td><td>피플카</td><td>8840원</td><td>흰색</td><td>디젤</td>
            <td>
                <?php
                $jb_conn = mysqli_connect( 'localhost', 'root', '1234', 'carsharing' );
                $jb_sql = "CALL 올뉴카니발(); ";
                $jb_result = mysqli_query( $jb_conn, $jb_sql );
                while( $jb_row = mysqli_fetch_array( $jb_result ) ) {
                    echo $jb_row[ '올뉴카니발 평균 가격' ] ;}
              ?>
            </td>
        </tr>
        <tr>
            <td><img src="그랜저IG.png"width="200" height="200"></td><td>그랜저IG</td><td>피플카</td><td>8163원</td><td>검은색</td><td>휘발유</td>
            <td>
                <?php
                $jb_conn = mysqli_connect( 'localhost', 'root', '1234', 'carsharing' );
                $jb_sql = "CALL 그랜저IG(); ";
                $jb_result = mysqli_query( $jb_conn, $jb_sql );
                while( $jb_row = mysqli_fetch_array( $jb_result ) ) {
                    echo $jb_row[ '그랜저IG 평균 가격' ] ;}
              ?>
            </td>
        </tr>
        <tr>
            <td><img src="티볼리아머.png"width="200" height="160"><td>티볼리 아머</td><td>쏘카</td><td>6250원</td><td>흰색</td><td>디젤</td>
            <td>
                <?php
                $jb_conn = mysqli_connect( 'localhost', 'root', '1234', 'carsharing' );
                $jb_sql = "CALL 티볼리아머(); ";
                $jb_result = mysqli_query( $jb_conn, $jb_sql );
                while( $jb_row = mysqli_fetch_array( $jb_result ) ) {
                    echo $jb_row[ '티볼리 아머 평균 가격' ] ;}
              ?>
            </td>
        </tr>
        <tr>
            <td><img src="쏘울.jpg"width="200" height="200"></td><td>쏘울</td><td>그린카</td><td>6650원</td><td>흰색</td><td>전기</td>
            <td>
                <?php
                $jb_conn = mysqli_connect( 'localhost', 'root', '1234', 'carsharing' );
                $jb_sql = "CALL 쏘울(); ";
                $jb_result = mysqli_query( $jb_conn, $jb_sql );
                while( $jb_row = mysqli_fetch_array( $jb_result ) ) {
                    echo $jb_row[ '쏘울 평균 가격' ] ;}
              ?>
            </td>
        </tr>

        </table>
    </center>
</fieldset>
    
</body>
</html>