<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
define("Regex", []);
require "include/phpmailer/PHPMailerAutoload.php";
require_once "include/database.php";
require_once "function/server.php";
require_once "consts/feedbacks.php";
require_once "content/content.php";
$d = new database;
$v = new contact;
$c = new content;
$page = "dashboard";
if(isset($_GET['p'])) {
    $page = htmlspecialchars($_GET['p']);
}


$product = $d->getall("products", "status = ?",['0'],  fetch: "moredetails");
$product_video = $d->getall("products", "status =?", ["1"], fetch: "moredetails");
$banners = $d->getall("friday_discount", fetch: "moredetails");

$blog = $d->getall("blog", "status = ?", ["1"], fetch: "moredetails");
$comment_data = $d->getall("blog", "status = ?", ["0"], fetch: "moredetails");
$product_related = $d->getall("products", "label = ?", ["natural"], fetch: "moredetails");
$feedback = $d->getall("products", "feed_status = ?", ['1'], fetch: "moredetails");



if(isset($_GET['ID'])){
    $product_id = $_GET['ID'];
    $product_data = $d->getall("products", "ID = ?", [$product_id], fetch: "details");
}

if(isset($_GET['ID'])){
    $product_id = $_GET['ID'];
    $product_relate = $d->getall("products", "ID = ?", [$product_id], fetch: "details");
}
if(isset($_GET['ID'])){
    $product_id = $_GET['ID'];
    $blog_data = $d->getall("blog", "ID = ?", [$product_id], fetch: "details");
}
?>

