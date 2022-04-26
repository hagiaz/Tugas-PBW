<?php
    include('connection.php');

    $sql = "SELECT kode_buku, judul_buku, penerbit_buku, stok FROM buku";

    $query = mysqli_query($conn, $sql);

    while($data = mysqli_fetch_array($query)){
        $buku[] = array(
            'kode_buku'=>$data["kode_buku"],
            'judul_buku'=>$data["judul_buku"],
            'penerbit_buku'=>$data["penerbit_buku"],
            'stok'=>$data["stok"]
        );
    }

    $response = array(
        'status'=>'OK',
        'data' => $buku
    );

    echo json_encode($response,JSON_PRETTY_PRINT);
?>