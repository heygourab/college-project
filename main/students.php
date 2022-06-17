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

$recentStudent_name1 = 'Student Not Found';
$recentStudent_name2 = 'Student Not Found';
$recentStudent_name3 = 'Student Not Found';
$recentStudent_name4 = 'Student Not Found';

$recentStudent_course1 = '?';
$recentStudent_course2 = '?';
$recentStudent_course3 = '?';
$recentStudent_course4 = '?';

$recentStudent_email1 = '?';
$recentStudent_email2 = '?';
$recentStudent_email3 = '?';
$recentStudent_email4 = '?';

$recentStudent_phone1 = '?';
$recentStudent_phone2 = '?';
$recentStudent_phone3 = '?';
$recentStudent_phone4 = '?';

switch($total_students) {
    case $total_students == 1: 
        $sql = mysqli_query($conn, "SELECT * FROM students ORDER BY id DESC LIMIT 1");
        $lastrowdata =  mysqli_fetch_row($sql);
        $recentStudent_name1 = $lastrowdata[1]; // recentStudent 1 name
        $recentStudent_course1 = $lastrowdata[8]; // recentStudent 1 course
        $recentStudent_email1 =  $lastrowdata[4]; //recentStudent 1 email
        $recentStudent_phone1 = $lastrowdata[5]; // recentStudent 1 phoneNumber
        break; 

    case $total_students == 2:
        $sql = mysqli_query($conn, "SELECT * FROM students ORDER BY id DESC LIMIT 1");
        $lastrowdata =  mysqli_fetch_row($sql);
        $recentStudent_name1 = $lastrowdata[1]; // recentStudent 1 name
        $recentStudent_course1 = $lastrowdata[8]; // recentStudent 1 course
        $recentStudent_email1 =  $lastrowdata[4]; //recentStudent 1 email
        $recentStudent_phone1 = $lastrowdata[5];

        
        $sql = mysqli_query($conn, "SELECT * FROM students ORDER BY id DESC LIMIT 1,1");
        $lastrowdata = mysqli_fetch_row($sql);
        $recentStudent_name2 = $lastrowdata[1]; // recentStudent 1 name
        $recentStudent_course2 = $lastrowdata[8]; // recentStudent 1 course
        $recentStudent_email2 =  $lastrowdata[4]; //recentStudent 1 email
        $recentStudent_phone2 = $lastrowdata[5];
        break; 

    case $total_students == 3: 
        $sql = mysqli_query($conn, "SELECT * FROM students ORDER BY id DESC LIMIT 1");
        $lastrowdata =  mysqli_fetch_row($sql);
        $recentStudent_name1 = $lastrowdata[1]; // recentStudent 1 name
        $recentStudent_course1 = $lastrowdata[8]; // recentStudent 1 course
        $recentStudent_email1 =  $lastrowdata[4]; //recentStudent 1 email
        $recentStudent_phone1 = $lastrowdata[5]; // recentStudent 1 phoneNumber

        $sql = mysqli_query($conn, "SELECT * FROM students ORDER BY id DESC LIMIT 1,1");
        $lastrowdata =  mysqli_fetch_row($sql);
        $recentStudent_name2 = $lastrowdata[1]; // recentStudent 1 name
        $recentStudent_course2 = $lastrowdata[8]; // recentStudent 1 course
        $recentStudent_email2 =  $lastrowdata[4]; //recentStudent 1 email
        $recentStudent_phone22 = $lastrowdata[5];
    
        $sql = mysqli_query($conn, "SELECT * FROM students ORDER BY id DESC LIMIT 2,1");
        $result = mysqli_query($conn, $sql);
        $recentStudent_name3 = $lastrowdata[1]; // recentStudent 1 name
        $recentStudent_course3 = $lastrowdata[8]; // recentStudent 1 course
        $recentStudent_email3 =  $lastrowdata[4]; //recentStudent 1 email
        $recentStudent_phone3 = $lastrowdata[5];
        break;

    case $total_students == 4: 
        $sql = mysqli_query($conn, "SELECT * FROM students ORDER BY id DESC LIMIT 1");
        $lastrowdata =  mysqli_fetch_row($sql);
        $recentStudent_name1 = $lastrowdata[1]; // recentStudent 1 name
        $recentStudent_course1 = $lastrowdata[8]; // recentStudent 1 course
        $recentStudent_email1 =  $lastrowdata[4]; //recentStudent 1 email
        $recentStudent_phone1 = $lastrowdata[5]; // recentStudent 1 phoneNumber

        $sql = mysqli_query($conn, "SELECT * FROM students ORDER BY id DESC LIMIT 1,1");
        $lastrowdata =  mysqli_fetch_row($sql);
        $recentStudent_name2 = $lastrowdata[1]; // recentStudent 1 name
        $recentStudent_course2 = $lastrowdata[8]; // recentStudent 1 course
        $recentStudent_email2 =  $lastrowdata[4]; //recentStudent 1 email
        $recentStudent_phone2 = $lastrowdata[5];
    
        $sql = mysqli_query($conn, "SELECT * FROM students ORDER BY id DESC LIMIT 2,1");
        $lastrowdata =  mysqli_fetch_row($sql);
        $recentStudent_name3 = $lastrowdata[1]; // recentStudent 1 name
        $recentStudent_course3 = $lastrowdata[8]; // recentStudent 1 course
        $recentStudent_email3 =  $lastrowdata[4]; //recentStudent 1 email
        $recentStudent_phone3 = $lastrowdata[5];

        $sql = mysqli_query($conn, "SELECT * FROM students ORDER BY id DESC LIMIT 3,1");
        $lastrowdata =  mysqli_fetch_row($sql);
        $recentStudent_name4 = $lastrowdata[1]; // recentStudent 1 name
        $recentStudent_course4 = $lastrowdata[8]; // recentStudent 1 course
        $recentStudent_email4 =  $lastrowdata[4]; //recentStudent 1 email
        $recentStudent_phone4 = $lastrowdata[5];
        break;

    default :
        $recentStudent_name1 = 'Student Not Found';
        $recentStudent_name2 = 'Student Not Found';
        $recentStudent_name3 = 'Student Not Found';
        $recentStudent_name4 = 'Student Not Found';
    
        $recentStudent_course1 = '?';
        $recentStudent_course2 = '?';
        $recentStudent_course3 = '?';
        $recentStudent_course4 = '?';
        
        $recentStudent_email1 = '?';
        $recentStudent_email2 = '?';
        $recentStudent_email3 = '?';
        $recentStudent_email4 = '?';

        $recentStudent_phone1 = '?';
        $recentStudent_phone2 = '?';
        $recentStudent_phone3 = '?';
        $recentStudent_phone4 = '?';
        break;
    }


$text = 'Use the SearchBar for Student Search?';
$studentname = '😌';
$studentphonenumber = '😊';
$studentemail = '😎';
$studentcourse = '🙂';
$token = ''; 
$details ='';
//student serach
if(isset($_POST['submit'])){
    $phonenumber = $_POST['search'];
    $email = $_POST['search'];
    $sql = "SELECT * FROM students WHERE email='$email' OR phonenumber='$phonenumber'";
    $result = mysqli_query($conn, $sql);
    if($result->num_rows > 0){
        $data = mysqli_fetch_row($result) ;
        $text = 'Student Found 😊';
        $studentname = $data[1]; 
        $studentemail = $data[4];
        $studentphonenumber = $data[5];
        $studentcourse = $data[8];
        $token = $data[18];
        $details = 'studentdetalis.php?token=' . $token;
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
            <div class="recent-students">
                <h2>Recent Students</h2>
                <table> 
                    <thead>
                        <tr>
                            <th>Student Name</th>
                            <th>Phone Number</th>
                            <th>Email</th>
                            <th>Course</th>
                        </tr>
                    </thead>
                    <!-- php student database -->
                    <tbody>
                        <td>
                            <h3><?php echo $recentStudent_name1 ?></h3>
                        </td>
                        <td>
                            <h3><?php echo $recentStudent_phone1 ?></h3>
                        </td>
                        <td>
                            <h3><?php echo $recentStudent_email1 ?></h3>
                        </td>

                        <td>
                            <h3><?php echo $recentStudent_course1 ?></h3>
                        </td>
                    </tbody>
                    <tbody>
                        <td>
                            <h3><?php echo $recentStudent_name2 ?></h3>
                        </td>
                        <td>
                            <h3><?php echo $recentStudent_phone2 ?></h3>
                        </td>
                        <td>
                            <h3><?php echo $recentStudent_email2 ?></h3>
                        </td>
                        <td>
                            <h3><?php echo $recentStudent_course2 ?></h3>
                        </td>
                    </tbody>
                    <tbody>
                        <td>
                            <h3><?php echo $recentStudent_name3 ?></h3>
                        </td>
                        <td>
                            <h3><?php echo $recentStudent_phone3 ?></h3>
                        </td>
                        <td>
                            <h3><?php echo $recentStudent_email3 ?></h3>
                        </td>
                        <td>
                            <h3><?php echo $recentStudent_course3 ?></h3>
                        </td>
                    </tbody>
                    <tbody>
                        <td>
                            <h3><?php echo $recentStudent_name4 ?></h3>
                        </td>
                        <td>
                            <h3><?php echo $recentStudent_phone4 ?></h3>
                        </td>
                        <td>
                            <h3><?php echo $recentStudent_email4 ?></h3>
                        </td>
                        <td>
                            <h3><?php echo $recentStudent_course4 ?></h3>
                        </td>
                    </tbody>
                </table>
            <!-- end of recent-students -->
            <div class="student-search">
                <h2><?php echo $text ?></h2>
                <table> 
                    <thead>
                        <tr>
                            <th>Student Name</th>
                            <th>Phone Number</th>
                            <th>Email</th>
                            <th>Course</th>
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
                            <h3><?php echo $studentemail ?></h3>
                        </td>

                        <td>
                            <h3><?php echo $studentcourse ?></h3>
                        </td>
                        <td>
                            <a href='<?php echo $details?>'>Details</a>
                        </td>
                    </tbody>
                </table>
            </div>
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
                                Student's Count
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
            <div class="s-form">
                <form action="" method="POST" class="form" id="student-search">
                    <div class="input-box">
                    <span class="details">Use Studnent's Email or Phonenumber</span>
                    <input type="text" placeholder="Search for Student's Info." name="search" required>
                </div>
            <!-- submit -->
            <div class="btn-container">
                <button class="button" name="submit" type="submit" form="student-search">Search</button>
            </div>
        </div>
    </div>
</body>

</html>