<?php
    class jurusan extends database{
        public function index(){
            $datajurusan = mysqli_query($this->koneksi, "SELECT * FROM jurusan");
            return $datajurusan; 
        }
        public function create($kode_jurusan, $jurusan){
            mysqli_query(
                $this->koneksi,
                 "INSERT INTO jurusan VALUES(null,'$kode_jurusan', '$jurusan')"
            );
        }
        public function update($id, $kode_jurusan, $jurusan){
            mysqli_query(
                $this->koneksi,
                 "UPDATE jurusan SET kode_jurusan = '$kode_jurusan', jurusan = '$jurusan' WHERE id = '$id'"
            );
        }
        public function edit($id){
            $datamahasiswa = mysqli_query($this->koneksi, "SELECT * FROM jurusan WHERE id = '$id'");
            return $datamahasiswa;
        }
        
        public function show_join($id){
            $datamahasiswa = mysqli_query($this->koneksi, "SELECT  jurusan.id, jurusan.nama FROM jurusan WHERE jurusan.id = '$id'");
            return $datamahasiswa;
        }
        public function delete($id){
            mysqli_query($this->koneksi, "DELETE FROM jurusan WHERE id = '$id'");
        }
    }

?>