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
<nav class="navbar navbar-expand-lg bg-primary " >
  <div class=" d-flex justify-content-left container-fluid">
      <ul class="navbar-nav">
        <li class="nav-item" ><a class="nav-link " href="Home-Mima.php" style="color:white;" >Home</a></li>
        <li class="nav-item"><a class="nav-link" href="Add-Mima.php" style="color:white;" >MyCar</a></li>
      </ul>
  </div>
</nav>
<h1 class="text-left">My Show Room</h1>
<p style="font-family:courier;">List Show Room Mima_1202201256</p>
<?php
    $connect = mysqli_connect("localhost:3315", "root","", "wad_modul4_mima");
    $query=mysqli_query($connect, "SELECT * FROM showroom_mima_table");
    foreach ($query as $tampil):?>
        <div class='row row-cols-3 row-cols-md-3 g-4'>
            <div class='col'>
                <div class='card'>
                    <img class='card-img-top' width='340' height='210' src='../asset/image/<?php echo $tampil['foto_mobil']?> 'alt='No Image'></img>
                    <div class='card-body>";
                        <h5 class='card-title><center><b><?php echo $tampil['nama_mobil']?></b></center></h5>
                        <p class='card-text'><?php echo substr($tampil['deskripsi'], 0, 60)?>...</p>
                        <a href='../pages/Details-Mima.php?id=<?php echo $tampil['id_mobil']?>' button class='btn btn-primary' type='Details'>Detail</a>
                        <a href='../config/delete.php?id=<?php echo $tampil['id_mobil']?>' button class='btn btn-danger' type='Delete'>Delete</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

<?php
  include('../config/connector.php');
?>



