<?php
include('../connection.php');

if (isset($_POST['delete'])) {

    $npm = $_POST['npm'];

    $query = mysqli_query($conn, "DELETE FROM krs WHERE mahasiswa_npm = $npm");
    $query2 = mysqli_query($conn, "DELETE FROM mahasiswa WHERE npm = $npm");

    header("Location:../index.php?");
}
?>