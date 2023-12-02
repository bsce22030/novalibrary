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
    <link rel="icon" href="media/logo/favicon.png">
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Add your custom CSS for styling -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
<!-- Centered Navbar with Logo to the Left and Menu Items to the Right -->
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #2f5663; color: azure;">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="media/logo/logo-no-bg.png" alt="logo" class="d-inline-block align-top" style="height: 30px;"> <!-- Adjust the height as needed -->
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
                        <img src="media/profiles/users/ali.png" alt="User Pic" class="rounded-circle" style="height: 30px; margin-right: 5px;">
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
<br><br>