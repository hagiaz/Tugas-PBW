<?php
include('../connection.php');

if (isset($_POST['update'])) {

    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];

    $query = mysqli_query($conn, "UPDATE mahasiswa SET nama = '$nama', jurusan = '$jurusan', alamat = '$alamat' WHERE npm = '$npm'");

    header("Location:../datamhs.php?");
}
?>