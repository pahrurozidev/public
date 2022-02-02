<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>NontOn fiLM</title>

    <!-- my bootstrap -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Genos:wght@100&family=Gluten:wght@300&family=Spline+Sans:wght@300&family=Viga&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/stylee.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background: rgb(96, 94, 216) !important;">
        <div class="container">
            <a class="navbar-brand" href="/galery-video">NONTON FILM</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/galery-video">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/galery-video/movie.php">Movies</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Genre Film
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <div class="row d-flex">
                                <div class="col-lg-12">
                                    <li><a class="dropdown-item" href="/galery-video/movie.php?genre=action">Action</a></li>
                                    <li><a class="dropdown-item" href="/galery-video/movie.php?genre=horror">Horror</a></li>
                                    <li><a class="dropdown-item" href="/galery-video/movie.php?genre=comedy">Comedy</a></li>
                                </div>
                                <div class="col-lg-12">
                                    <li><a class="dropdown-item" href="/galery-video/movie.php?genre=thriller">Thriller</a></li>
                                    <li><a class="dropdown-item" href="/galery-video/movie.php?genre=romance">Romance</a></li>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Countries
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <div class="row d-flex" style="width: 20em;">
                                <div class="col-lg-6">
                                    <li><a class="dropdown-item" href="/galery-video/movie.php?countries=indonesia">Indonesia</a></li>
                                    <li><a class="dropdown-item" href="/galery-video/movie.php?countries=united states">United States</a></li>
                                    <li><a class="dropdown-item" href="/galery-video/movie.php?countries=japan">Japan</a></li>
                                    <li><a class="dropdown-item" href="/galery-video/movie.php?countries=thailand">Thailand</a></li>
                                    <li><a class="dropdown-item" href="/galery-video/movie.php?countries=singapura">Singapura</a></li>
                                </div>
                                <div class="col-lg-6">
                                    <li><a class="dropdown-item" href="/galery-video/movie.php?countries=india">India</a></li>
                                    <li><a class="dropdown-item" href="/galery-video/movie.php?countries=australia">Australia</a></li>
                                    <li><a class="dropdown-item" href="/galery-video/movie.php?countries=canada">Canada</a></li>
                                    <li><a class="dropdown-item" href="/galery-video/movie.php?countries=france">France</a></li>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/galery-video/contact.php">Contact Us</a>
                    </li>
                </ul>
                <form class="d-flex" action="movie.php" method="POST">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control bg-light border-light" placeholder="search of . ." aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-light" type="submit" name="submit" id="button-addon2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </nav>