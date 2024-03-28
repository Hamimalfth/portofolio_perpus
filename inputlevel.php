<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script
src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script
src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script
src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="assets/costom.css">
</head>
<body>
    <div class="row">
        <div class="col-sm-12 bg-primary text-center">
            </div>
</div>
<br><br>
<div class="container">
<div class="row">
<div class="col-sm-6 offset-sm-3">
<h5 class="font-weight-bold">Input Data Level</h5>
<br>
<form action="" method="post" enctype="multipart/form-data">
<div class="form-group row">
<label class="col-sm-3 col-form-label">Username</label>
<div class="col-sm-8">
<input type="text" class="form-control rounded-pill" name="username">
</div>
</div>
<div class="form-group row">
<label class="col-sm-3 col-form-label">Password</label>
<div class="col-sm-9">
<input type="text" class="form-control rounded-pill" name="password">
</div>
<div class="form-group row">
    <label>Level</label>
<select class="form-select ml-5" name="level" aria-label="Default select example">
  <option value="admin">Admin</option>
  <option value="user">User</option>
  <option value="guest">Guest</option>
</select>
<br>
<div class="col-sm-3 offset-sm-4">
<button type="submit" class="btn btn-success" name="submit"> Tambah
 </button>
</div>
</form>
</div>
</div>
</div>
</body>
</html>
<?php
include 'koneksi.php';
if (isset($_POST['submit'])) {
$us = $_POST['username'];
$pw = $_POST['password'];
$lvl = $_POST['level'];


    $query = "INSERT INTO tbl_user(username, password,level) VALUES('".$us."','".$pw."','".$lvl."')";
    $sql = mysqli_query($koneksi, $query);
    
   
    if($sql){
        echo "<script>alert('Berhasil)</script>";
    //   header("location: index.php"); 
    }else{
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='index.php'>Kembali Ke Form</a>";
    }

 }


?>