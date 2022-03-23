<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"> <!-- utf-8 encoding -->
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href=style.css>
    <title>Register</title>
</head>

<body>
    <div class="container">
        <form class="login_with_email"><!--email form -->
            <p class="SingIn_text" style="font-size: 2rem; font-weight: 800;">Create Account</p>
            <div class="input_group">
                <input type="username" placeholder="Full Name" name="fullname" required> <!--username-->
            </div>
            <div class="input_group">
                <input type="email_id" placeholder="Email" name = "email" required><!--email input placeholder-->
            </div>
            <div class="input_group">
                <input type="password" placeholder="Password" name = "password" required> <!-- password input placeholder-->
            </div>
            <div class="input_group">
                <input type="repassword" placeholder="Repeat Password" name = "Rpassword"  required> <!-- password input placeholder-->
            </div>  
            <div class="input_group">
                <button class="button">SING UP</button>
            </div>
            <p class="login_register_text">
                Have an account? <a href="index.php">Login Here!</a>
            </p>
        </form>
    </div>
</body>

</html>