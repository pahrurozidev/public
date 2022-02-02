<?php

require('function.php');

// $conn = koneksi();

$movies = query('SELECT * FROM tbl_gvideo');
$movieByGenre = '';

if (isset($_GET['countries'])) {
    $countries = $_GET['countries'];
    $movies = query("SELECT * FROM tbl_gvideo WHERE countries = '$countries'");
}

if (isset($_POST['search'])) {
    $search = $_POST['search'];
    $movies = query("SELECT * FROM tbl_gvideo WHERE title LIKE '%" . $search . "%'");
}

if (isset($_GET['genre'])) {
    $genre = $_GET['genre'];
    $movieByGenre = query("SELECT * FROM tbl_gvideo WHERE genre = '$genre'");
}

?>

<!-- navbar -->
<?php include('partials/navbar.php') ?>
<!-- navbar -->

<!-- broadcrumb -->
<?php include('partials/broadcrumb.php') ?>
<!-- broadcrumb -->

<div class="container text-white fw-bold" style="margin-top: 1em; margin-bottom: 10em;">
    <!-- CATEGORIES -->
    <div class="categories">
        <div class="sub-categories rounded cat-hover <?= ($genre == "" ? "genre" : "") ?> ">
            <a href="/galery-video/movie.php" class="text-white text-decoration-none expand">Movies</a>
        </div>
    </div>
    <!-- CONTENT -->
    <div class="content shadow p-3 
        <?php if ($movieByGenre) {
            if (count($movieByGenre) < 6) {
                echo "flex-reset";
            } else {
                echo "";
            }
        } ?> 
        ">
        <?php if ($movieByGenre) : ?>
            <?php foreach ($movieByGenre as $movie) : ?>
                <div class="sub-content">
                    <a href="/galery-video/play.php?id=<?= $movie['id'] ?>" target="blank">
                        <img src="img/<?= $movie['img'] ?>" alt="" width="180" height="280" class="rounded">
                    </a>
                </div>
            <?php endforeach ?>
        <?php else : ?>
            <?php foreach ($movies as $movie) : ?>
                <div class="sub-content">
                    <a href="/galery-video/play.php?id=<?= $movie['id'] ?>" target="blank">
                        <img src="img/<?= $movie['img'] ?>" alt="" width="180" height="280" class="rounded">
                    </a>
                </div>
            <?php endforeach ?>
        <?php endif ?>
    </div>
</div>

<!-- footer -->
<!-- <div class="position-absolute bottom-0 start-0 end-0"> -->
<?php include('partials/footer.php') ?>
<!-- </div> -->
<!-- footer -->