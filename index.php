<?php
session_start();
if (!isset($_SESSION['username'])) {
  header("location:login.php");
}

if ($_SESSION['role'] != 'user') {
  header("location:logout.php");
}

include "koneksi.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Chick N Fish</title>
  <link rel="icon" href="img/logo.png" />
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous" />
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="assets/css/styles.css" />
</head>

<body>
  <nav class="navbar navbar-expand-sm bg-body-tertiary sticky-top">
    <div class="container">
      <a class="navbar-brand" href="#">Chick N Fish</a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#article">Article</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#gallery">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#jadwal">Schedule</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#aboutme">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php" target="_blank">Login</a>
          </li>
          <!-- <button
              type="button"
              class="btn btn-dark theme"
              id="dark"
              title="dark"
            >
              <i class="bi bi-moon-stars-fill"></i>
            </button>
            <button
              type="button"
              class="btn btn-danger theme"
              id="light"
              title="light"
            >
              <i class="bi bi-brightness-high"></i>
            </button> -->
        </ul>
      </div>
    </div>
  </nav>

  <section class="position-relative d-flex justify-content-center flex-column hero">
    <div class="container">
      <span class="title">Chick N Fish</span>
    </div>
    <div class="position-absolute image-potrait">
      <img class="object-fit-cover self-potrait" src="img/20230213_170713.jpg" alt="" />
    </div>
  </section>

  <!-- article begin -->
  <section id="article" class="text-center p-5">
    <div class="container">
      <h1 class="fw-bold display-4 pb-3">article</h1>
      <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
        <?php
        $sql = "SELECT * FROM article ORDER BY tanggal DESC";
        $hasil = $conn->query($sql);

        while ($row = $hasil->fetch_assoc()) {
        ?>
          <div class="col">
            <div class="card h-100">
              <img src="img/<?= $row["gambar"] ?>" class="card-img-top" alt="abogaboga.jpg" />
              <div class="card-body">
                <h5 class="card-title"><?= $row["judul"] ?></h5>
                <p class="card-text">
                  <?= $row["isi"] ?>
                </p>
              </div>
              <div class="card-footer">
                <small class="text-body-secondary">
                  <?= $row["tanggal"] ?>
                </small>
              </div>
            </div>
          </div>
        <?php
        }
        ?>
      </div>
    </div>
  </section>
  <!-- article end -->

  </section>
  <section id="gallery" class="text-center p-5 bg-danger">
    <div class="container">
      <h1 class="fw-bold display-4 pb-3">gallery</h1>
      <!-- <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        </div>
                        <div class="carousel-item">   
                        </div>
                        <div class="carousel-item">
                        </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div> -->
      <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
          <?php
          $sql = "SELECT * FROM gallery ORDER BY id DESC";
          $hasil = $conn->query($sql);

          while ($row = $hasil->fetch_assoc()) {
          ?>
            <div class="col">
              <div class="card h-100">
                <img src="img/<?= $row["image_url"] ?>" class="card-img-top" alt="..." />
              </div>
            </div>
          <?php
          }
          ?>
        </div>
      </div>
    </div>
  </section>

  <!-- Schedule -->
  <section class="jadwal" id="jadwal">
    <div class="container">
      <span class="title-jadwal">Jadwal Kuliah & Kegiatan Mahasiswa</span>
      <div class="d-flex flex-row align-items-center justify-content-around mt-4" style="gap: 20px">
        <div class="card border-primary mb-3" style="max-width: 18rem;">
          <div class="card-header1" align="center">Senin</div>
          <div class="card-body">
            <h5 class="card-title">08.00 - 10.00</h5>
            <p class="card-text">Pengantar Teknologi Informasi</p>
            <p class="card-text">Ruang D.3.N</p>
            <br>
            <h5 class="card-title">11.00 - 13.00</h5>
            <p class="card-text">Koordinasi DOSCOM</p>
            <p class="card-text">Ruang Rapat G.1</p>
          </div>
        </div>

        <div class="card border-primary mb-3" style="max-width: 18rem;">
          <div class="card-header2" align="center">Selasa</div>
          <div class="card-body">
            <h5 class="card-title">08.00 - 10.00</h5>
            <p class="card-text">Pengantar Teknologi Informasi</p>
            <p class="card-text">Ruang D.3.N</p>
            <br>
            <h5 class="card-title">11.00 - 13.00</h5>
            <p class="card-text">Koordinasi DOSCOM</p>
            <p class="card-text">Ruang Rapat G.1</p>
          </div>
        </div>

        <div class="card border-primary mb-3" style="max-width: 18rem;">
          <div class="card-header3" align="center">Rabu</div>
          <div class="card-body">
            <h5 class="card-title">08.00 - 10.00</h5>
            <p class="card-text">Pengantar Teknologi Informasi</p>
            <p class="card-text">Ruang D.3.N</p>
            <br>
            <h5 class="card-title">11.00 - 13.00</h5>
            <p class="card-text">Koordinasi DOSCOM</p>
            <p class="card-text">Ruang Rapat G.1</p>
          </div>
        </div>

        <div class="card border-primary mb-3" style="max-width: 18rem;">
          <div class="card-header4" align="center">Kamis</div>
          <div class="card-body">
            <h5 class="card-title">08.00 - 10.00</h5>
            <p class="card-text">Pengantar Teknologi Informasi</p>
            <p class="card-text">Ruang D.3.N</p>
            <br>
            <h5 class="card-title">11.00 - 13.00</h5>
            <p class="card-text">Koordinasi DOSCOM</p>
            <p class="card-text">Ruang Rapat G.1</p>
          </div>
        </div>
      </div>
      <div class="d-flex flex-row align-items-center justify-content-around" style="gap: 20px; margin-top: 20px">
        <div class="card border-primary mb-3" style="max-width: 18rem;">
          <div class="card-header5" align="center">Jumat</div>
          <div class="card-body">
            <h5 class="card-title">08.00 - 10.00</h5>
            <p class="card-text">Pengantar Teknologi Informasi</p>
            <p class="card-text">Ruang D.3.N</p>
            <br>
            <h5 class="card-title">11.00 - 13.00</h5>
            <p class="card-text">Koordinasi DOSCOM</p>
            <p class="card-text">Ruang Rapat G.1</p>
          </div>
        </div>

        <div class="card border-primary mb-3" style="max-width: 18rem;">
          <div class="card-header6" align="center">Sabtu</div>
          <div class="card-body">
            <h5 class="card-title">08.00 - 10.00</h5>
            <p class="card-text">Pengantar Teknologi Informasi</p>
            <p class="card-text">Ruang D.3.N</p>
            <br>
            <h5 class="card-title">11.00 - 13.00</h5>
            <p class="card-text">Koordinasi DOSCOM</p>
            <p class="card-text">Ruang Rapat G.1</p>
          </div>
        </div>

        <div class="card border-primary mb-3" style="max-width: 18rem;">
          <div class="card-header7" align="center">Minggu</div>
          <div class="card-body">
            <p class="card-text">Tidak Ada Jadwal</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Profile -->
  <section id="aboutme" class="text-center p-5">
    <div class="container">
      <div class="d-sm-flex align-items-center justify-content-center">
        <div class="p-3">
          <img
            src="img/my self.jpg"
            class="rounded-circle border shadow"
            width="300" />
        </div>
        <div class="p-md-5 text-sm-start">
          <h3 class="lead">A11.2023.15270</h3>
          <h1 class="fw-bold">Gibran Rais Hilmy Iskandar</h1>
          Program Studi Teknik Informatika<br />
          <a href="https://dinus.ac.id/" class="fw-bold text-decoration-none">Universitas Dian Nuswantoro</a>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div>
      <a href="https://www.instagram.com/itsmebrann_/" target="_blank">
        <i class="bi bi-instagram h2 p-2 text-light"></i>
      </a>
      <a href="https://wa.me/+6282135292904" target="_blank">
        <i class="bi bi-whatsapp h2 p-2 text-light"></i>
      </a>
      <a href="https://x.com/" target="_blank">
        <i class="bi bi-twitter-x h2 p-2 text-light"></i>
      </a>
    </div>
    <div>
      Gibran Rais Hilmy &copy; 2024
    </div>
  </footer>

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>