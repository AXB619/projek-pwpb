<?php
include "koneksi.php";

$nama = $_GET["nama"];
$query = "INSERT INTO `pelanggan` VALUES (NULL, '$nama', NULL, NULL)";
$result = mysqli_query($koneksi, $query);
?>
