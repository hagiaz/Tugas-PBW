<?php
    include('connection.php');
    
    $query = "SELECT krs.id,mahasiswa.nama,matakuliah.nama_mk,matakuliah.jumlah_sks FROM krs
    JOIN mahasiswa ON krs.mahasiswa_npm = mahasiswa.npm JOIN matakuliah
    ON krs.matakuliah_kodemk = matakuliah.kodemk ORDER BY id";

    $run = mysqli_query($conn,$query);
?>