<h1>List Data Program Studi</h1>
    <a href="index.php?p=create_prodi" class="btn btn-warning">Input</a>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Program Studi</th>
                <th scope="col">Jenjang</th>
                <th scope="col">Akreditasi</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                require_once 'koneksi.php';
                $tampil = $koneksi->query("SELECT * FROM program_studi");
                $no = 1;
                while ($data = mysqli_fetch_assoc($tampil)){
            ?>
                <tr>
                    <th scope="row"><?= $no++ ?></th>
                    <td><?= $data['nama_prodi'] ?></td>
                    <td><?= $data['jenjang'] ?></td>
                    <td><?= $data['akreditasi'] ?></td>
                    <td><?= $data['keterangan'] ?></td>
                    <td>
                        <a href="index.php?id=<?= $data['id'] ?>&p=edit_prodi" class="btn btn-warning btn-sm">Edit</a>
                        <a href="program_studi/proses.php?id=<?= $data['id'] ?>&aksi=hapus"
                       onclick="return confirm('Yakin ingin menghapus data ini?')" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
