<?php
// Function to display Carousel based on Genre
function GenreCarousal($genre) {
    // Replace 'your_database_connection_code_here' with your actual database connection code
    $conn = mysqli_connect("localhost", "root", "", "Library");
    // Check if the genre variable is set in the URL
    if(isset($genre)) {
        // Sanitize the input to prevent security issues
        $Genre = htmlspecialchars($genre);

        // Fetch books from the database based on the genre
        $query = "SELECT * FROM books WHERE Genre = '$Genre'";
        $result = mysqli_query($conn, $query);
        $books = mysqli_fetch_all($result, MYSQLI_ASSOC);

        // Shuffle the array to get random books for the carousel
        shuffle($books);

        // Group the books into sets of 3 for each carousel item
        $groupedBooks = array_chunk($books, 3);

        ?>
        <!-- Carousel Displaying Sets of Three Random Books -->
        <div id="<?php echo $Genre; ?>BookCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <?php foreach ($groupedBooks as $index => $bookGroup) : ?>
                    <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                        <div class="row">
                            <?php foreach ($bookGroup as $book) : ?>
                                <div class="col-md-4">
                                    <div class="card">
                                        <a href="details.php?BookID=<?php echo $book['BookID']; ?>" style="text-decoration: none; color:inherit;">
                                            <img src="<?php echo $book['ImageURL']; ?>" class="card-img-top" alt="<?php echo $book['Title']; ?>">
                                            <div class="card-body">
                                                <h5 class="card-title"><?php echo $book['Title']; ?></h5>
                                                <p class="card-text">Author: <?php echo $book['Author']; ?></p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <a class="carousel-control-prev" href="#<?php echo $Genre; ?>BookCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#<?php echo $Genre; ?>BookCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" ariahidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <?php
    } else {
        echo "Genre not specified.";
    }

    // Close the database connection
    mysqli_close($conn);
}

// Function to display All Books based on Genre
function GenreAllBooks($genre) {
    // Replace 'your_database_connection_code_here' with your actual database connection code
    $conn = mysqli_connect("localhost", "root", "", "Library");

    // Check if the genre variable is set in the URL
    if(isset($genre)) {
        // Sanitize the input to prevent security issues
        $Genre = htmlspecialchars($genre);

        // Fetch all books from the database based on the genre
        $queryAll = "SELECT BookID, ImageURL, Title, Author FROM books WHERE Genre = '$Genre'";
        $resultAll = mysqli_query($conn, $queryAll);

        ?>
        <div class="row">
                <?php while ($row = mysqli_fetch_assoc($resultAll)) : ?>
                    <div class="col-md-4" style="margin-top: 40px;">
                        <div class="card">
                            <a href="details.php?BookID=<?php echo $row['BookID']; ?>" style="text-decoration: none; color:inherit">
                                <img src="<?php echo $row['ImageURL']; ?>" class="card-img-top" alt="<?php echo $row['Title']; ?>">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $row['Title']; ?></h5>
                                    <p class="card-text">Author: <?php echo $row['Author']; ?></p>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php endwhile; ?>
        </div>
        <?php
    } else {
        echo "Genre not specified.";
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
