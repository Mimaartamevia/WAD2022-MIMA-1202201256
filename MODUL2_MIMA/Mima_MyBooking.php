<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light">
  <div class=" d-flex justify-content-center container-fluid">
      <ul class="navbar-nav text-light">
        <li class="nav-item"><a class="nav-link " href="Mima_Home.php">Home</a></li>
        <li class="nav-item" ><a class="nav-link" href="Mima_booking.php">Booking</a></li>
      </ul>
  </div>
</nav>
<CENTER>
<h1>Thank You MIMA_1202201256 for Reserving </h1>
<h2>Plese double chek your reservation details !</h2>
<center>
<table class="table">
    <thead>
        <tr>
            <th>Booking Number</th>
            <th>Name</th>
            <th>Check In</th>
            <th>Check Out</th>
            <th>Car Type</th>
            <th>Phone Number</th>
            <th>Service(s)</th>
            <th>Total harga</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        if($_POST['Namalengkap']!=null){ 
          echo'<tr>'; 
          echo'<td>'.rand(10000000,50000000).'</td>'; 
          echo'<td>'.$_POST['Namalengkap'].'</td>';
          echo'<td>'.$_POST['Tanggal_Pemesanan'].' '.$_POST['Waktu_pesan'].'</td>';
          echo'<td>'.date('Y-m-d',strtotime($_POST['Tanggal_Pemesanan'].'+'.$_POST['Durasi_Pesanan'].'days')).' '.$_POST['Waktu_pesan'].'</td>';
          echo'<td>'.$_POST['Jenis_mobil'].'</td>';
          echo'<td>'.$_POST['Nomor_telepon'].'</td>';
          echo'<td><ul>';
          foreach($_POST['Pelayanan_tambahan'] as $Rp){
            switch ($Rp){
              case '25000':
                echo '<li>Health Protocol</li>';
                break;
            case '100000':
                echo '<li>Driver</li>';
                break;
            case '250000':
                echo '<li>Full filled</li>';        
                break;                
            default:
                echo '';
        }
        echo "</td></ul>";
        echo "<td>";
        switch ($_POST['Jenis_mobil']){
          case"Xpander":
            $harga=250000;
            $harga=$harga*$_POST['Durasi_Pesanan'];
            foreach ($_POST['Pelayanan_tambahan'] as $Rp){
                $harga+=(int)$Rp;
            }
            echo"Rp".$harga;
            break;
          case "Avanza":
            $harga=250000;
            $harga=$harga*$_POST['Durasi_Pesanan'];
            foreach ($_POST['Pelayanan_tambahan'] as $Rp){
                $harga+=(int)$Rp;
            }
            echo"Rp".$harga;
            break;
          case "Mobilio":
            $harga=250000;
            $harga=$harga*$_POST['Durasi_Pesanan'];
            foreach ($_POST['Pelayanan_tambahan'] as $Rp){
                $harga+=(int)$Rp;
            }
            echo"Rp".$harga;
            break;
    }
    }
      }
        ?>
    </tbody>
    </table>
</body>
<footer>
    <center>
        <p>Created by mima_1202201256
    </center>
</footer>
</html>