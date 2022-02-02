<?php

require('function.php');

$movies = query('SELECT * FROM tbl_gvideo');
$movieByGenre = '';

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
    <!-- OTHER CATEGORY -->
    <div class="other-category">
        <div class="update-film-new rounded cat-hover">
            <a href="/galery-video" class="d-block text-white text-decoration-none">Update Film Terbaru</a>
        </div>
        <div class="more cat-hover">
            <a href="/galery-video/movie.php" class="d-block text-white text-decoration-none">
                <span class="me-1">Lihat Lebih</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z" />
                    <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z" />
                </svg>
            </a>
        </div>
    </div>
    <!-- CATEGORIES -->
    <div class="categories">
        <div class="sub-categories rounded cat-hover <?= ($genre == "" ? "genre" : "") ?> ">
            <a href="/galery-video/" class="text-white text-decoration-none expand">ALL</a>
        </div>
        <div class="sub-categories rounded cat-hover <?= ($genre == "action" ? "genre" : "") ?> ">
            <a href="/galery-video/index.php?genre=action" class="text-white text-decoration-none expand text-uppercase">action</a>
        </div>
        <div class="sub-categories rounded cat-hover <?= ($genre == "romance" ? "genre" : "") ?> ">
            <a href="/galery-video/index.php?genre=romance" class="text-white text-decoration-none expand text-uppercase">romance</a>
        </div>
        <div class="sub-categories rounded cat-hover <?= ($genre == "horror" ? "genre" : "") ?> ">
            <a href="/galery-video/index.php?genre=horror" class="text-white text-decoration-none expand text-uppercase">horror</a>
        </div>
        <div class="sub-categories rounded cat-hover <?= ($genre == "comedy" ? "genre" : "") ?> ">
            <a href="/galery-video/index.php?genre=comedy" class="text-white text-decoration-none expand text-uppercase">comedy</a>
        </div>
        <div class="sub-categories rounded cat-hover <?= ($genre == "thriller" ? "genre" : "") ?> ">
            <a href="/galery-video/index.php?genre=thriller" class="text-white text-decoration-none expand text-uppercase">thriller</a>
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