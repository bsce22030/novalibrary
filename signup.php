<?php
include_once ("header.php");
?>

<style>
    .image-container {
        position: relative;
        width: 200px;
        height: 200px;
        background-color: #f0f0f0;
        border: 1px solid #ccc;
        cursor: pointer;
    }
    .image-container img {
        max-width: 100%;
        max-height: 100%;
    }
</style>
<div class="container mt-4">
    <h1>Create Your <b>LibraNova</b> Account</h1>
    <br> <br>
    <div class="row">
        <div class="col-md-8">
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="John Doe">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="johndoe123">
                    </div>
                </div>
                <div class="form-group">
                    <label for="emailPhone">Email/Phone</label>
                    <input type="email" class="form-control" id="emailPhone" placeholder="john@example.com">
                </div>
                <div class="form-group">
                    <label for="creditCard">Credit Card (Optional)</label>
                    <input type="text" class="form-control" id="creditCard" placeholder="**** **** **** ****">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="age">Age</label>
                        <input type="number" class="form-control" id="age" placeholder="25">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="dob">Date of Birth</label>
                        <input type="date" class="form-control" id="dob">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="********">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="confirmPassword">Confirm Password</label>
                        <input type="password" class="form-control" id="confirmPassword" placeholder="********">
                    </div>
                </div>
                <div class="form-group form-check">
                    <input type="radio" class="form-check-input" id="termsAndConditions">
                    <label class="form-check-label" for="termsAndConditions">I agree to the <a href="#">Terms and Conditions</a></label>
                </div>
                <button type="submit" class="btn btn-primary">Create Account</button>
            </form>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="accountPicture">Account Picture</label>
                <!-- Image container with a click event to trigger file input -->
                <div class="image-container" onclick="triggerFileInput()">
                    <img src="media/profiles/dummy pfp.png" alt="Profile Picture">
                </div>
                <!-- Actual file input, but hidden from view -->
                <input type="file" class="form-control-file d-none" id="accountPicture">
            </div>
        </div>
    </div>
</div>

<script>
    // JavaScript to trigger file input click on image click
    function triggerFileInput() {
        document.getElementById('accountPicture').click();
    }
</script>



<?php
include_once ("footer.php");
?>
