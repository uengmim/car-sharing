<?php
    $con=mysqli_connect("localhost", "root", "1234", "carsharing") or die("MySQL 접속 실패!! ");

    session_start();

    $ResCarNum = $_POST["CarNum"];
    $CustomerID = $_SESSION['CustomerID'] ;
    $ResStart = $_POST["StartTime"];
    $ResEnd = $_POST["EndTime"];
    $ResTime = $_POST["s_hour"];
    $ResCarPrice = $_POST["s_hour"] * $_POST["CarPrice"];
    $ResParkinglot = $_POST["CarParkinglotID"];


    $sql =" INSERT INTO reservation VALUES('".$ResCarNum."','" .$CustomerID."','".$ResStart."','".$ResEnd."','".$ResTime."','".$ResCarPrice."','".$ResParkinglot."')";

    $ret = mysqli_query($con, $sql);

    echo "<h1> 예약 결과 </h1>";
    if($ret){
        echo "데이터가 성공적으로 입력됨";
    }
    else {
        echo "데이터 입력 실패!!"."<br>";
        echo "실패 원인 :".mysqli_error($con);
    }
    mysqli_close($con);

    
?>
<meta http-equiv='refresh' content='0;url=reservation.php'>
   
    
    