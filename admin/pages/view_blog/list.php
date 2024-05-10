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
            <h3 class="card-title">View - Products</h3>
          </div>
          <!-- ./card-header -->
          <!--<div class="card-body">-->
              
          <!---->
          <div class="card-body" style="display: block;">
          <div class="table-responsive">
            <table class="table m-0">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>UserID</th>
                  <th>Title</th>
                  <th>Content</th>
                
                  <th>Image</th>
                  <th>Date</th>
                   <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                // require_once "ini.php";
                foreach ($blog as $row) { ?>
                  <tr data-widget="expandable-table" aria-expanded="false">

                      <td><?=$row['ID'];?></td>
                      <td><?=$row['userID'];?></td>
                      <td><?=$row['title'];?></td>
                      <!-- <td><?= $row['upload_image'] ?></td> -->
                      <td><?= $row['content'] ?></td>
                      
                      <td><img src="../upload/blog/<?= $row['upload_image']; ?>" style="width: 55px; height: 50px !important;" alt="Image-HasTech"></td>
         

                      
                       <!-- <td><span class="badge badge-<?php if ($row['status'] == "success") {
                                                      echo "success";
                                                    } else {
                                                      echo "danger";
                                                    } ?>"><?= $row['status'] ?></span></td> -->
                      
                <td><?php echo date("F d, Y", strtotime($row['date'])); ?></td>
                <td>
                    <div class="btn-group">
                        <button type="button" id="" class="btn btn-default">Action</button>
                        <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu" role="menu">
                            
                       
                        <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="?p=view_blog&action=edit&id=<?= $row['ID'] ?>">Edit Account</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="?p=view_blog&bID=<?=$row['ID']; ?>&view">Delete Account</a>
                            <div class="dropdown-divider"></div>
                            <!-- <a class="dropdown-item" href="?p=view-products&action=view">View Account</a> -->
                            <!-- &id=<?= $row['ID'] ?> -->
                        </div>
                    </div>
                </td>
            </tr>
                    <!---->
                  </a>
                <?php } ?>
              </tbody>
            </table>
          </div>
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