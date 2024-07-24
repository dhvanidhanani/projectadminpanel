<?php
  $con = mysqli_connect("localhost","root","","project1");
  session_start();
  $userid = $_SESSION['data'];
  $qry = "SELECT * FROM `register`";
  $result = mysqli_query($con,$qry);

  while($fetch = mysqli_fetch_assoc($result))
  {
      $qry1 = "SELECT * FROM `register` where `id`='$userid'";
      $result1 = mysqli_query($con,$qry1);
      $row1 = mysqli_fetch_assoc($result1); 
  }

  if(isset($_GET['update']))
  {
      $id1 = $_GET['update'];
      $qry = "SELECT * FROM `followup` WHERE `id`='$id1'";
      $res = mysqli_query($con , $qry);
      $row = mysqli_fetch_assoc($res);
  
      $name = $row['name'];
      $contact = $row['contact'];
      $course = $row['course'];
      $inquiry = $row['inquiry'];
      $reson = $row['reson'];
      $date = $row['date'];
      $followupby = $row['followupby'];
  }
  if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $contact = $_POST['contact'];
        $course = $_POST['course'];
        $inquiry = $_POST['inquiry'];
        $reson = $_POST['reson'];
        $date = $_POST['date'];
        $followupby = $_POST['followupby'];
    
        if(@$_GET['update'])
        {
            $qry = "UPDATE `followup` set `name`='$name',`contact`='$contact',`course`,'$course',`inquiry`,'$inquiry',`reson`,'$reson',`date`,'$date',`followupby`,'$followupby' where `id`='$id1'";
            $result = mysqli_query($con,$qry);
        }
        else
        {
            $qry = "INSERT INTO `followup`(`name`,`contact`,`course`,`inquiry`,`reson`,`date`,`followupby`) values ('$name','$contact','$course','$inquiry','$reson','$date','$followupby')";
            $result = mysqli_query($con,$qry);
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Form</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-controlsidebar-slide="true" href="logout.php" role="button">
            <i class="fa-solid fa-arrow-right-from-bracket"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="image/<?php echo $row1['profile'] ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $row1['name'] ?></a>
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
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          <li class="nav-item menu">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Course
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="general.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Select Course</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="viewcourse.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Course</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Sub Course
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="sub.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Select Course</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Course</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Inquiry
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="inquiry.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inquiry add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="viewinquiry.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Inquiry</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                FollowUp
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="viewfollowup.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View FollowUp</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Admission Form
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admission.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admission Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/advanced.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Admission</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">FollowUp Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" enctype="multipart/form-data">
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Inquiry Name</label>
                    <?php
                      if(isset($_GET['followup']))
                      {
                        $id = $_GET['followup'];
                        $q = "SELECT * from `inquiry` where `id`='$id'";
                        $result = mysqli_query($con,$q);
                        while($fetch=mysqli_fetch_assoc($result))
                        {
                          ?>
                      <input type="text" class="form-control" id="" placeholder="Enter name" name="name" value="<?php echo $fetch['name'] ?>"<?php echo (@$name == $fetch['name']) ? "selected" : "" ?>>
                      <?php
                        }
                      }
                      else
                      {
                        ?>
                        <input type="text" name="last_name" class="form-control" value="<?php echo isset($name) ? $name : '';?>">
                      <?php
                      }
                      ?>
                </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">inquiry contact</label>
                    <?php
                    if(isset($_GET['followup']))
                    {
                      $id = $_GET['followup'];
                      $q = "SELECT * from `inquiry` where `id`='$id'";
                      $result = mysqli_query($con,$q);
                      while($fetch=mysqli_fetch_assoc($result))
                      {
                        ?>
                      <input type="text" class="form-control" id="" placeholder="Enter contact" name="contact" value="<?php echo $fetch['contact'] ?>"<?php echo (@$contact == $fetch['contact']) ? "selected" : "" ?>>
                      <?php
                        }
                      }
                      else
                      {
                        ?>
                        <input type="text" name="last_contact" class="form-control" value="<?php echo isset($contact) ? $contact : '';?>">
                      <?php
                      }
                      ?>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Inquiry Course</label>
                    <?php
                    if(isset($_GET['followup']))
                    {
                      $id = $_GET['followup'];
                      $q = "SELECT * from `inquiry` where `id`='$id'";
                      $result = mysqli_query($con,$q);
                      while($fetch=mysqli_fetch_assoc($result))
                      {
                        ?>
                      <input type="text" class="form-control" id="" placeholder="Enter course" name="course" value="<?php echo $fetch['course'] ?>"<?php echo (@$course == $fetch['course']) ? "selected" : "" ?>>
                      <?php
                        }
                      }
                      else
                      {
                        ?>
                        <input type="text" name="last_course" class="form-control" value="<?php echo isset($course) ? $course : '';?>">
                      <?php
                      }
                      ?>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Inquiry By</label>
                    <?php
                    if(isset($_GET['followup']))
                    {
                        $id = $_GET['followup'];
                        $q = "SELECT * from `inquiry` where `id`='$id'";
                        $result = mysqli_query($con,$q);
                        while($fetch=mysqli_fetch_assoc($result))
                        {
                      ?>
                      <input type="text" class="form-control" id="" placeholder="Enter add" name="add" value="<?php echo $fetch['add'] ?>"<?php echo (@$add == $fetch['add']) ? "selected" : "" ?>>
                      <?php
                        }
                      }
                      else
                      {
                      ?>
                      <input type="text" name="last_inquiry" class="form-control" value="<?php echo isset($inquiry) ? $inquiry : '';?>">
                      <?php
                      }
                      ?>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">FollowUp Reson</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Reson" name ="reson" value="<?php echo isset($reson) ? $reson : ''; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Expected join Date</label>
                    <input type="date" class="form-control" id="exampleInputEmail1" placeholder="Enter date" name ="date" value="<?php echo isset($date) ? $date : ''; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">FollowUp By</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter by" name ="followupby" value="<?php echo isset($followupby) ? $followupby : ''; ?>">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name ="submit">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>