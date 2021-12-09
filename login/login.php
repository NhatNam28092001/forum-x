<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <title>login</title>
    <link rel='stylesheet' type='text/css' href='main.css'>
    <script src='main.js'></script>
</head>

<body>
    <?php require '../common/header.php'; ?>
    <?php if (isset($_SESSION['user'])) {
        header('Location: ../home/home.html');
    } ?>

    <div class="container">
        <form method="post" action="login.php" class="loginForm">
            <h1>Sign in</h1>
            <div class="inputLogin">
                <input type="text" id="loginUsername" name="username"></input>
                <label for="loginUsername">Username</label>
            </div>
            <p class='errorHandle usernameError'>Invalid username format</p>
            <div class="inputLogin">
                <input type="text" id="loginPassword" name="password"></input>
                <label for="loginPassword">Password</label>
            </div>
            <p class='errorHandle passwordError'>Please enter password</p>
            <input type="submit" value="Login" name="login" class="loginBtn">
            <div class='extended'>
                <?php require 'xuly.php'; ?>
                <a href="#" class='signup'>Sign up</a>
                <a href="#" class='forgetpassword'>forget password</a>
            </div>
        </form>
    </div>
</body>

</html>