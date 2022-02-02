<!-- php -->
<?php
require('function.php');

$id = $_GET['id'];

$mhs = query('SELECT * FROM mahasiswa WHERE id = ' . $id);
?>
<!-- php -->

<!-- header -->
<?php include('partials/header.php') ?>
<!-- header -->

<!-- body -->
<div class="container-fluid p-0">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6 d-flex justify-content-center">
                    <div class="card shadow" style="width: 25rem;">
                        <div class="card-header fs-4 py-3">
                            Detail Mahasiswa
                        </div>
                        <img src="./bootstrap/img/<?= $mhs['img'] ?>" class="card-img-top rounded-0" alt="<?= $mhs['img'] ?>" width="180" height="200">
                        <div class="card-body p-0" style="font-size: .9rem;">
                            <div class="list" style="display: flex; font-size: 1.2em;">
                                <div class="list-item">
                                    <ul style="list-style: none; margin-left: -1em;">
                                        <li class="my-2">Nama</li>
                                        <li class="my-2">NRP</li>
                                        <li class="my-2">Email</li>
                                        <li class="my-2">Jurusan</li>
                                    </ul>
                                </div>
                                <div class="list-item">
                                    <ul style="list-style: none;">
                                        <li class="my-2">:</li>
                                        <li class="my-2">:</li>
                                        <li class="my-2">:</li>
                                        <li class="my-2">:</li>
                                    </ul>
                                </div>
                                <div class="list-item">
                                    <ul style="list-style: none; margin-left: -1em;">
                                        <li class="my-2"><?= $mhs['nama'] ?></li>
                                        <li class="my-2"><?= $mhs['nrp'] ?></li>
                                        <li class="my-2"><?= $mhs['email'] ?></li>
                                        <li class="my-2"><?= $mhs['jurusan'] ?></li>
                                    </ul>
                                </div>
                            </div>
                            <a href="/php_pw/index.php" class="badge bg-danger text-decoration-none mb-3 py-2 px-2" style="margin-left: 1.3em;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-left" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8.354 1.646a.5.5 0 0 1 0 .708L2.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                                    <path fill-rule="evenodd" d="M12.354 1.646a.5.5 0 0 1 0 .708L6.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                                </svg>
                                Back
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- body -->

    <!-- footer -->
    <?php include('partials/footer.php') ?>
    <!-- footer -->