<!-- php -->
<?php
require('function.php');

if (isset($_POST['tambah'])) {
    tambah($_POST);
}

?>
<!-- php -->

<!-- header -->
<?php include('partials/header.php') ?>
<!-- header -->

<!-- body -->
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4 rounded p-3 shadow">
            <h3 class="text-center mt-3 mb-4">Tambah Data Mahasiswa</h3>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="nrp" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="name" placeholder="masukan nama" required>
                </div>
                <div class="mb-3">
                    <label for="nrp" class="form-label">NRP</label>
                    <input type="text" class="form-control" name="nrp" placeholder="masukan nrp" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="example@gmail.com" required>
                </div>
                <div class="mb-3">
                    <label for="jurusan" class="form-label">Jurusan</label>
                    <input type="text" class="form-control" name="jurusan" placeholder="masukan jurusan" required>
                </div>
                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar</label>
                    <img src="bootstrap/img/no-foto.png" alt="preview" width="85" height="70" class="img-preview rounded mb-2 d-block">
                    <input type="file" class="form-control gambar" name="gambar" onchange="previewGambar()">
                </div>
                <div class="mb-2 d-flex justify-content-between">
                    <!-- back -->
                    <a href="/php_pw" class="badge bg-danger d-flex justify-content-center align-items-center px-3 mt-3 text-decoration-none">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8.354 1.646a.5.5 0 0 1 0 .708L2.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                            <path fill-rule="evenodd" d="M12.354 1.646a.5.5 0 0 1 0 .708L6.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                        </svg>
                        <span class="ps-1">Back</span>
                    </a>
                    <!-- tambah -->
                    <button type="submit" name="tambah" class="badge bg-primary d-block mt-3 ms-auto border-0 py-2 d-flex justify-content-center align-items-center ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                            <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z" />
                        </svg>
                        <span class="ps-1">Tambah</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- body -->

<!-- footer -->
<?php include('partials/footer.php') ?>
<!-- footer -->