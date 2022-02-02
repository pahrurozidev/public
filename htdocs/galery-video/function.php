<?php

function koneksi()
{
    return mysqli_connect('localhost', 'root', '', 'db_gvideo');
}

function query($query)
{

    $conn = koneksi();
    $result = mysqli_query($conn, $query);
    $rows = [];
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
    }
    return $rows;
}
