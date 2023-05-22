<?php
if ($_SESSION['navbar']); 

?>
<link rel="stylesheet" href="bootstrap.css">
<div class="container">
      <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
          <svg class="bi me-2" width="40" height="32">
            <use xlink:href="#bootstrap">
            </use>
          </svg>
          <span class="fs-4">Agung Laundry
          </span>
        </a>
        <ul class="nav nav-pills">
          <li class="nav-item">
            <a href="#" class="nav-link active" id="1" onclick="aktivasiBar(1)" aria-current="page">Home
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link" id="2" onclick="aktivasiBar(2)">Layanan
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link" id="3" onclick="aktivasiBar(3)">Kontak kami
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link" id="4" onclick="aktivasiBar(4)">FAQ
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link" id="5" onclick="aktivasiBar(5)">Logout
            </a>
          </li>
        </ul>
      </header>
    </div>
    <script>
      function aktivasiBar(opsi){
        for (var i = 1; i <= 5; i++) {}
          if (i == opsi) {
            document.getElementById(String(i)).classList.add('active');
          }
          else {
            document.getElementById(String(i)).classList.remove('active');
          }
        }
      }
    </script>
<?php 

?>