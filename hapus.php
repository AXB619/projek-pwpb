<?php 
include "koneksi.php";

if (isset($_GET['id'])){
	$cingong = $_GET['id'];
	$query = "DELETE FROM pelanggan WHERE id = '$cingong'";
	$result = mysqli_query($koneksi, $query);
	if ($result){
		echo "PENGHAPUSAN BERHASIL";
	}
	else {
		echo "Kesalahan tak terduga terjadi!";
	}
}
?>