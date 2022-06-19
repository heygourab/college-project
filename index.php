<?php
include 'config/config.php';  //datakbase config file 
session_start(); // for data flow control
error_reporting(0); // for error_reporting
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM admin WHERE email='$email' AND password='$password'"; //searching 
    $result = mysqli_query($conn, $sql); 
    
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION ['fullname'] = $row['fullname'];
        $_SESSION ['username'] = $row['username'];
        $_SESSION ['email'] = $row['email'];
        $_SESSION ['password'] = $row['password'];
        $_SESSION ['joining_date'] = $row['datetime'];
        header("Location:main/dashboard.php");
    } else {
        echo "<script>alert('This Email or Password is invalid');</script>";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"> <!-- utf-8 encoding -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <form action="" method="POST" class="login_with_email">
            <!--email form -->
            <p class="SingIn_text" style="text-align: 2rem; font-weight: 800;">Welcome Back!</p>
            <div class="input_group">
                <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" autocomplete = "off" required>
                <!--email input placeholder-->
            </div>
            <div class="input_group">
                <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" autocomplete="off" required> <!-- password input placeholder-->
            </div>
            <div class="input_group">
                <button class="button" name="submit">LOG IN</button>
            </div>
            <p class="login_register_text">
                Don't have an account? <a href="register.php">Register Here!</a>
            </p>
            <P class="forgotpassword_link"><a href="forgot_password.php">Forgot Password!</P> <!-- forgot_password -->
        </form>
    </div>
</body>

</html>