<?php
// host
$host = "localhost";

// username
$username = "root";

// password
$pass = "";

// database name
$db = "st2dk";

// port
$port = 3307;

// connect to db
$conn = mysqli_connect($host, $username, $pass, $db, $port);

// if cant connect
if ($conn->connect_error) {
  die("Koneksi Gagal: " . $koneksi->connect_error);
}
