<?php
$host = 'localhost';
$user = 'root';
$pass = 'firman';
$db = 'nation';
//buat query koneksi ke database
$koneksi = mysqli_connect($host, $user, $pass, $db);
//Cek kondisi apakah sudah benar atau belum
// if ($koneksi) {
//     echo "Koneksi Ke Database Berhasil";
// } else {
//     echo "Koneksi Ke Database Gagal";
// }
