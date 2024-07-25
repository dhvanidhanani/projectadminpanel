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
      $id = $_GET['update'];  
      $qry = "SELECT * FROM `inquiry` WHERE `id`='$id'";
      $res = mysqli_query($con , $qry);
      $row = mysqli_fetch_assoc($res);
      $name = $row['name'];
      $course = $row['course'];
      $reference = $row['reference'];
      $add = $row['add'];
      $status = $row['status'];
      $contact = $row['contact'];
      $coursecontent = $row['content'];
      $referencename = $row['referencename'];
      $date = $row['date'];
      $followup = $row['followup'];
      $parent = $row['parent'];
      $fees = $row['fees'];
      $enquiry = $row['enquiry'];
      $betnchtime = $row['betchtime'];
      $inquirydetails = $row['inquirydetails'];
  }

  if(isset($_POST['submit']))
  {
      $name = $_POST['name'];
      $course = $_POST['course'];
      $reference = $_POST['reference'];
      $add = $_POST['add'];
      $status = $_POST['status'];
      $contact = $_POST['contact'];
      $coursecontent = $_POST['content'];
      $referencename = $_POST['referencename'];
      $date = $_POST['date'];
      $followup = $_POST['followup'];
      $parent = $_POST['parent'];
      $fees = $_POST['fees'];
      $enquiry = $_POST['enquiry'];
      $betnchtime = $_POST['betchtime'];
      $inquirydetails = $_POST['inquirydetails'];
  
      if(@$_GET['update'])
      {
          $qry = "UPDATE `inquiry` set `name`='$name',`course`='$course',`referencename`='$reference',`add`='$add',`status`='$status',`contact`='$contact',`content`='$coursecontent',`reference`='$referencename',`date`='$date',`followup`='$followup',`parent`='$parent',`fees`='$fees',`enquiry`='$enquiry',`betchtime`='$betnchtime',`inquirydetails`='$inquirydetails' where `id`='$id'";
          $result = mysqli_query($con,$qry);
      }
      else
      {
          $qry = "INSERT INTO `inquiry`(`name`,`course`,`referencename`,`add`,`status`,`contact`,`content`,`reference`,`date`,`followup`,`parent`,`fees`,`enquiry`,`betchtime`,`inquirydetails`) values ('$name','$course','$reference','$add','$status','$contact','$coursecontent','$referencename','$date','$followup','$parent','$fees','$enquiry','$betnchtime','$inquirydetails')";
          $result = mysqli_query($con,$qry);
      }
  }
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Inquiry</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
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
        <a href="index.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
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
            <a href="index.php" class="nav-link active">
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
                <a href="viewadmission.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Admission</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Payment
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="viewreson.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Viewpayment</p>
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
            <h1>Inquiry Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Inquiry Form</li>
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
                <h3 class="card-title">Inquiry</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Name" value="<?php echo isset($name) ? $name : ''; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Select Course</label>
                    <input type="text" name="course" class="form-control" id="exampleInputPassword1" placeholder="Enter Course" value="<?php echo isset($course) ? $course : ''; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Reference</label>
                    <select name="reference" id="" class="form-control" id="exampleInputPassword1">
                      <option  hidden>Select Option</option>
                      <option <?php echo(@$reference == 'Google') ? 'selected':''; ?>>Google</option>
                      <option <?php echo(@$reference == 'Facalty') ? 'selected':''; ?>>Facalty</option>
                      <option <?php echo(@$reference == 'Student') ? 'selected':''; ?>>Student</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Add By</label>
                    <select name="add" id="" class="form-control" id="exampleInputPassword1">
                      <option hidden>Select Option</option>
                      <option <?php echo(@$add == 'Harita Mem') ? 'selected':''; ?>>Harita Mem</option>
                      <option <?php echo(@$add == 'Khushi Mem') ? 'selected':''; ?>>Khushi Mem</option>
                      <option <?php echo(@$add == 'Shivangi Mem') ? 'selected':''; ?>>Shivangi Mem</option>
                      <option <?php echo(@$add == 'Krinal Mem') ? 'selected':''; ?>>Krinal Mem</option>
                      <option <?php echo(@$add == 'Shruti Mem') ? 'selected':''; ?>>Shruti Mem</option>
                      <option <?php echo(@$add == 'Haresh Sir') ? 'selected':''; ?>>Haresh Sir</option>
                      <option <?php echo(@$add == 'Prince Sir') ? 'selected':''; ?>>Prince Sir</option>
                      <option <?php echo(@$add == 'Anil Sir') ? 'selected':''; ?>>Anil Sir</option>
                      <option <?php echo(@$add == 'Utsav Sir') ? 'selected':''; ?>>Utsav Sir</option>
                      <option <?php echo(@$add == 'Bhavtik Sir') ? 'selected':''; ?>>Bhavtik Sir</option>
                      <option <?php echo(@$add == 'Vishal Sir') ? 'selected':''; ?>>Vishal Sir</option>
                      <option <?php echo(@$add == 'Gautam Sir') ? 'selected':''; ?>>Gautam Sir</option>
                      <option <?php echo(@$add == 'Shailesh Sir') ? 'selected':''; ?>>Shailesh Sir</option>
                      <option <?php echo(@$add == 'Jatin Sir') ? 'selected':''; ?>>Jatin Sir</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Status</label>
                    <select name="status" id="" class="form-control" id="exampleInputPassword1">
                      <option hidden>Select Option</option>
                      <option <?php echo(@$status == 'Pending') ? 'selected':''; ?>>Pending</option>
                      <option <?php echo(@$status == 'Demo') ? 'selected':''; ?>>Demo</option>
                    </select>
                  </div>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Contact Number</label>
                    <input type="text" name="contact" class="form-control" id="exampleInputEmail1" placeholder="Enter Contact Number" value="<?php echo isset($contact) ? $contact : ''; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Course Content</label>
                    <input type="text" name="content" class="form-control" id="exampleInputPassword1" placeholder="Enter Course Content" value="<?php echo isset($coursecontent) ? $coursecontent : ''; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Reference Name</label>
                    <input type="text" name="referencename" class="form-control" id="exampleInputPassword1" placeholder="Enter Reference Name" value="<?php echo isset($referencename) ? $referencename : ''; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Expected Join Date</label>
                    <input type="date" name="date" class="form-control" id="exampleInputPassword1" placeholder="date" value="<?php echo isset($date) ? $date : ''; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">FollowUp Details</label>
                    <textarea name="followup" class="form-control" id="exampleInputPassword1" placeholder="Enter FollowUp Details" value="<?php echo isset($followup) ? $followup : ''; ?>"></textarea>
                  </div>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Parent Contact</label>
                    <input type="text" name="parent" class="form-control" id="exampleInputEmail1" placeholder="Enter Parent Contact" value="<?php echo isset($parent) ? $parent : ''; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Course Fees</label>
                    <input type="text" name="fees" class="form-control" id="exampleInputPassword1" placeholder="Enter Course Fees" value="<?php echo isset($fees) ? $fees : ''; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Enquiry By</label>
                    <select name="enquiry" id="" class="form-control" id="exampleInputPassword1">
                      <option hidden>Select Option</option>
                      <option <?php echo(@$enquiry == 'Harita Mem') ? 'selected':''; ?>>Harita Mem</option>
                      <option <?php echo(@$enquiry == 'Khushi Mem') ? 'selected':''; ?>>Khushi Mem</option>
                      <option <?php echo(@$enquiry == 'Shivangi Mem') ? 'selected':''; ?>>Shivangi Mem</option>
                      <option <?php echo(@$enquiry == 'Krinal Mem') ? 'selected':''; ?>>Krinal Mem</option>
                      <option <?php echo(@$enquiry == 'Shruti Mem') ? 'selected':''; ?>>Shruti Mem</option>
                      <option <?php echo(@$enquiry == 'Haresh Sir') ? 'selected':''; ?>>Haresh Sir</option>
                      <option <?php echo(@$enquiry == 'Prince Sir') ? 'selected':''; ?>>Prince Sir</option>
                      <option <?php echo(@$enquiry == 'Anil Sir') ? 'selected':''; ?>>Anil Sir</option>
                      <option <?php echo(@$enquiry == 'Utsav Sir') ? 'selected':''; ?>>Utsav Sir</option>
                      <option <?php echo(@$enquiry == 'Bhavtik Sir') ? 'selected':''; ?>>Bhavtik Sir</option>
                      <option <?php echo(@$enquiry == 'Vishal Sir') ? 'selected':''; ?>>Vishal Sir</option>
                      <option <?php echo(@$enquiry == 'Gautam Sir') ? 'selected':''; ?>>Gautam Sir</option>
                      <option <?php echo(@$enquiry == 'Shailesh Sir') ? 'selected':''; ?>>Shailesh Sir</option>
                      <option <?php echo(@$enquiry == 'Jatin Sir')? 'selected':''; ?>>Jatin Sir</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Batch Time</label>
                    <select name="betchtime" id="" class="form-control" id="exampleInputPassword1">
                      <option  hidden>Select Option</option>
                      <option <?php echo(@$betchtime == '8am-10am') ? 'selected':''; ?>>8am-10am</option>
                      <option <?php echo(@$betchtime == '10am-12pm') ? 'selected':''; ?>>10am-12pm</option>
                      <option <?php echo(@$betchtime == '12pm-2pm') ? 'selected':''; ?>>12pm-2pm</option>
                      <option <?php echo(@$betchtime == '2pm-4pm') ? 'selected':''; ?>>2pm-4pm</option>
                      <option <?php echo(@$betchtime == '4pm-6pm') ? 'selected':''; ?>>4pm-6pm</option>
                      <option <?php echo(@$betchtime == '6pm-8pm') ? 'selected':''; ?>>6pm-8pm</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Inquiry Details</label>
                    <textarea name="inquirydetails" id=""  class="form-control" id="exampleInputPassword1" placeholder="Enter Inquiry Details" value="<?php echo isset($inquirydetails) ? $inquirydetails : ''; ?>"></textarea>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
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
