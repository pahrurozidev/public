<?php

function koneksi()
{
    return mysqli_connect('localhost', 'root', '', 'db_pw');
}

function query($query)
{
    $conn = koneksi();
    $result = mysqli_query($conn, $query);

    // if array one only
    if (mysqli_num_rows($result) == 1) {
        return mysqli_fetch_assoc($result);
    }

    $rows = [];

    // if all array 
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}


// upload gambar
function upload()
{
    $file_name = $_FILES['gambar']['name'];
    $file_type = $_FILES['gambar']['type'];
    $tmp_file = $_FILES['gambar']['tmp_name'];
    $file_error = $_FILES['gambar']['error'];
    $file_size = $_FILES['gambar']['size'];

    // file exists
    if ($file_error == 4) {  // 4 = file !exists / 0 = file exists
        // echo "<script>
        //     alert('Pilih gambar terlebih dahulu!');
        // </script>";
        return 'no-foto.png';
    }

    // extension file
    $daftar_gambar = ['jpg', 'jpeg', 'png'];
    $extension_file = explode('.', $file_name); // expload $file_name between .
    $extension_file = end($extension_file); // fetch last element
    $extension_file = strtolower($extension_file); // change extension to lower
    if (!in_array($extension_file, $daftar_gambar)) {
        return header('Location: index.php?message=not-image');
    }

    // file type
    if ($file_type != 'image/jpeg' && $file_type != 'image/jpeg' && $file_type != 'image/png') {
        return header('Location: index.php?message=not-image');
    }

    // file size
    if ($file_size > 5000000) {  // 1 mb = 1.000.000 byte
        return header('Location: index.php?message=size-image');
    }

    // generate new file name
    $new_file_nama = uniqid();
    $new_file_nama .= '.';
    $new_file_nama .= $extension_file;
    move_uploaded_file($tmp_file, 'bootstrap/img/' . $new_file_nama);

    return $new_file_nama;
}


function tambah($data)
{
    $conn = koneksi();

    $name = htmlspecialchars($data['name']);
    $nrp = htmlspecialchars($data['nrp']);
    $email = htmlspecialchars($data['email']);
    $jurusan = htmlspecialchars($data['jurusan']);
    // $gambar = htmlspecialchars($data['gambar']);

    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    $query = "INSERT INTO mahasiswa VALUES (null, '$name', '$nrp', '$email', '$jurusan', '$gambar')";

    mysqli_query($conn, $query);

    // debug
    // mysqli_errn($conn);

    if (mysqli_affected_rows($conn) > 0) {
        return header('Location: index.php?message=insert-success');
    } else {
        return header('Location: index.php?message=insert-faild');
    }
}

function hapus($id)
{

    $conn = koneksi();

    $mhs = query("SELECT * FROM mahasiswa WHERE id = " . $id);
    if ($mhs['img'] != 'no-foto.png') {
        unlink('bootstrap/img/' . $mhs['img']);
    }

    $query = "DELETE FROM mahasiswa WHERE id = " . $id;
    mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0) {
        return header('Location: index.php?message=delete-success');
    } else {
        return header('Location: index.php?message=delete-faild');
    }
}

function ubah($data)
{
    $conn = koneksi();

    $id = $data['id'];
    $name = htmlspecialchars($data['name']);
    $nrp = htmlspecialchars($data['nrp']);
    $email = htmlspecialchars($data['email']);
    $jurusan = htmlspecialchars($data['jurusan']);
    $gambarLama = htmlspecialchars($data['gambarLama']);

    $gambar = upload();
    if (!$gambar) {
        return false;
    } else if ($gambar == 'no-foto.png') {
        $gambar = $gambarLama;
    }

    $query = "UPDATE mahasiswa SET 
        nama = '$name', 
        nrp = '$nrp',
        email = '$email', 
        jurusan = '$jurusan',
        img = '$gambar'
        WHERE id = " . $id;

    mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0) {
        return header('Location: index.php?message=update-success');
    } else {
        return header('Location: index.php?message=update-faild');
    }
}

function search($data)
{
    $conn = koneksi();

    $keyword = $data['search'];

    $query = "SELECT * FROM mahasiswa WHERE nama LIKE '%" . $keyword . "%'";

    $result = mysqli_query($conn, $query);


    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    if (!$rows) {
        return header('Location: index.php?message=search-null');
    }

    return $rows;
}
