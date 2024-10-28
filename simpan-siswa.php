<?php
    include ('config.php');
    $db = new Database();

    $nisn = $_POST['nisn'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $alamat = $_POST['alamat'];

    $db->create($nisn,$nama_lengkap,$alamat);
    header("location: index.php");