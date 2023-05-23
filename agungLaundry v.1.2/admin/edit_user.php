<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="stylesheet" href="../bootstrap.css">
  </head>
  <body>
<?php
include "../koneksi.php";

if (isset($_POST["submit"])){
    $id = $_GET["id"];
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $jenis = $_POST["jenis"];

    $query = "UPDATE pengguna SET nama = '$nama', `email` = '$email', password = '$password', `jenis` = '$jenis' WHERE id = '$id'";
    $result = mysqli_query($koneksi, $query);
    header("location: user.php");
}

var_dump($_POST);
?>
    <div class="py-5 text-center">
      <h2>Edit User</h2>
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
                  <label for="email" class="form-label">Email</label>
                  <input type="email" name="email" class="form-control" id="email" value="" required>
                </div>
    
                <div class="col-12">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="password" value="" required>
                </div>

                <div class="col-md-12">
                  <label for="jenis" class="form-label">Jenis Akun</label>
                  <select class="form-select" name="jenis" id="jenis" required>
                    <option value="">Pilih...</option>
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                  </select>
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
  </body>
</html>

<?php
    if (!isset($_POST["submit"])){
  $query = "SELECT * FROM pengguna WHERE id = '$id'";
  $result = mysqli_query($koneksi, $query);
  $row = mysqli_fetch_array($result);
  $nama = $row["nama"];
  $email = $row["email"];
  $pw = $row["password"];
  $jenis = $row["jenis"];
  echo "<script>document.getElementById('nama').value = '$nama'</script>";
  echo "<script>document.getElementById('email').value = '$email'</script>";
  echo "<script>document.getElementById('password').value = '$pw'</script>";
  echo "<script>document.getElementById('jenis').value = '$jenis'</script>";
}
?>