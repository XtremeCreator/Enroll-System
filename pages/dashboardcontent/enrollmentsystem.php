<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">


<?php
include '../config/dbcon.php';

$schedule = "SELECT * FROM tb_schedule";
$resultschedule = $conn->query($schedule);


$approval = "SELECT * FROM tb_studentinfo WHERE status = 0";
$resultapproval = $conn->query($approval);


$approval1 = "SELECT * FROM tb_studentinfo WHERE status = 1";
$resultapproval1 = $conn->query($approval1);


$subject = "SELECT * FROM tb_subject";
$resultsubject = $conn->query($subject);


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
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Get the time input element
            var timeInput = document.getElementById("time-input");
            var endTimeInput = document.querySelector('input[name="end-time"]');

            // Add event listener for input change
            timeInput.addEventListener("change", function () {
                // Get the selected time value
                var selectedTime = timeInput.value;

                // Parse the selected time
                var timeParts = selectedTime.split(':');
                var hours = parseInt(timeParts[0], 10);
                var minutes = parseInt(timeParts[1], 10);

                // Adjust for AM/PM
                var amPm = (hours >= 12) ? 'AM' : 'PM';
                hours = (hours % 12) || 12;

                // Convert to Date object
                var selectedDateTime = new Date();
                selectedDateTime.setHours(hours, minutes);

                // Add 10 hours to the selected time
                var endTime = new Date(selectedDateTime.getTime() + (10 * 60 * 60 * 1000));

                // Format the end time
                var formattedEndHours = ('0' + (endTime.getHours() % 12 || 12)).slice(-2);
                var formattedEndTime = formattedEndHours + ':' + ('0' + endTime.getMinutes()).slice(-2) + ' ' + amPm;

                // Update the end time display
                var endTimeParagraph = document.getElementById("end-time");
                endTimeParagraph.textContent = formattedEndTime;
                endTimeInput.value = formattedEndTime;
            });
        });
    </script>
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





            <section class="content">
                <?php
                if (isset($_SESSION['success'])) {
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                }
                ?>



                <!--ENROLLMENT SCHEDULING PART-->
                <div class="shadow p-3 mb-5 bg-body round">
                    <div class="container mt-3">
                        <h2>Enrollment Scheduling Appointment</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Start Time</th>
                                        <th>End Time</th>
                                        <th>Slots</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($resultschedule->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $resultschedule->fetch_assoc()) {
                                            echo '
                                        <form method = "POST"><tr>
                                          <td>' . $row['date'] . ' | ' . $row['day'] . '</td>
                                          <td>' . $row['start_time'] . '</td>
                                          <td>' . $row['end_time'] . '</td>
                                          <td>' . $row['slot'] . '</td>
                                          <td>
                                              <input type="submit" class="btn btn-danger" value="Delete" formaction="../config/deletesched.php?id=' . $row['shed_id'] . '">
                                          </td>
                                  </tr></form>';
                                        }
                                    } else {
                                        echo "0 results";
                                    }

                                    ?>


                                    <form action="../config/addsched.php" method="POST">
                                        <tr>
                                            <td> <input type="date" name="date" id="date-input" class="form-control"
                                                    required=""></td>
                                            <td><input type="time" name="time" id="time-input" class="form-control"
                                                    required=""></td>
                                            <td><input type="hidden" name="end-time" class="form-control" value="">
                                                <p id="end-time"></p></input>
                                            </td>
                                            <td><input type="number" min="1" name="slots" class="form-control"
                                                    required=""></td>
                                            <td><input type="submit" class="btn btn-primary" value="  Add  "> </td>
                                        </tr>
                                    </form>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!--END-->

                <script>
                    document.addEventListener("DOMContentLoaded", function () {
                        var today = new Date().toISOString().split('T')[0];
                        document.getElementById("date-input").setAttribute("min", today);

                        document.getElementById("add-schedule-form").addEventListener("submit", function (event) {
                            var selectedDate = document.getElementById("date-input").value;
                            if (selectedDate < today) {
                                alert("You can't schedule appointments before today.");
                                event.preventDefault();
                            }
                        });
                    });
                </script>


                <!--STUDENT APPROVAL REQUEST/ ONLY TABLE HEAD WHEN NO REQUEST-->
                <div class="shadow p-3 mb-5 bg-body round">
                    <div class="container mt-3">
                        <h2>Student Approval Requests</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Appointment Date</th>
                                        <th>Time</th>
                                        <th>Username</th>
                                        <th>Name</th>
                                        <th>Course</th>
                                        <th>Year</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($resultapproval->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $resultapproval->fetch_assoc()) {
                                            if ($row['status'] == 0) {
                                                $status = "PENDING";
                                                echo '
                                    <form method = "POST">
                                      <tr>
                                      <td>' . $row['appointment_date'] . '</td>
                                      <td>' . $row['time'] . '</td>
                                      <td>' . $row['username'] . '</td>
                                      <td>' . $row['fname'] . ' ' . $row['mname'] . ' ' . $row['lname'] . '</td>
                                      <td>' . $row['course'] . '</td>
                                      <td>' . $row['year'] . '</td>
                                      <td>' . $status . '</td>
                                      <td><input type="submit" value = "Open" class="btn btn-primary" formaction = "studentapproval.php?id=' . $row['student_id'] . '"></td>
                                      </tr>
                                      </form>
                                      ';
                                            }
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>







                <!--END-->

                <!--MASTERLIST OF THE STUDENT WHERE YOU CAN EDIT INFO  -->
                <div class="shadow p-3 mb-5 bg-body round">
                    <div class="container mt-3">
                        <h2>Master List</h2>

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>

                                        <th>Username</th>
                                        <th>Name</th>
                                        <th>Course</th>
                                        <th>Year</th>
                                        <th>Section</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($resultapproval1->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $resultapproval1->fetch_assoc()) {
                                            if ($row['status'] == 1) {
                                                $status = "ENROLLED";
                                                echo '
                                    <form method = "POST">
                                      <tr>
                                      <td>' . $row['username'] . '</td>
                                      <td>' . $row['fname'] . ' ' . $row['mname'] . ' ' . $row['lname'] . '</td>
                                      <td>' . $row['course'] . '</td>
                                      <td>' . $row['year'] . '</td>
                                      <td>' . $row['section'] . '</td>
                                      <td>' . $status . '</td>
                                      <td><input type="submit" value = "Open" class="btn btn-primary" formaction = "masterlist.php?id=' . $row['student_id'] . '"></td>
                                      </tr>
                                      </form>
                                      ';
                                            }
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!--END-->



                <!--SUBJECTS WHERE YOU CAN EDIT AND ADD -->
                <div class="shadow p-3 mb-5 bg-body round">
                    <div class="container mt-3">
                        <h2>Subjects</h2>
                        <div class="table-responsive">
                            <form method="POST" style="display: flex; align-items: center;">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Subject</th>
                                            <th>Course</th>
                                            <th>Instructor</th>
                                            <th>Year</th>
                                            <th>Hours</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        if ($resultsubject->num_rows > 0) {
                                            // output data of each row
                                            while ($row = $resultsubject->fetch_assoc()) {
                                                echo '<form method = "POST"><tr>
                                        <td><input type="text" value="' . $row['subjectname'] . '" class="form-control" name="subject" required=""></td>
    
                                        <td> <select class="form-control" name="course">
                                            <option value="' . $row['course'] . '" selected="">' . $row['course'] . '</option>
                                                <option value="BS Computer Engineering">BS Computer Engineering</option>
                                                <option value="BS Information Technology">BS Information Technology</option>
                                                <option value="BS Computer Science">BS Computer Science</option>
                                            </select>
    
                                        </td>
                                        <td><input type="text" value="' . $row['instructor'] . '" class="form-control" name="instructor" required=""></td>
                                        <td style="width: 10%"><select class="form-control" name="year">
                                                <option value="' . $row['years'] . '" selected ="">' . $row['years'] . '</option>
                                                <option value="I">I</option>
                                                <option value="II">II</option>
                                                <option value="III">III</option>
                                                <option value="IV">IV</option>
                                            </select></td>
                                        <td style="width: 10%"><input type="number" value="' . $row['numhours'] . '" class="form-control" name="hours" required=""></td>
                                        <td>
                                            <input type = "hidden" name = "subject_id" value = "' . $row['subject_id'] . '">
                                            <input type="submit" class="btn btn-success" value="Update" formaction="../config/updatesubject.php">
                                            <input type="submit" class="btn btn-danger" value="Delete" formaction="../config/deletesubject.php">
                                        </td>
                                    </tr></form>';
                                            }
                                        }

                                        ?>
                                        <tr>
                                            <form method="POST">


                                                <td><input type="text" name="subject" class="form-control"
                                                        placeholder="Type an subject" required=""></td>
                                                <td><select class="form-control" name="course">
                                                        <option selected="" disabled="" value="">Select course...
                                                        </option>
                                                        <option value="BS Computer Engineering">BS Computer Engineering
                                                        </option>
                                                        <option value="BS Information Technology'">BS Information
                                                            Technology
                                                        </option>
                                                        <option value="BS Computer Science">BS Computer Science</option>
                                                    </select></td>
                                                <td><input type="text" name="instructor" class="form-control"
                                                        placeholder="Type a instructor" required=""></td>
                                                <td> <select name="year" class="form-select" id="inputCourse"
                                                        required="">
                                                        <option selected="" disabled> </option>
                                                        <option value="I">I</option>
                                                        <option value="II">II</option>
                                                        <option value="III">III</option>
                                                        <option value="IV">IV</option>
                                                    </select></td>
                                                <td><input type="number" name="hours" class="form-control"
                                                        placeholder="Type a hours" required=""></td>
                                                <td>
                                                    <button type="submit" class="btn btn-primary"
                                                        formaction="../config/addsubject.php">
                                                        <i class="fas fa-plus"></i> </button>
                                                </td>
                                            </form>

                                        </tr>

                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
                <!--END-->



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