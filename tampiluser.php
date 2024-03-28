<?php
include "koneksi.php";

$ambildata = mysqli_query($koneksi,"SELECT * FROM tbl_buku");


?>

<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
    <title>Data Buku</title>
  </head>
  <body>
   
 <div class="container-fluid">
    <div class="card">
    <div class="card-header bg-secondary">
        <h2 class="text-light text-center">DATA BUKU</h2>
    </div>
  <div class="card-title m-5">
   <a class="btn btn-primary satu" href="inputuser.php">TAMBAH DATA</a> 
   <form class="d-flex dua" method="post" action="cari.php">
    <input class="form-control" name="cari" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success ml-2" name="submit" type="submit">Search</button>
    </form>
    <h5 class="text-center">Anda Login Sebagai User</h5>
    </div>
    <hr>
    <div class="card-body">
        <div class="container">
    <?php
    while($data = mysqli_fetch_array($ambildata)){

    
    ?>
    <div class="card buku">
    <h5 class="card-title text-center mt-3"><?php echo $data['judul'];?></h5>
        <img src="images/<?php echo $data['gambar'];?>" class="cardimg">
        <div class="card-body text-center">
         
           <button class="btn btn-warning" onclick="salah()">Edit</button>   |  
          <button class="btn btn-danger" onclick="salah()">Hapus</button>  
        </div>
      </div>
  <?php } ?>
  </div>
  </div>
  </div>
</div>
</div>
<script>
  function salah(){
  Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: 'Anda Tidak Bisa Menghapus Atau Mengedit',
})
  }
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>