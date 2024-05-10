<?php
// session_start();
    require_once "inis/ini.php"; 
    if(isset($_POST['page'])) {
        $pageexclude = "yes";
        $page = htmlspecialchars($_POST['page']);
        require_once "pages/page-ini.php";
    }

    // $_POST['userID'] = $userID;
    if(file_exists("pages/$page/passer.php")) {
        require_once "pages/$page/passer.php";
    }

if(isset($_POST["send_message"])){
    require_once "inis/ini.php";
    echo $v->contact_server($contact_us);
}
if(isset($_POST["send_feedback"])){
    require_once "inis/ini.php";
    echo $v->feedback_server($feed_back);
}
if(isset($_POST["enter_message"])){
    require_once "inis/ini.php";
    echo $v->blogs_comment($blog_comment);
}

require_once "include/database.php";
$d = new database;
if (isset($_POST['searchkey'])) {
    $key  = htmlspecialchars($_POST['searchkey']);
    $data = $d->getall("products", "title like '%$key%' or price like '%$key%'", fetch: "moredetails");
    if (!empty($data)) {
        foreach ($data as $row) {
            $user_id = $row['ID'];
            echo "<a href='?p=product-details&ID=$user_id'>";
            $img_src = $row['upload_image'];
            echo "<img  style='width:25%' src='upload/products/$img_src' alt='img'><br>";
            echo $row['title'] . "<br>";
            echo $row['userID'] . "<br />" . "<hr />";
            echo '</a>';
        }
    } else {
        echo "No user found with the key " . $key;
    }
}
?>