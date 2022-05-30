<?php
    include '../koneksi.php';
    $jurusanx = new jurusan();
    if(isset($_POST['save'])){
        $aksi = $_POST['aksi'];
        $id  = @$_POST['id'];
        $kode_jurusan = $_POST['kode_jurusan'];
        $jurusan = $_POST['jurusan'];

        if ($aksi == "create"){
            $jurusanx->create($kode_jurusan, $jurusan);
            header("location:index.php");
        }
        elseif ($aksi == "update"){
            $jurusanx->update($id, $kode_jurusan, $jurusan);
            header("location:index.php");
        }
        else if ($aksi == "delete"){
            $jurusanx->delete($id);
            header("location:index.php");
        }
    }
?>