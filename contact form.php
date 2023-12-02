<?php
include_once ("header.php");
?>

<style>
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

    .contact-header {
        text-align: center;
        margin-bottom: 30px;
    }

    .contact-form .form-control {
        border: 1px solid #ccc;
        border-radius: 4px;
        padding: 10px;
        margin-bottom: 20px;
    }

    .contact-form button {
        background-color: #1877f2;
        color: #fff;
        border: none;
        border-radius: 4px;
        padding: 10px;
        font-weight: bold;
    }

    .contact-form button:hover {
        background-color: #166fe5;
    }

    .contact-form .forgot-password {
        text-align: right;
    }
</style>
<div class="container-form">
        <div class="contact-header">
            <h1 style="color: #2f5663;">Contact <b>Us</b></h1>
        </div>
        <form class="contact-form" action="contact.html" method="POST">
            <div class="form-group">
                <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Full Name">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <textarea class="form-control" id="message" name="message" placeholder="Message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </form>
    </div>

<?php
include_once ("footer.php");
?>

