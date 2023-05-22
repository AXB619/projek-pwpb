<?php 
include "../koneksi.php";

if (isset($_GET['id'])){
	$id = $_GET['id'];
    $asal = $_GET['asal'];
    $tabel = $_GET['tbl'];

	$query = "DELETE FROM $tabel WHERE id = '$id'";
	$result = mysqli_query($koneksi, $query);
    var_dump($query);
	if ($result){
		echo "PENGHAPUSAN BERHASIL";
        mysqli_error($koneksi);
	}
	else {
		echo "Kesalahan tak terduga terjadi!";
        mysqli_error($koneksi);
	}
    header("location: $asal");
}
?>