<?php include('connector.php'); 
  
if (isset($_POST['Daftar'])) {
  $email = $_POST['email'];
  $nama = $_POST['nama'];
  $no_hp = $_POST['no_hp'];
  $password = $_POST['password'];
  $konfirmasikatasandi = $_POST['konfirmasikatasandi'];

  $sql="INSERT INTO user_mima (nama, email, password, no_hp) VALUES ('$nama','$email','$password','$no_hp')";
  $sql_cek = "SELECT * FROM user_mima where email = '$email' AND password = 'password' ";
  $cek = $connect->query($sql_cek);;

  if (mysqli_query($connect, $sql)) {
    session_start();
    $_SESSION['register'] = 'berhasil' ;
    header("Location:../pages/Login-Mima.php");
  }
  else {
    header("Location:../config/registrasi.php?");
  }

  if ($cek -> num_rows > 0) {
    session_start();

    while($row = $cek -> fetch_assoc()) {
        $email = $_POST['email'];
        $nama = $row['nama'];
        $no_hp = $row['nomorhandphone'];
        $password = $row['katasandi'];  
    }
    if ($password == $password_cek){
        $SESSION['register'] = 'gagal';
        header("location:../config/Registrasi.php?");

    }
  }

  $connect->close();
} 
?>