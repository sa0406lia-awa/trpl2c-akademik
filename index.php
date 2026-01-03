<?php
session_start();

if (!isset($_SESSION['login']) || $_SESSION['login'] !== TRUE) {
  header("Location: login.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>List Nama Mahasiswa</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>

    <!--NAVBAR-->
    <body>
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="index.php?p=home">
                    <img src="images/logo-ti-pnp-05-1.png" alt="Logo TI" width="200">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-3">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?p=list">Mahasiswa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?p=data_prodi">Program Studi</a>
                        </li>
                    </ul>

                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link text-danger" href="logout.php"
                            onclick="return confirm('Yakin ingin logout?')">
                            Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container my-4">
            <?php
                $page = isset($_GET['p']) ? $_GET['p'] : 'home';

                if($page == 'home') include 'home.php';
                if($page == 'list') include 'mahasiswa/list.php';
                if($page == 'create') include 'mahasiswa/create.php';
                if($page == 'edit') include 'mahasiswa/edit.php';
                if($page == 'data_prodi') include 'program_studi/listprodi.php';
                if($page == 'create_prodi') include 'program_studi/createprodi.php';
                if($page == 'edit_prodi') include 'program_studi/editprodi.php';

            ?>
        </div>

    
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </body>
</html>
