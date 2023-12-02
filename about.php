<?php
include_once ("header.php");
?>

<style>
    .list-group-item
    {
        color: #383b38;
    }
</style>
<!-- User Dashboard -->
<div class="container mt-4 d-flex" style="min-height: 70vh;">
    <div class="row">
        <div class="col-md-6">
            <!-- User Profile Information -->
            <img src="media/profiles/users/ali.png" alt="Profile Picture" class="profile-img img-fluid">
            <div class="profile-details">
                <br>
                <p><i class="fas fa-user"></i> <strong>Name:</strong> Ali Akhtar</p>
                <p><i class="far fa-calendar-alt"></i> <strong>Join Date:</strong> January 1, 2022</p>
                <!-- Add more user attributes here -->
            </div>
        </div>
        <div class="col-md-6">
            <!-- Favorite Books -->
            <h3><i class="fas fa-heart"></i> Favorite Books</h3>
            <br>
            <ul class="list-group book-list">
                <li class="list-group-item">The Polaroid Book</li>
                <li class="list-group-item">Manhunt</li>
                <li class="list-group-item">Bauhas Colour Theory</li>
                <!-- Add more favorite books here -->
            </ul>
            <br>

            <!-- Latest Downloads -->
            <h3><i class="fas fa-download"></i> Latest Downloads</h3>
            <br>
            <ul class="list-group downloads-list">
                <li class="list-group-item">IT, the book</li>
                <li class="list-group-item">How To Rizz The Baddies</li>
                <li class="list-group-item">The Power Of Cinematics</li>
                <!-- Add more downloads here -->
            </ul>
        </div>
    </div>
</div>

<?php
include_once ("footer.php");
?>
