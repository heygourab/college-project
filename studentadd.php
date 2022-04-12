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
                <a href="./dashboad.php"><span class="material-icons-sharp">
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
                <a href="./studentadd.php" class="active"><span class="material-icons-sharp">
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
                    <!-- setting -->
                    <a href="./setting.php"><span class="material-icons-sharp">
                            settings
                        </span>
                        <H3>Settings</H3>
                    </a>
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
    </div>
</body>

</html>