<?php
session_start();
if (!isset($_SESSION['fullname'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
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
                <form action="" class="form">
                    <div class="student-details">
                        <!-- student first name -->
                        <div class="input-box">
                            <span class="details">Student First Name</span>
                            <input type="text" placeholder="Student First Name" required>
                        </div>
                        <!-- student last name -->
                        <div class="input-box">
                            <span class="details">Student Last Name</span>
                            <input type="text" placeholder="Student Last Name" required>
                        </div>
                        <!-- student father name -->
                        <div class="input-box">
                            <span class="details">Student's Father Name</span>
                            <input type="text" placeholder="Student's Father Name" required>
                        </div>
                        <!-- student  mother name -->
                        <div class="input-box">
                            <span class="details">Student's Mother Name</span>
                            <input type="text" placeholder="Student's Mother Name" required>
                        </div>
                        <!-- student email  -->
                        <div class="input-box">
                            <span class="details">Student's Email Address</span>
                            <input type="email" placeholder="Student's Email Address" required">
                        </div>
                        <!-- student phonenumber -->
                        <div class="input-box">
                            <span class="details">Student's Contact Number</span>
                            <input type="tel" placeholder="Student's Contact Number" required>
                        </div>
                    </div>
                    <!-- gender-details -->
                    <div class="gender-details">
                        <input type="radio" name="gender" value="" id="dot-1">
                        <input type="radio" name="gender" value="" id="dot-2">
                        <input type="radio" name="gender" value="" id="dot-3">
                        <span class="gender-title">
                            <h2>Student's Gender</h2>
                        </span>
                        <div class="category">
                            <!-- male -->
                            <label for="dot-1">
                                <span class="dot one"></span>
                                <span class="gender">Male</span>
                            </label>
                            <!-- female -->
                            <label for="dot-2">
                                <span class="dot two"></span>
                                <span class="gender">Female</span>
                            </label>
                            <!-- other -->
                            <label for="dot-3">
                                <span class="dot three"></span>
                                <span class="gender">Other</span>
                            </label>
                        </div>
                    </div>
                    <!-- end of gender section-->

                    <div class="student-details">
                        <!-- student secondary-marks-->
                        <div class="input-box">
                            <span class="details">Student Secondary Marks</span>
                            <input type="number" placeholder="Student's Secondary Marks" min="1" max="700" required>
                        </div>
                        <!-- Student Secondary Percentage -->
                        <div class="input-box">
                            <span class="details">Student Secondary Percentage</span>
                            <input type="number" placeholder="Student's Secondary Percentage" min="1" max="100"
                                required>
                        </div>
                        <!-- Student's Highest Secondary Marks -->
                        <div class="input-box">
                            <span class="details">Student's Highest Secondary Marks</span>
                            <input type="number" placeholder="Student's Highest Secondary Marks" min="1" max="500"
                                required>
                        </div>
                        <!-- Student's Highest Secondary Percentage -->
                        <div class="input-box">
                            <span class="details">Student's Highest Secondary Percentage</span>
                            <input type="number" placeholder="Student's Highest Secondary Percentage" min="1" max="100"
                                required>
                        </div>
                        <!-- Student's Highest Secondary Passout Year -->
                        <div class="input-box">
                            <span class="details">Student's HS Passout Year (month-year)</span>
                            <input type="month" placeholder="Student's Highest Secondary Passout Year" required>
                        </div>
                        <!-- student's Highest Secondary Board-->
                        <div class="input-box">
                            <span class="details">Student's HS Passout Board</span>
                            <input type="text" placeholder="Student's HS Passout Board (e.g-cbsc)" required>
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
                        <div class="input-box">
                            <span class="details">Student's Pincode</span>
                            <input type="text" name="pin" pattern="[0-9]{6}" maxlength="6"
                                placeholder="Student's Pincode (e.g: 733101)" required>
                        </div>
                    </div>
                    <!-- submit-->
                    <div class="btn-container">
                        <button class="button" name="submit">SUBMIT</button>
                    </div>
                </form>
            </div>
        </main>
        <!-- End of  main -->
    </div>
</body>

</html>