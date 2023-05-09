<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "agunglaundry";

// membuat koneksi
$conn = mysqli_connect($host, $username, $password, $dbname);

// mengecek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
