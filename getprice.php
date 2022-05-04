<?php
    include "db.php";
    $CarNum = $_GET['CarNum'];

?>

<select name="CarPrice" id="CarPrice" onchange="getCarPrice(this.value);">
                <option value="">가격을 선택하세요.</option>
            <?php
                $db-> where("CarNum", "$CarNum");
                $db-> groupBy("CarPrice");
                $list = $db->get("car");

                foreach($list as $data){
            ?>
                <option value="<?=$data["CarPrice"]?>"><?=$data["CarPrice"]?></option>
            <?php
            
            }
            

            ?>
                </select>

                