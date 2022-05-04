<?php
    include "db.php";
    $CarName = $_GET['CarName'];


?>

<select name="CarNum" id="CarNum" onchange="getCarNum(this.value);">
                <option value="">차량 번호를 선택하세요.</option>
            <?php
                $db-> where("CarName", "$CarName");
                $db-> groupBy("CarNum");
                $list = $db->get("car");

                foreach($list as $data){
            ?>
                <option value="<?=$data["CarNum"]?>"><?=$data["CarNum"]?></option>
            <?php
            
            }
            

            ?>
                </select>

                