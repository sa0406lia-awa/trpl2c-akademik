<?php
session_start();
require 'koneksi.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $email = $_POST['email'];
    $pass  = $_POST['password'];

    $result = $koneksi->query(
        "SELECT * FROM pengguna WHERE email='$email'"
    );

    if ($result && $result->num_rows == 1) {
        $data = $result->fetch_assoc();

        if (password_verify($pass, $data['password'])) {
            $_SESSION['login'] = true;
            $_SESSION['email'] = $data['email'];
            $_SESSION['nama']  = $data['nama_lengkap'];

            header("Location: index.php");
            exit;
        } else {
            $error = "Password salah";
        }
    } else {
        $error = "Email tidak ditemukan";
    }
}
?>
