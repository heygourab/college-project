<?php
session_start();
error_reporting(0);

include 'config.php';
if (isset($_POST['submit'])) {
    $password = md5($_POST['password']);
    $rpassword = md5($_POST['rpassword']);
    $selectpassword = mysqli_query($conn, "SELECT * FROM users WHERE password = '" . $_POST['password'] . "'");

    if (mysqli_num_rows($selectpassword)) {
        echo "<script>alert('this password is not exists')</script>";
    } else {
        if ($password == $rpassword) {
            $token  = $_GET['token'];
            $updatequery = "update users set password='$password' where token = '$token'";
            if (mysqli_query($conn, $updatequery)) {
                echo "<script>alert('Done! Your password has been updated successfully.');</script>";
                header("Location:index.php");
            } else {
                echo "<script>alert('Done! Your password update failed.');</script>";
            }
        } else {
            echo "<script>alert('Repeat Password Not Matched!!!');</script>";
        }
    }

    //     if (mysqli_num_rows($selectpassword)) {
    //         // if ($password == $rpassword) {
    //         //     $token  = $_GET['token'];
    //         //     $updatequery = "update users set password='$password' where token = '$token'";
    //         //     if (mysqli_query($conn, $updatequery)) {
    //         //         echo "<script>alert('Done! Your password has been updated successfully.');</script>";
    //         //         header("Location:index.php");
    //         //     } else {
    //         //         echo "<script>alert('Done! Your password update failed.');</script>";
    //         //     }
    //         // } else {
    //         //     echo "<script>alert('Repeat Password Not Matched!!!');</script>";
    //         // }
    //         echo "<script>alert('this password s already exists');</script>";
    //     } else {
    //         echo "<script>alert('You can't use your current password!!!')</script>";
    //     }
    // }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"> <!-- utf-8 encoding -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href=style.css>
    <title>Reset Password</title>
</head>

<body>
    <div class="container">
        <form action="" method="POST" class="login_with_email">
            <p class="Reset_text" style="text-align: 2rem; font-weight : 800;">Create New Password</p>
            <p class="info_text" style="text-align: 2rem; font-weight: 600;">Your new password must be different <br>
                from previous password.</p>
            </p>
            <div class="input_group">
                <input type="password" placeholder="Password" name="password" required> <!-- password-->
            </div>
            <div class="input_group">
                <input type="repassword" placeholder="Repeat Password" name="rpassword" required>
                <!--repeat password-->
            </div>
            <div class="input_group">
                <button class="button" name="submit">RESET PASSWORD</button>
            </div>
        </form>
    </div>
</body>

</html>