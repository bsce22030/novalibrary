<?php
// Include the header
global $conn;
include('header.php');

$message = ''; // Initialize an empty message

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];

    // Create a prepared statement
    $stmt = mysqli_prepare($conn, "SELECT id, Password FROM users WHERE Username=?");

    // Bind the parameters
    mysqli_stmt_bind_param($stmt, "s", $name);

    // Execute the statement
    mysqli_stmt_execute($stmt);

    // Bind the result
    mysqli_stmt_bind_result($stmt, $id, $hashed_password);

    if (mysqli_stmt_fetch($stmt)) {
        // User exists, verify the password
        if (password_verify($password, $hashed_password)) {
            $message = "login successful";
        } else {
            $message = "Incorrect credentials";
        }
    } else {
        // User does not exist
        $message = "User does not exist.";
    }

    // Close the statement
    mysqli_stmt_close($stmt);
}

?>
<style>
    .form-container {
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        padding: 20px;
        max-width: 400px;
        margin: 0 auto;
        margin-top: 50px;
        margin-bottom: 330px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    input[type="text"],
    input[type="password"] {
        width: 100%;
        padding: 10px;
        border-radius: 4px;
        border: 1px solid #ccc;
    }

    .btn-primary {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 4px;
        background-color: #1877f2;
        color: #fff;
        font-weight: bold;
        cursor: pointer;
    }

    .btn-primary:hover {
        background-color: #166fe5;
    }

    .message {
        text-align: center;
        color: #f00;
        margin-top: 10px;
    }
</style>

<div class="container vh-100">
    <div class="form-container">
        <h1 class="text-center mb-4">Login to Your Account</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Enter your name" name="name" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Enter your password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            <p class="text-center mt-3 message"><?php echo $message; ?></p>
        </form>
    </div>
</div>

<?php // Include the footer
include('footer.php');
?>
