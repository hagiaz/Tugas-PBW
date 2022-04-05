<?php include ('Domain/getdatamhs.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="style.css" rel='stylesheet'>
    <title>Sistem Informasi Akademik</title>
  </head>
  
  <body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <section id="awal">
  <nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" >Sistem Informasi Akademik</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Navigation</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body bg-dark">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="inputdata.php">Input Data</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="datamhs.php">Data Mahasiswa</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  </nav>

</div>
</section>

<section class="tampil-data" id="tabel">
<div class="container tampil-data">
<br><br><br>
    <h2 style="text-align:center;font-weight:bolder;">DATA MAHASISWA</h2>
    <div class="row">
        <div class="col-12">
            <table class="table table-striped" id='table-data'>
                <thead>
                    <tr>
                        <th scope="col">NPM</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while ($row = mysqli_fetch_assoc($run)){
                            echo '<tr>
                            <td>' . $row['npm'] . '</td>
                            <td>' . $row['nama'] . '</td>
                            <td>' . $row['jurusan'] . '</td>
                            <td>' . $row['alamat'] . '</td>
                            </tr>';
                        }
                    ?>
                </tbody>
            </table>
            <button class="btn btn-primary" onclick="window.location.href='deletedata.php'" style="width: 10rem; text-align: center;"> Hapus Data </button>
            <button class="btn btn-primary" onclick="window.location.href='updatedata.php'" style="width: 10rem; text-align: center;"> Update Data </button>
        </div>
    </div>
</div>

</section>

<footer class="bg-dark text-white text-center pb-5">
      <br><br><br>
      <p>&copy; 2022 Hagi Azzam Azzikri - 2010631170076 - 4C</p>
      <p>
        <a href=#>Back To Top</a>
      </p>
</footer>

</body>
</html>