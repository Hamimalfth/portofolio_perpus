<?php

include "koneksi.php";
session_start();
if (!isset($_SESSION['username'])) {
  echo "<script>alert('Anda Harus Login');
  window.location='index.php';
  </script>
  ";
}

$ambildata = mysqli_query($koneksi, "SELECT * FROM tbl_buku");
$data1 = mysqli_fetch_array($ambildata);
var_dump($data1);

?>

<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
    .satu {
      float: left;
    }

    .dua {
      float: right;
    }

    .container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
    }

    .cardimg {
      height: 370px;
      margin: 10px;
    }

    .buku {
      width: 250px;
      margin: 20px;
    }
  </style>
  <title>Data Buku</title>
</head>

<body>

  <div class="container-fluid">
    <div class="card mt-4 m-5">
      <div class="card-header bg-secondary">
        <h2 class="text-light text-center">DATA BUKU</h2>
        <a href="logout.php">Log Out</a>
      </div>
      <div class="card-title m-5">
        <a class="btn btn-primary satu" href="input.php">TAMBAH DATA</a>
        <form class="d-flex dua" method="post" action="cari.php">
          <input class="form-control" name="cari" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success ml-2" name="submit" type="submit">Search</button>
        </form>
        <h5 class="text-center">Anda Login Sebagai Admin</h5>
      </div>
      <hr>
      <div class="card-body">
        <div class="container">
          <?php
          while ($data = mysqli_fetch_array($ambildata)) {


            ?>
            <div class="card buku">
              <h5 class="card-title text-center mt-3">
                <?php echo $data['judul']; ?>
              </h5>
              <img src="images/<?php echo $data['gambari']; ?>" class="cardimg">
              <div class="card-body text-center">
                <?php echo $ambildata2; ?>
                <a href="edit.php?id=<?= $data['id_buku']; ?>" class="btn btn-warning">Edit</a> |
                <a href="hapus.php?id=<?= $data['id_buku']; ?>" class="btn btn-danger">Hapus</a>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</body>

</html>