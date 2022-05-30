<?php
    class pendaftaran extends database{
        public function index(){
            $datapendaftaran = mysqli_query($this->koneksi, "SELECT * FROM pendaftaran");
            return $datapendaftaran; 
        }
        public function index_join(){
            $datapendaftaran = mysqli_query($this->koneksi, "SELECT pendaftaran.id,pendaftaran.kode_pendaftaran, pendaftaran.nama, pendaftaran.tanggal_lahir, pendaftaran.tempat_lahir, pendaftaran.jenis_kelamin, pendaftaran.agama, jurusan.jurusan as 'nama_jurusan' FROM jurusan JOIN pendaftaran ON jurusan.id = pendaftaran.id_jurusan");
            return $datapendaftaran; 
        }
        public function show_join($id){
            $datapendaftaran = mysqli_query($this->koneksi, "SELECT pendaftaran.id,pendaftaran.kode_pendaftaran, pendaftaran.nama, pendaftaran.tanggal_lahir, pendaftaran.tempat_lahir, pendaftaran.jenis_kelamin, pendaftaran.agama, jurusan.jurusan as 'nama_jurusan' FROM jurusan JOIN pendaftaran ON jurusan.id = pendaftaran.id_jurusan where pendaftaran.id = '$id'");
            return $datapendaftaran; 
        }
        public function edit($id) {
            $datapendaftaran = mysqli_query($this->koneksi, "SELECT * FROM pendaftaran WHERE id = '$id'");
            return $datapendaftaran;
        }

        public function create($kode_pendaftaran, $nama, $tanggal_lahir, $tempat_lahir, $jenis_kelamin, $agama, $id_jurusan){
            $query = mysqli_query($this->koneksi, "INSERT INTO pendaftaran VALUES(null,'$kode_pendaftaran', '$nama', '$tanggal_lahir', '$tempat_lahir', '$jenis_kelamin', '$agama', '$id_jurusan')");
            return $query;
        }
        public function update($id, $kode_pendaftaran, $nama, $tanggal_lahir, $tempat_lahir, $jenis_kelamin, $agama, $id_jurusan){
            $query = mysqli_query($this->koneksi, "UPDATE pendaftaran SET kode_pendaftaran = '$kode_pendaftaran', nama = '$nama', tanggal_lahir = '$tanggal_lahir', tempat_lahir = '$tempat_lahir', jenis_kelamin = '$jenis_kelamin', agama = '$agama', id_jurusan = '$id_jurusan' WHERE id = '$id'");
            return $query;
        }
        public function delete($id){
            $query = mysqli_query($this->koneksi, "DELETE FROM pendaftaran WHERE id = '$id'");
            return $query;
        }
    }
?>