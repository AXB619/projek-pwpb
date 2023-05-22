<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../bootstrap.css">
</head>
<body>
<body>

<?php
include "../koneksi.php";

$query = "SELECT * FROM orderan";
$result = mysqli_query($koneksi, $query);
$totalOrder = $result->num_rows;

$query = "SELECT DISTINCT nama FROM orderan";
$result = mysqli_query($koneksi, $query);
$totalPelanggan = $result->num_rows;

$query = "SELECT * FROM orderan WHERE DATE_FORMAT(waktu, '%m') = DATE_FORMAT(NOW(), '%m')";
$result = mysqli_query($koneksi, $query);
$orderBulan = $result->num_rows;
$nomor = 1;
?>

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Agung Laundry</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100 rounded-0 border-0" disabled type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="../logout.php">Log out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home align-text-bottom" aria-hidden="true"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="order.php">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file align-text-bottom" aria-hidden="true"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
              Orders
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="user.php">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users align-text-bottom" aria-hidden="true"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
              Users
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pelanggan.php">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user align-text-bottom" aria-hidden="true"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
              Pelanggan
            </a>
          </li>
        </ul>

      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary" onclick="print()">Report</button>
          </div>
        </div>
      </div>

  <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card text-bg-primary mb-5 mx-4" style="max-width: 18rem;">
      <div class="card-header center">Total order</div>
      <div class="card-body">
        <h1 class="card-title" align="center"><?php echo $totalOrder; ?></h1>
      </div>
    </div>
  </div>
    <div class="card text-bg-success mb-5 mx-4" style="max-width: 18rem;">
      <div class="card-header">Pelanggan</div>
      <div class="card-body">
        <h1 class="card-title" align="center"><?php echo $totalPelanggan; ?></h1>
      </div>
    </div>
    <div class="card text-bg-danger mb-5 mx-4" style="max-width: 18rem;">
      <div class="card-header">Order bulan ini</div>
      <div class="card-body">
        <h1 class="card-title" align="center"><?php echo $orderBulan; ?></h1>
      </div>
    </div>
</div>

      <h2>Order bulan ini</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Nama</th>
              <th scope="col">No. HP</th>
              <th scope="col">Alamat</th>
              <th scope="col">Laundry</th>
              <th scope="col">Unit</th>
              <th scope="col">Waktu</th>
            </tr>
          </thead>
          <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
              <td><?php echo $nomor ?></td>
              <td><?php echo $row["nama"] ?></td>
              <td><?php echo $row["no hp"] ?></td>
              <td><?php echo $row["alamat"] ?></td>
              <td><?php echo $row["jenis laundry"] ?></td>
              <td><?php echo $row["unit"] ?></td>
              <td><?php echo $row["waktu"] ?></td>
            </tr>
            <?php
          $nomor += 1;
          };
          ?>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>
</body>
</body>
</html>