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
            <a class="nav-link active" aria-current="page" href="input_data.php">Input Data</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="datamhs.php">Data Mahasiswa</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  </nav>

  <div class="container">
  <form action="Domain/update_data.php" method="POST" enctype="multipart/form-data">
    <div class="row d-flex justify-content-center pt-4 mb-5 login-panel">
    <h3 style = "padding-bottom:30px";>Update Data Mahasiswa</h3>
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="npm" class="form-label">NPM</label>
                    <select class="form-select mb-3" name="npm" id="npm">
                      <?php
                        include('connection.php');
                        $sqlSelect = "SELECT npm FROM mahasiswa";
                        $result = $conn -> query ($sqlSelect);

                        while ($row = mysqli_fetch_array($result)) {
                          unset($npm);
                          $npm = $row['npm'];
                          echo '<option value="'.$npm.'">'.$npm.'</option>';
                        }
                        echo "</select>";
                      ?>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" id="nama">
                </div>
            </div>
            <div class="mb-3">
              <label for="jurusan" class="form-label">Jurusan</label>
              <select class="form-select mb-3" name="jurusan" id="jurusan">
                  <option value="Teknik Informatika">Teknik Informatika</option>
                  <option value="Sistem Informasi">Sistem Informasi</option>
                  </select>
            </div>

            <div class="mb-3">
              <label for="alamat">Alamat</label>
              <textarea class="form-control" placeholder="Alamat Lengkap" name='alamat' id="alamat" style="height: 100px"></textarea>
          </div>
        </div>

        <div class="col-12 mb-3">
            <input class="form-check-input" type="checkbox" value="" name="terms3" id="terms3" onclick = "check()">
            <label class="form-check-label" for="terms" style="color: black;">
            Saya telah yakin bahwa data yang diberikan telah benar
            </label>
          </div>
        
        <button type="submit" class="btn btn-primary" name="update" id="update" style="width: 10rem; text-align: center;" disabled>Update Data</button>
        <br><br><br>
    </form>
    </section>
  </div>

  <footer class="bg-dark text-white text-center pb-5";">
      <br><br><br>
      <p>&copy; 2022 Hagi Azzam Azzikri - 2010631170076 - 4C</p>
      <p>
        <a href=#>Back To Top</a>
      </p>
  </footer>

  <script type="text/javascript">
  function check()
  {
    var check = document.getElementById("terms3");

    if(check.checked){
        document.getElementById("update").disabled = false;
    }
    else{
        document.getElementById("update").disabled = true;
    }
  }
  </script>
    
</body>
</html>