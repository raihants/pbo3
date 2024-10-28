<?php

class Database {
    private $db_host = "localhost";
    private $db_user = "root";
    private $db_pass = "";
    private $db_name = "db_sekolah";    

    public $connection;

    public function __construct() {
        $this->getConnection();
    }

    public function getConnection(){  
        $this->connection = null;
        $this->connection = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
        if($this->connection->connect_error) {
            die("Koneksi Gagal! : " . $this->connection->connect_error);
        } else {
            echo "Koneksi Berhasil";
        }
    }

    public function create($nisn, $nama_lengkap, $alamat){
        $stmt = $this->connection->prepare("INSERT INTO tbl_siswa (nisn, nama_lengkap, alamat) VALUES (?, ?, ?)");
        $stmt->bind_param("iss",$nisn,$nama_lengkap, $alamat);
        if ($stmt->execute()){
            echo "Data Berhasil Disimpan";
        } else {
            echo "Gagal Menambahkan Data: ". $this->connection->error;
        }
        $stmt->close();
    }

    public function read(){
        $query = "SELECT * FROM tbl_siswa"; 
        return $this->connection->query($query);
    }

    public function update($id, $nisn, $nama, $alamat) {
        $query = "UPDATE tbl_siswa SET nisn = ?, nama_lengkap = ?, alamat = ? WHERE id_siswa = ?";
        $stmt = $this->connection->prepare($query);
        $stmt->bind_param("issi", $nisn, $nama, $alamat, $id);
        $stmt->execute();
        $stmt->close();
    }

    public function delete($id) {
        $query = "DELETE FROM tbl_siswa WHERE id_siswa = ?";
        $stmt = $this->connection->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();
    }

    public function getByID($id){
        $query = "SELECT * FROM tbl_siswa WHERE id_siswa = ?";
        $stmt = $this->connection->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }
}