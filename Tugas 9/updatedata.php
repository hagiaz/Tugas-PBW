<?php
    include('connection.php');

    $kode_buku = $_GET["kode_buku"];
    $judul_buku = $_GET["judul_buku"];
    $penerbit_buku = $_GET["penerbit_buku"];
    $stok = $_GET["stok"];

    $sql = "UPDATE buku SET judul_buku = '$judul_buku', penerbit_buku = '$penerbit_buku', stok = '$stok' WHERE kode_buku = '$kode_buku'";

    $query = mysqli_query($conn, $sql);

    if($query){
        $msg = "Update Data Berhasil";
    }
    else{
        $msg = "Update Data gagal";
    }

    $response = array(
        'status' => "OK",
        'msg' => $msg
    );

    echo json_encode($response,JSON_PRETTY_PRINT);
?>