<?php 
// require "include/ini-users.php";
$payments = $d->getall("payment", "userID = ? order by date DESC LIMIT 5", [$userID], fetch: "moredetails");
// $payments = $d->getall("payment", "date DESC");
?>
<!-- Select2 -->
<link rel="stylesheet" href="plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <!-- Main content -->
  <section class="content">
    <!-- START ACCORDION & CAROUSEL-->
    <!-- <h5 class="mt-4 mb-2">Your Templates</h5> -->
    <!-- /.row -->
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Payment </h3>
          </div>
          <!-- ./card-header -->
          <div class="card-body">
            <?php
            switch (htmlspecialchars($_GET['p'])) {
              case 'list':
                require "consts/payment/list.php";
                break;
                case 'invoice':
                  require "consts/payment/invoice.php";
                  break;
              default:
                require "consts/payment/list.php";
                break;
            }
            ?>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <!-- /.row -->
  </section>

