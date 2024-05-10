<!DOCTYPE html>
<?php require_once "content/head.php";?>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
      </ul>

      <!-- <form action="report.php" method="post" class="row" style="display:flex;">
      
        <input type="datetime-local" class="form-control col-4" name="datefrom" value="<?php if (isset($_POST['datefrom'])) {
          echo $_POST['datefrom'];
        } ?>" id=""> <input type="datetime-local" class="form-control col-4 ml-1" value="<?php if (isset($_POST['dateto'])) {
           echo $_POST['dateto'];
         } ?>" name="dateto" id=""> <input type="submit" class="btn btn-dark ml-1" name="report" value="Report">
      </form> -->

      <!-- Right navbar links -->

    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index.php" class="brand-link">
        <img src="../assets/images/mimik-logo.png" alt="Mimik logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
        <span class="brand-text font-weight-light">
          <?= website_name ?>
        </span>
      </a> 

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="dist/img/user2-160x160.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">
              <?php echo $data['first_name'] . ' ' . $data['last_name'] . ' <br> [' . $data['ID'] . ']'; ?>
            </a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

            <!-- <li class="nav-item">
                <a href="index.php" class="nav-link">
                <i class="nav-icon fas fa-folder-open"></i>
                <p>
                    Templates
                </p>
                </a>
            </li> -->

            <!-- tasks  -->
            <li class="nav-item">
              <a href="index.php" class="nav-link">
                <i class="nav-icon  fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                  <!-- <span class="right badge badge-warning"><?= $count ?></span> -->
                </p>
              </a>
            </li>
            <!-- end of tasks  -->

            <!-- customer start  -->
            <!-- <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Manage your Users
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="?p=users.php?a=add" class="nav-link">
                    <i class="fa fa-plus nav-icon"></i>
                    <p>Create new user</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="?p=users.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>All users</p>
                  </a>
                </li>
              </ul>
            </li> -->

            <!-- customer end  -->

            <!-- thrift start  -->
            <!-- <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-coins"></i>
                <p>
                  Home Page Control
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="?p=home.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Home</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="?p=ads.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>List Ads</p>
                  </a>
                </li>
              </ul>
            </li> -->
            <!-- thrift end  -->

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-upload"></i>
                <p>
                Upload Page
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="?p=video" class="nav-link">
                    <i class="fa fa-plus nav-icon"></i>
                    <p>Add Video</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="?p=blog" class="nav-link">
                    <i class="fa fa-plus nav-icon"></i>
                    <p>Add Blog</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="?p=about" class="nav-link">
                    <i class="fa fa-plus nav-icon"></i>
                    <p>Add About</p>
                  </a>
                </li>
                <!-- <li class="nav-item">
                  <a href="?p=plans.php?a=list" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>All plans</p>
                  </a>
                </li> -->
              </ul>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-eye"></i>
                <p>
                Products View
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="?p=view-video" class="nav-link">
                    <i class="fa fa-plus nav-icon"></i>
                    <p>View Video</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="?p=view_blog" class="nav-link">
                    <i class="fa fa-plus nav-icon"></i>
                    <p>View Blog</p>
                  </a>
                </li>
              </ul>
            </li>


            <!-- <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Manage Admins
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="staff.php?a=add" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add new Admin</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="staff.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>All admins</p>
                  </a>
                </li>
              </ul>
            </li> -->

            <!-- <li class="nav-item">
              <a href="?p=student.php" class="nav-link">
                <i class="nav-icon fas fa-user-graduate"></i>
                <p>
                Students Data
                </p>
              </a>
            </li> -->

            <li class="nav-item">
              <a href="lock.php?lockscreen" class="nav-link">
                <i class="nav-icon fas fa-lock"></i>
                <p>
                Lock
                </p>
              </a>
            </li>

          

            <!-- Profile data -->

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>
                 Your Profile
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="?p=profile.php?" class="nav-link">
                    <i class="fa fa-plus nav-icon"></i>
                    <p>Profile</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="?p=password.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Password</p>
                  </a>
                </li>
              </ul>
            </li>
            <!-- co-operateive end -->

            <li class="nav-item">
              <a href="?p=settings.php" class="nav-link">
                <i class="nav-icon fas fa-cogs"></i>
                <p>
                  Settings

                </p>
              </a>
            </li>


            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-info"></i>
                <p>
                  Web Content
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="content.php?a=general" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Contact & General Info</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="content.php?a=terms" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Terms, Privacy & Policy</p>
                  </a>
                </li>
              </ul>
            </li>


            <!-- <li class="nav-item">
              <a href="?p=password.php" class="nav-link">
                <i class="nav-icon fas fa-key"></i>
                <p>
                  Password
                </p>
              </a>
            </li> -->

            <li class="nav-item">
              <a href="index.php?logout" class="nav-link">
                <i class="nav-icon fas fa-key"></i>
                <p>
                  Logout
                </p>
              </a>
            </li>

          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>


    <!--  -->
    