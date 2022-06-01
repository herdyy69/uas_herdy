<?php 

?>
<!doctype html>
        <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- CSS only -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
            <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
            <link href="https://fonts.googleapis.com/css2?family=Fredoka&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400&display=swap" rel="stylesheet" />
            <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400&family=Rowdies:wght@300&display=swap" rel="stylesheet" />
            <script src="https://kit.fontawesome.com/a81368914c.js"></script>

            <link href="https://fonts.googleapis.com/css2?family=Fredoka&family=Oswald:wght@600&display=swap" rel="stylesheet">
            <style>
                body {
                    font-family: 'Fredoka', cursive;
                    background-image: url("asset/bg.jpg");
                    background-size: cover;
                    background-repeat: no-repeat;
                    background-attachment: fixed;
                }
                .card {
                    margin-top: 1rem;
                    margin-bottom: 1rem;
                    border-radius: 0;
                    border-radius: 8%;
                }
                
                .jumbotron{
                    /* background-color: rgba(0,0,0,0.5); */
                    color: white;
                    font-family: 'Fredoka', sans-serif;
                    font-size: 30px;
                    font-weight: bold;
                    text-align: center;
                    padding: 20px;
                    margin-bottom: 2rem;
                    /* border radius */
                    border-radius: 1%;
                }
                .card-img-top {
                    border-radius: 9%;
                }
                img {
                    border-radius: 1rem;
                }
                h5 {
                    color: black;
                }
                p {
                    color: white;
                    text-shadow: 1px 1px 1px black;
                }
                /* assalaam hover */
                .assalaam:hover {
                    color: #0F75BC;
                    /* transisi */
                    transition: 0.5s;
                    /* stroke */
                    text-shadow: 1px 1px 1px black;
                }
                .judul:hover {
                    color: #FFF200;
                    /* transisi */
                    transition: 0.5s;
                    /* stroke */
                    text-shadow: 1px 1px 1px black;
                }
                
            </style>
            <title>Beranda</title>
        </head>
        <body>

            <style>
                .dropdown-menu {
                    background-color: #0D6EFD;
                }
                .dropdown-item {
                    color: white;
                }
            </style>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container">
            <a class="navbar-brand" href="index.php">SMK ASSALAAM</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" aria-current="page" href="index.php">|</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Admin features
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="jurusan/index.php">Jurusan</a></li>
            <li><a class="dropdown-item" href="pendaftaran/index.php">Pendaftaran</a></li>
            <li><a class="dropdown-item" href="pembayaran/index.php">Pembayaran</a></li>
          </ul>
        </li>
        </ul>
    </div>
  </div>
</nav>
            <div class="container-fluid">
                <!-- row start 1 -->
                <div class="row">
                    <!-- col start 1 -->
                    <div class="col-md-12 text-center mt-4">
                        <div class="jumbotron bg-secondary p-2 bg-opacity-70 shadow-lg" >
                            <h1 class="display-5">Selamat Datang di Situs <br> <span class="display-3"> Resmi <span class="assalaam">SMK ASSALAAM</span></span></h1>
                            <hr>
                            <p class="lead fs-6">Industries Education Based || Sekolah Teaching Factory || Terakreditasi A</p>
                            <hr class="my-4">
                            <div class="row">
                                <div class="col-md-6">
                                    <img class="img-fluid" src="asset/bg1.jpg" alt="">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <h1 class="judul text-header text-start" style="font-family: 'Oswald', sans-serif;">Profil</h1>
                                    <hr>
                                    <p class="fs-6 text-start">
                                    SMK Assalaam merupakan sekolah kejuruan dengan kompetensi keahlian teknik kendaraan ringan (roda empat) plus sepeda motor dalam proses <br>
                                    pendidikan pelatihan. Peka terhadap perubahan perkembangan teknologi baru dan tuntutan kebutuhan pasar kerja, agar lulusannya siap menghadapi perubahan.
                                    </p>
                                    <p class="fs-6 text-start">
                                    SMK Assalaam dengan penuh kesadaran berani melakukan perubahan dengan berbagai inovasi dan improvisasi, mencari terobosan untuk meraih keberhasilan bagi peserta didiknya.
                                    </p>
                                    <p class="fs-6 text-start">
                                    Tekad tersebut sebagai wujud nyata dari SMK Assalaam didukung oleh sarana praktek yang lengkap UP TO DATE, waktu praktek memadai dan praktek berstandar industri dengan pelayanan prima.
                                    </p>
                                    <hr>
                                </div>
                            </div>
                            <br>
                            <hr>
                            <h1 class="judul">JURUSAN TERBAIK</h1>
                            <hr>
                        <div class="row" style="margin-top: 1rem;">
                            <div class="col-md-4">
                                <div class="card bg-secondary p-2 bg-opacity-75 shadow-sm" style="width: 100%;">
                                <img src="asset/tsm1.jpeg" class="card-img-top img-fluid" alt="...">
                                <div class="card-body">
                                    <hr>
                                    <a href="#" class="btn btn-primary">TEKNIK SEPEDA MOTOR</a>
                                    <hr>
                                </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card bg-secondary p-2 bg-opacity-75 shadow-sm" style="width: 100%;">
                                <img src="asset/rpl.jpeg" class="card-img-top img-fluid" alt="...">
                                <div class="card-body">
                                    <hr>
                                    <a href="#" class="btn btn-primary">REKAYASA PERANGKAT LUNAK</a>
                                    <hr>
                                </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card bg-secondary p-2 bg-opacity-75 shadow-sm" style="width: 100%;">
                                <img src="asset/tkr.jpeg" class="card-img-top img-fluid" alt="...">
                                <div class="card-body">
                                    <hr>
                                    <a href="#" class="btn btn-primary">TEKNIK KENDARAAN RINGAN</a>
                                    <hr>
                                </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <!-- col end 1 -->
                </div>
                <!-- row end 1 -->
            </div>

    </body>
</html>