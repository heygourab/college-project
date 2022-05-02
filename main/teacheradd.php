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
    <title>Add Students</title>
    <!--icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">
    <!-- css -->
    <link rel="stylesheet" href="../css/teacheraddStyle.css">
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
                <a href="./teacheradd.php" class="active"><span class="material-icons-sharp">
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
            <h1>Add Teacher Details</h1>
            <div class="s-form">
                <form action="" method="POST" class="form">
                    <div class="student-details">
                        <!-- teacher first name -->
                        <div class="input-box">
                            <span class="details">Teacher's First Name</span>
                            <input type="text" placeholder="Teacher's First Name'" name="fname" required>
                        </div>
                        <!-- teacher lastname -->
                        <div class="input-box">
                            <span class="details">Teacher's Last Name</span>
                            <input type="text" placeholder="Teacher's' Last Name" name="lname" required>
                        </div>
                        <!-- email address -->
                        <div class="input-box">
                            <span class="details">Teacher's Email Address</span>
                            <input type="email" placeholder="Teacher's Email Address" name="email" required>
                        </div>
                        <!-- phone number -->
                        <div class="input-box">
                            <span class="details">Teacher's Phone Number</span>
                            <input type="text" placeholder="Teacher's Phone Number" name="phone-number"
                                pattern="[0-9]{10}" maxlength="10" required>
                        </div>
                        <!-- date of birth  -->
                        <div class="input-box">
                            <span class="details">Teacher's Date Of Birth</span>
                            <input type="date" id="dob" name="dob" required>
                        </div>
                        <!-- marital status  -->
                        <div class="input-box">
                            <span class="details">Teacher's Marital Status</span>
                            <select name="marital-status" id="marital-status" class="form-control" required>
                                <option value="Single">Single</option>
                                <option value="Female">Married</option>
                                <option value="Other">Widowed</option>
                                <option value="Other">Divorced</option>
                            </select>
                        </div>
                        <!-- gender-details -->
                        <div class="input-box">
                            <span class="details">Teacher's Gender</span>
                            <select name="gender" id="gender" class="form-control" required>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <!-- Teacher's Department -->
                        <div class="input-box">
                            <span class="details">Teacher's Department</span>
                            <input type="text" placeholder="Teacher's Department. (e.g: cs)" name="department" required>
                        </div>
                        <!-- Teacher's state -->
                        <div class="input-box">
                            <span class="details">Teacher's State</span>
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
                        <!-- Teacher's Pincode -->
                        <div class="input-box">
                            <span class="details">Teacher's Pincode</span>
                            <input type="text" name="pin" pattern="[0-9]{6}" maxlength="6"
                                placeholder="Student's Pincode (e.g: 733101)" required>
                        </div>
                    </div>
                    <!-- submit-->
                    <div class="btn-container">
                        <button class="button" name="submit" type="submit">SUBMIT</button>
                    </div>
                </form>
            </div>
        </main>
    </div>
</body>

</html>