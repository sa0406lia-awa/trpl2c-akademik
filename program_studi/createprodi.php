<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Input Program Studi</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
     </head>

  <body>
    <div class="container">
        <h1>Input Data Program Studi</h1>
        <form action="program_studi/proses.php" method="post">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Program Studi</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" id="nama" name="nama">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Jenjang</label>
                <select class="form-select" id="jenjang" name="jenjang" required>
                    <option value="">--Jenjang--</option>
                    <option value="D2">D2</option>
                    <option value="D3">D3</option>
                    <option value="D4">D4</option>
                    <option value="S2">S2</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Akreditasi</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" id="akreditasi" name="akreditasi">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Keterangan</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" id="keterangan" name="keterangan">
            </div>
            <div class="mb-3">
                <input type="submit" name="submit" class="btn btn-primary">
                <a href="index.php?p=data_prodi" class="btn btn-secondary">
                    Lihat List
                </a>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>