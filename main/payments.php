<?php
include '../config/config.php';
session_start();
if (!isset($_SESSION['fullname'])) {
    header("Location: index.php");
}

// panding count
$panding = "SELECT count(*) AS Panding FROM student_payment where status='Panding'";
$result = mysqli_query($conn, $panding);
$values = mysqli_fetch_assoc($result);
$total_panding = $values['Panding'];

// Successful count
$successful = "SELECT count(*) AS Successful FROM student_payment where status='Successful'";
$result = mysqli_query($conn, $successful);
$values = mysqli_fetch_assoc($result);
$total_successful = $values['Successful'];

// UnSuccessful count
$unsuccessful = "SELECT count(*) AS Unsuccessful FROM student_payment where status='Unsuccessful'";
$result = mysqli_query($conn, $unsuccessful);
$values = mysqli_fetch_assoc($result);
$total_unsuccessful = $values['Unsuccessful'];


$sql = mysqli_query($conn, "SELECT * FROM students ORDER BY id DESC LIMIT 1");
$lastrowdata =  mysqli_fetch_row($sql);
$recentStudent_name = $lastrowdata[1]; // recentStudent name
$recentStudent_phone =  $lastrowdata[5]; //recentStudent email
$recentStudent_course = $lastrowdata[8]; // recentStudent course

$text = 'Use the SearchBar for Student Search?';
$studentname = '😌';
$studentemail = '😎';
$studentcourse = '🙂';
$studentphonenumber = '🤔';
$studentstatus = '🤑';
//student serach
if (isset($_POST['submit'])) {
    $phonenumber = $_POST['search'];
    $email = $_POST['search'];
    $sql = "SELECT * FROM students WHERE email='$email' OR phonenumber='$phonenumber'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $data = mysqli_fetch_row($result);
        $text = 'Student Found 😊';
        $studentname = $data[1];
        $studentemail = $data[4];
        $studentphonenumber = $data[5];
        $studentcourse = $data[8];
        $studentstatus = $data[19];
    } else {
        $text = 'Student Not Found 😖';
        $studentname = '😖';
        $studentphonenumber = '😖';
        $studentemail = '😖';
        $studentcourse = '😖';
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payments</title>
    <!--icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">
    <!-- css -->
    <link rel="stylesheet" href="../css/paymentStyle.css">
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
                <a href="./payments.php" class="active">
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
            <h1>All Payments Information</h1>
            <div class="insights">
                <div class="students-count">
                    <span class="material-icons-sharp"> payments </span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Panding Payments</h3>
                            <h1><?php echo $total_panding ?></h1>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
                <!-- End of Students count -->
                <div class="students-count">
                    <span class="material-icons-sharp"> payments </span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Successful Payments</h3>
                            <h1><?php echo $total_successful ?></h1>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
                <!-- end of total-courses -->
                <div class="students-count">
                    <span class="material-icons-sharp"> payments </span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Unsuccessful Payments</h3>
                            <h1><?php echo $total_unsuccessful ?></h1>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
            </div>
            <!-- end of insights -->
            <div class="recent-students">
                <h2>Recent Students Information</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Student Name</th>
                            <th>Phone Number</th>
                            <th>Course</th>
                            <th>Enter Fees Amount</th>
                            <th>Select Payment Status</th>
                        </tr>
                    </thead>
                    <!-- php student database -->
                    <tbody>
                        <td>
                            <h3><?php echo $recentStudent_name ?></h3>
                        </td>
                        <td>
                            <h3><?php echo $recentStudent_phone ?></h3>
                        </td>
                        <td>
                            <h3><?php echo $recentStudent_course ?></h3>
                        </td>
                        <td>
                            <form action="" method="POST" class="form" id="update-form">
                                <div class="input-box">
                                    <input type="text" placeholder="Enter the amount" pattern="[0-9]" name="amount-1" required>
                                </div>
                            </form>
                        </td>
                        <td>
                            <div class="input-box">
                                <select name="status" id="status" class="form-control" form="update-form" required>
                                    <option value="Panding">Panding</option>
                                    <option value="Successful">Successful</option>
                                    <option value="Unsuccessful">Unsuccessful</option>
                                </select>
                            </div>
                        </td>
                    </tbody>
                </table>
            </div>

            <div class="student-search">
                <h2><?php echo $text ?></h2>
                <table>
                    <thead>
                        <tr>
                            <th>Student Name</th>
                            <th>Phone Number</th>
                            <th>Current Status</th>
                            <th>Course</th>
                            <th>Eneter Fees Amount</th>
                            <th>Select Payment Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <td>
                            <h3><?php echo $studentname ?></h3>
                        </td>
                        <td>
                            <h3><?php echo $studentphonenumber ?></h3>
                        </td>
                        <td>
                            <h3><?php echo $studentstatus ?></h3>
                        </td>
                        <td>
                            <h3><?php echo $studentcourse ?></h3>
                        </td>
                        <td>
                            <form action="" method="POST" class="form" id="upgrade-form">
                                <div class="input-box">
                                    <input type="text" placeholder="Enter the amount" pattern="[0-9]" name="amount-1" required>
                                </div>
                            </form>
                        </td>
                        <td>
                            <div class="input-box">
                                <select name="status" id="status" class="form-control" form="upgrade-form" required>
                                    <option value="Panding">Panding</option>
                                    <option value="Successful">Successful</option>
                                    <option value="Unsuccessful">Unsuccessful</option>
                                </select>
                            </div>
                        </td>
                    </tbody>
                </table>
            </div>
        </main>
        <!-- End of Main -->
        <div class="right">
            <div class="top">
                <!-- menu-dtn -->
                <button id="menu-dtn">
                    <span class="material-icons-sharp"> menu </span>
                </button>
                <!-- profile -->
                <div class="profile">
                    <div class="info">
                        <p>
                            <b>
                                <h2>
                                    Hello,
                                    <?php echo $_SESSION['fullname'] ?>
                                </h2>
                            </b>
                        </p>
                        <small class="text-muted">Admin</small>
                    </div>
                </div>
            </div>

            <div class="notes">
                <h2>Notes</h2>
                <div class="note">
                    <div class="message">
                        <p>
                            <b>Student Payment Update </b>
                            Don't worry use the update button for update the recent student payment.
                        </p>
                    </div>
                    <div class="message">
                        <p>
                            <b>Studnent Payment Status Search </b>
                            Use the Search button for Student Payment Status Search.
                        </p>
                    </div>
                    <div class="message">
                        <p>
                            <b>Searched Student Payment upgrade </b>
                            Use the Upgrade button for updating searched Student Payment Status.
                        </p>
                    </div>
                </div>
            </div>
            <!-- update -->

            <div class="s-form">
                <form action="" method="POST" class="form" id="student-search">
                    <div class="input-box">
                    <span class="details">Use Studnent's Email or Phonenumber</span>
                        <input type="text" placeholder="Search for Student's Info." name="search" required>
                    </div>
                </form>
            </div>
            <!-- update -->
            <div class="btn-container">
                <button class="button" name="update" type="submit" form="update-form">UPDATE</button>
            </div>
            <span class="details">..............................................................................</span>
            <span class="details">..............................................................................</span>
            <span class="details">..............................................................................</span>
          
            <!-- upgrade -->
            <div class="btn-container">
                <button class="button" name="upgrade" type="submit" form="upgrade-form">UPGRADE</button>
            </div>
            <span class="details">..............................................................................</span>
            <span class="details">..............................................................................</span>
            <span class="details">..............................................................................</span>
            
            <!-- Search -->
            <div class="btn-container">
                <button class="button" name="search" type="submit" form="student-search">Search</button>
            </div>
        </div>
    </div>
</body>

</html>