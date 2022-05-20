<?php
include '../config/config.php' ;
session_start();
if (!isset($_SESSION['fullname'])) {
    header("Location: ../index.php");
}

$sql = "SELECT count(id) AS total FROM students";
$result = mysqli_query($conn, $sql);
$values = mysqli_fetch_assoc($result);
$total_students = $values['total'];
// total teachers
$sql  = "SELECT count(id) AS total FROM teachers";
$result = mysqli_query($conn, $sql);
$values = mysqli_fetch_assoc($result);
$total_teachers = $values['total'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <!--icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" />
    <!-- css -->
    <link rel="stylesheet" href="../css/dashboardStyle.css" />
</head>

<body>
    <div class="container">
        <aside>
            <div class="top">
                <div class="menu">
                    <!-- logo -->
                    <h2>Menu</h2>
                </div>
                <div class="close">
                    <span class="material-icons-sharp"> close </span>
                </div>
            </div>
            <!-- sidebar -->
            <div class="sidebar">
                <a href="./dashboard.php" class="active"><span class="material-icons-sharp"> dashboard </span>
                    <H3>Dashboard</H3>
                </a>
                <!-- students -->
                <a href="./students.php"><span class="material-icons-sharp"> school </span>
                    <H3>Students</H3>
                </a>
                <!-- add student -->
                <a href="./studentadd.php"><span class="material-icons-sharp"> person_add </span>
                    <H3>Add Student</H3>
                </a>
                <!-- teachers -->
                <a href="./teachers.php"><span class="material-icons-sharp"> person </span>
                    <H3>Teachers</H3>
                </a>
                <!-- add teacher -->
                <a href="./teacheradd.php"><span class="material-icons-sharp"> person_add </span>
                    <H3>Add Teacher</H3>
                </a>
                <!-- courses -->
                <a href="./courcses.php"><span class="material-icons-sharp"> local_library </span>
                    <H3>Courses</H3>
                </a>
                <!-- payments -->
                <a href="./payments.php">
                    <span class="material-icons-sharp"> payments </span>
                    <H3>Payments</H3>
                </a>
                <!-- setting -->
                <a href="./settings.php"><span class="material-icons-sharp"> settings </span>
                    <H3>Settings</H3>
                </a>
                <!-- about -->
                <a href="./about.php"><span class="material-icons-sharp"> info </span>
                    <H3>About</H3>
                </a>
                <!-- logout -->
                <a href="./logout.php"><span class="material-icons-sharp"> logout </span>
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
                    <span class="material-icons-sharp"> school </span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Students</h3>
                            <h1><?php echo $total_students ?></h1>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
                <!-- End of Students count -->
                <!-- Teachers Count -->
                <div class="students-count">
                    <span class="material-icons-sharp"> person </span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Teachers</h3>
                            <h1><?php echo $total_teachers ?></h1>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
                <!-- end of Teachers-count -->
                <!-- Total Income -->
                <div class="total-courses">
                    <span class="material-icons-sharp"> local_library </span>
                    <div class="middle">
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
                    <span class="material-icons-sharp"> account_balance </span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Income</h3>
                            <h1>₹ 10,000</h1>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
                <!-- End of Income -->
            </div>
            <!-- end of insights -->

            <div class="recent-payments">
                <h2>Recent Payments</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Student Name</th>
                            <th>Courses</th>
                            <th>Semester</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <!-- php student database -->
                    <tbody>
                        <td>
                            <h3>Gourab Sarkar</h3>
                        </td>
                        <td>
                            <h3>BCA(H)</h3>
                        </td>
                        <td>
                            <h3>6th</h3>
                        </td>
                        <td>
                            <h3>₹ 21200</h3>
                        </td>
                        <td class="details">
                            <h3>Details</h3>
                        </td>
                    </tbody>

                    <tbody>
                        <td>
                            <h3>Bikram Roy</h3>
                        </td>
                        <td>
                            <h3>BCA(H)</h3>
                        </td>
                        <td>
                            <h3>6th</h3>
                        </td>
                        <td>
                            <h3>₹ 21200</h3>
                        </td>
                        <td class="details">
                            <h3>Details</h3>
                        </td>
                    </tbody>

                    <tbody>
                        <td>
                            <h3>Souvik Roy</h3>
                        </td>
                        <td>
                            <h3>BCA(H)</h3>
                        </td>
                        <td>
                            <h3>6th</h3>
                        </td>
                        <td>
                            <h3>₹ 21200</h3>
                        </td>
                        <td class="details">
                            <h3>Details</h3>
                        </td>
                    </tbody>

                    <tbody>
                        <td>
                            <h3>Prokash Saha</h3>
                        </td>
                        <td>
                            <h3>BCA(H)</h3>
                        </td>
                        <td>
                            <h3>6th</h3>
                        </td>
                        <td>
                            <h3>₹ 21200</h3>
                        </td>
                        <td class="details">
                            <h3>Details</h3>
                        </td>
                    </tbody>

                    <tbody>
                        <td>
                            <h3>Random student1</h3>
                        </td>
                        <td>
                            <h3>BCA(H)</h3>
                        </td>
                        <td>
                            <h3>6th</h3>
                        </td>
                        <td>
                            <h3>₹ 21200</h3>
                        </td>
                        <td class="details">
                            <h3>Details</h3>
                        </td>
                    </tbody>

                    <tbody>
                        <td>
                            <h3>Random sutdent2</h3>
                        </td>
                        <td>
                            <h3>BCA(H)</h3>
                        </td>
                        <td>
                            <h3>6th</h3>
                        </td>
                        <td>
                            <h3>₹ 21200</h3>
                        </td>
                        <td class="details">
                            <h3>Details</h3>
                        </td>
                    </tbody>

                    <tbody>
                        <td>
                            <h3>Random sutdent3</h3>
                        </td>
                        <td>
                            <h3>BCA(H)</h3>
                        </td>
                        <td>
                            <h3>6th</h3>
                        </td>
                        <td>
                            <h3>₹ 21200</h3>
                        </td>
                        <td class="details">
                            <h3>Details</h3>
                        </td>
                    </tbody>
                </table>
                <!-- student php or pa -->
                <a href="students.php">Show All</a>
            </div>
            <!-- end of recent-payments -->
        </main>
        <!-- end of main -->
        <div class="right">
            <div class="top">
                <button id="menu-dtn">
                    <span class="material-icons-sharp"> menu </span>
                </button>
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
            <!-- end of top bar -->

            <div class="recent-update">
                <h2>Recent Updates</h2>
                <div class="update">
                    <div class="message">
                        <p>
                            <b>New Student, </b>
                            Random Student
                        </p>
                        <small class="text-muted"> Last 24 Hours</small>
                    </div>
                </div>
                <div class="update">
                    <div class="message">
                        <p>
                            <b>New Teacher, </b>
                            Random Teacher
                        </p>
                        <small class="text-muted"> Last 24 Hours</small>
                    </div>
                </div>
                <div class="update">
                    <div class="message">
                        <p>
                            <b>New Payment, </b>
                            Random Student's Payment Done
                        </p>
                        <small class="text-muted"> Last 24 Hours</small>
                    </div>
                </div>
                <!-- end of recent updates -->
            </div>
            <!-- end of  recent update -->

            <div class="recent-student">
                <h2>Recent Students</h2>
                <div class="students">
                    <!-- student 1 -->
                    <div class="student">
                        <div class="icon">
                            <span class="material-icons-sharp">school</span>
                        </div>
                        <div class="right">
                            <div class="student-name">
                                <h3>Gourab Sarkar</h3>
                            </div>
                            <div class="course-name">
                                <h3>BCA(h)</h3>
                            </div>
                        </div>
                    </div>
                    <!-- student 2 -->
                    <div class="student">
                        <div class="icon">
                            <span class="material-icons-sharp">school</span>
                        </div>
                        <div class="right">
                            <div class="student-name">
                                <h3>Gourab Sarkar</h3>
                            </div>
                            <div class="course-name">
                                <h3>BCA(h)</h3>
                            </div>
                        </div>
                    </div>
                    <!-- student 3 -->
                    <div class="student">
                        <div class="icon">
                            <span class="material-icons-sharp">school</span>
                        </div>
                        <div class="right">
                            <div class="student-name">
                                <h3>Gourab Sarkar</h3>
                            </div>
                            <div class="course-name">
                                <h3>BCA(h)</h3>
                            </div>
                        </div>
                    </div>
                    <!-- student 4 -->
                    <div class="student">
                        <div class="icon">
                            <span class="material-icons-sharp">school</span>
                        </div>
                        <div class="right">
                            <div class="student-name">
                                <h3>Bikram Roy</h3>
                            </div>
                            <div class="course-name">
                                <h3>BCA(h)</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- add student -->
                <div class="add-student">
                    <a href="studentadd.php">Add Student</a>
                </div>
            </div>
        </div>
        <!-- end of right -->
    </div>
</body>

</html>