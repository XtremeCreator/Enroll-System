<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<?php
include '../config/dbcon.php';
$id = $_GET['id'];
$approval = "SELECT * FROM tb_studentinfo WHERE student_id = $id";
$resultapproval = $conn->query($approval);
$row = $resultapproval->fetch_assoc();
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <link rel="stylesheet" href="grades.css">

    <!--Modal-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
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
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>


                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="dashboard.php" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="ManageElem.php" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Manage Content
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>

                        </li>

                        <li class="nav-item menu-open">
                            <a href="enrollmentsystem.php" class="nav-link active">
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
        <h1 class="m-0">E-Grades</h1>
      </div>
    </div>
  </div>
</div>
-->




            <section class="content">



                <!--ENROLLMENT SCHEDULING PART-->
                <div class="shadow p-3 mb-5 bg-body round">
                    <div class="container mt-3">
                        <h2>Master List</h2>
                        <!--MODAL OF MASTER LIST-->

                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">
                                        <?php echo $row['fname'] . " " . $row['mname'] . " " . $row['lname']; ?>
                                    </h4>
                                    <a href="enrollmentsystem.php"><button type="button" class="btn btn-primary"
                                            data-bs-dismiss="modal" style="width: 100px;">Go Back</button></a>
                                </div>




                                <!-- Modal body -->
                                <div class="modal-body">
                                    <form method="POST">
                                        <input type="hidden" value="" name="id">

                                        <div class="container">
                                            <div class="container">
                                                <div class="row">
                                                    <h3>Basic Profile</h3>
                                                    <table class="table table-bordered table-hover">
                                                        <thead class="thead-dark">
                                                            <tr>
                                                                <th>STATUS</th>
                                                                <th>
                                                                    <?php

                                                                    if ($row['status'] == 1) {
                                                                        echo "ENROLLED";
                                                                    } ?>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Username</td>
                                                                <td><input class="form-control" name="username"
                                                                        type="text"
                                                                        value="<?php echo $row['username']; ?>">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>First Name</td>
                                                                <td> <input class="form-control" type="text"
                                                                        name="fname"
                                                                        value="<?php echo $row['fname']; ?>"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Middle Name</td>
                                                                <td><input class="form-control" type="text" name="mname"
                                                                        value="<?php echo $row['mname']; ?>"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Last Name</td>
                                                                <td><input class="form-control" type="text" name="lname"
                                                                        value="<?php echo $row['lname']; ?>"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Sex</td>
                                                                <td> <select class="form-control" name="sex">
                                                                        <option value="<?php echo $row['gender']; ?>"
                                                                            selected="">
                                                                            <?php echo $row['gender']; ?>
                                                                        </option>
                                                                        <option value="Female">Female</option>
                                                                        <option value="Male">Male</option>
                                                                    </select></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Course</td>
                                                                <td> <select class="form-control" name="course">
                                                                        <option value="<?php echo $row['course']; ?>"
                                                                            selected="">
                                                                            <?php echo $row['course']; ?>
                                                                        </option>
                                                                        <option value="BS Computer Engineering">BS
                                                                            Computer Engineering</option>
                                                                        <option value="BS Information Technology">BS
                                                                            Information Technology</option>
                                                                        <option value="BS Computer Science">BS Computer
                                                                            Science</option>
                                                                    </select></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Year</td>
                                                                <td><select class="form-control" name="year">
                                                                        <option value="<?php echo $row['year']; ?>"
                                                                            selected="">
                                                                            <?php echo $row['year']; ?>
                                                                        </option>
                                                                        <option value="I">I</option>
                                                                        <option value="II">II</option>
                                                                        <option value="III">III</option>
                                                                        <option value="IV">IV</option>
                                                                    </select></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Section</td>
                                                                <td> <select class="form-control" name="section">
                                                                        <option value="<?php echo $row['section']; ?>">
                                                                            <?php echo $row['section']; ?>
                                                                        </option>
                                                                        <option value="A">A</option>
                                                                        <option value="B">B</option>
                                                                        <option value="C">C</option>
                                                                        <option value="D">D</option>
                                                                    </select>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Birthdate</td>
                                                                <td><input class="form-control" type="date"
                                                                        name="birthdate"
                                                                        value="<?php echo $row['birthday']; ?>"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Home Address</td>
                                                                <td> <input class="form-control" type="text"
                                                                        name="homeAddress"
                                                                        value="<?php echo $row['address']; ?>"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Phone Number</td>
                                                                <td> <input class="form-control" type="text"
                                                                        name="phoneNumber"
                                                                        value="<?php echo $row['num']; ?>"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Guardian Name</td>
                                                                <td> <input class="form-control" type="text"
                                                                        name="guardianName"
                                                                        value="<?php echo $row['guardian']; ?>"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Guardian Phone</td>
                                                                <td> <input class="form-control" type="text"
                                                                        name="guardianPhone"
                                                                        value="<?php echo $row['guardian_number']; ?>">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Guardian Address</td>
                                                                <td> <input class="form-control" type="text"
                                                                        name="guardianAddress"
                                                                        value="<?php echo $row['guardian_address']; ?>">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Elementary School</td>
                                                                <td> <input class="form-control" type="text"
                                                                        name="elementary_school"
                                                                        value="<?php echo $row['elem']; ?>"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Elementary Graduation Year</td>
                                                                <td> <input class="form-control" type="number"
                                                                        min="1970" name="elementary_graduation_year"
                                                                        value="<?php echo $row['elem_year']; ?>">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Junior High School</td>
                                                                <td> <input class="form-control" type="text"
                                                                        name="junior_high_school"
                                                                        value="<?php echo $row['jhs']; ?>">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Junior High Graduation Year</td>
                                                                <td> <input class="form-control" type="number"
                                                                        min="1970" name="junior_high_graduation_year"
                                                                        value="<?php echo $row['jhs_year']; ?>">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Senior High School</td>
                                                                <td> <input class="form-control" type="text"
                                                                        name="senior_high_school"
                                                                        value="<?php echo $row['shs']; ?>">
                                                </div>
                                                </td>
                                                </tr>
                                                <tr>
                                                    <td>Senior High Graduation Year</td>
                                                    <td> <input class="form-control" type="number" min="1970"
                                                            name="senior_high_graduation_year"
                                                            value="<?php echo $row['shs_year']; ?>">
                                                    </td>
                                                    <input type="hidden" value="<?php echo $row['student_id']; ?>"
                                                        name="id">
                                                    <input type="hidden" value="<?php echo $row['user_id']; ?>"
                                                        name="userid">
                                                </tr>
                                                </tbody>
                                                </table>
                                            </div>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="submit" class="btn btn-success" value="Update"
                                        formaction="../config/updatemaster.php">
                                    <input type="submit" class="btn btn-danger" value="Drop"
                                        formaction="../config/dropstudent.php">

                                </div>

                                </form>
                            </div>

                            <!-- Modal footer -->




                        </div>
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