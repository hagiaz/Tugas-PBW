<?php
    include('connection.php');
    
    $query = "SELECT npm,nama,jurusan,alamat FROM mahasiswa";

    $run = mysqli_query($conn,$query);
?>