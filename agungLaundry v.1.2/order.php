<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Laundry</title>
    <link rel="stylesheet" href="bootstrap.css">
  </head>
  <body>

<?php
include "koneksi.php";

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $nohp = $_POST['nohp'];
    $alamat = $_POST['alamat'];
    $kilo = $_POST["kilo"];
    $jenislaundry = $_POST['jenislaundry'];
    if ($kilo == "") {
        $kilo = "Tak Diisi";
    } else {
      if ($jenislaundry == "Setrika Pakaian" || $jenislaundry == "Cuci-Setrika Pakaian") {
          $kilo = $kilo . " kg";
      } else if ($jenislaundry == "Cuci Karpet") {
        $kilo = $kilo . " m²";
      }
    }
    $query = "INSERT INTO orderan (nama, `no hp`, alamat, `jenis laundry`, `unit`) VALUES ('$nama', '$nohp', '$alamat', '$jenislaundry', '$kilo');";
    $result = mysqli_query($koneksi, $query);
    if ($result) {
        $pesan = "Assalamualaikum...abi $nama, bade ngalaundry ti $alamat";
        // header("Location: https://wa.me/6285797827754?text=$pesan");
    } else {
        echo "Maaf! Kesalahan tak terduga telah terjadi.";
    }
  }
?>

    <div class="container">
      <main>
        <div class="py-5 text-center">
          <h2>Formulir Laundry</h2>
          <p class="lead">Silahkan isi formulir laundry di bawah ini.</p>
        </div>
    
        <div class="row g-5">
          <div class="col-md-5 col-lg-4 order-md-last">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
              <span class="text-primary">List Harga</span>
            </h4>
            <ul class="list-group mb-3">
              <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                  <h6 class="my-0">Setrika Pakaian</h6>
                </div>
                <span class="text-body-secondary">5.000 Rp/kg</span>
              </li>
              <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                  <h6 class="my-0">Cuci & Setrika Pakaian</h6>
                </div>
                <span class="text-body-secondary">6.000 Rp/kg</span>
              </li>
              <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                  <h6 class="my-0">Cuci Karpet</h6>
                </div>
                <span class="text-body-secondary">7.000 Rp/m²</span>
              </li>
              <!-- <li class="list-group-item d-flex justify-content-between">
                <b>Total (Rp)</b>
                <strong id="total">$20</strong>
              </li> -->
            </ul>
    

          </div>
          <div class="col-md-7 col-lg-8">
            <h4 class="mb-3">Pemesanan</h4>
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
                  <label for="kilo" class="form-label">Kilo/Meter (Opsional)</label>
                  <input type="text" name="kilo" class="form-control" id="kilo" placeholder="">
                </div>
              </div>

              <hr class="my-4">
    
              <input class="w-100 btn btn-primary btn-lg" name="submit" type="submit" value="Lanjutkan">
            </form>
          </div>
        </div>
      </main>
    
      <footer class="my-5 pt-5 text-body-secondary text-center text-small">
        <p class="mb-1">©2023 Agung Laundry</p>
      </footer>
    </div>
  </body>
</html>
