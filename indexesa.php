<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Irvan & Puji Wedding</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700&family=Montez&family=Playpen+Sans:wght@100;200;300;400&family=Roboto:wght@100;300;400&family=Sacramento&family=Send+Flowers&display=swap" rel="stylesheet" />

  <!-- simplyCountdown -->
  <link rel="stylesheet" href="countdown/simplyCountdown.theme.default.css" />
  <script src="countdown/simplyCountdown.min.js"></script>

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />

  <link rel="stylesheet" href="style.css" />
  <!-- data tables -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css" />
</head>

<body>
  <section id="hero" class="hero w-100 h-100 p-3 mx-auto text-center d-flex justify-content-center align-items-center text-white">
    <main>
      <h1 class="mt-5 mt-md-3">The Wedding of</h1>
      <h2 class="my-5 py-5 py-md-0 my-md-3">Irvan & &nbsp;Puji</h2>
      <h4 class="mt-5 mt-md-4">Jum'at, 05 | 01 | 2024</h4>
      <div class="simply-countdown my-5 my-md-1"></div>
      <p class="mt-5 mt-md-4 pt-3 pt-md-0">
        Kepada <span>Bapak/Ibu/Saudara/i, </span>
      </p>
      <p class="m-0 p-0">
        Tanpa Mengurangi Rasa Hormat, Kami Mengundang Anda Untuk Berhadir Di
        Acara Pernikahan Kami.
      </p>
      <a href="#home" class="btn btn-lg my-5 my-md-4 align-middle" onClick="enableScroll()" style="border-radius: 50px">
        <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 256 256">
          <path fill="currentColor" d="m228.44 89.34l-96-64a8 8 0 0 0-8.88 0l-96 64A8 8 0 0 0 24 96v104a16 16 0 0 0 16 16h176a16 16 0 0 0 16-16V96a8 8 0 0 0-3.56-6.66ZM96.72 152L40 192v-80.47Zm16.37 8h29.82l56.63 40H56.46Zm46.19-8L216 111.53V192Z" />
        </svg>
        Lihat Undangan
      </a>
      <p>Mohon maaf apabila ada kesalahan penulisan nama/gelar</p>
    </main>
  </section>

  <!-- <nav class="navbar navbar-expand-md bg-transparent sticky-top mynavbar">
    <div class="container">
      <a class="navbar-brand" href="#">Dino</a>
      <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
        aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Dino</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <div class="navbar-nav ms-auto">
            <a class="nav-link" href="#home">Home</a>
            <a class="nav-link" href="#info">Info</a>
            <a class="nav-link" href="#story">Story</a>
            <a class="nav-link" href="#gallery">Gallery</a>
            <a class="nav-link" href="#rsvp">RSVP</a>
            <a class="nav-link" href="#gifts">Gifts</a>
          </div>
        </div>
      </div>
    </div>
  </nav> -->

  <section id="home" class="home">
    <div class="container">
      <div class="row justify-content-center mt-5 mt-md-1">
        <div class="col-md-8 text-center pt-3 pt-md-1">
          <h2 class="mt-5 mt-md-1">Assalamu'alaikum Wr. Wb.</h2>
          <h3>
            Dengan memohon rahmat dan ridho Allah Subhanahu Wa Ta’ala,
            insyaaAllah Kami akan menyelenggarakan acara pernikahan
          </h3>
        </div>
      </div>

      <div class="row couple mx-3">
        <div class="col-lg-6">
          <div class="row">
            <div class="col-8 text-end d-flex align-items-center">
              <div>
                <h3>M. Irvan Alfi Hidayat</h3>
                <p>
                  Putra dari Bpk. Abdul Roup & <br />
                  Ibu Siti Hajar
                </p>
              </div>
            </div>
            <div class="col-4">
              <img src="img/irvan.jpg" alt="M. Irvan Alfi hidayat" class="img-responsive rounded-circle" />
            </div>
          </div>
        </div>

        <span class="heart"><i class="bi bi-heart-fill"></i></span>

        <div class="col-lg-6">
          <div class="row">
            <div class="col-4">
              <img src="img/puji.jpg" alt="Puji Rohmatun" class="img-responsive rounded-circle" />
            </div>
            <div class="col-8 d-flex align-items-center">
              <div>
                <h3>Puji Rohmatun</h3>
                <p>Putra dari Bpk. Suwardi & <br />Ibu Sunarti</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="info" class="info">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 col-10 text-center">
          <h2 class="text-white mb-5">Informasi Acara</h2>
          <div class="card cards mt-3 text-start shadow">
            <div class="card-body p-5">
              <h3 class="mb-3">Akad Nikah</h3>
              <table>
                <tr>
                  <td><i class="bi bi-calendar3 d-block mx-3"></i></td>
                  <td><span>Jum'at, 05 Januari 2024</span></td>
                </tr>
                <tr>
                  <td><i class="bi bi-clock d-block mx-3"></i></td>
                  <td><span class="ml-3">13.30 - Selesai</span></td>
                </tr>
                <tr>
                  <td>
                    <svg class="d-block mx-3" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 512 512">
                      <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M256 48c-79.5 0-144 61.39-144 137c0 87 96 224.87 131.25 272.49a15.77 15.77 0 0 0 25.5 0C304 409.89 400 272.07 400 185c0-75.61-64.5-137-144-137" />
                      <circle cx="256" cy="192" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                    </svg>
                  </td>
                  <td>
                    <span>Jl. Rowo Bayu, Dsn. Sambungrejo RT 03 / RW 02, Ds.
                      Bayu, Kec. Songgon Kab. Banyuwangi</span>
                  </td>
                </tr>
              </table>
            </div>
          </div>
          <div class="card cards mt-4 text-start shadow">
            <div class="card-body p-5">
              <h3 class="mb-3">Resepsi</h3>
              <table>
                <tr>
                  <td><i class="bi bi-calendar3 d-block mx-3"></i></td>
                  <td><span>Jum'at, 05 Januari 2024</span></td>
                </tr>
                <tr>
                  <td><i class="bi bi-clock d-block mx-3"></i></td>
                  <td><span class="ml-3">Setelah akad</span></td>
                </tr>
                <tr>
                  <td>
                    <svg class="d-block mx-3" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 512 512">
                      <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M256 48c-79.5 0-144 61.39-144 137c0 87 96 224.87 131.25 272.49a15.77 15.77 0 0 0 25.5 0C304 409.89 400 272.07 400 185c0-75.61-64.5-137-144-137" />
                      <circle cx="256" cy="192" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                    </svg>
                  </td>
                  <td>
                    <span>Jl. Rowo Bayu, Dsn. Sambungrejo RT 03 / RW 02, Ds.
                      Bayu, Kec. Songgon Kab. Banyuwangi</span>
                  </td>
                </tr>
              </table>
            </div>
          </div>
          <div class="card mt-4 shadow" style="border-radius: 20px">
            <div class="card-body">
              <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d1974.5397634277006!2d114.178463498943!3d-8.19474383944822!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sid!4v1702357641412!5m2!1sen!2sid" height="250" width="100%" style="border: 0; border-radius: 20px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe><br />
              <a href="https://maps.app.goo.gl/Yzo9JKCJ8a5EeHof8" target="_blank" class="btn btn-light mt-3" style="border-radius: 50px">Buka Google Maps</a>
              <p class="mt-3">
                Pastikan perangkat anda terhubung dengan internet
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- <section id="story" class="story">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 col-10 text-center">
          <span>Bagaimana Cinta Kami Bersemi</span>
          <h2>Cerita Kami</h2>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro, similique non soluta nulla asperiores
            voluptatem.</p>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <ul class="timeline">
            <li>
              <div class="timeline-image" style="background-image: url(img/sman23.jpg);"></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h3>Pertama Bertemu</h3>
                  <span>1 Juni 2000</span>
                </div>
                <div class="timeline-body">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, modi autem? Commodi autem quo quia?
                  </p>
                </div>
              </div>

            </li>
            <li class="timeline-inverted">
              <div class="timeline-image" style="background-image: url(https://picsum.photos/300/300);"></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h3>Mulai Serius</h3>
                  <span>1 Januari 2005</span>
                </div>
                <div class="timeline-body">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto enim eaque obcaecati odit
                    itaque explicabo quisquam quos at.
                  </p>
                </div>
              </div>

            </li>
            <li>
              <div class="timeline-image" style="background-image: url(https://picsum.photos/301/301);"></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h3>Tunangan</h3>
                  <span>7 November 2009</span>
                </div>
                <div class="timeline-body">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, deleniti distinctio. Esse quas sit
                  explicabo corporis magni qui expedita a.
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section> -->

  <section id="gallery" class="gallery">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 col-10 text-center">
          <h2 class="mb-5">Galeri Foto</h2>
          <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, itaque?</p> -->
        </div>
      </div>

      <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/gallery/1.JPG" class="d-block w-100" alt="..." />
          </div>
          <div class="carousel-item">
            <img src="img/gallery/2.JPG" class="d-block w-100" alt="..." />
          </div>
          <div class="carousel-item">
            <img src="img/gallery/3.JPG" class="d-block w-100" alt="..." />
          </div>
          <div class="carousel-item">
            <img src="img/gallery/4.JPG" class="d-block w-100" alt="..." />
          </div>
          <div class="carousel-item">
            <img src="img/gallery/5.JPG" class="d-block w-100" alt="..." />
          </div>
          <div class="carousel-item">
            <img src="img/gallery/6.JPG" class="d-block w-100" alt="..." />
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
      </div>
    </div>
  </section>

  <section id="rsvp" class="rsvp">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 col-10 text-center">
          <h3>
            “Dan di antara tanda-tanda kekuasaan-Nya ialah Dia menciptakan
            untukmu isteri-isteri dari jenismu sendiri, supaya kamu cenderung
            dan merasa tenteram kepadanya, dan dijadikan-Nya diantaramu rasa
            kasih dan sayang. Sesungguhnya pada yang demikian itu benar-benar
            terdapat tanda-tanda bagi kaum yang berfikir.”
          </h3>
          <h2 class="mt-5" style="font-size: 2.5rem !important">
            (QS Ar-Rum: 21)
          </h2>
        </div>
      </div>
    </div>
  </section>

  <section id="gifts" class="gifts">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 col-10 text-center">
          <h2>Kirim Hadiah</h2>
          <span>Ungkapan tanda kasih</span>
        </div>
      </div>

      <div class="row justify-content-center text-center">
        <div class="col-md-6">
          <ul class="list-group">
            <li class="list-group-item py-4">
              <h3 class="fw-bold mt-3">BRI</h3>
              <img src="img/bri irvan.png" alt="BRI" class="img-thumbnail" width="200" /><br />
              <span id="textToCopy">613201025549537</span>
              <button class="btn btn-lg btn-secondary" style="border-radius: 50px" onclick="copyText()">
                Salin No. Rekening
              </button>
            </li>
            <li class="list-group-item py-4">
              <h3 class="fw-bold mt-3">DANA</h3>
              <img src="img/dana.jpg" alt="Dana" class="img-thumbnail" width="180" /><br />
              <span id="textToCopy2">082244922833</span>
              <span>Scan Qr atau </span>
              <button class="btn btn-lg btn-secondary" style="border-radius: 50px" onclick="copyText2()">
                Salin No.Hp
              </button>
            </li>
            <li class="list-group-item py-4 text-start">
              <h3 class="fw-bold mt-3 text-center">Kirim Kado Pernikahan</h3>
              <table>
                <tr>
                  <td>Nama</td>
                  <td>:</td>
                  <td>Puji Rohmatun</td>
                </tr>
                <tr>
                  <td>Telp</td>
                  <td>:</td>
                  <td>+62 851-8668-2330</td>
                </tr>
                <tr>
                  <td>Alamat</td>
                  <td>:</td>
                  <td>
                    Jl. Rowo Bayu, Dsn. Sambungrejo RT 03 / RW 02, Ds. Bayu,
                    Kec. Songgon Kab. Banyuwangi POS 68463
                  </td>
                </tr>
              </table>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section id="rsvp" class="rsvp">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 col-10 text-center">
          <h2 class="mb-5">Kirimkan<br />Ucapan dan Do'a</h2>
          <!-- <p>Anda juga dapat mengkonfirmasi kehadiaran anda</p> -->
        </div>
      </div>

      <div class="card shadow" style="border-radius: 10px">
        <div class="card-body row g-3 align-items-center justify-content-center p-5">
          <form method="POST" action="https://script.google.com/macros/s/AKfycbyddFbEJRqwEeA6OmZAuNf0jw_B30ZUOS5qSDwlAKV_nurcW7H6osJx2ZWnIeTmPm_35g/exec" id="my-form">
            <div class="col-12">
              <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" />
              </div>
            </div>
            <div class="col-12">
              <div class="mb-3">
                <label for="status" class="form-label">Konfirmasi Kehadiran</label>
                <select name="status" id="status" class="form-select" required>
                  <option selected>Pilih salah satu</option>
                  <option value="Hadir">Hadir</option>
                  <option value="Tidak Hadir">Tidak Hadir</option>
                </select>
              </div>
            </div>
            <div class="col-12">
              <div class="mb-3">
                <label for="jumlah" class="form-label">Ucapan & Do'a</label>
                <textarea class="form-control" name="ucapan" id="ucapan" rows="5" placeholder="Berikan ucapan dan do'a terbaik Anda"></textarea>
                <!-- <input type="number" class="form-control" id="jumlah" name="jumlah" min="1" max="5" length="1" value="1"> -->
              </div>
            </div>
            <div class="col-12" style="margin-top: 20px; margin-bottom: 30px">
              <button class="btn btn-primary btn-lg">Kirim</button>
            </div>
          </form>
          <table id="example" class="table table-striped" style="width: 100%">
            <thead>
              <tr>
                <th data-orderable="false"></th>
                <th data-orderable="false">Ucapan dan Do'a</th>
              </tr>
            </thead>
            <tbody id="wishes">
              <?php
              $curl = curl_init();

              $url    = 'https://api.sandbox.gilitransfers.com/wishes/messages';
              curl_setopt_array($curl, array(
                CURLOPT_URL => $url,
                CURLOPT_CUSTOMREQUEST => 'GET',
                CURLOPT_RETURNTRANSFER => true,
              ));

              $response       = curl_exec($curl);
              $result         = json_decode($response, true);
              curl_close($curl);
              ?>
              <?php foreach ($result as $wish) { ?>
                <tr>
                  <td>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                      <g fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M4 12a8 8 0 1 1 16 0v5.09c0 .848 0 1.27-.126 1.609a2 2 0 0 1-1.175 1.175C18.36 20 17.937 20 17.09 20H12a8 8 0 0 1-8-8z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 11h6m-3 4h3" />
                      </g>
                    </svg>
                  </td>
                  <td>
                    <strong><?= $wish['subject'] ?></strong>
                    <div class="badge bg-primary"><?= $wish['presence'] ?></div>
                    <br />
                    <span><?= $wish['message'] ?></span>
                  </td>
                </tr>
              <?php }?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>

  <footer class="mb-5">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <small class="block">&copy; 2024</small>
          <small class="block">Design by
            <a class="text-white" href="https://instagram.com/irvanalfi_hidayat?igshid=OGQ5ZDc2ODk2ZA==">@irvanalfi_hidayat</a></small>
        </div>
      </div>
    </div>
  </footer>

  <!-- <nav class="navbar navbar_bottom bg-body-tertiary fixed-bottom d-none">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
        aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Dropdown
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav> -->

  <div id="audio-container">
    <audio id="song" autoplay loop>
      <source src="audio/bersamamu.mp3" type="audio/mp3" />
    </audio>
    <div class="audio-icon-wrapper" style="display: none">
      <i class="bi bi-disc" style="font-size: 4rem !important"></i>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

  <script>
    $(document).ready(function() {
      $("#example").dataTable({
        bPaginate: false,
        bLengthChange: false,
        bFilter: true,
        bInfo: false,
        bAutoWidth: false,
      });
    });
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.js"></script>

  <script>
    function copyText() {
      // Temukan elemen span berdasarkan ID atau selector yang sesuai
      var spanElement = document.getElementById("textToCopy");

      // Buat elemen textarea sementara
      var tempTextArea = document.createElement("textarea");
      tempTextArea.value = spanElement.textContent;

      // Sisipkan elemen textarea ke dalam dokumen
      document.body.appendChild(tempTextArea);

      // Pilih teks di dalam elemen textarea
      tempTextArea.select();

      // Salin teks ke clipboard
      document.execCommand("copy");

      // Hapus elemen textarea yang sementara
      document.body.removeChild(tempTextArea);

      alert("Teks telah disalin!");
    }

    function copyText2() {
      // Temukan elemen span berdasarkan ID atau selector yang sesuai
      var spanElement = document.getElementById("textToCopy2");

      // Buat elemen textarea sementara
      var tempTextArea2 = document.createElement("textarea");
      tempTextArea2.value = spanElement.textContent;

      // Sisipkan elemen textarea ke dalam dokumen
      document.body.appendChild(tempTextArea2);

      // Pilih teks di dalam elemen textarea
      tempTextArea2.select();

      // Salin teks ke clipboard
      document.execCommand("copy");

      // Hapus elemen textarea yang sementara
      document.body.removeChild(tempTextArea2);

      alert("No Hp telah disalin!");
    }
  </script>
  <script>
    simplyCountdown(".simply-countdown", {
      year: 2024, // required
      month: 1, // required
      day: 5, // required
      hours: 13, // Default is 0 [0-23] integer
      words: {
        //words displayed into the countdown
        days: {
          singular: "Hari",
          plural: "Hari"
        },
        hours: {
          singular: "Jam",
          plural: "Jam"
        },
        minutes: {
          singular: "Menit",
          plural: "Menit"
        },
        seconds: {
          singular: "Detik",
          plural: "Detik"
        },
      },
    });
  </script>

  <script>
    const stickyTop = document.querySelector(".sticky-top");
    const offcanvas = document.querySelector(".offcanvas");

    offcanvas.addEventListener("show.bs.offcanvas", function() {
      stickyTop.style.overflow = "visible";
    });

    offcanvas.addEventListener("hidden.bs.offcanvas", function() {
      stickyTop.style.overflow = "hidden";
    });
  </script>

  <script>
    const rootElement = document.querySelector(":root");
    const audioIconWrapper = document.querySelector(".audio-icon-wrapper");
    const audioIcon = document.querySelector(".audio-icon-wrapper i");
    const song = document.querySelector("#song");
    let isPlaying = false;

    function disableScroll() {
      scrollTop = window.pageYOffset || document.documentElement.scrollTop;
      scrollLeft = window.pageXOffset || document.documentElement.scrollLeft;

      window.onscroll = function() {
        window.scrollTo(scrollTop, scrollLeft);
      };

      rootElement.style.scrollBehavior = "auto";
    }

    function enableScroll() {
      window.onscroll = function() {};
      const navbar = document.querySelector(".navbar_bottom");
      navbar.classList.remove("d-none");
      rootElement.style.scrollBehavior = "smooth";
      // localStorage.setItem('opened', 'true');
      playAudio();
    }

    function playAudio() {
      song.volume = 0.1;
      audioIconWrapper.style.display = "flex";
      song.play();
      isPlaying = true;
    }

    audioIconWrapper.onclick = function() {
      if (isPlaying) {
        song.pause();
        audioIcon.classList.remove("bi-disc");
        audioIcon.classList.add("bi-pause-circle");
      } else {
        song.play();
        audioIcon.classList.add("bi-disc");
        audioIcon.classList.remove("bi-pause-circle");
      }

      isPlaying = !isPlaying;
    };

    // if (!localStorage.getItem('opened')) {
    //   disableScroll();
    // }
    disableScroll();
  </script>
  <script>
    window.addEventListener("load", function() {
      const form = document.getElementById("my-form");
      form.addEventListener("submit", function(e) {
        e.preventDefault();
        const data = new FormData(form);
        const action = e.target.action;
        fetch(action, {
          method: "POST",
          body: data,
        }).then(() => {
          alert("Konfirmasi kehadiran berhasil terkirim!");
        });
      });
    });
  </script>
  <script>
    const urlParams = new URLSearchParams(window.location.search);
    const nama = urlParams.get("n") || "";
    const pronoun = urlParams.get("p") || "Bapak/Ibu/Saudara/i";
    const namaContainer = document.querySelector(".hero p span");
    namaContainer.innerText = `${pronoun} ${nama},`.replace(/ ,$/, ",");

    document.querySelector("#nama").value = nama;
  </script>
</body>

</html>