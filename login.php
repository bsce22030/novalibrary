<?php
include_once ("header.php");
?>

<style>
    /*for login.php*/
    .container-form {
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        padding: 20px;
        max-width: 400px;
        margin: 0 auto;
        margin-top: 50px;
        margin-bottom: 330px;
    }

    .login-header {
        text-align: center;
        margin-bottom: 30px;
    }

    .login-form .form-control {
        border: 1px solid #ccc;
        border-radius: 4px;
        padding: 10px;
        margin-bottom: 20px;
    }

    .login-form button {
        background-color: #1877f2;
        color: #fff;
        border: none;
        border-radius: 4px;
        padding: 10px;
        font-weight: bold;
    }

    .login-form button:hover {
        background-color: #166fe5;
    }

    .login-form .forgot-password {
        text-align: right;
    }

</style>
<div class="container-form">
        <div class="login-header">
            <h1 style="color: #2f5663;">Login to <b>LibraNova</b></h1>
        </div>
        <form class="login-form" action="about.php" method="POST">
            <div class="form-group">
                <input type="text" class="form-control" id="username" name="username" placeholder="Email or Phone">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
            <p class="forgot-password"><a href="about.php">Forgot password?</a></p>
        </form>
    </div>

<?php
include_once ("footer.php");
?>
