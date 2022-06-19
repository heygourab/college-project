<?php
session_start();
error_reporting(0);
include 'config/config.php';
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $rpassword = md5($_POST['rpassword']);
    $token = bin2hex(random_bytes(15)); // for security //bin2hex converts to hex
    if ($password == $rpassword) {
        $selectuser = mysqli_query($conn, "SELECT * FROM admin WHERE username = '" . $_POST['username'] . "'");
        $selectemail = mysqli_query($conn, "SELECT * FROM admin WHERE email = '" . $_POST['email'] . "'");
        if (!mysqli_num_rows($selectuser) and !mysqli_num_rows($selectemail)) {
            $sql = "INSERT INTO admin(fullname, username, email, password,token)
                    VALUES ('$fullname', '$username', '$email', '$password', '$token')";
            $result = mysqli_query($conn, $sql);
            if (!$result) {
                echo "<script>alert('Woops!,Something went wrong!!!');</script>";
            } else {
                $username = ""; //for resetting user name
                $email = ""; // for resetting user email
                $_POST['password'] = ""; //for resetting password
                $_POST['cpassword'] = ""; //for resetting password
                header("Location:index.php");
            }
        }
        if (mysqli_num_rows($selectuser) and mysqli_num_rows($selectemail)) {
            echo "<script>alert('This Username and Email already exists,Please try another Username!!!');</script>";
        } else if (mysqli_num_rows($selectuser)) {
            echo "<script>alert('This Username already exists,Please try another Username!!!');</script>";
        } else if (mysqli_num_rows($selectemail)) {
            echo "<script>alert('This Email already exists,Please try another Email!!!');</script>";
        }
    } else {
        echo "<script>alert('Repeat Password Not Matched!!!');</script>";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"> <!-- utf-8 encoding -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href=css\style.css>
    <title>Register</title>
</head>

<body>
    <div class="container">
        <form action="" method="POST" class="login_with_email">
            <!--email form -->
            <p class="SingIn_text" style="font-size: 2rem; font-weight: 800;">Create Account</p>
            <div class="input_group">
                <input type="username" placeholder="username" name="username" value="<?php echo $username; ?>" required>
                <!--username-->
            </div>
            <div class="input_group">
                <input type="fullname" placeholder="Full Name" name="fullname" value="<?php echo $fullname; ?>" required> 
                 <!-- fullname -->
            </div>
          
            <div class="input_group">
                <input type="email_id" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
                <!--email-->
            </div>
            <div class="input_group">
                <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required> <!-- password-->
            </div>
            <div class="input_group">
                <input type="repassword" placeholder="Repeat Password" name="rpassword" value="<?php echo $_POST['rpassword']; ?>" required>
                <!--repeat password-->
            </div>
            <div class="input_group">
                <button class="button" name="submit">REGISTER</button>
            </div>
            <p class="login_register_text">
                Have an account? <a href="index.php">Login Here!</a>
            </p>
        </form>
    </div>
</body>

</html>