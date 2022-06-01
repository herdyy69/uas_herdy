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
                    background-color: rgba(0, 0, 0, 0.5);
                    color: white;
                }
                h3 {
                    font-family: 'Oswald', sans-serif;
                    margin-top: 0.5rem;
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
                <?php
                $jurusan = new jurusan();
                foreach ($jurusan->edit($_GET['id']) as $data) {
                    $id = $data['id'];
                    $kode_jurusan = $data['kode_jurusan'];
                    $jurusan = $data['jurusan'];
                }
                ?>
            <div class="container-fluid mt-3">
                    <div class="row">
                        <div class="col-md-12">
                    <div class="card">
                                <div class="card-header">
                                    <h3>Update Data</h3>
                                </div>
                                <div class="card-body">
                                <form action="../jurusan/proses.php" method="post">
                                <input type="hidden" name="aksi" value="update">
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <div class="row">
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label for="kode_jurusan">Kode Jurusan</label>
                                    <input type="text" class="form-control" id="kode_jurusan" name="kode_jurusan" value="<?php echo $data['kode_jurusan']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="jurusan">Jurusan</label>
                                    <input type="text" class="form-control" id="jurusan" name="jurusan" value="<?php echo $data['jurusan']; ?>">
                                </div>
                                <button type="submit" name="save" class="btn btn-primary mt-1">Simpan</button>
                                <a href="index.php" class="btn btn-danger mt-1">Kembali</a>
                            </form>
                                </div>
                                <div class="col-md-4">
                                    <img src="../ASSET/logo.png" alt="" width="45%" class="text-end">
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                
            </div>
    </body>
</html>