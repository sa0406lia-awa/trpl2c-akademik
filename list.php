<h1>List Data Mahasiswa</h1>
    <a href="index.php?p=create" class="btn btn-warning">Input</a>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">NIM</th>
                <th scope="col">Nama Mahasiswa</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Alamat</th>
            </tr>
        </thead>
        <tbody>
            <?php
                require 'koneksi.php';
                $tampil = $koneksi->query("SELECT * FROM mahasiswa");
                $no = 1;
                while ($data = mysqli_fetch_assoc($tampil)){
            ?>
                    <tr>
                        <th scope="row"><?= $no++ ?></th>
                        <td><?=  $data['nim'] ?> </td>
                        <td><?=  $data['nama_mhs'] ?> </td>
                        <td><?=  $data['tgl_lahir'] ?> </td>
                        <td><?= $data['alamat'] ?> </td>
                        <td>
                                <a href="index.php?id=<?= $data['id'] ?>&p=edit" class="btn btn-warning btn-sm">Edit</a>
                                <a onclick="return confirm('Apakah anda yakin untuk hapus?')" href="proses.php?id=<?= $data['id'] ?>&aksi=hapus" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
            <?php } ?>
        </tbody>
    </table>