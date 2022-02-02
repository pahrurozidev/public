    <?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $movie = query('SELECT * FROM tbl_gvideo WHERE id = ' . $id);
    }
    ?>

    <div class="px-0 <?php if (isset($_GET['id'])) {
                            echo "container-fluid";
                        } else {
                            echo "container";
                        }  ?>">
        <nav aria-label="breadcrumb" class="<?php if (isset($_GET['id'])) {
                                                echo "mx-5";
                                            } else {
                                                echo "mx-1";
                                            }  ?>" style="margin-top: 5em;">
            <ol class="breadcrumb rounded shadow py-2 <?php if (isset($_GET['id'])) {
                                                            echo "mx-5";
                                                        }  ?>">
                <?php if (isset($_GET['id'])) : ?>
                    <li class="breadcrumb-item"><a class=" d-block text-secondary ps-3 text-decoration-none" href="/galery-video">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                                <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                            </svg>
                        </a></li>
                    <li class="breadcrumb-item"><a class=" d-block text-secondary ps-3 text-decoration-none" href="/galery-video/play.php?id=<?= $movie[0]['id'] ?>"><?= $movie[0]['title'] ?></a></li>
                <?php elseif (isset($_GET['countries'])) : ?>
                    <li class="breadcrumb-item"><a class=" d-block text-secondary ps-3 text-decoration-none" href="/galery-video/movie.php">Movies</a></li>
                <?php elseif (!isset($_GET['id'])) : ?>
                    <?php if ($_SERVER['REQUEST_URI'] === '/galery-video/contact.php') : ?>
                        <li class="breadcrumb-item"><a class=" d-block text-secondary ps-3 text-decoration-none" href="/galery-video">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                                    <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                                </svg>
                            </a></li>
                        <li class="breadcrumb-item"><a class=" d-block text-secondary ps-3 text-decoration-none" href="/galery-video/contact.php">Contact</a></li>
                    <?php elseif ($_SERVER['REQUEST_URI'] === '/galery-video/movie.php') : ?>
                        <li class="breadcrumb-item"><a class=" d-block text-secondary ps-3 text-decoration-none" href="/galery-video/movie.php">Movies</a></li>
                    <?php elseif ($_SERVER['REQUEST_URI'] === '/galery-video/' || $_SERVER['REQUEST_URI'] === '/galery-video/index.php?genre=' . $_GET['genre']) : ?>
                        <li class="breadcrumb-item"><a class=" d-block text-secondary ps-3 text-decoration-none" href="/galery-video">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                                    <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                                </svg>
                            </a></li>
                    <?php else : ?>
                        <li class="breadcrumb-item"><a class=" d-block text-secondary ps-3 text-decoration-none" href="/galery-video/movie.php">Movies</a></li>
                    <?php endif ?>
                <?php endif ?>

            </ol>
        </nav>
    </div>