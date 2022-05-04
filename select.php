<?php
     include "db.php";
?>
<!DOCTYPE html>   
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>예약정보 선택</title>
    <link rel="stylesheet" href="style.css">
    <script src = "//code.jquery.com/jquery-latest.min.js"></script>

    <script>
        function getCarParkinglotID(a){
           $.get("getcarname.php?CarParkinglotID="+a,function(data){
            $("#areaName").html(data);
        });
    }
        function getCarName(a){
           $.get("getcarnum.php?CarName="+a,function(data){
            $("#areaNum").html(data);
        });
    }
        function getCarNum(a){
           $.get("getprice.php?CarNum="+a,function(data){
            $("#areaPrice").html(data);
        });

    }
        function getCarPrice(a){
           $.get("getcolor.php?CarPrice="+a,function(data){
            $("#areaColor").html(data);
        });

    }
        </script>
</head>
<body>
    <FORM METHOD="post" ACTION="insert_select.php">  
    <fieldset>
    <div id="container">
        <div id="idx_top">
        </div>
    </fieldset>
    
    </div>
    <a href='charge.html'>요금정보</a>
    <a href='insurance.php'>보험안내</a>
    <a href='business.php'>등록 업체 소개</a>
    <a href='charge.html'>정비소 안내</a>
    <a href="logout.php" style='float:right'>Logout</a>
    <fieldset>
        
    <center><예약정보 선택><p>
        <table border=1 width=600>
        <tr>
            <td> 위치 </td>
            <td> 차종 </td>
            <td> 차번호 </td>
            <td> 1시간 당 가격 </td>
            <td> 차색깔 </td>
            
        </tr>
        <tr>
            <td>
                <select name="CarParkinglotID" id="CarParkinglotID" onchange="getCarParkinglotID(this.value)">
                <option value="">위치를 선택하세요.</option>
            <?php
                $db->groupby("CarParkinglotID");
                $list = $db->get("car");

                foreach($list as $data){
            ?>
                <option value="<?=$data["CarParkinglotID"]?>"><?=$data["CarParkinglotID"]?></option>
            <?php
            
            }
            ?>

                </select>
    </td>
    <td><div id ="areaName"></div>
    <td><div id ="areaNum"></div>
    <td><div id ="areaPrice"></div>
    <td><div id ="areaColor"></div>
    
        </tr>
    </table>
    <p></p>
   
    <table border=1 width=600>
        <tr>
            <td> 대여 시작 시간 </td>
            <td> 대여 종료 시간 </td>
            <td> 대여 시간 </td>
        </tr>
            <td>
                <select name="StartTime" id="StartTime">
                <option value="">시작 시간을 선택하세요</option>
                <option value="2021-05-26 09:00:00">2021-05-26 09:00:00</option>
                <option value="2021-05-26 10:00:00">2021-05-26 10:00:00</option>
                <option value="2021-05-26 11:00:00">2021-05-26 11:00:00</option>
                <option value="2021-05-26 12:00:00">2021-05-26 12:00:00</option>
                <option value="2021-05-26 13:00:00">2021-05-26 13:00:00</option>
                </select>
            </td>
            <td>
                <select name="EndTime" id="EndTime">
                <option value="">종료 시간을 선택하세요</option>
                <option value="2021-05-26 18:00:00">2021-05-26 18:00:00</option>
                <option value="2021-05-26 19:00:00">2021-05-26 19:00:00</option>
                <option value="2021-05-26 20:00:00">2021-05-26 20:00:00</option>
                <option value="2021-05-26 21:00:00">2021-05-26 21:00:00</option>
                <option value="2021-05-26 22:00:00">2021-05-26 22:00:00</option>
                </select>
            </td>
            <td>
            <input type="text" id="s_hour" name="s_hour" style="border:0">
            </td>


</tr>
<script>
$(function() { 
    $('#StartTime, #EndTime').on('change', function() {
        var d1 = $('#StartTime').val();
        var d2 = $('#EndTime').val();
        
        if (date1 == '' || date2 == '')
            return false;
        
            var date1 = new Date(d1.replace(/-/g, '/'));
            var date2 = new Date(d2.replace(/-/g, '/'));
      
      var difference = Math.abs(date2.getTime() - date1.getTime());
      var hourDifference = difference  / 1000 / 3600 ;
      
      $('#s_hour').val(hourDifference);
    
    });

        
});


</script>
 
             <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>

            
    </table>
    <p>
    <button type="submit" id="reservation" name="reservation" value="예약하기">
    <span>예약하기</span>
    </button>
    </form>
        </fieldset>
</body>
</html>