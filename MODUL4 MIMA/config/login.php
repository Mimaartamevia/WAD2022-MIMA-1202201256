<?php
if(!isset($_SESSION)){
    session_start();
}
if (isset($_POST['rememberme'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    setcookie("email",$email,time()+3600);
    setcookie("password",$password,time()+3600);
}

$connect = mysqli_connect("localhost:3315", "root","", "wad_modul4_mima");
$email=$_POST['email'];
$password=$_POST['password'];
$dt_email="SELECT * FROM user_mima WHERE email='$email'";
$executeQuery=mysqli_query($connect, $dt_email);
if(mysqli_num_rows($executeQuery)>0){
    $result=mysqli_fetch_assoc($executeQuery);
    $result_check=$result['password'];
    if($password==$result_check){
        $_SESSION['email']=$result['email'];
        $_SESSION['login']='Berhasil!';
        header('location:../pages/Home-Mima.php');
        exit();
    }else{
        $_SESSION['message']='Password anda salah, silahkan coba lagi !';
        header('location:../pages/Login-Mima.php');
        exit();
    }
}
$_SESSION['message']='Gagal Login';
header('location:../pages/Login-Mima.php');
exit();
?>