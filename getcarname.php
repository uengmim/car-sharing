<?php
    include "db.php";
    $CarParkinglotID = $_GET['CarParkinglotID'];

?>

<select name="CarName" id="CarName" onchange="getCarName(this.value);">
                <option value="">차종을 선택하세요.</option>
            <?php
                $db-> where("CarParkinglotID", "$CarParkinglotID");
                $db->groupBy("CarName");
                $list = $db->get("car");

                foreach($list as $data){
            ?>
                <option value="<?=$data["CarName"]?>"><?=$data["CarName"]?></option>
            <?php
            
            }
            

            ?>
                </select>

                