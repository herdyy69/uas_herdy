<?php
    class pembayaran extends database{
        public function index(){
            $datapembayaran = mysqli_query($this->koneksi, "SELECT * FROM pembayaran");
            return $datapembayaran; 
        }
        public function index_join(){
            $datapembayaran = mysqli_query($this->koneksi, "SELECT pembayaran.id,pembayaran.kode_pembayaran, pembayaran.tanggal_pembayaran, pembayaran.tanggal_pembayaran, pembayaran.uang_pendaftaran, pembayaran.uang_seragam, pembayaran.uang_kegiatan, pembayaran.total_pembayaran, pembayaran.id_pendaftaran, pendaftaran.nama, pendaftaran.kode_pendaftaran FROM pendaftaran JOIN pembayaran ON pendaftaran.id = pembayaran.id_pendaftaran");
            return $datapembayaran; 
        }
        public function show_join($id){
            $datapembayaran = mysqli_query($this->koneksi, "SELECT pembayaran.id,pembayaran.kode_pembayaran, pembayaran.tanggal_pembayaran, pembayaran.tanggal_pembayaran, pembayaran.uang_pendaftaran, pembayaran.uang_seragam, pembayaran.uang_kegiatan, pembayaran.total_pembayaran, pembayaran.id_pendaftaran, pendaftaran.nama, pendaftaran.kode_pendaftaran FROM pendaftaran JOIN pembayaran ON pendaftaran.id = pembayaran.id_pendaftaran where pembayaran.id = '$id'");
            return $datapembayaran; 
        }

        public function edit($id) {
            $datapembayaran = mysqli_query($this->koneksi, "SELECT * FROM pembayaran WHERE id = '$id'");
            return $datapembayaran;
        }
        public function create($kode_pembayaran, $nama, $tanggal_pembayaran, $uang_pendaftaran, $uang_seragam, $uang_kegiatan, $total_pembayaran, $id_pendaftaran){
            $query = mysqli_query($this->koneksi, "INSERT INTO pembayaran VALUES(null,'$kode_pembayaran', '$nama', '$tanggal_pembayaran', '$uang_pendaftaran', '$uang_seragam', '$uang_kegiatan', '$total_pembayaran', '$id_pendaftaran')");
            return $query;
        }
        public function update($id, $kode_pembayaran, $nama, $tanggal_pembayaran, $uang_pendaftaran, $uang_seragam, $uang_kegiatan, $total_pembayaran, $id_pendaftaran){
            $query = mysqli_query($this->koneksi, "UPDATE pembayaran SET kode_pembayaran = '$kode_pembayaran', nama = '$nama', tanggal_pembayaran = '$tanggal_pembayaran', uang_pendaftaran = '$uang_pendaftaran', uang_seragam = '$uang_seragam', uang_kegiatan = '$uang_kegiatan', total_pembayaran = '$total_pembayaran', id_pendaftaran = '$id_pendaftaran' WHERE id = '$id'");
            return $query;
        }
        public function delete($id){
            $query = mysqli_query($this->koneksi, "DELETE FROM pembayaran WHERE id = '$id'");
            return $query;
        }
    }

?>