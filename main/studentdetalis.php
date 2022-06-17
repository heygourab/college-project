<?php
session_start();
include '../config/config.php';
if (!isset($_SESSION['fullname'])) {
    header("Location: index.php");
}

$token  = $_GET['token']; // token 

$sql = mysqli_query($conn, "SELECT * FROM students WHERE token = '$token'");
$data = mysqli_fetch_array($sql);

$fullname = $data[1]; //fullname
$fathername = $data[2]; //fathername
$mothername = $data[3]; //mothername
$email = $data[4]; //email
$phonenumber = $data[5]; //phonumber
$gender = $data[6]; //gender
$dob = $data[7]; //date of birth
$course = $data[8]; //course
$sec = $data[9]; //sec
$sec_percentage = $data[10]; //sec percentage
$hsc = $data[11]; //
$hsc_percentage = $data[12]; //
$passout_year = $data[13]; //passout year
$passout_board = $data[14]; //passout board
$state = $data[15]; //state
$pin = $data[16]; //pincode
$locality = $data[17]; //locality
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
            <h1>Student's Information</h1>
            <div class="student-info">
                <h2>
                    Student's General Information
                </h2>
                <table> 
                    <thead>
                        <tr>
                            <th>Student Name</th>
                            <th>Phone Number</th>
                            <th>Email</th>
                            <th>Course</th>
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
                            <h3><?php echo $course?></h3>
                        </td>
                        <td>
                            <h3><?php echo $gender?></h3>
                        </td>
                    </tbody>
                </table>
                <h2>Student's marks</h2>
                <table> 
                    <thead>
                        <tr>
                            <th>Higher Secondary</th>
                            <th>Secondary</th>
                            <th>HSC Passout Year</th>
                            <th>HSC Passout Board</th>
                        </tr>
                    </thead>
                    <tbody>
                        <td>
                            <h3><?php echo $hsc .' ( ' .$hsc_percentage.' % )' ?></h3>
                        </td>
                        <td>
                            <h3><?php echo $sec .' ( ' .$sec_percentage.' % )' ?></h3>
                        </td>
                        <td>
                            <h3><?php echo $passout_year?></h3>
                        </td>
                        <td>
                            <h3><?php echo $passout_board?></h3>
                        </td>
                    </tbody>
                </table>
                <h2>Student's Date of Birth & Parents Info.</h2>
                <table> 
                    <thead>
                        <tr>
                            <th>Father Name</th>
                            <th>Student Date of Birth</th> 
                            <th>Mother Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <td>
                            <h3><?php echo $mothername?></h3>
                        </td>
                        <td>
                            <h3>
                                <?php echo $dob ?>
                            </h3>
                        </td>
                        <td>
                            <h3><?php echo $fathername?></h3>
                        </td>
                    </tbody>
                </table>
                    <h2>Student's Address</h2>
                <table> 
                    <thead>
                        <tr>
                            <th>Student's State</th>
                            <th>Student's Pin</th>
                            <th>Student's Locality</th>
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