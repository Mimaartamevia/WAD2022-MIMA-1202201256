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
        <li class="nav-item"><a class="nav-link" href="Add-Mima.php" style="color:white;" >MyCar</a></li>
      </ul>
  </div>
</nav>
    <div class="container">
        <h1 class="text-left">Tambah Mobil</h1>
        <p style="font-family:courier;">Tambah Mobil Baru Anda ke List Show Room</p>
        <form action="/showroom" method="POST" enctype="multipart/form-data">
            @csrf

    <div class="mb-3">
		<label for="namamobil"><b>Nama Mobil</label>
		<input type="text" id="namamobil" name="name" class="form-control" placeholder="Kijang Innova">
	</div>

    <div class="mb-3">
		<label for="namapemilik">Nama Pemilik</label>
		<input type="text" id="namapemilik" name="owner" class="form-control" placeholder="Nama - NIM">
	</div>

    <div class="mb-3">
		<label for="merk">Merk</label>
		<input type="text" id="merk" name="brand" class="form-control" placeholder="Toyota">
	</div>
    
    <div class="mb-3">
        <label for="tanggalbeli">Tanggal Beli</label>
        <input type="date" id="tanggalbeli" name="purchase_date" class="form-control" placeholder="mm / dd / yyyy">
    </div>
	
    <div class="mb-3">
        <label for="deskripsi">Deskripsi</b></label>
        <textarea class="form-control" rows="3" name="description"></textarea>
    </div>
    <div class="mb-3">
        <label for="foto"><b>Foto</b></label>
        <input type="file" name="img_path" id="foto" class="form-control" placeholder="">
    </div>
   
    <div class="mb-3">
        <label for="statuspembayaran"><b>Status Pembayaran</b></label>
        <div class="mb-3">
        <input type="radio" name="status" id="statuspembayaran" value="Lunas">
        <label for="Lunas">Lunas</label>
        <input type="radio" name="status" id="statuspembayaran" value="Belum Lunas">
        <label for="Belum Lunas">Belum Lunas</label>
        </div>
     </div>

     <div class="mb-3">
        <div class="d-flex left">
        <button class ="btn btn-primary" type= "submit" name= "selesai" > Selesai </button>                   
    </div>
        </form>

</body>
</html>