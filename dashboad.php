<?php 
session_start();
if (!isset($_SESSION['fullname'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!--icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">
    <!-- css -->
    <link rel="stylesheet" href="./dashboadStyle.css">
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
                <a href="./dashboad.php" class="active"><span class="material-icons-sharp">
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
                    <!-- add teacher -->
                    <a href="./teacheradd.php"><span class="material-icons-sharp">
                            person_add
                        </span>
                        <H3>Add Teacher</H3>
                    </a>
                    <!-- courses -->
                    <a href="./setting.php"><span class="material-icons-sharp">
                        local_library
                        </span>
                        <H3>Courses</H3>
                    </a>
                    <!-- setting -->
                    <a href="./setting.php"><span class="material-icons-sharp">
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
                    <a href="logout.php"><span class="material-icons-sharp">
                            logout
                        </span>
                        <H3>Logout!</H3>
                    </a>
            </div>
        </aside>
        <!-- End of Aside -->
        <main>
            <h1>Dashboard</h1>
            <div class="insights">
                <!-- students count -->
                <div class="students-count">
                    <span class="material-icons-sharp">
                        school
                    </span>
                    <div class=middle>
                        <div class="left">
                            <h3>Total Students</h3>
                            <h1>550</h1>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
                <!-- End of Students count -->
                <!-- Teachers Count -->
                <div class="students-count">
                    <span class="material-icons-sharp">
                        person
                    </span>
                    <div class=middle>
                        <div class="left">
                            <h3>Total Teachers</h3>
                            <h1>15</h1>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
                <!-- end of Teachers-count -->
                <!-- Total Income -->
                <div class="total-courses">
                    <span class="material-icons-sharp">
                        local_library
                        </span>
                    <div class=middle>
                        <div class="left">
                            <h3>Total Courses</h3>
                            <h1>5</h1>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
                <!-- End of Income -->
                <!-- Total Income -->
                <div class="students-count">
                    <span class="material-icons-sharp">
                        account_balance
                    </span>
                    <div class=middle>
                        <div class="left">
                            <h3>Total Income</h3>
                            <h1>₹ 10,000</h1>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
                <!-- End of Income -->
            </div>
        </main>
    </div>

</body>

</html>