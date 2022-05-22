<?php
include '../config/config.php';
session_start();
error_reporting(0);

if (!isset($_SESSION['fullname'])) {
    header("Location: index.php");

}
if (isset($_POST['submit'])) {
    $fname = $_POST['fname']; //first name 
    $lname = $_POST['lname']; //last name
    $fullname = $fname . ' ' . $lname; // fullname
    $fathername = $_POST['fathername']; //fathername
    $mothername = $_POST['mothername']; //mothername
    $email = $_POST['email']; //email
    $phonenumber = $_POST['phonenumber']; //phonenumber
    $gender = $_POST['gender']; //gender 
    $dob = $_POST['dob']; //date of birth
    $course = $_POST['course']; //course 
    $sm =  $_POST['secondary-mark']; //secondary-mark
    $hs = $_POST['higher-secondary-mark']; //higher-secondary-mark
    $year = $_POST['passout-year']; //passout-year
    $board = $_POST['board']; //board
    $state = $_POST['state']; //state
    $pin = $_POST['pin']; //pincode
    $locality = $_POST['locality']; //locality
    $token = bin2hex(random_bytes(15)); // for security //bin2hex converts to hex
    $selectphone = mysqli_query($conn, "SELECT * FROM students WHERE phonenumber = '" . $_POST['phonenumber'] . "'"); //phonenumber
    $selectemail = mysqli_query($conn, "SELECT * FROM students WHERE email = '" . $_POST['email'] . "'"); //email

    $smp = $sm / 700 * 100;
    $hsp = $hs / 500 * 100;

    if (!mysqli_num_rows($selectphone) and !mysqli_num_rows($selectemail)) {
        $sql = "INSERT INTO students(fullname,fathername,mothername,email,phonenumber,gender,dob,course,secondary_mark,	secondary_percentage,higher_secondary_mark,higher_secondary_percentage,passout_year,passout_board,state,pin,locality,token)
                VALUES ('$fullname','$fathername','$mothername','$email','$phonenumber','$gender','$dob','$course','$sm','$smp', '$hs','$hsp','$year', '$board','$state','$pin','$locality','$token')";
        $result = mysqli_query($conn, $sql);
        if (!$result) {
            echo "<script>alert('Woops!,Something went wrong!!!');</script>";
        } else {
            echo "<script>alert('done!!!');</script>";
        }
    } else  if (mysqli_num_rows($selectphone) and mysqli_num_rows($selectemail)) {
        echo "<script>alert('This Username and Email already exists,Please try another Username!!!');</script>";
    } else if (mysqli_num_rows($selectphone)) {
        echo "<script>alert('This Contact Number already exists,Please try another Contact Number!!!');</script>";
    } else if (mysqli_num_rows($selectemail)) {
        echo "<script>alert('This Email already exists,Please try another Email!!!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Students</title>
    <!--icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" />
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- css -->
    <link rel="stylesheet" href="../css/studentaddStyle.css" />
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
                <a href="./dashboard.php"><span class="material-icons-sharp"> dashboard </span>
                    <H3>Dashboard</H3>
                </a>
                <!-- students -->
                <a href="./students.php"><span class="material-icons-sharp"> school </span>
                    <H3>Students</H3>
                </a>
                <!-- add student -->
                <a href="./studentadd.php" class="active"><span class="material-icons-sharp"> person_add </span>
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
            <h1>Add Student Details</h1>
            <div class="s-form">
                <form action="" method="POST" class="form" id="student-form">
                    <div class="student-details">
                        <!-- student first name -->
                        <div class="input-box">
                            <span class="details">Student's First Name</span>
                            <input type="text" placeholder="Student's First Name" name="fname" required>
                        </div>
                        <!-- student last name -->
                        <div class="input-box">
                            <span class="details">Student's Last Name</span>
                            <input type="text" placeholder="Student's Last Name" name="lname" required>
                        </div>
                        <!-- student father name -->
                        <div class="input-box">
                            <span class="details">Student's Father Name</span>
                            <input type="text" placeholder="Student's Father Name" name="fathername" required>
                        </div>
                        <!-- student mother name -->
                        <div class="input-box">
                            <span class="details">Student's Mother Name</span>
                            <input type="text" placeholder="Student's Mother Name" name="mothername" required>
                        </div>
                        <!-- student email  -->
                        <div class="input-box">
                            <span class="details">Student's Email Address</span>
                            <input type="email" placeholder="Student's Email Address" name="email" required>
                        </div>
                        <!-- student phonenumber -->
                        <div class="input-box">
                            <span class="details">Student's Contact Number</span>
                            <input type="text" placeholder="Student's Contact Number" pattern="[0-9]{10}" maxlength="10" name="phonenumber" required>
                        </div>
                        <!-- gender-details -->
                        <div class="input-box">
                            <span class="details">Student's Gender</span>
                            <select name="gender" id="gender" class="form-control" required>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <!-- date of birth  -->
                        <div class="input-box">
                            <span class="details">Student's Date Of Birth</span>
                            <input type="date" id="dob" name="dob" required>
                        </div>
                        <!-- student course -->
                        <div class="input-box">
                            <span class="details">Student's Course</span>
                            <select name="course" id="course" class="form-control" required>
                                <option value="BCA(H)">BCA(H)</option>
                                <option value="BHM(H)">BHM(H)</option>
                                <option value="BBA(H)">BBA(H)</option>
                            </select>
                        </div>
                        <!-- student secondary-marks-->
                        <div class="input-box">
                            <span class="details">Student's Secondary Marks</span>
                            <input type="number" placeholder="Student's Secondary Marks" min="1" max="700" name="secondary-mark" required>
                        </div>
                        <!-- Student's Highest Secondary Marks -->
                        <div class="input-box">
                            <span class="details">Student's Highe Secondary Marks</span>
                            <input type="number" placeholder="Student's Higher Secondary Marks" min="1" max="500" name="higher-secondary-mark" required>
                        </div>
                        <!-- Student's Highest Secondary Passout Year -->
                        <div class="input-box">
                            <span class="details">Student's HS Passout Year</span>
                            <input type="text" placeholder="Student's Highest Secondary Passout Year" name="passout-year" pattern="[0-9]{4}" required>
                        </div>
                        <!-- student's Highest Secondary Board-->
                        <div class="input-box">
                            <span class="details">Student's HS Passout Board</span>
                            <input type="text" placeholder="Student's HS Passout Board (e.g-cbsc)" name="board" required>
                        </div>
                        <!-- student's state -->
                        <div class="input-box">
                            <span class="details">Student's State</span>
                            <select name="state" id="state" class="form-control" required>
                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                <option value="Assam">Assam</option>
                                <option value="Bihar">Bihar</option>
                                <option value="Chandigarh">Chandigarh</option>
                                <option value="Chhattisgarh">Chhattisgarh</option>
                                <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                <option value="Daman and Diu">Daman and Diu</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Lakshadweep">Lakshadweep</option>
                                <option value="Puducherry">Puducherry</option>
                                <option value="Goa">Goa</option>
                                <option value="Gujarat">Gujarat</option>
                                <option value="Haryana">Haryana</option>
                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                <option value="Jharkhand">Jharkhand</option>
                                <option value="Karnataka">Karnataka</option>
                                <option value="Kerala">Kerala</option>
                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                <option value="Maharashtra">Maharashtra</option>
                                <option value="Manipur">Manipur</option>
                                <option value="Meghalaya">Meghalaya</option>
                                <option value="Mizoram">Mizoram</option>
                                <option value="Nagaland">Nagaland</option>
                                <option value="Odisha">Odisha</option>
                                <option value="Punjab">Punjab</option>
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Sikkim">Sikkim</option>
                                <option value="Tamil Nadu">Tamil Nadu</option>
                                <option value="Telangana">Telangana</option>
                                <option value="Tripura">Tripura</option>
                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                <option value="Uttarakhand">Uttarakhand</option>
                                <option value="West Bengal">West Bengal</option>
                            </select>
                        </div>
                        <!-- student's pincode -->
                        <div class="input-box">
                            <span class="details">Student's Pincode</span>
                            <input type="text" name="pin" pattern="[0-9]{6}" maxlength="6" placeholder="Student's Pincode (e.g: 733101)" required>
                        </div>
                        <!-- student's locality-->
                        <div class="input-box">
                            <span class="details">Student's Localty</span>
                            <input type="text" name="locality" placeholder="Student's Loclty (e.g: ....Road)" required>
                        </div>
                    </div>
                </form>
            </div>
        </main>
        <!-- End of  main -->
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
                                Student's Percentage,
                            </b>
                            Don't worry student's percentage is automatically stored on the server.
                        </p>
                    </div>
                    <div class="message">
                        <p>
                            <b>
                                Form Submission,
                            </b>
                            Don't worry Just click the bottom submit button to submit the form.
                        </p>
                    </div>
                    <div class="message">
                        <p>
                            <b>
                                Student's Payment,
                            </b>
                            Don't worry just go to the payment page to do payment.
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