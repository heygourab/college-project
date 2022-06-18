<?php
session_start();
if (!isset($_SESSION['fullname'])) {
    header("Location: index.php");
}



$name = $_SESSION['fullname'];

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $fname = $_POST['fname']; //first name 
    $lname = $_POST['lname']; //last name
    $fullname = $fname . ' ' . $lname; // fullname
    if ($password == $cpassword) {
        $selectpassword = mysqli_query($conn, "SELECT * FROM admin WHERE password = '" . $_POST['password'] . "'");
        if(!mysqli_num_rows($selectpassword)){
            $updatequery = "update users set password='$password' where fullname = '$name'";

        }else {
            echo "<script>alert('Your can't use you old password.');</script>";
        }
    }else{
        echo "<script>alert('Your Password and Confirm Password are not matched.');</script>";
    }

    $selectpassword = mysqli_query($conn, "SELECT * FROM admin WHERE email = '" . $_POST['email'] . "'");
    if (mysqli_num_rows($selectemail)) {
        $userdata = mysqli_fetch_array($selectemail);
        $token = $userdata['token'];
        $header = "reset_password.php?token=$token ";
        header("Location:$header");
    } else {
        echo "<script>alert('Please enter valid email address.');</script>";
    }
}

$sql = mysqli_query($conn, "SELECT * FROM admin WEHRE fullname = '" . $_SESSION['fullname'] . "'");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
    <!--icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">
    <!-- css -->
    <link rel="stylesheet" href="../css/settingsStyle.css">
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
                <a href="./settings.php" class="active"><span class="material-icons-sharp">
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
            <h1>
                Settings
            </h1>
            <div class='admin-info'>
                <h2>
                    Admin Details
                </h2>
                <table>
                    <thead>
                        <tr>
                            <th>
                                Admin Name
                            </th>
                            <th>
                                Admin Username
                            </th>
                            <th>
                                Admin Email
                            </th>
                            <th>
                                Admin PhoneNumber
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
                            <h3>email_id</h3>
                        </td>
                        <td>
                            <h3>
                                000000
                            </h3>
                        </td>
                    </tbody>
                </table>
                <h2>Admin Current Password</h2>
                <table>
                    <thead>
                        <tr>
                            <th>
                                Admin Password
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        <td>
                            <h3>
                                password123
                            </h3>
                        </td>
                    </tbody>
                </table>
            </div>
            <h1>Admin Account Information Edit Form</h1>
            <div class="edit-form">
                <form action="" method="POST" class="form" id="teacher-form">
                    <div class="admin-details">
                        <!-- teacher first name -->
                        <div class="input-box">
                            <span class="details">First Name</span>
                            <input type="text" placeholder="Teacher's First Name" name="fname" required>
                        </div>
                        <!-- teacher lastname -->
                        <div class="input-box">
                            <span class="details">Last Name</span>
                            <input type="text" placeholder="Teacher's Last Name" name="lname" required>
                        </div>
                        <!-- email address -->
                        <div class="input-box">
                            <span class="details">Teacher's Email Address</span>
                            <input type="email" placeholder="Teacher's Email Address" name="email" required>
                        </div>
                        <!-- phone number -->
                        <div class="input-box">
                            <span class="details">Teacher's Phone Number</span>
                            <input type="text" placeholder="Teacher's Phone Number" pattern="[0-9]{10}" maxlength="10"
                                name="phonenumber" required>
                        </div>
                        <!--admin password -->
                        <div class="input-box">
                            <span class="details">Admin Password</span>
                            <input type="password" placeholder="Enter New Password" name="password" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Admin Confirm Password</span>
                            <input type="password" placeholder="Enter New Password" name="cpassword" required>
                        </div>
                    </div>
                </form>
            </div>
        </main>
        <!-- End of main -->
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
                                Admin Username
                            </b>
                            Sorry Admin Username can't change.
                        </p>
                    </div>
                </div>
            </div>

            <!-- submit -->
            <div class="btn-container">
                <button class="button" name="submit" type="submit" form="teacher-form">UPDATE</button>
            </div>
        </right>
    </div>
</body>

</html>