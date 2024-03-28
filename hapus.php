<?php
include "koneksi.php";

$id= $_GET['id'];

$hapus = mysqli_query($koneksi, "DELETE FROM tbl_buku WHERE id_buku='$id'");

if($hapus){
    echo "<script>alert('Berhasil DIhapus');
    window.location=history.go(-1);
    </script>";
    
}
else{
    echo " GaGal";
}
?>