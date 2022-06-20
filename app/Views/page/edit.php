<?php

use App\Models\DataDiri;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <title>Edit Data</title>
  </head>
  <body>
    <h1 class="mt-5 mb-3 text-center">Edit Data</h1>

    <form action="/biodata/update" method="POST">
      <div class="mb-3 col-lg-6 ms-auto me-auto">
        <label class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control" value="<?= $datadiri->nama;?>">
      </div>
      <div class="mb-3 col-lg-6 ms-auto me-auto">
        <label class="form-label">NPM</label>
        <input type="text" name="npm" class="form-control" value="<?= $datadiri->npm;?>">
      </div>
      <div class="mb-3 col-lg-6 ms-auto me-auto">
        <label class="form-label">Prodi</label>
        <input type="text" name="prodi" class="form-control" value="<?= $datadiri->prodi;?>">
      </div>
      <div class="mb-3 col-lg-6 ms-auto me-auto">
        <label class="form-label">Alamat</label>
        <input type="text" name="alamat" class="form-control" value="<?= $datadiri->alamat;?>">
      </div>
      <div class="mb-3 col-lg-6 ms-auto me-auto">
        <label class="form-label">Agama</label>
        <input type="text" name="agama" class="form-control" value="<?= $datadiri->agama;?>">
      </div>

      <input type="hidden" name="id" value="<?= $datadiri->id;?>">
      
      <div class="col-lg-6 ms-5 text-center">
        <button type="submit" class="btn btn-primary">Update Data</button>
      </div>
    </form>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
