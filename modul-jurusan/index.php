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
                <h3 class="float-start">Data Jurusan</h3>
                <span class="float-end "><a class="btn btn-primary" href=""><i class="fa-solid fa-square-plus"></i>Tambah Data</a></span>
            </div>
            <div class="card-body">
            <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">kode</th>
      <th scope="col">Nama Jurusan</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>
        <a class="btn btn-info btn-sm" href=""><i class="fa-solid fa-pen-to-square"></i></a>
        <a class="btn btn-danger btn-sm" href=""><i class="fa-solid fa-trash"></i></a>
    
      </td>
    </tr>
  </tbody>
</table>
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