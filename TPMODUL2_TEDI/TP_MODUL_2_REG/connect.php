<?php
// ==================1==================
// Definisikan variabel2 yang akan digunakan untuk melakukan koneksi ke database


// ==================2==================
// Definisikan $conn untuk melakukan koneksi ke database 

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>