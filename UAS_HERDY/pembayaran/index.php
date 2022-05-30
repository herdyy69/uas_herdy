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
                }
                
            </style>
            <title>Beranda</title>
        </head>
        <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container">
            <a class="navbar-brand" href="index.php">SMK ASSALAAM</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Jurusan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Pendaftaran</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Pembayaran</a>
        </li>
        </ul>
    </div>
  </div>
</nav>
            <div class="container-fluid mt-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3>Data Jurusan</h3>
                                </div>
                                <div class="card-body">
                                    <a href="create.php" class="btn btn-primary mb-2">Tambah Data</a>
                                    <br>
                                    <table class="table table-bordered text-center">
                        <thead>
                            <th>NO</th>
                            <th>Kode Pembayaran</th>
                            <th>Nama</th>
                            <th>Tanggal Pembayaran</th>
                            <th>Uang Pendaftaran</th>
                            <th>Uang Seragam</th>
                            <th>Uang Kegiatan</th>
                            <th>Total Pembayaran</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            <?php $i = 1; 
                            $pembayaran = new Pembayaran();
                            foreach ($pembayaran->index_join() as $data) { 
                            ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $data['kode_pembayaran']; ?></td>
                                <td><?= $data['nama']; ?></td>
                                <td><?= $data['tanggal_pembayaran']; ?></td>
                                <td><?= $data['uang_pendaftaran']; ?></td>
                                <td><?= $data['uang_seragam']; ?></td>
                                <td><?= $data['uang_kegiatan']; ?></td>
                                <td><?= $data['total_pembayaran']; ?></td>
                                <td>
                                        <form action="proses.php" method="post">
                                        <a href="show.php?id=<?= $data['id']; ?>" class="btn btn-primary">Show </a> |
                                        <a href="edit.php?id=<?= $data['id']; ?>" class="btn btn-warning">Edit</a> |
                                        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                                        <input type="hidden" name="aksi" value="delete">
                                        <button type="submit" class="btn btn-danger" name="save" onclick="return confirm('Apakah Anda Yakin Mau menghapus data ini ?')">
                                            Delete
                                        </button>
                                        </form>
                                    </td>
                            </tr>
                            <?php } ?>

                            

                            
                        </tbody>
                    </table>
                                </div>
                            </div>
                        </div>
                        
                    </div>
            </div>
    </body>
</html>