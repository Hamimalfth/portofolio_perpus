<?php
include "koneksi.php";
$cari = $_POST['cari'];
$ambildata = mysqli_query($koneksi,"SELECT * FROM tbl_buku WHERE judul LIKE '%$cari%'");




?>

<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .satu{
            float: left;
        }
        .dua{
            float: right;
        }
        .container{
            display: flex;
            flex-wrap: wrap;
            justify-content:center;
        }
        .cardimg{
            height: 370px;
            margin: 10px;
        }
        .buku{
            width:250px;
            margin: 20px;
        }

    </style>
    <title>Cari</title>
  </head>
  <body>
   
 <div class="container-fluid">
    <div class="card">
    <div class="card-header bg-secondary">
        <h2 class="text-light text-center">DATA BUKU</h2>
    </div>
  <div class="card-title m-5">
   <a class="btn btn-primary satu" href="input.php">TAMBAH DATA</a>
   <form class="d-flex dua" method="post">
    <input class="form-control" name="cari" type="search" placeholder="Cari judul buku ..." aria-label="Search">
    <button class="btn btn-outline-success" name="submit" type="submit">Search</button>
    </form>
    </div>
    <div class="card-body">
        <div class="container">
    <?php

    $col = mysqli_num_rows($ambildata);
    if($col>0){
    while($data = mysqli_fetch_array($ambildata)){

    
    ?>
    <div class="card buku">
    <h5 class="card-title text-center mt-3"><?php echo $data['judul'];?></h5>
        <img src="images/<?php echo $data['gambar'];?>" class="cardimg">
        <div class="card-body">
         
          <a href="edit.php?id=<?=$data['id_buku'];?>" class="btn btn-warning">Edit</a> |
          <a href="hapus.php?id=<?=$data['id_buku'];?>" class="btn btn-danger">Hapus</a>
        </div>
      </div>
  <?php }
    }
    else{
        echo "<h2 class='text-dark text-center'>DATA TIDAK ADA KEMBALI KE<p></p><a href='tampil.php'>HOME</a></h2>";
    }
  ?>
  </div>
  </div>
  </div>
</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
  function redirect(){
    window.location=history.go(-3);
  }
</script>
  </body>
</html>