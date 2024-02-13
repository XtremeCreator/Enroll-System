<!DOCTYPE html>
<html lang="en">
<?php
include '../config/dbcon.php';




?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Dashboard</title>

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
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
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

                <!--
                <li class="nav-item">
                    <a class="nav-link" href="../config/logout.php" role="button">
                        <i class="fas fa-people-arrows"></i>
                    </a>
                </li>
                -->


            </ul>
        </nav>



        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <a href="#" class="brand-link">
                <img src="https://www.eastbridgecollege.org/admin_ebc/news_image/EAST_BRIDGE_COLLEGE__su_1a.png"
                    style="width: 60px">
                <span class="brand-text font-weight-light">University</span>
            </a>


            <div class="sidebar">

                <br>



                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">

                        <li class="nav-item">
                            <a href="userdashboard.php" class="nav-link">
                                <i class="nav-icon fas fa-th-large"></i>
                                <p>
                                    Dashboard

                                </p>
                            </a>


                        </li>
                        <li class="nav-item menu-open">
                            <a href="userprofile.php" class="nav-link">
                                <i class="nav-icon fas fa fa-user"></i>
                                <p>
                                    Profile

                                </p>
                            </a>


                        </li>
                        <li class="nav-item">
                            <a href="egrades.php" class="nav-link">
                                <i class="nav-icon fas fa fa-book"></i>
                                <p>
                                    E-Grades

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


        <div class="content-wrapper">

            <!--MODAL FOR LOGOUT-->
            <div class="modal fade" id="logOut" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
                            <button type="button" class="close" data-bs-dismiss="modal"
                                aria-label="Close">&times;</button>
                        </div>
                        <div class="modal-body">
                            Are you sure you want to logout?
                        </div>
                        <div class="modal-footer">
                            <a href="../config/logout.php"><button type="button"
                                    class="btn btn-primary">Yes</button></a>
                        </div>
                    </div>

                </div>
            </div>
            <!--End Modal For Log Out-->

            <!--  
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Admin Dashboard</h1>
            </div>
          </div>
        </div>
      </div>
    -->


            <section class="content">

                <div class="col-sm p-3 min-vh-100">
                    <!-- ALERT -->

                    <!-- ALERT -->
                    <!-- ALERT -->

                    <!-- ALERT -->
                    <div class="shadow p-3 mb-5 bg-body round">
                        <div class="container mt-3">
                            <h1 style="margin-bottom: 20px;">Account Details</h1>





                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-6">


                                        <label>Username:</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input name="username" type="hidden" value="anitamaxwynn@student">
                                        anitamaxwynn@student
                                    </div>


                                    <div class="col-sm-6">
                                        <label>First Name:</label>
                                    </div>
                                    <div class="col-sm-6">
                                        Anita </div>


                                    <div class="col-sm-6">
                                        <label>Middle Name:</label>
                                    </div>
                                    <div class="col-sm-6">
                                        Max </div>


                                    <div class="col-sm-6">
                                        <label>Last Name:</label>
                                    </div>
                                    <div class="col-sm-6">
                                        Wynn </div>


                                    <div class="col-sm-6">
                                        <label>Sex:</label>
                                    </div>
                                    <div class="col-sm-6">
                                        Male
                                    </div>


                                    <div class="col-sm-6">
                                        <label>Course:</label>
                                    </div>
                                    <div class="col-sm-6">
                                        BS Computer Engineering
                                    </div>


                                    <div class="col-sm-6">
                                        <label>Year:</label>
                                    </div>
                                    <div class="col-sm-6">
                                        III </div>


                                    <div class="col-sm-6">
                                        <label>Section:</label>
                                    </div>
                                    <div class="col-sm-6">
                                        A
                                    </div>


                                    <div class="col-sm-6">
                                        <label>Birthdate:</label>
                                    </div>
                                    <div class="col-sm-6">
                                        2001-02-14 </div>


                                    <div class="col-sm-6">
                                        <label>Home Address:</label>
                                    </div>
                                    <div class="col-sm-6">
                                        Los Angeles </div>


                                    <div class="col-sm-6">
                                        <label>Phone Number:</label>
                                    </div>
                                    <div class="col-sm-6">
                                        09971541052 </div>


                                    <div class="col-sm-6">
                                        <label>Email:</label>
                                    </div>
                                    <div class="col-sm-6">
                                        anitamaxwynn@gmail.com </div>


                                    <div class="col-sm-6">
                                        <label>Guardian Name:</label>
                                    </div>
                                    <div class="col-sm-6">
                                        Drake Wynn </div>


                                    <div class="col-sm-6">
                                        <label>Guardian Phone:</label>
                                    </div>
                                    <div class="col-sm-6">
                                        09774477382 </div>


                                    <div class="col-sm-6">
                                        <label>Guardian Address:</label>
                                    </div>
                                    <div class="col-sm-6">
                                        Las Vegas </div>


                                    <div class="col-sm-6">
                                        <label>Elementary School:</label>
                                    </div>
                                    <div class="col-sm-6">
                                        Anita Elem </div>


                                    <div class="col-sm-6">
                                        <label>Elementary Graduation Year:</label>
                                    </div>
                                    <div class="col-sm-6">
                                        2010 </div>


                                    <div class="col-sm-6">
                                        <label>Junior High School:</label>
                                    </div>
                                    <div class="col-sm-6">
                                        Max High School </div>


                                    <div class="col-sm-6">
                                        <label>Junior High Graduation Year:</label>
                                    </div>
                                    <div class="col-sm-6">
                                        2016 </div>


                                    <div class="col-sm-6">
                                        <label>Senior High School:</label>
                                    </div>
                                    <div class="col-sm-6">
                                        Wynn College </div>


                                    <div class="col-sm-6">
                                        <label>Senior High Graduation Year:</label>
                                    </div>
                                    <div class="col-sm-6">
                                        2022 </div>

                                </div>
                            </div>





                        </div>
                    </div>
                    <div class="shadow p-3 mb-5 bg-body round">
                        <div class="container mt-3">
                            <h3>Password</h3>
                            <form action="#" method="POST">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <input type="hidden" class="form-control">
                                            <input type="hidden" class="form-control">
                                            <input type="hidden" class="form-control">
                                            <label for="password1" class="form-label">Current Password</label>
                                            <input type="password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <label for="password2" class="form-label">New Password</label>
                                            <input type="password" class="form-control">
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <label for="password2" class="form-label">Retype New Password</label>
                                            <input type="password" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-12" style="margin-left: 8px">
                                        <input type="submit" class="btn btn-success" value="Update">
                                    </div>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
        </div>



        </section>

    </div>

    <footer class="main-footer">
        All rights reserved
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 1.0
        </div>
    </footer>


    <aside class="control-sidebar control-sidebar-dark">

    </aside>

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
</body>

</html>