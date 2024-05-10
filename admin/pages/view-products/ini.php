<?php
require_once "consts/product-edit.php";
$product_view = $d->getall("products", "status = ?", ['0'],  fetch: "moredetails");

if(isset($_GET['pID'])){
    $product_id = $_GET['pID'];
    $delete_products = $d->delete("products", "ID = ?", [$product_id]);
}

?>