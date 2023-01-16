<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="../../Public/CSS/Stylesheet.css">
    </head>
    <body id="index">
        <form name="signup" action="" method="POST">
            <h2>LOGIN</h2>
            <p class="login">Please enter your username and password</p>
            <div class="error-msg">
                <p><?php echo $displayErrorLogin; ?></p>
            </div><br>
            <label class="uname">Username</label><br>
            <input class="input" type=text name="user" required><br><br>
            <label class="pass">Password</label><br>
            <input class="input" type="password" name="pw" required><br>
            <p class="reset"><a href="../Index/ResetPassword.php">Forgot your password?</a></p>
            <button class="btn-login" type="submit" name="login">Login</button>
            <button class="btn-cancel" type="submit" name="cancel"><a href="../Index/Index.php">Cancel</a></button><br><br>
        </form>
    </body>
</html>