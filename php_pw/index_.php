<!-- php -->
<?php

require('function.php');

$mahasiswa = query('SELECT * FROM mahasiswa');

if (isset($_POST['cari'])) {
    $mahasiswa = search($_POST);
}

?>
<!-- php -->

<!-- header -->
<?php include('partials/header.php') ?>
<!-- header -->

<!-- body -->
<div class="container mt-5">
    <h3 class="mb-4">Daftar Mahasiswa</h3>
    <div class="row my-0" style="cursor: pointer;">
        <div class="col-md-4">
            <a href="/php_pw/tambah.php" class="btn btn-primary mb-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                    <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z" />
                </svg>
                <span>Tambah Data</span>
            </a>
        </div>
        <div class="col-md-4 mb-3">
            <!-- search -->
            <form action="" method="post" class="d-flex justify-content-end">
                <input type="text" name="search" placeholder="search of" class="px-2 py-1 me-1" style="width: 25em;">
                <input type="submit" name="cari" value="search" class="py-1">
            </form>
            <!-- search -->
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">

            <!-- alert -->
            <?php if (isset($_GET['message']) && $_GET['message'] === 'insert-success') : ?>
                <div class="alert alert-success alert-dismissible fade show mt-1" role="alert">
                    Data berhasil ditambahkan
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php elseif (isset($_GET['message']) && $_GET['message'] === 'insert-faild') : ?>
                <div class="alert alert-danger alert-dismissible fade show mt-1" role="alert">
                    Data gagal ditambahkan!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php elseif (isset($_GET['message']) && $_GET['message'] === 'update-success') : ?>
                <div class="alert alert-success alert-dismissible fade show mt-1" role="alert">
                    Data Berhasil diubah!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php elseif (isset($_GET['message']) && $_GET['message'] === 'update-faild') : ?>
                <div class="alert alert-danger alert-dismissible fade show mt-1" role="alert">
                    Data gagal diubah!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php elseif (isset($_GET['message']) && $_GET['message'] === 'delete-success') : ?>
                <div class="alert alert-success alert-dismissible fade show mt-1" role="alert">
                    Data berhasil dihapus!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php elseif (isset($_GET['message']) && $_GET['message'] === 'delete-faild') : ?>
                <div class="alert alert-danger alert-dismissible fade show mt-1" role="alert">
                    Data gagal dihapus!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif ?>
            <!-- alert -->

            <table class="table table-bordered border-secondary table-hover shadow" border="1">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">No</th>
                        <th scope="col" class="text-center">Gambar</th>
                        <th scope="col" class="text-center">Nama</th>
                        <th scope="col" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($mahasiswa as $mhs) : ?>
                        <tr>
                            <!-- index -->
                            <td class="text-center pt-4"><?= $i++; ?></td>
                            <!-- gambar -->
                            <td class="text-center">
                                <img src="./bootstrap/img/<?= $mhs['img']; ?>" alt="<?= $mhs['img']; ?>" width="80" height="60" class="rounded">
                            </td>
                            <!-- nama -->
                            <td class="ps-4 pt-4"><?= $mhs['nama']; ?></td>
                            <!-- aksi -->
                            <td class="text-center pt-4">
                                <!-- detail -->
                                <a href="/php_pw/detail.php?id=<?= $mhs['id']; ?>" class="text-decoration-none badge bg-warning" data-bs-toggle="tooltip" data-bs-placement="right" title="Detail">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                        <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                    </svg>
                                </a>
                                <!-- edit -->
                                <a href="/php_pw/ubah.php?id=<?= $mhs['id'] ?>" class="text-decoration-none badge bg-success" data-bs-toggle="tooltip" data-bs-placement="right" title="Edit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                    </svg>
                                </a>
                                <!-- hapus -->
                                <a href="/php_pw/hapus.php?id=<?= $mhs['id']; ?>" class="text-decoration-none badge bg-danger" data-bs-toggle="tooltip" data-bs-placement="right" title="Hapus" onclick="return confirm('Yakin ingin hapus?')">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- body -->

<!-- footer -->
<?php include('partials/footer.php') ?>
<!-- footer -->