<?php
include_once("header.php");
?>
<!-- Search bar and sort by options -->
<div class="container mt-4">
    <div class="row">
        <div class="col-md-8">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search books..." aria-label="Search books" aria-describedby="search-button">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button" id="search-button"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="input-group">
                <select class="form-control" id="sort-by">
                    <option value="featured">Sort by: Featured</option>
                    <option value="popularity">Sort by: Popularity</option>
                    <option value="newest">Sort by: Newest</option>
                </select>
            </div>
        </div>
    </div>
</div>

<br><br>
<!-- Romance Section -->
<div class="container mt-4">
    <h1>Romance Section</h1>
    <h4>Love is in the air tonight!</h4>
    <br>

    <?php
    GenreCarousal("Romance");
    ?>
</div>
<br><br>

<!-- Content container using Bootstrap -->
<div class="container mt-4">
    <h1>All <b>LibraNova</b> Romance Collection</h1>
    <h4>Feel centuries of romance through stories!</h4>
    <!-- Grid view of book sections -->
    <?php
    GenreAllBooks("Romance");
    ?>

</div>



<?php
include_once ("footer.php");
?>
