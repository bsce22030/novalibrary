<?php
global $conn;
include_once ("header.php");
?>
<!-- Carousel Section using Bootstrap -->
<div id="bookCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" style="height: 50vh;"> <!-- Set the carousel height to 1/3 of the screen -->
            <div class="carousel-item active">
                <img src="media/carousal/carousal-1.jpg" class="d-block w-100" alt="Book Carousel Image 1">
            </div>
            <div class="carousel-item">
                <img src="media/carousal/carousal-2.jpg" class="d-block w-100" alt="Book Carousel Image 2">
            </div>
            <div class="carousel-item">
                <img src="media/carousal/carousal-3.jpg" class="d-block w-100" alt="Book Carousel Image 3">
            </div>
        </div>
        <a class="carousel-control-prev" href="#bookCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#bookCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

<!-- Content container using Bootstrap -->
<div class="container mt-4">
    <h1>Welcome to the <b>LibraNova</b> E-Library</h1>
    <h4>Explore a vast collection of books online.</h4>
    <br>

    <!-- Grid view of book sections -->
    <div class="row">
        <?php
        $queryFeatured = "SELECT Title, Author, ImageURL, BookID FROM books WHERE Genre = 'Featured' LIMIT 3";
        $resultFeatured = mysqli_query($conn, $queryFeatured);

        while ($row = mysqli_fetch_assoc($resultFeatured)) {
            echo '<div class="col-md-4">
                    <div class="card">
                       <a href="details.php?BookID='. $row['BookID'] .'" style="text-decoration: none; color:inherit;">
                            <img src="' . $row['ImageURL'] . '" class="card-img-top" alt="' . $row['Title'] . '">
                            <div class="card-body">
                                <h5 class="card-title">' . $row['Title'] . '</h5>
                                <p class="card-text">Author: ' . $row['Author'] . '</p>
                            </div>
                        </a>
                    </div>
                </div>';
        }
        ?>
    </div>
</div>
<br>

    
<!-- Horror section -->
<div class="container mt-4">
    <h1>Horror Section <i class="fas fa-skull-crossbones"></i></h1>
    <h4>Explore the spooky and bone-chilling books by renowned authors</h4>
    <br>
    <?php
    GenreCarousal("Horror");
    ?>
</div>
<br>

<!--Sci-fi Section-->
<div class="container mt-4">
    <h1>Sci-Fi Section  <i class="fas fa-rocket"></i></h1>
    <h4>Explore the scientific fiction of the decade!</h4> <br>
    <?php
    GenreCarousal("Sci-Fi");
    ?>
</div>
<br>


<!--Drama Section-->
<div class="container mt-4">
    <h1>Drama Section <i class="fas fa-theater-masks"></i></h1>
    <h4>Immerse yourself in the worldclass drama!</h4> <br>
    <?php
    GenreCarousal("Drama");
    ?>
</div>
<br>

<!--Education Section-->
<div class="container mt-4">
    <h1>Education Section <i class="fas fa-graduation-cap"></i></h1>
    <h4>Explore the world of maths, algebra and physics!</h4> <br>
    <?php
    GenreCarousal("Education");
    ?>
</div>
<br>


<!--History Section-->
<div class="container mt-4">
    <h1>History Section  <i class="fas fa-history"></i></h1>
    <h4>Explore the history of the world!</h4> <br>
    <?php
    GenreCarousal("History");
    ?>
</div>
<br>



<!--Romance Section-->
<div class="container mt-4">
    <h1>Romance Section <i class="fas fa-heart"></i></h1>
    <h4>Love is in the air tonight!</h4> <br>

    <!-- Single Carousel Displaying Six Horror Books -->
    <?php
    GenreCarousal("Romance");
    ?>
</div>

<?php
include_once ("footer.php");
?>
