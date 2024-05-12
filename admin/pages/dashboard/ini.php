<?php 
//This is for pagination 
$start = 0;
if(isset($_GET['s'])) {
  $start = (int)htmlspecialchars($_GET['s']);
}
$ads = $d->getall("products", "date != ? order by date desc LIMIT $start, 5", [""], fetch: "moredetails");
$pro = $d->getall("profile", "ID = ?", ['userID'], fetch: "details");
?>