<?php
// echo "welcome to passer";
if(isset($_POST["about"])){
    require_once "inis/ini.php";
    echo $v->about_us($about);
}

if(isset($_POST["upload_about"])){
    require_once "inis/ini.php";
    echo $v->about_us_down($about_down);
}
?>