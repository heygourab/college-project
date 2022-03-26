<?php
session_start();
error_reporting(0);
include 'config.php';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $selectemail = mysqli_query($conn, "SELECT * FROM users WHERE email = '" . $_POST['email'] . "'");
    if (mysqli_num_rows($selectemail)) {
        $userdata = mysqli_fetch_array($selectemail);
        $token = $userdata['token'];
        $header = "reset_password.php?token=$token ";
        header("Location:$header");
    } else {
        echo "<script>alert('Please enter valid email address.');</script>";
    }
} ?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"> <!-- utf-8 encoding -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href=style.css>
    <title>ForgotPassword</title>
</head>

<body>
    <div class="container">
        <form action="" method="POST" class="login_with_email">
            <!--email form -->
            <p class="SingIn_text" style="text-align: 2rem; font-weight: 800;">Forgot Password?</p>
            <p class="Forget_text" style="text-align: 2rem; font-weight: 600;">Enter the email address<br>
                associate with your account.</p>
            <div class="input_group">
                <input type="email_id" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
                <!--email-->
            </div>
            <div class="input_group">
                <button class="button" name="submit">SEND</button>
            </div>
            <p class="login_register_text">Back to login <a href="index.php">Login Here!</a>
            </p>
        </form>
    </div>
</body>

</html>