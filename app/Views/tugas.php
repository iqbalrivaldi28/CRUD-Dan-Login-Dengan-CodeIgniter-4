<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&family=Montserrat&family=Poppins:ital,wght@0,200;0,300;0,400;1,100&family=Sacramento&display=swap" rel="stylesheet" />

    <!-- My CSS -->
    <!-- <link rel="stylesheet" href="css/style.css" /> -->

    <title>M. Iqbal Rivaldi</title>

	<style>
	.btn-primary {
  background-color: #ff9900;
  border: 0;
  padding: 15px 40px 15px 40px;
  font-size: 16px;
  font-weight: bold;
}

.btn-primary:hover {
  background: rgb(219, 133, 4);
  border: 0;
}

.navbar-brand span {
  font-size: 25px !important;
  font-weight: bold !important;
  color: #ff9900;
}

.btn-secondary {
  background: none;
  border: 1px solid #bcd0e5;
  padding: 15px 40px 15px 40px;
  font-size: 16px;
  font-weight: bold;
  color: #173a56;
}

.btn-secondary:hover {
  background: none;
  border: 1px solid rgb(159, 177, 197);
  color: #173a56;
}

.navbar-nav .nav-link {
  color: #2f281e;
}

.navbar-nav .nav-link:hover {
  background-color: #ff9900;
}

/* About */

.herobwa h1 {
  font-family: 'Poppins', sans-serif;
  font-weight: 700;

  color: #2f281e;
}

.herobwa p {
  font-family: 'Poppins', sans-serif;
  color: #2f281e;
}

/* Responsive */
@media only screen and (max-width: 768px) {
  .btn-primary,
  .btn-secondary {
    margin-top: 10px;
    margin-left: 0 !important;
  }

  .herobwa h1 {
    margin-top: 80px;
  }
}

	</style>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#"><span>M. Iqbal Rivaldi</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item align-self-center ms-3">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item align-self-center ms-3">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item align-self-center ms-3">
              <a class="nav-link" href="#">My Project</a>
            </li>
            <li class="nav-item align-self-center ms-3">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Body -->
    <section class="herobwa mt-5">
      <div class="container">
        <div class="row">
          <div class="col align-self-center">
            <h4 mb-4>Hai, Nama Saya</h4>
            <h1 mb-4>M. Iqbal Rivaldi</h1>
            <p mb-4>Berikut adalah Biodata Saya</p>
            <table class="table table-striped" width="300px">
              <tr>
                <td>Nama</td>
                <td>: <?= $data['nama'] ?> </td>
              </tr>
              <tr>
                <td>NPM</td>
                <td>: <?= $data['npm'] ?></td>
              </tr>
              <tr>
                <td>Prodi</td>
                <td>: <?= $data['prodi'] ?></td>
              </tr>
              <tr>
                <td>Alamat</td>
                <td>: <?= $data['alamat'] ?></td>
              </tr>
              <tr>
                <td>Agama</td>
                <td>: <?= $data['agama'] ?></td>
              </tr>
            </table>
          </div>

          <div class="col d-none d-sm-block mt-5">
            <img src="https://i.postimg.cc/wMZsF5WD/hero-icon.jpg" width="600" alt="icon-1" />
          </div>
        </div>
      </div>
    </section>

    

    <!-- Akhir Body -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
