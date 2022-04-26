<?php
    include('connection.php');

    $kode_buku = isset($_POST["kode_buku"])? $_POST["kode_buku"] : "";
    $judul_buku = isset($_POST["judul_buku"])? $_POST["judul_buku"] : "";
    $penerbit_buku = isset($_POST["penerbit_buku"])? $_POST["penerbit_buku"] : "";
    $stok = isset($_POST["stok"])? $_POST["stok"] : "";

    $sql = "INSERT INTO buku VALUES ('".$kode_buku."','".$judul_buku."','".$penerbit_buku."','".$stok."');";

    $query = mysqli_query($conn, $sql);

    if($query){
        $msg = "Tambah Data Buku dengan judul ".$judul_buku." Berhasil";
    }
    else{
        $msg = "Tambah Data gagal";
    }

    $response = array(
        'status' => "OK",
        'msg' => $msg
    );

    echo json_encode($response,JSON_PRETTY_PRINT);
?>