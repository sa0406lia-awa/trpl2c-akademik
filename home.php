<?php
if (isset($_SESSION['nama']) && !empty($_SESSION['nama'])) {
    echo "<h2>Selamat Datang, " . htmlspecialchars($_SESSION['nama']) . "</h2>";
    echo "<p>Sistem Informasi Akademik</p>";
} else {
    echo "<h2>Selamat Datang, Pengguna</h2>";
}
?>
