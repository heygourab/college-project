<?php
session_start();
include '../config/config.php';
if (!isset($_SESSION['fullname'])) {
    header("Location: index.php");
}

$token  = $_GET['token']; // token 

$sql = mysqli_query($conn, "SELECT * FROM teachers WHERE token = '$token'");
$data = mysqli_fetch_array($sql);

$fullname = $data[1]; //fullname
$email = $data[2]; //email
$phonenumber = $data[3]; //phonumber
$gender = $data[4]; //gender
$dob = $data[5]; //date of birth
$status = $data[6]; //status
$department = $data[7]; //department
$state = $data[8]; //state
$pin = $data[9]; //pincode
$locality = $data[10]; //locality
$joining = $data[12];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
    <!--icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">
    <!-- css -->
    <link rel="stylesheet" href="../css/studentdetailsStyle.css">
</head>

<body>
    <div class="container">
        <aside>
            <div class="top">
                <div class="menu">
                    <!-- logo -->
                    <h2>Menu</h2>
                </div>
                <div class="close"><span class="material-icons-sharp">
                        close
                    </span>
                </div>
            </div>
            <!-- sidebar -->
            <div class="sidebar">
                <a href="./dashboard.php"><span class="material-icons-sharp">
                        dashboard
                    </span>
                    <H3>Dashboard</H3>
                </a>
                <!-- students -->
                <a href="./students.php"><span class="material-icons-sharp">
                        school
                    </span>
                    <H3>Students</H3>
                </a>
                <!-- add student -->
                <a href="./studentadd.php"><span class="material-icons-sharp">
                        person_add
                    </span>
                    <H3>Add Student</H3>
                </a>
                <!-- teachers -->
                <a href="./teachers.php"><span class="material-icons-sharp">
                        person
                    </span>
                    <H3>Teachers</H3>
                </a>
                <!-- add teacher -->
                <a href="./teacheradd.php"><span class="material-icons-sharp">
                        person_add
                    </span>
                    <H3>Add Teacher</H3>
                </a>
                <!-- courses -->
                <!-- <a href="./courcses.php"><span class="material-icons-sharp">
                        local_library
                    </span>
                    <H3>Courses</H3>
                </a> -->
                <!-- payments -->
                <a href="./payments.php">
                    <span class="material-icons-sharp">
                        payments
                    </span>
                    <H3>Payments</H3>
                </a>
                <!-- setting -->
                <a href="./settings.php"><span class="material-icons-sharp">
                        settings
                    </span>
                    <H3>Settings</H3>
                </a>
                <!-- about -->
                <!-- <a href="./about.php"><span class="material-icons-sharp">
                        info
                    </span>
                    <H3>About</H3>
                </a> -->
                <!-- logout -->
                <a href="./logout.php"><span class="material-icons-sharp">
                        logout
                    </span>
                    <H3>Logout!</H3>
                </a>
            </div>

        </aside>
        <!-- End of Aside -->
        <main>
            <h1>Teacher's Information</h1>
            <div class="student-info">
                <h2>
                    Teacher's General Information
                </h2>
                <table> 
                    <thead>
                        <tr>
                            <th>Teacher Name</th>
                            <th>Phone Number</th>
                            <th>Email</th>
                            <th>Gender</th>
                        </tr>
                    </thead>
                    <tbody>
                        <td>
                            <h3><?php echo $fullname?></h3>
                        </td>
                        <td>
                            <h3><?php echo $phonenumber?></h3>
                        </td>
                        <td>
                            <h3><?php echo $email?></h3>
                        </td>
                        <td>
                            <h3><?php echo $gender?></h3>
                        </td>
                    </tbody>
                </table>
                <h2>Teacher's Material Status & and Date of Birth</h2>
                <table> 
                    <thead>
                        <tr>
                            <th>Material Status</th>
                            <th>Date of Birth</th>
                        </tr>
                    </thead>
                    <tbody>
                        <td>
                            <h3><?php echo $status?></h3>
                        </td>
                        <td>
                            <h3><?php echo $dob?></h3>
                        </td>
                    </tbody>
                </table>
                <h2>Teacher's Department & Joining Date .</h2>
                <table> 
                    <thead>
                        <tr>
                            <th>Department</th>
                            <th>Joining Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <td>
                            <h3>
                                <?php echo $department?>
                            </h3>
                        </td>
                        <td>
                            <h3>
                                <?php echo $joining?>
                            </h3>
                        </td>
                    </tbody>
                </table>
                    <h2>Teacher's Address</h2>
                <table> 
                    <thead>
                        <tr>
                            <th>Teacher's State</th>
                            <th>Teacher's Pin</th>
                            <th>Teacher's Locality</th>
                        </tr>
                    </thead>
                    <tbody>
                        <td>
                            <h3><?php echo $state?></h3>
                        </td>
                        <td>
                            <h3><?php echo $pin?></h3>
                        </td>
                        <td>
                            <h3><?php echo $locality?></h3>
                        </td>
                    </tbody>
                </table>
            </div>
            
        </main>
    </div>
</body>

</html>