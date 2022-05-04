<?php
$con=mysqli_connect("localhost", "root", "1234", "carsharing") or die("MySQL 접속 실패!! ");

$CustomerID = $_POST['CustomerID'];
$Password = $_POST['Password'];

$sql = "select * from customer where CustomerID ='".$CustomerID."' AND Password = '".$Password."'";

    $result = mysqli_query($con,$sql);

    $row = mysqli_fetch_array($result);
            $article = array(
                'CustomerID' => $row['CustomerID'],
                'Password' => $row['Password']
            );
    if(empty($article['CustomerID']) && empty($article['Password']))
    {
        echo "<script>alert('아이디 또는 패스워드가 잘못되었습니다.');history.back();</script>";
        exit;
    }
    session_start();
$_SESSION['CustomerID'] = $CustomerID;
$_SESSION['CustomerName'] = $customer[$CustomerID]['CustomerName'];
?>
<meta http-equiv='refresh' content='0;url=mainpage.php'>