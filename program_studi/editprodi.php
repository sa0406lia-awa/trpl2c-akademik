<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/akademik/koneksi.php';

    if (!isset($_GET['id'])){
            echo "ID tidak ditemukan!";
            exit;
        }

        $id = (int) $_GET['id'];
        $sql = "SELECT * FROM program_studi WHERE id = $id";
        $result = $koneksi->query($sql);

        if($result->num_rows == 0){
            echo "Data tidak ditemukan!";
            exit;
        }

    $data = $result->fetch_assoc();
?>

<div class="container mt-4">
    <h3>Edit Program Studi</h3>

    <form action="program_studi/proses.php" method="post">
        <input type="hidden" name="id" value="<?= $data['id']; ?>">

        <div class="mb-3">
            <label class="form-label">Nama Program Studi</label>
            <input type="text" name="nama" class="form-control"
                   value="<?= $data['nama_prodi']; ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Jenjang</label>
            <select name="jenjang" class="form-select" required>
                <option value="">-- Pilih Jenjang --</option>
                <option value="D2" <?= $data['jenjang']=='D2'?'selected':''; ?>>D2</option>
                <option value="D3" <?= $data['jenjang']=='D3'?'selected':''; ?>>D3</option>
                <option value="D4" <?= $data['jenjang']=='D4'?'selected':''; ?>>D4</option>
                <option value="S2" <?= $data['jenjang']=='S2'?'selected':''; ?>>S2</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Akreditasi</label>
            <input type="text" name="akreditasi" class="form-control"
                   value="<?= $data['akreditasi']; ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Keterangan</label>
            <input type="text" name="keterangan" class="form-control"
                   value="<?= $data['keterangan']; ?>">
        </div>

        <button type="submit" name="update" class="btn btn-primary">
            Update
        </button>

        <a href="index.php?p=data_prodi" class="btn btn-secondary">
            Kembali
        </a>
    </form>
</div>
