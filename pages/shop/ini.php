<?php 
$start = 0;
if(isset($_GET['s'])) {
  $start = (int)htmlspecialchars($_GET['s']);
}
$product = $d->getall("products", "status = ? && date != ? order by date desc LIMIT $start,  10", ["0", ""], fetch: "moredetails");

$health = $d->getall("products", "label = ?",['health'],  fetch: "moredetails");
$skincare = $d->getall("products", "label = ?",['skin_care'],  fetch: "moredetails");
$lip = $d->getall("products", "label = ?",['lip_stick'],  fetch: "moredetails");
$face = $d->getall("products", "label = ?",['face_skin'],  fetch: "moredetails");
$blusher = $d->getall("products", "label = ?",['blusher'],  fetch: "moredetails");
$natural = $d->getall("products", "label = ?",['natural'],  fetch: "moredetails");
?>