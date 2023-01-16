<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="../../Public/CSS/Stylesheet.css">
    </head>
    <body id="index">
        <form name="signup" action="" method="POST">
            <div class="reset-pass">
                <p><?php echo $invalidEmail; ?></p>
            </div>
            <h2>RESET MY PASSWORD</h2>
            <p class="login">Please enter your email address</p><br>
            <label class="uname">Email Address</label><br>
            <input class="input" type=email name="pw-reset" required><br><br>
            <button class="btn-login" type="submit" name="reset">Reset</button>
            <button class="btn-cancel" type="submit" name="cancel"><a href="../Index/Login.php">Cancel</a></button>
        </form>
    </body>
</html>