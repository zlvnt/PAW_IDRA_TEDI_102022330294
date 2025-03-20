<?php
include 'connect.php';

// Cek Apakah ada data yang dikirim
if (isset($_POST[' '])) {
    $id = $_GET[' '];
    $judul = $_POST[' '];
    $penulis = $_POST[' '];
    $tahun_terbit = $_POST[' '];    


    // Buatlah query untuk update data
    

    mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0) {
        header("location: katalog_buku.php");
    } else {
        echo "<script>alert('Data gagal ditambahkan');</script>";
    }
}
?>