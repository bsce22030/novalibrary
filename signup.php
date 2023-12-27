<?php
include('header.php');

$message = '';

// Assuming you have a database connection stored in $conn

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $name = $_POST['name'] ?? '';
    $username = $_POST['username'] ?? '';
    $emailPhone = $_POST['emailPhone'] ?? '';
    $password = $_POST['password'] ?? '';
    $confirmPassword = $_POST['confirmPassword'] ?? '';

    // Validate inputs
    if (!empty($name) && !empty($username) && !empty($emailPhone) && !empty($password) && $password === $confirmPassword) {
        // Hash the password for security
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Check if the username or email/phone is already in use
        $check_query = "SELECT * FROM users WHERE Username=? OR Email_Phone=?";
        $check_stmt = $conn->prepare($check_query);
        $check_stmt->bind_param("ss", $username, $emailPhone);
        $check_stmt->execute();
        $check_result = $check_stmt->get_result();

        if ($check_result->num_rows > 0) {
            $message = "Username or Email/Phone already in use.";
        } else {
            // Prepare and execute SQL query to insert user data
            $insert_query = "INSERT INTO users (Name, Username, Email_Phone, Password) VALUES (?, ?, ?, ?)";
            $insert_stmt = $conn->prepare($insert_query);
            $insert_stmt->bind_param("ssss", $name, $username, $emailPhone, $hashed_password);

            if ($insert_stmt->execute()) {
                $message = "Registration Successful!";
            } else {
                $message = "Error inserting data into the database.";
            }
        }
    } else {
        $message = "Please fill in all fields correctly and ensure passwords match.";
    }
}
?>
<style>
        .form-container
        {
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

        .btn-primary {
            width: 100%;
        }
</style>

<div class="container vh-100">
    <div class="form-container">
        <h1 class="text-center mb-4">Create Your LibraNova Account</h1>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name" name="name" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Username" name="username" required>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Email or Phone" name="emailPhone" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" name="password" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Confirm Password" name="confirmPassword" required>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Create Account</button>
            <p class="text-center mt-3 message"><?php echo $message; ?></p>
        </form>
    </div>
</div>

<?php
include_once ("footer.php");
?>
