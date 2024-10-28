<?php
//include koneksi database
include('config.php');
$db = new Database();
//get data dari form
$id_siswa     = $_POST['id_siswa'];
$nisn         = $_POST['nisn'];
$nama_lengkap = $_POST['nama_lengkap'];
$alamat       = $_POST['alamat'];

//query update data ke dalam database berdasarkan ID

$db->update($id_siswa, $nisn, $nama_lengkap,$alamat);
header('Location: index.php');


