<?php
session_start();
// require_once "include/session.php";
require_once 'consts/Regex.php';
require_once 'include/database.php';
$d = new database;
require_once 'content/content.php';
$c = new content;
require_once 'consts/user.php';
// require_once 'consts/shop.php';
// require_once 'consts/checkout.php';
require_once 'function/autorize.php';
$v = new validate;
require_once 'function/payment.php';
$p = new payment;
require 'include/ini-payment.php';
require_once "function/shop.php";
require_once "consts/product-edit.php";
// require_once 'consts/store.php';
require_once "include/ini-users.php";
$s = new shop; 
$script = [];

// $userID = htmlspecialchars($_SESSION['adminSession']);
// $adminID = $userID; 
// $data = $d->getall("admins", "ID = ?", [$adminID], fetch: "details");
// //var_dump($data); // Check the type and content of $user

// if(isset($_GET['lockscreen'])){
//     $_SESSION['lockscreen'] = $value['password'];
//     header("Location:lock.php");
// }

?>