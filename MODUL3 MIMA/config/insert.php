<?php
  include('connector.php');  
  $nama_mobil = $_POST['namamobil'];
  $pemilik_mobil = $_POST['namapemilik'];
  $merk_mobil = $_POST['merk'];
  $tanggal_beli = $_POST['tanggalbeli'];
  $deskripsi = $_POST['deskripsi'];
  $foto_mobil = $_FILES['foto']['name'];
  $Foto_Tmp=$_FILES['foto']['tmp_name'];
  move_uploaded_file($Foto_Tmp, "../asset/image/".$foto_mobil);
  $status_pembayaran = $_POST['statuspembayaran'];

  $query = mysqli_query($connect, "INSERT showroom_mima_table(nama_mobil, pemilik_mobil, merk_mobil, tanggal_beli, deskripsi, foto_mobil, status_pembayaran)
                                    VALUES ('$nama_mobil', '$pemilik_mobil', '$merk_mobil', '$tanggal_beli', '$deskripsi', '$foto_mobil', '$status_pembayaran')");
  
  if($query) {
    echo "<script>alert('Data telah ditambahkan')</script>";
    echo"<meta http-equiv='refresh' content='1 url=../pages/ListCar-Mima.php'>";
  } else {
    echo "<script>alert('Gagal ditambahkan')</script>";
    echo"<meta http-equiv='refresh' content='1 url=../pages/ListCar-Mima.phpp'>";
  }
