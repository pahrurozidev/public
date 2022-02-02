<?php

require('function.php');

$movies = query('SELECT * FROM tbl_gvideo');
$movieByCategory = '';

if (isset($_GET['category'])) {
    $category = $_GET['category'];
    $movieByCategory = query("SELECT * FROM tbl_gvideo WHERE category = '$category'");
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>NontOn fiLM</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background: rgb(96, 94, 216) !important;">
        <div class="container">
            <a class="navbar-brand" href="#">NONTON</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Movies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Genre Film</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tahun</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <div class="input-group">
                        <input type="text" class="form-control bg-outline-light" placeholder="search of . ." aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-outline-light" type="button" id="button-addon2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </nav>


    <div class="container text-white fw-bold" style="margin-top: 6em; margin-bottom: 10em;">
        <!-- OTHER CATEGORY -->
        <div class="row d-flex justify-content-between mb-2">
            <div class="col-lg-2 bg-secondary py-2 text-center mb-2 rounded cat-hover">Update Film Terbaru</div>
            <div class="col-lg-2 text-center ps-5 ">
                <span class="bg-secondary py-2 d-block px-0 cat-hover" style="border-radius: 10em;">
                    Lihat Lebih
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z" />
                        <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z" />
                    </svg>
                </span>
            </div>
        </div>
        <!-- CATEGORIES -->
        <div class="row d-flex justify-content-between mb-2">
            <div class="col-lg-2 mx-1 text-center bg-secondary mb-2 py-2 rounded cat-hover <?= ($category == "" ? "category" : "") ?> ">
                <a href="/galery-video/" class="text-white text-decoration-none expand">ALL</a>
            </div>
            <div class="col-lg-2 mx-1 text-center bg-secondary mb-2 py-2 rounded cat-hover <?= ($category == "ACTION" ? "category" : "") ?> ">
                <a href="/galery-video/index.php?category=<?= $movies[0]['category'] ?>" class="text-white text-decoration-none expand "><?= $movies[0]['category'] ?></a>
            </div>
            <div class="col-lg-2 mx-1 text-center bg-secondary mb-2 py-2 rounded cat-hover <?= ($category == "DRAMA" ? "category" : "") ?> ">
                <a href="/galery-video/index.php?category=<?= $movies[1]['category'] ?>" class="text-white text-decoration-none expand"><?= $movies[1]['category'] ?></a>
            </div>
            <div class="col-lg-2 mx-1 text-center bg-secondary mb-2 py-2 rounded cat-hover <?= ($category == "HORROR" ? "category" : "") ?> ">
                <a href="/galery-video/index.php?category=<?= $movies[2]['category'] ?>" class="text-white text-decoration-none expand"><?= $movies[2]['category'] ?></a>
            </div>
            <div class="col-lg-2 mx-1 text-center bg-secondary mb-2 py-2 rounded cat-hover <?= ($category == "THRILLER" ? "category" : "") ?> ">
                <a href="/galery-video/index.php?category=<?= $movies[3]['category'] ?>" class="text-white text-decoration-none expand"><?= $movies[3]['category'] ?></a>
            </div>
        </div>
        <!-- CONTENT -->
        <div class="row shadow">
            <?php if ($movieByCategory) : ?>
                <?php foreach ($movieByCategory as $movie) : ?>
                    <div class="col-lg-2 d-flex justify-content-center my-3">
                        <img src="img/<?= $movie['img'] ?>" alt="" width="180" height="280">
                    </div>
                <?php endforeach ?>
            <?php else : ?>
                <?php foreach ($movies as $movie) : ?>
                    <div class="col-lg-2 d-flex justify-content-center my-3">
                        <img src="img/<?= $movie['img'] ?>" alt="" width="180" height="280">
                    </div>
                <?php endforeach ?>
            <?php endif ?>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center text-lg-start bg-light text-muted">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-github"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3"></i>Company name
                        </h6>
                        <p>
                            Here you can use rows and columns to organize your footer content. Lorem ipsum
                            dolor sit amet, consectetur adipisicing elit.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Products
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Angular</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">React</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Vue</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Laravel</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Useful links
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Pricing</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Settings</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Orders</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Help</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Contact
                        </h6>
                        <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            info@example.com
                        </p>
                        <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                        <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2021 Copyright:
            <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>