<?php
$passengers = $d->getall("contact", "status = ?", ["1"], fetch: "moredetails");
if (isset($_GET['pID'])) {
    $product_id      = $_GET['pID'];
    $delete_products = $d->delete("contact", "ID = ?", [$product_id]);
}
?>