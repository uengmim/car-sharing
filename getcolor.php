<?php
    include "db.php";
    $CarPrice = $_GET['CarPrice'];

?>

<select name="Carcolor" id="Carcolor" onchange="getCarColor(this.value);">
                <option value="">색상을 선택하세요.</option>
            <?php
                $db-> where("CarPrice", "$CarPrice");
                $db->groupBy("CarColor");
                $list = $db->get("car");

                foreach($list as $data){
            ?>
                <option value="<?=$data["CarColor"]?>"><?=$data["CarColor"]?></option>
            <?php
            
            }
            

            ?>
                </select>

                