<?php
include('../connection.php');

if (isset($_POST['register'])) {

    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];
    $matkul = $_POST['mk'];

    $query = mysqli_query($conn, "INSERT into mahasiswa (npm,nama,jurusan,alamat) VALUES ('$npm','$nama','$jurusan','$alamat')");
    $query2 = mysqli_query($conn, "INSERT into krs (id,mahasiswa_npm,matakuliah_kodemk) VALUES ('','$npm','$matkul')");
    $message = "Input Data Berhasil";
    $message = urlencode($message);
    header("Location:../index.php?message={$message}");
}
?>