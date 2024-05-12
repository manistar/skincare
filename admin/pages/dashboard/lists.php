<?php require_once 'ini.php'; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">


    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- ./card-header -->
    <!--<div class="card-body">-->

    <!---->
    <div class="card-body" style="display: block;">
        <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3><?= $Tfeedbacks ?></h3>

              <p>All Feedbacks</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="?p=view-feedback" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-dark">
            <div class="inner">
              <h3><?= $Tcontact ?></h3>

              <p>Total Contacts</p>
            </div>
            <div class="icon">
              <i class="fas fa-bullhorn"></i>
            </div>
            <a href="?p=contacts" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3><?= $Tproducts; ?></h3>

              <p>Total Products</p>
            </div>
            <div class="icon">
              <i class="far fa-check-circle"></i>
            </div>
            <a href="?p=view-products" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-navy">
            <div class="inner">
              <h3><?= $Tadmins ?></h3>

              <p>All Admins</p>
            </div>
            <div class="icon">
              <i class="fas fa-user-check"></i>
            </div>
            <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <hr>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">
                <i class="fas fa-home"></i>
                Black Friday Picture Control
              </h3>
            </div><!-- /.card-header -->
            <div class="card-body">
              <div class="tab-content p-0">
                <!-- Morris chart - Sales -->

                <form action="passer" id="foo">
                    <?= $c->create_form($frontboard); ?> 
                    <input type="hidden" name="update_home" value="">
                        <div id="custommessage"></div>
                        <input type="submit" style ="width:100%;" class="btn btn-primary" value="submit">
                    </form>

               

                
                <!-- <div class="chart tab-pane active" id="piechart" style="position: relative; height: 300px;">

                </div>
                <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                  <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>
                </div> -->
              </div>
            </div><!-- /.card-body -->
          </div>
          <!-- /.card -->

<hr /><hr />

          <!-- Custom tabs (Charts with tabs)-->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">
                <i class="fas fa-upload"></i>
                Upload Products
              </h3>

            </div><!-- /.card-header -->
            <div class="card-body">
              <div class="tab-content p-0">
              
              <form action="passer" id="foo">
                    <?= $c->create_form($prod_page); ?> 
                    <input type="hidden" name="insert_products" value="">
                        <div id="custommessage"></div>
                        <input type="submit" style ="width:100%;" class="btn btn-primary" value="submit">
                    </form>

              <!-- <form id="formid" role="form" method="POST" action="passer" enctype='multipart/form-data'>
              <p class="Up-load">Choose location to upload at the Client Area Side</p>
                    <div class="form-group">
                      <select id="selectid" class="form-control" onchange="check()">
                          <option value="">Select Page to Control</option>
                          <option value="?p=what-i-do.php">What I Do</option>
                          <option value="?p=portfolio.php">My Portfolio</option>
                          <option value="?p=education.php">Education</option>
                          <option value="?p=job-exp.php">Job Experience</option>
                          <option value="?p=testimonial.php">Testonials</option>
                          <option value="?p=blog.php">Blog</option>
                      </select>
                    </div> 
              </form> -->
              <!--  -->
              </div>
            </div><!-- /.card-body -->
          </div>
          <!-- /.card -->

          <!-- recent payment card -->
          <!-- <div class="card">
            <div class="card-header">
              <h3 class="card-title">Recent Payment <a href="payment.php?a=list">See all</a></h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body" style="display: block;">
              <div class="table-responsive">
                <table class="table m-0">
                  <thead>
                    <tr>
                      <th>Amount</th>
                      <th>User</th>
                      <th>For</th>
                      <th>Status</th>
                      <th>Date</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($rpayment as $row) { ?>
                      <a href="payment.php?a=invoice&id=<?= $row['ID'] ?>">
                        <tr>
                          <td><a href="#"><?= currency['symbol'] . number_format($row['price']) ?></a></td>
                          <td><?= $d->getusername($row['userID']) ?></td>
                          <td><?= $row['payfor'] ?></td>
                          <td><span class="badge badge-<?php if ($row['status'] == "success") {
                                                          echo "success";
                                                        } else {
                                                          echo "danger";
                                                        } ?>"><?= $row['status'] ?></span></td>
                          <td><?php echo date("F d, Y", strtotime($row['date'])); ?></td>
                        </tr>
                      </a>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
           
          </div> -->
          <!-- /.card -->






        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">

          <!-- recent Users card -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">All Products <a href="users.php">See all</a></h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body" style="display: block;">
              <ul class="users-list clearfix">
                <?php foreach ($products as $row) { ?>
                  <li>
                  <img src="../upload/products/<?= $row['upload_image']; ?>" style="width: 100%; height: 80px !important;" alt="User Image">

                    <!-- <img src="../upload/products/<?= $row['upload_image']; ?>" style="width: 50px height: important! 20px" alt="User Image"> -->
                    <a class="users-list-name" title="<?= $row['title'] . '.' . $row['price']; ?>" href="users.php?a=view&id=<?= $row['ID'] ?>"><?= $row['title'] . ' ' . $row['price']; ?></a>
                    <span class="users-list-date"><?php echo date("F d, Y", strtotime($row['date'])); ?></span>
                  </li>
                <?php }  ?>
              </ul>

            </div>
            <!-- /.card-body -->
            <!-- /.card-body -->
            <div class="card-footer text-center">
              <a href="users.php">View All Users</a>
            </div>
            <!-- /.card-footer -->
          </div>
          <!-- /.card -->

          <!-- recent ADS card -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Passengers <a href="ads.php">See all</a></h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body" style="display: block;">
              <ul class="products-list product-list-in-card pl-2 pr-2">
                <table class="table-responsive">
                  <tbody>

                <?php 
                // if(is_array($passengers) || $ads->rowCount() > 0) {
                  // require_once "function/products.php";
                  // $p = new products;
                  foreach ($passengers as $row) {
                  // var_dump($ads->rowCount());
                  $c->adstable($row);
                    // } 
                    } ?>
                  </tbody>
                </table>
                <!-- /.item -->
              </ul>
            </div>
            <!-- /.card-body -->
            <div class="card-footer text-center">
              <a href="?p=ads.php">View All Users</a>
            </div>
            <!-- /.card-footer -->
          </div>
          <!-- /.card -->


          <!-- /.card -->
        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content --> 
    </div>
    <!---->

    <!--</div>-->
    <!-- /.card-body -->
</div>
<!-- /.card -->
</div>
</div>
<!-- /.row -->
</section>

