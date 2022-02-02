<!-- php -->
<?php
require('function.php');

if (!isset($_GET['id'])) {
    header('Location: index.php');
}

$id = $_GET['id'];

$mhs = query('SELECT * FROM mahasiswa WHERE id = ' . $id);

if (isset($_POST['ubah'])) {
    ubah($_POST);
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
            <h3 class="text-center mt-3 mb-4">Ubah Data Mahasiswa</h3>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="nrp" class="form-label">Nama</label>
                    <input type="hidden" name="id" value="<?= $mhs['id'] ?>">
                    <input type="text" class="form-control" name="name" placeholder="masukan nama" value="<?= $mhs['nama'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="nrp" class="form-label">NRP</label>
                    <input type="text" class="form-control" name="nrp" placeholder="masukan nrp" value="<?= $mhs['nrp'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="example@gmail.com" value="<?= $mhs['email'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="jurusan" class="form-label">Jurusan</label>
                    <input type="text" class="form-control" name="jurusan" placeholder="masukan jurusan" value="<?= $mhs['jurusan'] ?>" required>
                </div>
                <div class="mb-3">
                    <input type="hidden" name="gambarLama" value="<?= $mhs['img'] ?>">
                    <label for="gambar" class="form-label">Gambar</label>
                    <img src="bootstrap/img/<?= $mhs['img'] ?>" alt="preview" width="85" height="70" class="img-preview rounded mb-2 d-block">
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
                    <button type="submit" name="ubah" class="badge bg-primary d-block mt-3 ms-auto border-0 py-2  d-flex justify-content-center align-items-center ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                        </svg>
                        <span class="ps-1">Ubah</span>
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