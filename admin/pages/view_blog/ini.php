<?php
// require_once "consts/blog-edit.php";
$blog = $d->getall("blog", "status = ?", ["1"], fetch: "moredetails");
if(isset($_GET['bID'])){
    $product_id = $_GET['bID'];
    $delete_products = $d->delete("blog", "ID = ?", [$product_id]);
}
?>
