<?php
if(isset($_POST['update_vid_pro'])){
    require_once "inis/ini.php";
 echo $v->update_video($video_edit);
 return null;
}
?>
