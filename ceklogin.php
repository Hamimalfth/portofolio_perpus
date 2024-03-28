<?php


session_start();
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE username='$username' and password='$password'");
$row = mysqli_num_rows($login);

if($row>0){

    $data = mysqli_fetch_assoc($login);

  
    if($data['level']=="admin"){
      $_SESSION ['username'] = $username;
      $_SESSION['level'] ="admin";
      echo "<script>alert('Anda Login Sebagai Admin');
      window.location='tampil.php';
      </script>";
      
    }
     else if($data['level']=="user"){
       $_SESSION ['username'] = $username;
      $_SESSION['level'] ="user";
      header("location:tampiluser.php");
    }
    else if($data['level']=="guest"){
     $_SESSION ['username'] = $username;
      $_SESSION['level'] ="guest";
      header("location:tampilguest.php");
    }
    else{
      
       echo "<script>window.location='index.php'</script>";
     echo "<script>alert('Gagal')</script>";
    }
   

}
else{

echo "<script>alert('Anda Belum Terdaftar');
document.location='index.php';
</script>";
}



?>