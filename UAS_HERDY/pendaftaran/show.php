<?php 
    include '../koneksi.php';
?>
<!doctype html>
        <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
            <link href="https://fonts.googleapis.com/css2?family=Fredoka&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400&display=swap" rel="stylesheet" />
            <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400&family=Rowdies:wght@300&display=swap" rel="stylesheet" />
            <script src="https://kit.fontawesome.com/a81368914c.js"></script>
            <style>
                body {
                    font-family: 'Fredoka', cursive;
                    background-image: url("../asset/bg.jpg");
                    background-size: cover;
                    background-repeat: no-repeat;
                    background-attachment: fixed;
                }
                .card{
                    margin-top: 1rem;
                    margin-bottom: 1rem;
                    border-radius: 1rem;
                    /* backround transparan */
                    background-color: rgba(0, 0, 0, 0.5);
                }
                thead, tbody, tr, td, th{
                    background-color: rgba(0, 0, 0, 0.5);
                    color: white;
                }
                h3{
                    font-family: 'Oswald', sans-serif;
                    font-weight: 400;
                    font-size: 2rem;
                    color: white;
                    margin-top: 0.5rem;
                }
                label{
                    font-weight: 400;
                    color: white;
                }
                
            </style>
            <title>Show</title>
        </head>
        <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container">
            <a class="navbar-brand" href="../index.php">SMK ASSALAAM</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../jurusan/index.php">Jurusan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../pendaftaran/index.php">Pendaftaran</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../pembayaran/index.php">Pembayaran</a>
        </li>
        </ul>
    </div>
  </div>
</nav>
            <div class="container-fluid mt-3">

                    <div class="row">
                        <div class="col-md-8">
                    <div class="card">
                                <div class="card-header">
                                    <h3>Lihat Data</h3>
                                </div>
                                <?php
                                    $pendaftaran = new Pendaftaran();
                                    foreach ($pendaftaran->show_join($_GET['id']) as $data) {
                                        $id = $data['id'];
                                        $kode_pendaftaran = $data['kode_pendaftaran'];
                                        $nama = $data['nama'];
                                        $tanggal_lahir = $data['tanggal_lahir'];
                                        $tempat_lahir = $data['tempat_lahir'];
                                        $jenis_kelamin = $data['jenis_kelamin'];
                                        $agama = $data['agama'];
                                        $nama_jurusan = $data['nama_jurusan'];
                                    }
                                ?>
                                <div class="card-body">
                                        <div class="form-group">
                                            <label for="kode_pendaftaran">Kode Pendaftaran</label>
                                            <input type="text" name="kode_pendaftaran" id="kode_pendaftaran" class="form-control" value="<?php echo $kode_pendaftaran; ?>" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input type="text" name="nama" id="nama" class="form-control" value="<?php echo $nama; ?>" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="tanggal_lahir">Tanggal Lahir</label>
                                            <input type="text" name="tanggal_lahir" id="tanggal_lahir" class="form-control" value="<?php echo $tanggal_lahir; ?>" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="tempat_lahir">Tempat Lahir</label>
                                            <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" value="<?php echo $tempat_lahir; ?>" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="jenis_kelamin">Jenis Kelamin</label>
                                            <input type="text" name="jenis_kelamin" id="jenis_kelamin" class="form-control" value="<?php echo $jenis_kelamin; ?>" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="agama">Agama</label>
                                            <input type="text" name="agama" id="agama" class="form-control" value="<?php echo $agama; ?>" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="jurusan">Jurusan</label>
                                            <input type="text" name="jurusan" id="jurusan" class="form-control" value="<?php echo $nama_jurusan; ?>" disabled>
                                        </div>
                                        <a href="index.php" class="btn btn-danger mt-1">Kembali</a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
    </body>
</html>