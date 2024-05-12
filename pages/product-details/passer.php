<?php
if(isset($_POST["send_feedback"])){
    require_once "inis/ini.php";
    echo $v->feedback_server($feed_back);
}
?>