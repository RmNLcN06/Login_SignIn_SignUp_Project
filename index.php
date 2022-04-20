<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section class="index-login">
        <div class="wrapper">
            <div class="index-login-signup">
                <h4>Sign Up</h4>
                <p>Don't have an account yet ? Sign up here !</p>
                <form action="includes/_signup.php" method="post">
                    <div class="form-input">
                        <label for="uid">Username</label>
                        <input type="text" name="uid">
                    </div>
                    <div class="form-input">
                        <label for="pwd">Password</label>
                        <input type="password" name="pwd">
                    </div>
                    <div class="form-input">
                        <label for="pwdrepeat">Repeat Password</label>
                        <input type="password" name="pwdrepeat">
                    </div>
                    <div class="form-input">
                        <label for="pwdrepeat">Email</label>
                        <input type="text" name="email">
                    </div>
                    <button type="submit" name="submit">SIGN UP</button>
                </form>
            </div>
            <div class="index-login-login">
                <h4>Login</h4>
                <p>Don't have an account yet ? Sign up here !</p>
                <form action="includes/_login.php" method="post">
                    <div class="form-input">
                        <label for="uid">Username</label>
                        <input type="text" name="uid">
                    </div>
                    <div class="form-input">
                        <label for="pwd">Password</label>
                        <input type="password" name="pwd">
                    </div>
                    <button type="submit" name="submit">LOGIN</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>