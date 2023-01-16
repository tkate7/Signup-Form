<html>
    <head>
        <title>Signup</title>
        <link rel="stylesheet" href="../../Public/CSS/Stylesheet.css">
    </head>
    <body id="index">
        <form name="signup" action="" method="POST">
            <h2>SIGN UP</h2><br>
            <div class="error-msg-signup">
                <p><?php echo $invalid; ?></p>
            </div>
            <label class="uname">Name</label><br>
            <input class="input" type="text" name="name" required><br><br>
            <label class="uname">Email</label><br>
            <input class="input" type="email" name="email" required><br><br>
            <label class="uname">Username</label><br>
            <input class="input" type=text name ="username" required><br><br>
            <label class="pass">Password</label><br>
            <input class="input" type="password" name="password" required><br><br>
            <p><a href="../Index/Login.php">Already have an account?</a></p>
            <button class="btn" type="submit" name="submit">Signup</button>
            <button class="btn" type="submit" name="back"><a href="">Cancel</a></button>
        </form>
    </body>
</html>