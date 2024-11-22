<?php
#1. Koneksi kedatabase
include("../koneksi.php");

#2. Ambil id yabg akan disunting
$id = $_GET['id'];

#3. Menagmbil semua record data berdasarkan id yang dipilih
$ambil = "SELECT * FROM jurusans WHERE id='$id'";

#4. Menjalankan Query
$edit = mysqli_query($koneksi,$ambil);

#5. Memisahkan record data berdasarkan kolom/field
$data = mysqli_fetch_array($edit);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Jurusan</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/all.css">
</head>
<body>
  
<?php include_once ('../navbar.php');

?>
<div class="container">
    <div clas="row mt-">
        <div class="col-6 m-auto">
            <div class="card">
            <div class="card-header">
                <h3 class="float-start">Form Edit Jurusan</h3>
            </div>
            <div class="card-body">
            <form action="update.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?=$data['id']?>">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Kode Jurusan</label>
                    <input type="text" readonly value="<?=$data['kode']?>" name="kode" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nama Jurusan</label>
                    <input type="text" value="<?=$data['jurusan']?>" name="jurusan" class="form-control" id="exampleInputPassword1">
                </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <button type="reset" class="btn btn-info">reset</button>
            </form>
            </div>
            </div>
        </div>
    </div>
</div>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/all.js"></script>
</body>
</html>