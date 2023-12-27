<?php
global $conn;
include_once("header.php");


// Query to retrieve books from the database
$query_books = "SELECT * FROM books";
$result_books = $conn->query($query_books);
?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center">Book Listings</h2>
            <div class="row">
                <?php
                // Displaying books
                if ($result_books->num_rows > 0) {
                    while ($book_row = $result_books->fetch_assoc()) {
                        echo '<div class="col-md-4 mb-4">';
                        echo '<div class="card">';
                        // Display book details as needed
                        echo '<img src="' . $book_row['ImageURL'] . '" class="card-img-top" style="height: 200px;" />';
                        echo '<div class="card-body">';
                        echo '<h5 class="card-title">' . $book_row['Title'] . '</h5>';
                        echo '<p class="card-text">Author: ' . $book_row['Author'] . '</p>';
                        // Display more book details as needed
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo '<div class="col-md-12">';
                    echo '<p>No books found.</p>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </div>
</div>

<?php // Include the footer
include('footer.php');
?>
