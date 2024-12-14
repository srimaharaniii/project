<?php
#1. koneksikan file ini
include("../koneksi.php");

#2. mengambil value dari form
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$tmp_lahir = $_POST['tempat'];
$tgl_lahir = $_POST['tanggal'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$jk = $_POST['jk'];
$jurusans_id = $_POST['jurusan'];
$dosens_id = $_POST['jabatan'];

#3. menulis query
$simpan = "INSERT INTO mahasiswas (nim,nama,tmp_lahir,tgl_lahir,alamat,email,jk,jurusans_id,dosens_id) VALUES ('$nim','$nama','$tmp_lahir','$tgl_lahir','$alamat','$email','$jk','$jurusans_id','$dosens_id')";

#4. jalankan query
$proses = mysqli_query($koneksi, $simpan);

#5. mengalihkan halaman
// header("location:index.php");
?>
<script>
    document.location="index.php";
</script>