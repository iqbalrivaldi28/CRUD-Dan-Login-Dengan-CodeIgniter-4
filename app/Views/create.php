<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Bootsraps -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <title>Create Data | M. Iqbal Rivaldi</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 mb-4 mt-5 text-center">
          <h1>Form Tambah Data</h1>
        </div>
      </div>

      <form action="/About/simpan" method="POST" class="text-center ">
        <div class="row">
          <div class="col-lg-3 mb-3">
            <label for="">Nama</label>
          </div>
          <div class="col-lg-6 mb-3">
            <input type="text" class="form-control" name="nama" />
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3 mb-3">
            <label for="">NPM</label>
          </div>
          <div class="col-lg-6 mb-3">
            <input type="text" class="form-control" name="npm" />
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3 mb-3">
            <label for="">Prodi</label>
          </div>
          <div class="col-lg-6 mb-3">
            <input type="text" class="form-control" name="prodi" />
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3 mb-3">
            <label for="">Alamat</label>
          </div>
          <div class="col-lg-6 mb-3">
            <input type="text" class="form-control" name="alamat" />
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3 mb-3">
            <label for="">Agama</label>
          </div>
          <div class="col-lg-6 mb-3">
            <input type="text" class="form-control" name="agama" />
          </div>
        </div>

        <div class="row text-end">
          <div class="col-lg-9">
            <button type="submit" class="btn btn-primary">Simpan Data</button>
          </div>
        </div>
      </form>
    </div>

    <!-- Js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
