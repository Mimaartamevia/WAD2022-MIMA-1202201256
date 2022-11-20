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
<nav class="navbar navbar-expand-lg bg-primary " >
  <div class=" d-flex justify-content-left container-fluid">
      <ul class="navbar-nav">
        <li class="nav-item" ><a class="nav-link " href="Home-Mima.php" style="color:white;" >Home</a></li>
        <li class="nav-item"><a class="nav-link" href="ListCar-Mima.php" style="color:white;" >MyCar</a></li>
      </ul>
  </div>
</nav>
               
<div class="row mx-auto w-75 p-3 mt-2">
    <div class="col-6 text-left">
    <h1 style="font-size:300%" alt="left">Mobil Fortuner<br> </h1>
    <p><small> Edit Mobil Fortuner</small></p>
    <img src="../asset/mobilfortuner.png" alt="Card image cap" style="width:340px;height:210px;">
    </div>
    <div class="col-6 text-left">
    
    <div class="container">
        <from action="postoutput.php" method="POST">

    <div class="mb-3">
		<label for="namamobil"><b>Nama Mobil</label>
		<input type="text" id="namamobil" class="form-control" placeholder="Kijang Innova" >
	</div>

    <div class="mb-3">
		<label for="namapemilik">Nama Pemilik</label>
		<input type="text" id="namapemilik" class="form-control" placeholder="Nama - NIM">
	</div>

    <div class="mb-3">
		<label for="merk">Merk</label>
		<input type="text" id="merk" class="form-control" placeholder="Toyota" >
	</div>
    
    <div class="mb-3">
        <label for="tanggalbeli">Tanggal Beli</label>
        <input type="tanggalbeli" id="tanggalbeli" name="tanggalbeli" class="form-control" placeholder="mm / dd / yyyy" >
    </div>
	
    <div class="mb-3">
        <label for="deskripsi" >Deskripsi</b></label>
        <textarea class="form-control"  rows="3" name="deskripsi"></textarea >
    </div>
    <div class="mb-3">
        <label for="foto"><b>Foto</b></label>
        <input type="file" name="foto" id="foto" class="form-control" placeholder="" >
    </div>
   
    <div class="mb-3">
        <label for="statuspembayaran" ><b>Status Pembayaran</b></label>
        <div class="mb-3">
        <input type="radio" name="statuspembayaran" id="statuspembayaran" value="Lunas" >
        <label for="Lunas">Lunas</label>
        <input type="radio" name="statuspembayaran" id="statuspembayaran" value="Belum Lunas" >
        <label for="Belum Lunas">Belum Lunas</label>
        </div>
     </div>

     <div class="mb-3">
        <div class="d-flex left">
        <a class ="btn btn-primary" href="../pages/ListCar-Mima.php" >Simpan</a>               
    </div>
    </div>
    
                  
</div>