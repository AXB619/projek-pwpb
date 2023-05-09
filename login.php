<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>

<?php 
include 'koneksi.php';

if (isset($_POST["email"]) && isset($_POST["password"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $sql = "SELECT * FROM pengguna WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    if (!$row) {
        echo "<script>gagalLogin();</script>";
    }
    else if ($row["jenis"] == "admin") {
        header("Location: hal_admin.php");
    }
    else if ($row["jenis"] == "user") {
        header("Location: hal_user.php");
    }
}
?>

<!-- GAGAL LOGIN -->
<div class="modal modal-dialog modal-sheet position-static d-block bg-body-secondary p-4 py-md-5" id="gagal-login" role="document">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-header border-bottom-0">
        <h1 class="modal-title fs-5">Gagal Login</h1>
        <button type="button" onclick="gagalLogin()" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body py-0">
        <p>Terjadi kesalahan! Email atau password yang anda masukan tidak terdaftar</p>
      </div>
    </div>
  </div>

<!-- LOGIN FORM -->
<div class="modal modal-sheet position-static d-block bg-body-secondary p-4 py-md-5" tabindex="-1" role="dialog" id="modalSignin">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-header p-5 pb-4 border-bottom-0">
        <h1 class="fw-bold mb-0 fs-2">Login</h1>
      </div>

      <div class="modal-body p-5 pt-0">
        <form class="" method="post">
        <div class="form-floating mb-3">
            <input type="email" name="email" class="form-control rounded-3" id="floatingInput" placeholder=" " required>
            <label for="floatingInput">Email</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" name="password" class="form-control rounded-3" id="floatingPassword" placeholder=" " required>
            <label for="floatingPassword">Password</label>
          </div>
          <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Login</button>
          <small class="text-body-secondary">Belum punya akun? <a href="daftar.php" data-bs-toggle="modal" data-bs-target="#modalSignup">Daftar</a></small>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
var gagalMsg = document.getElementById("gagal-login");

function gagalLogin() {
    gagalMsg.classList.toggle("d-none");
}
</script>

</body>
</html>