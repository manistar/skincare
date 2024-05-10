<?php
if(isset($_POST['update_ed_pro'])){
    require_once "inis/ini.php";
 echo $v->update_pro($pro_edit);
 return null;
}
?>
