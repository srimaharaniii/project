<?php
#1 koneksi file ini
include_once("../koneksi.php");

#2 mengambil id dari tombol hapus
$id = $_POST['id'];
$kode = $_POST['kode'];
$jurusan =$_POST['jurusan'];



#3menulis query
$sunting = "UPDATE jurusans SET kode='$kode',jurusan='$jurusan' WHERE id='$id'";

#4 jalankan query
$proses = mysqli_query($koneksi,$sunting);

#5 mengalihkan halaman
// header("location:index.php");
?>

<script>
    document.location="index.php";
</script>
