<?php
include "koneksi.php";

$id = $_GET["id"];
$nama = $_GET["nama"];
$query = "UPDATE `pelanggan` SET `nama` = '$nama' WHERE `id` = $id;";
$result = mysqli_query($koneksi, $query);
?>
