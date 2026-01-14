<?php
session_start();
require 'koneksi.php';

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

$email = $_SESSION['email'];
$data  = $koneksi->query("SELECT * FROM pengguna WHERE email='$email'")->fetch_assoc();
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Profil</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>

<div class="container mt-5">
  <div class="col-md-6 mx-auto">
    <div class="card">
      <div class="card-header bg-primary text-white">
        Edit Profil
      </div>
      <div class="card-body">

        <form action="prosesprofil.php" method="post">

          <input type="hidden" name="id" value="<?= $data['id']; ?>">

          <div class="mb-3">
            <label>Email</label>
            <input type="email" class="form-control"
                   value="<?= $data['email']; ?>" disabled>
          </div>

          <div class="mb-3">
            <label>Nama Lengkap</label>
            <input type="text" name="nama_lengkap" class="form-control"
                   value="<?= $data['nama_lengkap']; ?>" required>
          </div>

          <div class="mb-3">
            <label>Password Baru</label>
            <input type="password" name="password" class="form-control"
                   placeholder="Kosongkan jika tidak diubah">
          </div>

          <button class="btn btn-success" type="submit">Simpan Perubahan</button>
          <a href="index.php" class="btn btn-secondary">Kembali</a>

        </form>

      </div>
    </div>
  </div>
</div>

</body>
</html>
