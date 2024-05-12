<?php

if(isset($_GET['ID'])){
    $product_id = $_GET['ID'];
    $product_data = $d->getall("products", "ID = ?", [$product_id], fetch: "details");
}
?>
