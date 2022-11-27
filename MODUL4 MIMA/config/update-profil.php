<?php
    include('../config/connector.php');
    if(isset($_POST['update'])){
        $id         = $_POST['id'];
        $email      = $_POST['email'];
        $nama       = $_POST['nama'];
        $no_hp      = $_POST['no_hp'];
        $password   = $_POST['password'];
    }
    
    $query=mysqli_query($connect, "UPDATE user_mima SET nama='$nama', no_hp ='$no_hp', password='$password' WHERE id='$id'");
    if($queryupdate) {
        echo "<script>alert('Data telah diupdate')</script>";
        echo"<meta http-equiv='refresh' content='1 url=../pages/ListCar-Mima.php'>";
      } else {
        echo "<script>alert('Gagal diupdate')</script>";
        echo"<meta http-equiv='refresh' content='1 url=../pages/ListCar-Mima.phpp'>";
      }
?>