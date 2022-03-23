<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"> <!-- utf-8 encoding -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href=style.css>
    <title>Login</title>
</head>

<body>
    <div class="container">
        <form class="login_with_email">
            <!--email form -->
            <p class="SingIn_text" style="text-align: 2rem; font-weight: 800;">Welcome Back!</p>
            <div class="input_group">
                <input type="email_id" placeholder="Email" required>
                <!--email input placeholder-->
            </div>
            <div class="input_group">
                <input type="password" placeholder="Password" required> <!-- password input placeholder-->
            </div>
            <div class="input_group">
                <button class="button">LOG IN</button>
            </div>
            <p class="login_register_text">
                Don't have an account? <a href="register.php">Register Here!</a>
            </p>
            <P class="forget_password"><a href="forgot_password.php">Forgot Password!</P> <!-- forgot_password -->
        </form>
    </div>
</body>

</html>