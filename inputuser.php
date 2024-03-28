<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        /* body{
            justify-content: center;
          
        } */
        .container{
            justify-content: center;
            align-content: center;
            width: 500px;
            
        }
    </style>
    <title>Input</title>
  </head>
  <body>
    <div class="container">
        <div class="card">
            <div class="card-header bg-secondary">
                <h2 class="text-center text-light">TAMBAH DATA</h2>
            </div>
          <div class="card-body">
            <form method="post" enctype="multipart/form-data">
                <div class="mb-3">

                  <label class="form-label">Judul</label>
                  <input type="text" class="form-control" name="judul" >
                </div>
                <div class="mb-3">
                  <label class="form-label">Pengarang</label>
                  <input type="text" class="form-control" name="pengarang" >
                </div>
                <div class="mb-3">
                  <label class="form-label">Penerbit</label>
                  <input type="text" class="form-control" name="penerbit" >
                </div>
                <div class="mb-3">
                  <label class="form-label">Gambar</label>
                  <input type="file" class="form-control" name="gambar" >
                </div>
                <button type="submit"  name="submit" class="btn btn-primary text-center">Submit</button>
              </form>
          </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>   
  </body>
</html>

<?php
include "koneksi.php";

if(isset($_POST['submit'])){
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];
    $gambar = $_FILES['gambar']['name'];
    $tmp_name = $_FILES['gambar']['tmp_name'];

    $path = "images/".$gambar;

    if(move_uploaded_file($tmp_name,$path)){

        $input = "INSERT INTO tbl_buku(judul,pengarang,penerbit,gambar) VALUES ('".$judul."','".$pengarang."','".$penerbit."','".$gambar."')";

        $query = mysqli_query($koneksi,$input);

        if($query){
            header("Location:tampiluser.php");
        }
        else{
            echo "gagal";
        }
    }
}


?>