<?php require_once 'inis/ini.php'; ?>
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
                <h3 class="card-title">View - Contact Message</h3>
              </div>
              <!-- ./card-header -->
              <!--<div class="card-body">-->
                  
              <!---->
              <div class="card-body" style="display: block;">
              <div class="table-responsive">
                <table class="table m-0">
                  <thead>
                    <tr>
                      <th>UserID</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Phone</th>
                      <th>Email</th>
                      <th>Message</th>
                      <th>Status</th>
                      <th>Date</th>
                       <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    foreach ($passengers as $row) { ?>
                      <tr data-widget="expandable-table" aria-expanded="false">

    
                            <td><?=$row['userID'];?></td>
                          <td><?=$row['first_name'];?></td>
                          <td><?=$row['last_name'];?></td>
                          <td><?= $row['phone'] ?></td>
                          <td><?= $row['email'] ?></td>
                          <td><?= $row['content'] ?></td>
                          
                           <td><span class="badge badge-<?php if ($row['status'] == "success") {
                                                          echo "success";
                                                        } else {
                                                          echo "danger";
                                                        } ?>"><?= $row['status'] ?></span></td>
                          
                    <td><?php echo date("F d, Y", strtotime($row['date'])); ?></td>
                    <td>
                        <div class="btn-group">
                            <button type="button" id="" class="btn btn-default">Action</button>
                            <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu" role="menu">
                                
                           
                              
                                <!-- <a class="dropdown-item" href="users.php?p=edit&id=<?=$row['ID']; ?>">Edit Account</a> -->
                                <a class="dropdown-item" href="?p=contacts&pID=<?=$row['ID']; ?>&contact">Delete Account</a>

                                <!-- <div class="dropdown-divider"></div> -->
                                <!-- <a class="dropdown-item" href="?p=users&action=view&id=<?= $row['ID'] ?>">View Account</a> -->
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