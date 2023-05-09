<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
<?php 
include 'koneksi.php';

?>
<div class="modal modal-sheet position-static d-block bg-body-secondary p-4 py-md-5" tabindex="-1" role="dialog" id="modalSignin">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-header p-5 pb-4 border-bottom-0">
        <h1 class="fw-bold mb-0 fs-2">Daftar</h1>
      </div>

      <div class="modal-body p-5 pt-0">
        <form method="post" action="daftar.php" class="">
        <div class="form-floating mb-3">
            <input type="text" name="nama" class="form-control rounded-3" id="floatingInput" placeholder=" ">
            <label for="floatingInput">Nama</label>
          </div>
          <div class="form-floating mb-3">
            <input type="email" name="email" class="form-control rounded-3" id="floatingInput" placeholder=" " required>
            <label for="floatingInput">Email</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" name="password" class="form-control rounded-3" id="floatingPassword" placeholder=" " required>
            <label for="floatingPassword">Password</label>
          </div>
          <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Daftar</button>
          <small class="text-body-secondary">Sudah punya akun?
            <a href="login.php" data-bs-toggle="modal" data-bs-target="#modalSignup">Login</a></small>
        </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>