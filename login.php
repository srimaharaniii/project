<?
if(isset($_POST['tombol'])){
    #1. koneksi database
    include_once("koneksi.php");

    #2. mengambil value dari input
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    #3. tuliskan query pengecekan apakah data login tersedia di databse
    $sql_cek = "SELECT * FROM users WHERE email='$email' AND password='$pass'";

    #4. menjalankan query diatas
    $qry_cek =mysqli_query($koneksi,$sql_cek);

    #5. Pengecekan lanjutan
    $cek = mysqli_num_rows($qry_cek);

    #6.buatkan if jika login berhasil atau gagal
    if($cek > 0){
        //login berhasi
    }else{
        //login gagal
    }   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project IS62</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div class="container">
    <div class="row mt-5">
        <div class="col-6 m-auto">
        <div class="col-8 m-auto">
            <div class="card">
            <div class="card-header text-center">
                <h3>Sistem Informasi Mahasiswa</h3>
            </div>
            <div class="card-body">
            <form method="post" action="login.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="pass" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" name="cek" value="yes" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Ingat Saya</label>
  </div>
  <button type="submit" name="tombol" class="btn btn-primary">Log In</button>
</form>
            </div>
            </div>
        </div>
    </div>
</div>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>