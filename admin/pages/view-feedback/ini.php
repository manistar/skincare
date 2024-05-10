<?php
$feedback = $d->getall("products", "feed_status = ?", ['1'],  fetch: "moredetails");
if(isset($_GET['fID'])){
    $product_id = $_GET['fID'];
    $delete_products = $d->delete("products", "ID = ?", [$product_id]);
}
?>