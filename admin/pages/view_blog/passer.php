<?php
if (isset($_POST['update_blog'])) {
    require_once "inis/ini.php";
    echo $v->update_blog($blog_edit);
    return null;
}
?>