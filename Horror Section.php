<?php
include_once ("header.php");
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
<!-- Horror Section -->
<div class="container mt-4">
    <h1>Horror Section</h1>
    <h4>Something lurks in the shadows!</h4>
    <br>

    <?php
    GenreCarousal("Horror");
    ?>
</div>
<br><br>

<!-- Content container using Bootstrap -->
<div class="container mt-4">
    <h1>All <b>LibraNova</b> Horror Collection</h1>
    <h4>Goosebumps everywhere!</h4>
    <!-- Grid view of book sections -->
    <?php
    GenreAllBooks("Horror");
    ?>

</div>


<?php
include_once ("footer.php");
?>
