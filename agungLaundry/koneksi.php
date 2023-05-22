<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "agunglaundry";

// membuat koneksi
$koneksi = mysqli_connect($host, $username, $password, $dbname);

// mengecek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
