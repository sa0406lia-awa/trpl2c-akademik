<h1>Edit Data</h1>
<?php
    require_once __DIR__ . '/../koneksi.php';

    if (!isset($_GET['id'])){
        echo "ID tidak ditemukan!";
        exit;
    }

    $id = $_GET['id'];
    $sql = "SELECT * FROM mahasiswa WHERE id = $id";
    $result = $koneksi->query($sql);

    if($result->num_rows == 0){
        echo "Data tidak ditemukan!";
        exit;
    }

    $data = $result->fetch_assoc();
?>
    <form action="mahasiswa/proses.php" method="post">

        <input type="hidden" name="id" value="<?=  $data['id'] ?>">

        <div class="mb-3">
            <label class="form-label">NIM</label>
            <input type="text" class="form-control" name="nim"
            value="<?= $data['nim'] ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama_mhs"
            value="<?= $data['nama_mhs'] ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" name="tgl_lahir"
            value="<?= $data['tgl_lahir'] ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <textarea class="form-control" name="alamat" rows="4"><?= $data['alamat'] ?></textarea>
        </div>

        <button href="index.php" type="submit" name="update" class="btn btn-primary">Update</button>
        <a href="/akademik/index.php?p=list" class="btn btn-secondary">Kembali</a>
    </form>