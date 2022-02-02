<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
        if (!isset($_GET['id'])) {
            echo 'Home';
        } else {
            $id = $_GET['id'];
            $mhs = query('SELECT * FROM mahasiswa WHERE id = ' . $id);
            echo 'Detail ' . $mhs['nama'];
        }
        ?>
    </title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./bootstrap/css/style.css">
</head>

<body>
    <!-- navbar -->
    <div class="pb-4">
        <?php include('partials/navbar.php') ?>
    </div>
    <!-- navbar -->