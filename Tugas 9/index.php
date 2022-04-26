<?php
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="Assets/icon.png"/>
    <title>Daftar Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet"/>
    <link rel ="stylesheet" href="style.css"/>

</head>

<body>
  <script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <section id="awal">
      <div class="container" style="margin-top: 60px;">
          <div class="row text-center mb-1">
              <h2 class="judul">Daftar Buku</h2>
          </div>
      </div>
  </section>

  <section id="table" style="background-color: #4b4e50; padding-bottom: 5px;">
    <br><br>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Kode</th>
            <th scope="col">Judul</th>
            <th scope="col">Penerbit</th>
            <th scope="col">Stok</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $sql = "SELECT kode_buku, judul_buku, penerbit_buku, stok FROM buku";
                $query = mysqli_query($conn,$sql);
                $data = mysqli_fetch_array($query);
            ?>
            <?php foreach ($query as $row) : ?>
                <tr>
                <td><?= $row['kode_buku']; ?></td>
                <td><?= $row['judul_buku']; ?></td>
                <td><?= $row['penerbit_buku']; ?></td>
                <td><?= $row['stok']; ?></td>
                <td><a href="deletedata.php?kode_buku=<?php echo $row["kode_buku"]; ?>">Delete</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
  </section>
  
  <br><br><br>

  <footer class="bg-dark text-white text-center pb-5";">
      <br><br><br>
      <p>&copy; 2022 Hagi Azzam Azzikri - 2010631170076 - 4C</p>
      <p>
        <a href=#>Back To Top</a>
      </p>
  </footer>

</body>
</html>