<?php
    include('connection.php');

    $sql = "DELETE FROM buku WHERE kode_buku ='".$_GET["kode_buku"]."'";

    $query = mysqli_query($conn, $sql);

    if($query){
        $msg = "Hapus Data Berhasil";
    }
    else{
        $msg = "Hapus Data gagal, Kode Buku ".$kode_buku." tidak ditemukan";
    }

    $response = array(
        'status' => "OK",
        'msg' => $msg
    );

    echo json_encode($response,JSON_PRETTY_PRINT);
?>