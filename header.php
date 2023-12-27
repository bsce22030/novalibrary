<?php
include_once("connection.php");
include_once ("functions.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Library</title>
    <link rel="icon" href="media/logo/favicon-bg-remove.png">
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Add your custom CSS for styling -->
    <link rel="stylesheet" href="style.css">

    <style>
        body
        {
            background-color: #D8B188; /* background of the website*/
            cursor: pointer;
            color: white;
        }
        .card-body
        {
            background: #2f5663;
        }
        .card
        {
            border: 10px solid #d8d8d8;
        }
        .container-form
        {
            transform: translateY(50%);
        }

        b,h1
        {
            color: #2f5663; /*heading text*/
        }

        .detail-text
        {
            color: #383b38; /*The oil one for small text instead of black*/
        }

        ul li a /*The links of the website*/
        {
            text-decoration: none;
            color: #383b38;
        }

        .container-form {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            margin: 0 auto;
            margin-top: 50px;
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

        /*code for details.php*/
        .col-md-4 a
        {
            text-decoration: none;
            color: azure;
        }
        .rating-stars i {
            cursor: pointer;
        }

    </style>

</head>
<body>
<!-- Centered Navbar with Logo to the Left and Menu Items to the Right -->
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #2f5663; color: azure;">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="media/logo/logo-bg-remove.png" alt="logo" class="d-inline-block align-top" style="height: 30px;"> <!-- Adjust the height as needed -->
            LibraNova
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto"> <!-- ml-auto to align the menu items to the right -->
                <li class="nav-item dropdown px-3"> <!-- Add "dropdown" class to the list item -->
                    <a class="nav-link dropdown-toggle" href="#" id="MenuDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Book Menu
                    </a>
                    <div class="dropdown-menu" aria-labelledby="MenuDropdown">
                        <a class="dropdown-item" href="Sci-Fi section.php">Sci-fi</a>
                        <a class="dropdown-item" href="Horror Section.php">Horror</a>
                        <a class="dropdown-item" href="Romance Section.php">Romance</a>
                        <a class="dropdown-item" href="History Section.php">History</a>
                        <a class="dropdown-item" href="Education Section.php">Education</a>
                        <a class="dropdown-item" href="Drama Section.php">Comedy & Drama</a>
                    </div>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link" href="contact form.php">Contact Us</a>
                </li>
                <li class="nav-item dropdown px-3"> <!-- Add "dropdown" class to the list item -->
                    <a class="nav-link dropdown-toggle" href="#" id="accountsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="media/profiles/ali.jpg" alt="User Pic" class="rounded-circle" style="height: 30px; margin-right: 5px;">
                        Accounts
                    </a>
                    <div class="dropdown-menu" aria-labelledby="accountsDropdown">
                        <a class="dropdown-item" href="login.php">Login</a>
                        <a class="dropdown-item" href="signup.php">Signup</a>
                        <a class="dropdown-item" href="about.php">About Me</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>