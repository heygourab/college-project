<?php
include '../config/config.php';
session_start();
if (!isset($_SESSION['fullname'])) {
    header("Location: index.php");
}
// total student count
$total = "SELECT count(id) AS total FROM students";
$result = mysqli_query($conn, $total);
$values = mysqli_fetch_assoc($result);
$total_students = $values['total'];

// male student count
$male = "SELECT count(*) AS Male FROM students where gender='Male'"; 
$result = mysqli_query($conn, $male);
$values = mysqli_fetch_assoc($result);
$total_male_students = $values['Male'];

// female student count
$female = "SELECT count(*) AS Female FROM students where gender='Female'";
$result = mysqli_query($conn, $female);
$values = mysqli_fetch_assoc($result);
$total_female_students = $values['Female'];

// other gender students count
$other_gender = "SELECT count(*) AS Other FROM students where gender='Other'";
$result = mysqli_query($conn, $other_gender);
$values = mysqli_fetch_assoc($result);
$total_other_gender_students = $values['Other'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
    <!--icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">
    <!-- css -->
    <link rel="stylesheet" href="../css/studentStyle.css">
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
                <a href="./students.php" class="active"><span class="material-icons-sharp">
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
                <a href="./courcses.php"><span class="material-icons-sharp">
                        local_library
                    </span>
                    <H3>Courses</H3>
                </a>
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
                <a href="./about.php"><span class="material-icons-sharp">
                        info
                    </span>
                    <H3>About</H3>
                </a>
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
            <h1>Students Information</h1>
            <div class="insights">
                <!-- total students count -->
                <div class="students-count">
                    <span class="material-icons-sharp"> school </span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Students</h3>
                            <h1><?php echo $total_students ?></h1>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
                <!-- Male Student Count -->
                <div class="students-count">
                    <span class="material-icons-sharp"> school </span>
                    <div class="middle">
                        <div class="left">
                            <h3>Male Students</h3>
                            <h1><?php echo $total_male_students ?></h1>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
                <!-- female Student Count -->
                <div class="students-count">
                    <span class="material-icons-sharp"> school </span>
                    <div class="middle">
                        <div class="left">
                            <h3>Female Students</h3>
                            <h1><?php echo $total_female_students ?></h1>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
                <!-- other gender student -->
                <div class="students-count">
                    <span class="material-icons-sharp"> school </span>
                    <div class="middle">
                        <div class="left">
                            <h3>Other gender students</h3>
                            <h1><?php echo $total_other_gender_students ?></h1>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>

            </div>
            <!-- end of insights -->

        </main>
        <!-- end of main -->
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
                        <small class="text-muted"> Admin</small>
                    </div>
                </div>
            </div>
            <div class="notes">
                <h2>Notes</h2>
                <div class="note">
                    <div class="message">
                        <p>
                            <b>
                                Student Count
                            </b>
                            Don't worry student's count all time updated.
                        </p>
                    </div>
                    <div class="message">
                        <p>
                            <b>
                                Total Student's Count
                            </b>
                            Total student count means that all students of all departments.
                        </p>
                    </div>
                    <div class="message">
                        <p><b>
                                Student Searching?
                            </b> Use Student's Contact Number or Email for searching.
                        </p>
                    </div>
                </div>
            </div>
            <!-- submit -->
            <div class="btn-container">
                <button class="button" name="submit" type="submit" form="student-form">SUBMIT</button>
            </div>
        </div>
    </div>
</body>

</html>