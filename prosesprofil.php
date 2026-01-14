<?php
session_start();
require 'koneksi.php';

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

$id   = $_POST['id'];
$nama = $_POST['nama_lengkap'];
$pass = $_POST['password'];

if (!empty($pass)) {
    $pass = password_hash($pass, PASSWORD_DEFAULT);
    $sql = "UPDATE pengguna 
            SET nama_lengkap='$nama', password='$pass'
            WHERE id='$id'";
} else {
    $sql = "UPDATE pengguna 
            SET nama_lengkap='$nama'
            WHERE id='$id'";
}

$koneksi->query($sql);

header("Location: index.php?p=profil&status=success");
exit;
