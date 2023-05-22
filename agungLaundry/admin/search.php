<?php
include "koneksi.php";

$keyword = $_GET["keyword"];
$query = "SELECT * FROM pelanggan WHERE nama LIKE '%$keyword%'";
$result = mysqli_query($koneksi, $query);

while ($row = mysqli_fetch_assoc($result)) {
	echo $row["id"] . "<br>";
}
?>