<?php
session_start();
include '../config/config.php';
if (!isset($_SESSION['fullname'])) {
    header("Location: index.php");
}
$total = "SELECT count(id) AS total FROM teachers";
$result = mysqli_query($conn, $total);
$values = mysqli_fetch_assoc($result);
$total_teachers = $values['total'];

// male teachers count
$male = "SELECT count(*) AS Male FROM teachers  where gender='Male'";
$result = mysqli_query($conn, $male);
$values = mysqli_fetch_assoc($result);
$total_male_teachers = $values['Male'];

// female teachers count
$female = "SELECT count(*) AS Female FROM teachers where gender='Female'";
$result = mysqli_query($conn, $female);
$values = mysqli_fetch_assoc($result);
$total_female_teachers = $values['Female'];

// other gender teachers count
$other_gender = "SELECT count(*) AS Other FROM teachers where gender='Other'";
$result = mysqli_query($conn, $other_gender);
$values = mysqli_fetch_assoc($result);
$total_other_gender_teachers = $values['Other'];

$recentTeacher_name1 = 'Teacher Not Found';
$recentTeacher_name2 = 'Teacher Not Found';
$recentTeacher_name3 = 'Teacher Not Found';
$recentTeacher_name4 = 'Teacher Not Found';

$recentTeacher_email1 = '?';
$recentTeacher_email2 = '?';
$recentTeacher_email3 = '?';
$recentTeacher_email4 = '?';

$recentTeacher_phone1 = '?';
$recentTeacher_phone2 = '?';
$recentTeacher_phone3 = '?';
$recentTeacher_phone4 = '?';

switch($total_teachers) {
    case $total_teachers == 1: 
        $sql = mysqli_query($conn, "SELECT * FROM teachers ORDER BY id DESC LIMIT 1");
        $lastrowdata =  mysqli_fetch_row($sql);
        $recentTeacher_name1 = $lastrowdata[1]; // recentStudent 1 name
        $recentTeacher_email1 =  $lastrowdata[2]; //recentStudent 1 email
        $recentTeacher_phone1 = $lastrowdata[3]; // recentStudent 1 phoneNumber
        break; 

    case $total_students == 2:
        $sql = mysqli_query($conn, "SELECT * FROM teachers ORDER BY id DESC LIMIT 1");
        $lastrowdata =  mysqli_fetch_row($sql);
        $recentTeacher_name1 = $lastrowdata[1]; // recentStudent 1 name
        $recentTeacher_email1 =  $lastrowdata[2]; //recentStudent 1 email
        $recentTeacher_phone1 = $lastrowdata[3]; // recentStudent 1 phoneNumber

        $sql = mysqli_query($conn, "SELECT * FROM teachers ORDER BY id DESC LIMIT 1,1");
        $lastrowdata =  mysqli_fetch_row($sql);
        $recentTeacher_name2 = $lastrowdata[1]; // recentStudent 2 name
        $recentTeacher_email2 =  $lastrowdata[2]; //recentStudent 2 email
        $recentTeacher_phone2 = $lastrowdata[3]; // recentStudent 2 phoneNumber
        break; 

    case $total_students == 3: 
        $sql = mysqli_query($conn, "SELECT * FROM teachers ORDER BY id DESC LIMIT 1");
        $lastrowdata =  mysqli_fetch_row($sql);
        $recentTeacher_name1 = $lastrowdata[1]; // recentStudent 1 name
        $recentTeacher_email1 =  $lastrowdata[2]; //recentStudent 1 email
        $recentTeacher_phone1 = $lastrowdata[3]; // recentStudent 1 phoneNumber

        $sql = mysqli_query($conn, "SELECT * FROM teachers ORDER BY id DESC LIMIT 1,1");
        $lastrowdata =  mysqli_fetch_row($sql);
        $recentTeachTeacher_name2 = $lastrowdata[1]; // recentStudent 2 name
        $recentTeacher_email2 =  $lastrowdata[2]; //recentStudent 2 email
        $recentTeacher_phone2 = $lastrowdata[3]; // recentStudent 2 phoneNumber

        $sql = mysqli_query($conn, "SELECT * FROM teachers ORDER BY id DESC LIMIT 2,1");
        $lastrowdata =  mysqli_fetch_row($sql);
        $recentTeacher_name3 = $lastrowdata[1]; // recentStudent 2 name
        $recentTeacher_email3 =  $lastrowdata[2]; //recentStudent 2 email
        $recentTeacher_phone3 = $lastrowdata[3]; // recentStudent 2 phoneNumber
        break;

    case $total_students == 4: 
        $sql = mysqli_query($conn, "SELECT * FROM teachers ORDER BY id DESC LIMIT 1");
        $lastrowdata =  mysqli_fetch_row($sql);
        $recentTeacher_name1 = $lastrowdata[1]; // recentTeacher 1 name
        $recentTeacher_email1 =  $lastrowdata[2]; //recentTeacher 1 email
        $recentTeacher_phone1 = $lastrowdata[3]; // recentTeacher 1 phoneNumber

        $sql = mysqli_query($conn, "SELECT * FROM teachers ORDER BY id DESC LIMIT 1,1");
        $result = mysqli_query($conn, $sql);
        $lastrowdata =  mysqli_fetch_row($result);
        $recentTeacher_name2 = $lastrowdata[1]; // recentTeac 2 name
        $recentTeacher_email2 =  $lastrowdata[2]; //recentStudent 2 email
        $recentTeacher_phone2 = $lastrowdata[3]; // recentStudent 2 phoneNumber

        $sql = mysqli_query($conn, "SELECT * FROM teachers ORDER BY id DESC LIMIT 2,1");
        $lastrowdata =  mysqli_fetch_row($sql);
        $recentTeacher_name3 = $lastrowdata[1]; // recentStudent 2 name
        $recentTeacher_email3 =  $lastrowdata[2]; //recentStudent 2 email
        $recentTeacher_phone3 = $lastrowdata[3]; // recentStudent 2 phoneNumber

        $sql = mysqli_query($conn, "SELECT * FROM teachers ORDER BY id DESC LIMIT 3,1");
        $lastrowdata =  mysqli_fetch_row($sql);
        $recentTeacher_name4 = $lastrowdata[1]; // recentStudent 2 name
        $recentTeacher_email4 =  $lastrowdata[2]; //recentStudent 2 email
        $recentTeacher_phone4 = $lastrowdata[3]; // recentStudent 2 phoneNumber
        break;
        
    default :
        
        $recentTeacher_name1 = 'Teacher Not Found';
        $recentTeacher_name2 = 'Teacher Not Found';
        $recentTeacher_name3 = 'Teacher Not Found';
        $recentTeacher_name4 = 'Teacher Not Found';

        $recentTeacher_email1 = '?';
        $recentTeacher_email2 = '?';
        $recentTeacher_email3 = '?';
        $recentTeacher_email4 = '?';

        $recentTeacher_phone1 = '?';
        $recentTeacher_phone2 = '?';
        $recentTeacher_phone3 = '?';
        $recentTeacher_phone4 = '?';
        break;
    }

$text = 'Use the SearchBar for Search?';
$teachername = 'Not Found 😖';
$teacherphonenumber = '😖';
$teacheremail = '😖';
//student serach
if(isset($_POST['submit'])){
    $phonenumber = $_POST['search'];
    $email = $_POST['search'];
    $sql = "SELECT * FROM teachers WHERE email='$email' OR phonenumber='$phonenumber'";
    $result = mysqli_query($conn, $sql);
    if($result->num_rows > 0){
        $data = mysqli_fetch_row($result) ;
        $text = 'Teacher Found 😊';
        $teachername = $data[1]; 
        $teacheremail = $data[4];
        $teacherphonenumber = $data[5];
        
    } else {
        $text = 'Teacher Not Found 😖';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teachers</title>
    <!--icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">
    <!-- css -->
    <link rel="stylesheet" href="../css/teacherStyle.css">
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
                <a href="./teachers.php" class="active"><span class="material-icons-sharp">
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
            <h1>Teachers Information</h1>
            <div class="insights">
                <!-- total teacher count -->
                <div class="students-count">
                    <span class="material-icons-sharp"> person </span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Teachers</h3>
                            <h1><?php echo $total_teachers?></h1>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
                <!-- Male Teacher Count -->
                <div class="students-count">
                    <span class="material-icons-sharp"> person </span>
                    <div class="middle">
                        <div class="left">
                            <h3>Male Teachers</h3>
                            <h1><?php echo $total_male_teachers?></h1>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
                <!-- female Student Count -->
                <div class="students-count">
                    <span class="material-icons-sharp"> school </span>
                    <div class="middle">
                        <div class="left">
                            <h3>Female Teachers</h3>
                            <h1><?php echo $total_female_teachers?></h1>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
                <!-- other gender student -->
                <div class="students-count">
                    <span class="material-icons-sharp"> person </span>
                    <div class="middle">
                        <div class="left">
                            <h3>Other gender Teachers</h3>
                            <h1><?php echo $total_other_gender_teachers?></h1>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
            </div>
            <!-- end of insights -->
            <div class="recent-teachers">
                <h2>Recent Teachers</h2>
                <table> 
                    <thead>
                        <tr>
                            <th>Teacher Name</th>
                            <th>Phone Number</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <!-- php student database -->
                    <tbody>
                        <td>
                            <h3><?php echo $recentTeacher_name1 ?></h3>
                        </td>
                        <td>
                            <h3><?php echo   $recentTeacher_email1 ?></h3>
                        </td>
                        <td>
                            <h3><?php echo  $recentTeacher_phone1 ?></h3>
                        </td>
                        <td>
                            <a href="">Details</a>
                        </td>
                    </tbody>
                    <tbody>
                        <td>
                            <h3><?php echo $recentTeacher_name2 ?></h3>
                        </td>
                        <td>
                            <h3><?php echo   $recentTeacher_email2 ?></h3>
                        </td>
                        <td>
                            <h3><?php echo  $recentTeacher_phone2 ?></h3>
                        </td>
                        <td>
                            <a href="">Details</a>
                        </td>
                    </tbody>
                    <tbody>
                        <td>
                            <h3><?php echo $recentTeacher_name3 ?></h3>
                        </td>
                        <td>
                            <h3><?php echo   $recentTeacher_email3 ?></h3>
                        </td>
                        <td>
                            <h3><?php echo  $recentTeacher_phone3 ?></h3>
                        </td>
                        <td>
                            <a href="">Details</a>
                        </td>
                    </tbody>
                    <tbody>
                        <td>
                            <h3><?php echo $recentTeacher_name4 ?></h3>
                        </td>
                        <td>
                            <h3><?php echo   $recentTeacher_email4 ?></h3>
                        </td>
                        <td>
                            <h3><?php echo  $recentTeacher_phone4 ?></h3>
                        </td>
                        <td>
                            <a href="">Details</a>
                        </td>
                    </tbody>
                </table>
            <!-- end of recent-students -->
            <div class="teacher-search">
                <h2><?php echo $text ?></h2>
                <table> 
                    <thead>
                        <tr>
                            <th>Teacher Name</th>
                            <th>Phone Number</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <td>
                            <h3><?php echo $teachername ?></h3>
                        </td>
                        <td>
                            <h3><?php echo $teacherphonenumber ?></h3>
                        </td>
                        <td>
                            <h3><?php echo $teacheremail ?></h3>
                        </td>
                        <td>
                            <a href="">Details</a>
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
                                Teacher Count
                            </b>
                            Don't worry Teacher's count all time updated.
                        </p>
                    </div>
                    <div class="message">
                        <p>
                            <b>
                                Total Teachers Count
                            </b>
                            Total Teachers count means that all students of all departments.
                        </p>
                    </div>
                    <div class="message">
                        <p><b>
                            Teacher Searching?
                            </b> Use Teacher's Contact Number or Email for searching.
                        </p>
                    </div>
                </div>
            </div>
            <div class="s-form">
                <form action="" method="POST" class="form" id="student-search">
                    <div class="input-box">
                    <span class="details">Use Teacher's Email or Phonenumber</span>
                    <input type="text" placeholder="Search for Teacher's Info." name="search" required>
                </div>
            <!-- submit -->
            <div class="btn-container">
                <button class="button" name="submit" type="submit" form="student-search">Search</button>
            </div>
        </div>
    </div>
</body>

</html>