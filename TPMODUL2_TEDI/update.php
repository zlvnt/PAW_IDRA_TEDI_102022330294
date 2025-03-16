<!-- BUAT FUNGSI EDIT DATA ( ketika data berhasil di tambahkan maka akan dialihkan ke halaman katalog buku) -->
<?php
include 'connect.php';

if (isset($_POST['update'])) {
    $id = $_GET['id'];

    $judul = mysqli_real_escape_string($conn, $_POST['judul']);
    $penulis = mysqli_real_escape_string($conn, $_POST['penulis']);
    $tahun_terbit = (int) $_POST['tahun_terbit'];

    $query = "UPDATE tb_buku SET judul='$judul', penulis='$penulis', tahun_terbit='$tahun_terbit' WHERE id=$id";

    mysqli_query($conn, $query);
    if (mysqli_affected_rows($conn) > 0) {
        header("Location: katalog_buku.php");
        exit();
    } else {
        echo "<script>alert('Data gagal diubah!');</script>";
    }
}
?>
