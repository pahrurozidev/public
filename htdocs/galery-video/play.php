<?php

require('function.php');

$id = $_GET['id'];

$movie = query("SELECT * FROM tbl_gvideo WHERE id = $id");

$genre = $movie[0]['genre'];

$movieByGenre = query("SELECT * FROM tbl_gvideo WHERE genre = '$genre'");

?>
<!-- navbar -->
<?php include('partials/navbar.php') ?>
<!-- navbar -->

<!-- broadcrumb -->
<?php include('partials/broadcrumb.php') ?>
<!-- broadcrumb -->

<!-- content -->
<div class="container-vid" style="margin-top: 1em; margin-bottom: 10em;">
    <div class="main-video">
        <div class="video">
            <video src="video/<?= $movie[0]['vname'] ?>" controls autoplay></video>
            <h3 class="title"><?= $movie[0]['title'] ?></h3>
        </div>
        <div class="deskripsi">
            <p><?= $movie[0]['body'] ?></p>
            <div class="sub-des">
                <img src="img/<?= $movie[0]['img'] ?>" alt="" width="150" height="200">
                <div class="list-group" style="margin: 0 1em;">
                    <div class="list-group-item"><span class="attr">Genre:</span> <?= $movie[0]['genre'] ?></div>
                    <div class="list-group-item"><span class="attr">Actors:</span> <?= $movie[0]['actors'] ?></div>
                    <div class="list-group-item"><span class="attr">Directors:</span> <?= $movie[0]['directors'] ?></div>
                </div>
                <div class="list-group">
                    <div class="list-group-item"><span class="attr">Duration:</span> <?= $movie[0]['duration'] ?> Min</div>
                    <div class="list-group-item"><span class="attr">Quality:</span> <?= $movie[0]['quality'] ?></div>
                    <div class="list-group-item"><span class="attr">Release Date:</span> <?= $movie[0]['release'] ?> </div>
                    <div class="list-group-item"><span class="attr">Countries:</span> <?= $movie[0]['countries'] ?></div>
                </div>
            </div>
        </div>
    </div>
    <div class="video-list">
        <h5 class="ms-2 relate">Relate Movies :</h5>
        <?php foreach ($movieByGenre as $movies) : ?>
            <?php if ($movie[0]['vname'] !== $movies['vname']) : ?>
                <div class="vid">
                    <a href="play.php?id=<?= $movies['id'] ?>">
                        <video src="video/<?= $movies['vname'] ?>" muted></video>
                    </a>
                    <h5 class="sub-title"><?= $movies['title'] ?></h5>
                </div>
            <?php endif; ?>
        <?php endforeach ?>
    </div>
</div>
<!-- content -->

<!-- footer -->
<?php include('partials/footer.php') ?>
<!-- footer -->

<script>
    let listVideo = document.querySelectorAll('.video-list .vid');
    let mainVideo = document.querySelector('.main-video video');
    let title = document.querySelector('.main-video .title');

    listVideo.forEach(video => {
        video.onclick = () => {
            listVideo.forEach(vid => vid.classList.remove('active'));
            video.classList.add('active');
            if (video.classList.contains('active')) {
                let src = video.children[0].getAttribute('src');
                mainVideo.src = src;
                let text = video.children[1].innerHTML;
                title.innerHTML = text;
            }
        }
    })
</script>