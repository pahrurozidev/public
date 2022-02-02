<?php
require('function.php');

if (!isset($_GET['id'])) {
    header('Location: index.php');
} else {
    hapus($_GET['id']);
}
