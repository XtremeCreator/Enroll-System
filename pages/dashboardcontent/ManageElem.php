<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<?php
include '../config/dbcon.php';

if (isset($_SESSION['status'])) {
  $total = "SELECT * FROM tb_studentinfo";
  $result = $conn->query($total);
  $showtotal = mysqli_num_rows($result);

  $enrolled = "SELECT * FROM tb_userdata WHERE verified = 1";
  $result1 = $conn->query($enrolled);
  $showenrolled = mysqli_num_rows($result1);

  $pending = "SELECT * FROM tb_userdata WHERE verified = 0";
  $result2 = $conn->query($pending);
  $showpending = mysqli_num_rows($result2);
} else {
  header('Location: ../../index.php');
  session_unset();
}



?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <style>
    img[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {
      display: none;
    }
  </style>

  <title>Management Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">

</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">

      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>


      <ul class="navbar-nav ml-auto">

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
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>





      </ul>
    </nav>




    <aside class="main-sidebar sidebar-dark-primary elevation-4">

      <a href="#" class="brand-link">
        <img src="https://www.eastbridgecollege.org/admin_ebc/news_image/EAST_BRIDGE_COLLEGE__su_1a.png"
          style="width: 60px">
        <span class="brand-text font-weight-light">Administration</span>
      </a>


      <div class="sidebar">

        <br>
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


        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="dashboard.php" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
            </li>
            <li class="nav-item menu-open">
              <a href="ManageElem.php" class="nav-link active">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  Manage Content
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>

            </li>

            <li class="nav-item">
              <a href="enrollmentsystem.php" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  Enrollment Sytem
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>

            </li>

            <li class="nav-item">
              <a href="class.php" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  Class List
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
            </li>
            <li class="nav-item">
                            <a href="inbox.php" class="nav-link">
                                <i class="nav-icon fas fa-solid fa-envelope"></i>
                                <p>
                                    Inbox
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                        </li>

            <li class="nav-item" style="color:white; padding-top: 20px; padding-bottom: 20px;">
              _______________________________

              </a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#logOut">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>
                  Log Out

                </p>
              </a>


            </li>

          </ul>
        </nav>

      </div>

    </aside>
    <!-- ****** BODY ****** -->

    <div class="content-wrapper" style="padding: 25px;">


      <!--MODAL FOR LOGOUT-->
      <div class="modal fade" id="logOut" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
              <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">&times;</button>
            </div>
            <div class="modal-body">
              Are you sure you want to logout?
            </div>
            <div class="modal-footer">
              <a href="../config/logout.php"><button type="button" class="btn btn-primary">Yes</button></a>
            </div>
          </div>

        </div>
      </div>
      <!--End Modal For Log Out-->





      <?php
      if (isset($_SESSION['alert']))

        echo $_SESSION['alert'];

      ?>

      <div id="footer" class="shadow p-3 mb-5 bg-body rounded text-center">
        <h3 style="text-align: center;"> Update Logo </h3>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#profilepicModal">
          Update
        </button>
        <br><br>
        <?php
        $sql = "SELECT * FROM tb_profile";
        $result = mysqli_query($conn, $sql);
        $datas = array();
        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            $datas[] = $row;
          }
        }

        if ($datas == null) {
          echo '<img src="../../assets/img/cms-image/gif/profile.jpg" alt="Empty Logo" style="width: 30%">
                <br>
                <p><strong style="color: #1c1c1c:"> You can upload a profile photo for your account</strong></p>';
        } else {
          foreach ($datas as $data) {
            echo '
                <div class="container h-100 d-flex align-items-center justify-content-center">
                <img style="width: 35vh" src="../../assets/img/cms-image/profile/' . $data['img'] . '" alt="Logo" class="img-fluid">
                </div>';
          }
        }
        ?>
        <!-- modal  -->
        <div class="modal fade" id="profilepicModal" tabindex="-1" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Change the logo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form method="post" enctype="multipart/form-data" action="../config/profileAdd.php">
                  <input type="file" name="image" required>
                  <input type="submit" value="Upload" class="btn btn-primary" name="submitProfile">
                </form>

              </div>

            </div>
          </div>
        </div>





      </div>

      <?php
      $sql = "SELECT * FROM tb_SchoolProfile";
      $result = mysqli_query($conn, $sql);
      $datas = array();
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          $datas[] = $row;
        }
      }
      foreach ($datas as $data) {
        echo '
                <form method="POST">
                      <div id="footer" class="shadow p-3 mb-5 bg-body rounded">
                          <h3 style="text-align: center;"> School Profile </h3>
                          <div class="container mt-3">
                          <div class="table-responsive">
                              <table class="table table-borderless">
                                      <thead>
                                          <tr>
                                          <th>Category</th>
                                          <th>Details</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                      
                                  <tr>
                                  <td><i class="fas fa-user"></i> Name</td>
                                  <td>
                                      <div class="input-group">
                                      <input type="text" value="' . $data['SchoolName'] . '" placeholder="Insert a school name here" style="background-color: inherit; width: 250px; height: 30px; padding: 20px; border-style: solid;" name="schoolName" required="">
                                      <span class="input-group-text"><i class="fas fa-user"></i></span>
                                      </div>
                                  </td>
                                  </tr>
                                  
                                  <tr>
                                  <td><i class="fas fa-map-marker-alt"></i> Location</td>
                                  <td>
                                      <div class="input-group">
                                      <input type="text" value="' . $data['Lokation'] . '" placeholder="Insert a school address here" style="background-color: inherit; width: 250px; height: 30px; padding: 20px; border-style: solid;" name="schoolAddress" required="">
                                      <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                      </div>
                                  </td>
                                  </tr>
                                  
                                  <tr>
                                  <td><i class="fas fa-envelope"></i> Email Address</td>
                                  <td>
                                      <div class="input-group">
                                      <input type="text" placeholder="Insert a school email here" value="' . $data['Email'] . '" style="background-color: inherit; width: 250px; height: 30px; padding: 20px; border-style: solid;" name="schoolEmail" required="">
                                      <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                      </div>
                                  </td>
                                  </tr>
                                  
                                  <tr>
                                  <td><i class="fas fa-mobile-alt"></i> Mobile Number</td>
                                  <td>
                                      <div class="input-group">
                                      <input type="text" value="' . $data['MobileNumber'] . '" placeholder="Insert a school phone number here" style="background-color: inherit; width: 250px; height: 30px; padding: 20px; border-style: solid;" name="schoolMobilePhone" required="">
                                      <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
                                      </div>
                                  </td>
                                  </tr>
                                  
                                  <tr>
                                  <td><i class="fas fa-phone"></i> Telephone Number</td>
                                  <td>
                                      <div class="input-group">
                                      <input type="text" value="' . $data['TelephoneNumber'] . '" placeholder="Insert a school tel number here" style="background-color: inherit; width: 250px; height: 30px; padding: 20px; border-style: solid;" name="schoolTelePhone" required="">
                                      <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                      </div>
                                  </td>
                                  </tr>
                                  
                                  <tr>
                                  <td><i class="fas fa-comment"></i> Description</td>
                                  <td>
                                  <div class="input-group">
                                      <input type="text" value="' . $data['Discription'] . '" placeholder="Insert a school description here" style="background-color: inherit; width: 250px; height: 30px; padding: 20px; border-style: solid;" name="schoolDescriptiom" required="">
                                      <span class="input-group-text"><i class="fas fa-comment"></i></span>
                                      </div>
                                  </td>
                                  </tr>
                                  
                                  
                                  
                                  <tr>
                                      <td>
                                      </td>
                                      <td>
                                          <button style="float: right" formaction="../config/SchoolProfileUpdate.php" type="submit" class="btn btn-primary">
                                              <i class="fas fa-save"></i>
                                          </button>
                                      </td>
                                      </tr>
                                      </tbody>
                              </table>
                          </div>
                          </div>
                          
                          
                  </div>
                  </form>
                  ';
      }
      ?>

      <!--********  COVER PAGE  ********-->

      <div class="shadow p-3 mb-5 bg-body rounded" style="text-align: center">
        <h3 id="gallery"> Cover Page </h3>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#imageModal">
          Upload
        </button>

        <!-- modal -->
        <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Change the logo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form method="post" enctype="multipart/form-data" action="../config/coverPageadd.php">
                  <input type="file" name="image" required>
                  <input type="submit" value="Upload" class="btn btn-primary" name="submit">
                </form>

              </div>

            </div>
          </div>
        </div>


        <!-- grid layout -->
        <div class="row" style="margin-top: 20px; display: flex; justify-content: center;">

          <?php
          $sql = "SELECT * FROM tb_coverphotohomepage";
          $result = mysqli_query($conn, $sql);
          if (mysqli_num_rows($result) > 0) {
            while ($data = mysqli_fetch_assoc($result)) {
              echo '  <div class="card" style="width: 300px; margin: 20px; padding: 0;">
                    <img class="card-img-top" src="' . $data['img'] . ' " style="height: 300px; width: 100%" alt="Card image">
                    <div class="card-body">
                          <h5 class="card-title"></h5>
                          <form method="POST">
                            
                            <input type="text" class="form-control"  style="border: none;" value="' . $data['title'] . '" placeholder="Insert a Title" name="title"> 
                            <input type="hidden" name="id" value="' . $data['id'] . '">
                            <input type="hidden" value="' . $data['img'] . '" name="image">
                            <input type="hidden" value="tb_coverphotohomepage" name="delete">
                            
                            <p class="card-text">
                                <textarea placeholder="Insert a Caption" class="form-control" name="caption" style="border: none; background-color: inherit;">' . $data['caption'] . '</textarea>
                            </p>
                            <button formaction="../config/addingCovertoHomepage.php" type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i>
                            </button>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#ModalDeleteWarning2">
                            <i class="fas fa-trash"></i>
                          </button>
                          
                          <!-- Button trigger modal -->

                          <!-- Modal -->
                          <div class="modal" id="ModalDeleteWarning2">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  Are you sure to delete this card?
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button type="submit" formaction="../config/delete.php"" class="btn btn-danger">DELETE</button>
                                </div>
                              </div>
                            </div>
                          </div>



                          </form>
                    </div>
                </div>';
            }
          } else {
            echo '<img src="../../assets/img/cms-image/gif/emp.gif" alt="Empty Logo" style="width: 30%">
              <br>
              <p><strong> You can upload a cover photo for your website homepage </strong></p>';
          }
          ?>
        </div>
      </div> <!--********  END COVER PAGE  ********-->




      <div class="shadow p-3 mb-5 bg-body rounded" style="text-align: center">
        <h3 id="gallery"> Cards and Images </h3>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#imageModalCards">
          Upload
        </button>

        <!-- modal -->
        <div class="modal fade" id="imageModalCards" tabindex="-1" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Change the logo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="../config/card-and-image.php" method="post" enctype="multipart/form-data">
                  <input type="file" name="image" id="fileToUpload" required="">
                  <br>
                  <br>
                  <div class="form-group">
                    <label for="textInput">Title:</label>
                    <input type="text" class="form-control" id="textInput" name="title" required="">
                  </div>
                  <div class="form-group">
                    <label for="textAreaInput">Caption:</label>
                    <textarea class="form-control" id="textAreaInput" name="caption" rows="3" required=""></textarea>
                  </div>
                  <input type="submit" value="Upload" class="btn btn-primary" name="submit2">

                </form>
              </div>
              <div class="modal-footer">


              </div>
            </div>
          </div>
        </div>

        <!-- grid layout -->
        <div class="row" style="margin-top: 20px; display: flex; justify-content: center;">

          <?php
          $sql = "SELECT * FROM tb_cardHomepage";
          $result = mysqli_query($conn, $sql);
          $datas = array();
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              $datas[] = $row;
            }
          }

          if ($datas == null) {
            echo '<img src="../../assets/img/cms-image/gif/emptygif.gif" alt="Empty Logo" style="width: 30%">
            <br>
            <p><strong> You can upload a cards and images to showcase in your home </strong></p>';
          } else {
            foreach ($datas as $data) {

              echo '  <div class="card" style="width: 300px; margin: 20px; padding: 0;">
                            <img class="card-img-top" src="' . $data['img'] . ' " style="height: 300px; width: 100%" alt="Card image">
                            <div class="card-body">
                                <h5 class="card-title">
                                <form method="POST">
                              
                                  <input type="text" class="form-control" value="' . $data['title'] . '"  style="border: none;" placeholder="' . $data['title'] . '" name="title"> 
                                  <input type="hidden" value="' . $data['id'] . '" name="id">
                                  <input type="hidden" value="' . $data['img'] . '" name="image">
                                  <input type="hidden" value="tb_cardHomepage" name="delete">
                                    
                                  </h5>
                                  <p class="card-text">
                                      <textarea  placeholder="' . $data['caption'] . '" class="form-control" name="caption" style="border: none; background-color: inherit;">' . $data['caption'] . '</textarea>
                                  </p>
                                  <button formaction="../config/addingCardtoHomepage.php " type="submit" class="btn btn-primary">
                                    <i class="fas fa-save"></i>
                                  </button>
                                  <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#ModalDeleteWarning">
                                    <i class="fas fa-trash"></i>
                                  </button>
                                  
                                  <!-- Button trigger modal -->

                                  <!-- Modal -->
                                  <div class="modal fade" id="ModalDeleteWarning" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                          Are you sure to delete this card?
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                          <button type="submit" formaction="../config/delete.php" class="btn btn-danger">DELETE</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                              
                                </form>
                            </div>
                        </div>
                    ';
            }
          }
          ?>
        </div>


      </div>



      <!-- GRID CONTENT  BEGINING -->

      <div class="shadow p-3 mb-5 bg-body rounded" style="text-align: center">
        <h3 id="content"> Grid Contents </h3>
        <div class="row" style=" margin-top: 20px; display: flex;  justify-content: center;">

          <div class="card" style="width:300px; margin: 20px; padding: 0">
            <div class="card-body">
              <div class="card-body">
                <h5 class="card-title"></h5>
                <form method="POST">
                  <h6>Title</h6>
                  <input type="text" class="form-control" required="" placeholder="Insert a title" name="title">
                  <input type="hidden"
                    value="<br /><b>Warning</b>:  Trying to access array offset on value of type null in <b>/storage/ssd5/962/21842962/public_html/dashboard/adminDashboard.php</b> on line <b>340</b><br />"
                    name="id">

                  <p class="card-text">
                  <h6>Caption</h6>
                  </p>
                  <textarea required="" placeholder="Insert a Caption" class="form-control" name="caption"
                    background-color:="" inherit;"=""></textarea>
                  <p></p>
                  <h5 class="card-title"></h5>
                  <h6>Size</h6>
                  <input type="number" min="1" max="5" class="form-control" placeholder="Insert a size" name="size"
                    required="">
                  <h6>Background Color</h6>
                  <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#ffffff"
                    title="Choose your color" style="height: 25px; margin-bottom: 7px;" name="color">
                  <button formaction="../config/grid-content.php" type="submit" class="btn btn-primary" name="submit3">
                    <i class="fas fa-plus"></i>
                  </button>
                </form>
              </div>
            </div>
          </div>

          <?php
          $sql = "SELECT * FROM tb_contenthomepage";
          $result = mysqli_query($conn, $sql);
          $datas = array();
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              $datas[] = $row;
            }
          }

          foreach ($datas as $data) {
            echo '
            <div class="card" style="width:300px; margin: 20px; padding: 0">
            <div class="card-body">
              <div class="card-body">
                  <h5 class="card-title"></h5>
                  <form method="POST">
                      <h6>Title</h6>
                      <input type="hidden" value="tb_contenthomepage" name="delete">
                      <input type="text" class="form-control"  value="' . $data['title'] . '" placeholder="' . $data['title'] . '" name="title"> 
                      <input type="hidden" value="' . $data['id'] . '" name="id">
                      
                  <p class="card-text">
                  <h6>Caption</h6></p>
                  <textarea  placeholder="' . $data['caption'] . '" class="form-control" name="caption" background-color:="" inherit;"="">' . $data['caption'] . '</textarea><p></p>
                  <h5 class="card-title"></h5><h6>Size</h6>
                  <input type="number" min="0" max="5" class="form-control" value="' . $data['sizes'] . '" placeholder="' . $data['sizes'] . '" name="size" > 
                  <h6>Background Color</h6>
                  <input type="color" class="form-control form-control-color" id="exampleColorInput" value="' . $data['color'] . '" title="Choose your color" style="height: 25px; margin-bottom: 7px;" name="color">
                  <button formaction="../config/addingContent.php" type="submit" class="btn btn-primary">
		                <i class="fa fa-save"></i>
		              </button>
                  <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#ModalDeleteWarning3">
                  <i class="fas fa-trash"></i>
                  </button>
                  
                  <!-- Button trigger modal -->

                  <!-- Modal -->
                  <div class="modal fade" id="ModalDeleteWarning3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          Are you sure to delete this card?
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="submit" formaction="../config/deletegrid.php" class="btn btn-danger">DELETE</button>
                        </div>
                      </div>
                    </div>
                  </div>

                  


                  </form>
              </div>
            </div>
        </div>';
          }

          ?>


        </div>
      </div>

      <footer class="shadow p-3 mb-5 bg-body rounded" style="color: #6d6d6d; margin-bottom: 3rem!important; ">
        All rights reserved
        <div class="float-right d-none d-sm-inline-block">
          <b>Version</b> 1.0
        </div>
      </footer>


    </div>







    <!--Modal LogOut-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!--Modal LogOut-->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
      integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
      crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js"
      integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw=="
      crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
      $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">

    <?php
    if (isset($_SESSION['alert']))

      $_SESSION['alert'] = null;

    ?>

</body>

</html>