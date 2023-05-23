<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Laundry</title>
    <link rel="stylesheet" href="../bootstrap.css">
  </head>
  <body>
<?php
include "../koneksi.php";

error_reporting(0);

$id = $_GET["id"];
if (isset($_POST["submit"])){
    $nama = $_POST["nama"];
    $nohp = $_POST["nohp"];
    $alamat = $_POST["alamat"];
    $kilo = $_POST["kilo"];
    $jenislaundry = $_POST["jenislaundry"];
    if ($kilo == "") {
        $kilo = "Tak Diisi";
    } else {
      if ($jenislaundry == "Setrika Pakaian" || $jenislaundry == "Cuci-Setrika Pakaian") {
          $kilo = $kilo . " kg";
      } else if ($jenislaundry == "Cuci Karpet") {
        $kilo = $kilo . " m²";
      }
    }
    $query = "UPDATE orderan SET nama = '$nama', `no hp` = '$nohp', alamat = '$alamat', `jenis laundry` = '$jenislaundry', `unit` = '$kilo' WHERE id = '$id'";
    $result = mysqli_query($koneksi, $query);
    header("location: order.php");
}
?>
    <div class="py-5 text-center">
      <h2>Edit Orderan</h2>
    </div>
    <div style="margin-left: 25%;">
      <main>
    
        <div class="row g-5">
          <div class="col-md-7 col-lg-8">
            <form class="needs-validation" method="post">
              <div class="row g-3">
                <div class="col-12">
                  <label for="nama" class="form-label">Nama</label>
                  <input type="text" name="nama" class="form-control" id="nama" required>
                </div>
    
                <div class="col-12">
                  <label for="nohp" class="form-label">No. HP</label>
                  <input type="text" name="nohp" pattern="[0-9]{11,}" class="form-control" id="nohp" required>
                </div>
    
                <div class="col-12">
                  <label for="alamat" class="form-label">Alamat</label>
                  <div class="form-floating">
                    <textarea class="form-control" name="alamat" placeholder="" id="alamat" style="height: 100px"></textarea>
                  </div>
                </div>

                <div class="col-md-9">
                  <label for="jenisLaundry" class="form-label">Jenis Laundry</label>
                  <select class="form-select" name="jenislaundry" id="jenisLaundry" required="">
                    <option value="">Pilih...</option>
                    <option>Setrika Pakaian</option>
                    <option>Cuci Karpet</option>
                    <option>Cuci-Setrika Pakaian</option>
                  </select>
                </div>
    
                <div class="col-md-3">
                  <label for="kilo" class="form-label">Unit</label>
                  <input type="text" name="kilo" class="form-control" id="kilo" placeholder="">
                </div>
              </div>

              <hr class="my-4">
    
              <input class="w-100 btn btn-primary btn-lg" name="submit" type="submit" value="Lanjutkan">
            </form>
          </div>
        </div>
      </main>
    
    </div>
    <footer class="my-5 pt-5 text-body-secondary text-center text-small">
      <p class="mb-1">©2023 Agung Laundry</p>
    </footer>

<?php
if (!isset($_POST["submit"])){
  $query = "SELECT * FROM orderan WHERE id = '$id'";
  $result = mysqli_query($koneksi, $query);
  $row = mysqli_fetch_array($result);
  $nama = $row["nama"];
  $nohp = $row["no hp"];
  $alamat = $row["alamat"];
  $jenis = $row["jenis laundry"];
  $unit = $row["unit"];
  echo "<script>document.getElementById('nama').value = '$nama'</script>";
  echo "<script>document.getElementById('nohp').value = '$nohp'</script>";
  echo "<script>document.getElementById('alamat').value = '$alamat'</script>";
  echo "<script>document.getElementById('jenisLaundry').value = '$jenis'</script>";
  echo "<script>document.getElementById('kilo').value = '$unit'</script>";
}
?>

  </body>
</html>
