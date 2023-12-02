<?php
include_once ("header.php");

if (isset($_GET['BookID'])) {
    $bookId = $_GET['BookID'];
    $sql = "SELECT * FROM books WHERE BookID = $bookId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $title = $row["Title"];
        $author = $row["Author"];
        $genre = $row["Genre"];
        $description = $row["Description"];
        $pdfPath = $row["PDFDownloadLink"];
        $onlinePath = $row["ReadOnlineLink"];
        $imagePath = $row["ImageURL"];

        // Add your code to calculate the average rating (if available) from the database

    } else {
        // Redirect or display an error if the book with the specified ID is not fou
        echo "blablabalba";
        exit();
    }
} else {
    // Redirect or display an error if the ID parameter is not present in the URL
   echo "blalaalala";
    exit();
}

$conn->close();
?>

<!-- Book Details Section -->
<div class="container mt-4">
        <div class="row">
            <div class="col-md-4">
                <img src="<?php echo $imagePath; ?>" class="img-fluid" alt="<?php echo $title; ?> Cover"
                    style="border: 10px solid #2f5663;">
            </div>
            <div class="col-md-8 detail-text">
                <h1><?php echo $title; ?></h1>
                <p><strong>Author:</strong> <?php echo $author; ?></p>
                <p><strong>Genre:</strong> <?php echo $genre; ?></p>
                <p><strong>Description:</strong> <?php echo $description; ?></p>
                <p><strong>Available Formats:</strong></p>
                <ul>
                    <li><a href="<?php echo $pdfPath; ?>" target="_blank"><i class="far fa-file-pdf"></i> PDF
                            DOWNLOAD</a></li>
                    <li><a href="<?php echo $onlinePath; ?>"
                            download="<?php echo $title; ?>.pdf"><i class="fas fa-book"></i> READ ONLINE</a></li>
                </ul>

                <!-- Book Rating Section -->
                <div class="container mt-4">
                    <h3>Rate This Book</h3>
                    <div class="rating-stars">
                        <i class="far fa-star fa-2x"></i>
                        <i class="far fa-star fa-2x"></i>
                        <i class="far fa-star fa-2x"></i>
                        <i class="far fa-star fa-2x"></i>
                        <i class="far fa-star fa-2x"></i>
                    </div>
                    <p class="mt-2">Average Rating: <span id="average-rating">0.0</span></p>
                </div>

            </div>
        </div>
    </div>

 

<br> <br>
<div class="container">
    <h1>Similar Books From The Genre!</h1>
    <?php
    GenreCarousal($genre);
    ?>
</div>
<script>
        // JavaScript for handling book rating
        const stars = document.querySelectorAll('.rating-stars i');
        const averageRatingElement = document.getElementById('average-rating');
        let averageRating = 0;

        stars.forEach((star, index) => {
            star.addEventListener('click', () => {
                const rating = index + 1;
                averageRating = (averageRating + rating) / 2;
                updateStars(rating);
                updateAverageRating();
            });
        });

        function updateStars(rating) {
            stars.forEach((star, index) => {
                if (index < rating) {
                    star.classList.remove('far');
                    star.classList.add('fas');
                } else {
                    star.classList.remove('fas');
                    star.classList.add('far');
                }
            });
        }

        function updateAverageRating() {
            averageRatingElement.textContent = averageRating.toFixed(1);
        }
</script>

<?php
include_once ("footer.php");
?>
