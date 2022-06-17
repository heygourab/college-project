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
            <div class ='payments-info'>
                <h2>
                    Recent Student 
                </h2>
                <table>
                    <thead>
                        <tr>
                            <th>
                                Student Name
                            </th>
                            <th>
                                Student Course
                            </th>
                            <th>
                                Enter Fees Amount
                            </th>
                            <th>
                                Select Payment Status
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <td>
                            <h3>
                                Gourab Sarkar
                            </h3>
                        </td>
                        <td>
                            <h3>
                                BCA(H)
                            </h3>
                        </td>
                        <td>
                            <div class="input-box">
                                <input type="number" placeholder="Enter Student Fees Amount" name="secondary-mark" required>
                            </div>
                        </td>
                        <td>
                            <select name="payment" id="payment" class="form-control" required>
                                <option value="Male">Panding</option>
                                <option value="Female">Done</option>
                                <option value="Other">Unsuccessful</option>
                            </select>
                        </td>
                    </tbody>
                    
                </table>
            </div>
        </main>
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
                            <b>
                                Student Payment Update </b>
                            </b>
                            Don't worry use the update button for update the student payment.
                        </p>
                    </div>
                    <div class="message">
                        <p>
                            <b>
                                Studnent Payment Status Search </b>
                            </b>
                            Use the Search button for Student Payment Status Search.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>