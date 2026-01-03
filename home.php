<?php
if (isset($_SESSION['nama']) && !empty($_SESSION['nama'])) {
    echo "<h1>Selamat Datang, " . htmlspecialchars($_SESSION['nama']) . "</h1>";
    echo "<p>Sistem Informasi Akademik</p>";
} else {
    echo "<h1>Selamat Datang, Pengguna</h1>";
}
?>
