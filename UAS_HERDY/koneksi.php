<?php
    class database{
        public  $host = "localhost" , $user = "root" ,  $pass = "" , $db = "uas_rpl2";
        public $koneksi;
        
        public function __construct(){
            $this->koneksi = mysqli_connect(
                $this->host,
                $this->user,
                $this->pass,
                $this->db
            );
            if($this->koneksi){
                // echo "Koneksi Berhasil";
            }
            else {
                echo "Koneksi Gagal";
            }
        }
    }
    $koneksi = new database();
    include 'jurusan_method.php';
    include 'pendaftaran_method.php';
    include 'pembayaran_method.php';
?>