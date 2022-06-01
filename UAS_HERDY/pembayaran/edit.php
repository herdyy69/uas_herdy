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
            <title>Update</title>
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
            <a class="nav-link disabled" aria-current="page" href="index.php">|</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Admin features
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="../jurusan/index.php">Jurusan</a></li>
            <li><a class="dropdown-item" href="../pendaftaran/index.php">Pendaftaran</a></li>
            <li><a class="dropdown-item" href="../pembayaran/index.php">Pembayaran</a></li>
          </ul>
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
                                    <h3>Update Data</h3>
                                </div>
                                <?php
                                        $pembayaran = new Pembayaran();
                                        foreach($pembayaran->edit($_GET['id']) as $data){
                                            $id  = $data['id'];
                                            $kode_pembayaran = $data['kode_pembayaran'];
                                            $nama = $data['nama'];
                                            $tanggal_pembayaran = $data['tanggal_pembayaran'];
                                            $uang_pendaftaran = $data['uang_pendaftaran'];
                                            $uang_seragam = $data['uang_seragam'];
                                            $uang_kegiatan = $data['uang_kegiatan'];
                                            $id_pendaftaran = $data['id_pendaftaran'];
                                        }
                                    ?>
                                <div class="card-body">
                                <form action="../pembayaran/proses.php" method="post">
                                <input type="hidden" name="aksi" value="update">
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                
                                <div class="col-md-8">
                                <div class="form-group">
                                    <label for="kode_pembayaran">Kode Pembayaran</label>
                                    <input type="text" class="form-control" name="kode_pembayaran" value="<?= $kode_pembayaran?>" id="kode_pembayaran" placeholder="Kode pembayaran">
                                </div>
                                <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <select class="form-control" name="id_pendaftaran" id="id_pendaftaran">
                                                <?php
                                                $pendaftaran = new pendaftaran();
                                                $no = 1;
                                                foreach ($pendaftaran->index() as $data){
                                                ?>
                                                
                                                <option value="<?php echo $data['id'] ?>"><?php echo $data['nama'] ?></option>
                                                
                                                <?php
                                                }
                                                ?>
                                            </select>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal">Tanggal Pembayaran</label>
                                    <input type="date" class="form-control" name="tanggal_pembayaran" id="tanggal_pembayaran" value="<?= $tanggal_pembayaran?>" placeholder="tanggal_pembayaran">
                                </div>
                                <div class="form-group">
                                    <label for="uang_pendaftaran">uang_pendaftaran</label>
                                    <input type="number" class="form-control" name="uang_pendaftaran" id="uang_pendaftaran" value="<?= $uang_pendaftaran?>" placeholder="uang_pendaftaran">
                                </div>
                                <div class="form-group">
                                    <label for="uang_seragam">uang_seragam</label>
                                    <input type="number" class="form-control" name="uang_seragam" id="uang_seragam" value="<?= $uang_seragam?>" placeholder="uang_seragam">
                                </div>
                                <div class="form-group">
                                    <label for="uang_kegiatan">uang_kegiatan</label>
                                    <input type="number" class="form-control" name="uang_kegiatan" id="uang_kegiatan" value="<?= $uang_kegiatan?>" placeholder="uang_kegiatan">
                                </div>
                                <button type="submit" name="save" class="btn btn-primary mt-1">Simpan</button>
                                <a href="index.php" class="btn btn-danger mt-1">Kembali</a>
                            </form>
                                </div>
                            </div>
                        </div>
                    </div>
                
            </div>
    </body>
</html>