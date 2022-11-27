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
        <h1 class="text-center">Profile</h1>
        <form action="../config/profile.php" method="POST" >

    <div class="mb-3">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" class="form-control" placeholder=" " disabled>
    </div>

    <div class="mb-3">
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama" class="form-control" placeholder=" ">
    </div>

    <div class="mb-3">
        <label for="no_hp">Nomor Handphone</b></label>
        <input type="number" id="no_hp" name="no_hp" class="form-control" placeholder=" " required>
    </div>

    <div class="mb-3">
        <label for="password">Kata Sandi</label>
        <input type="password" id="password" name="password" class="form-control" placeholder=" " onkeyup ='check();' required>
    </div>
                
    <div class="mb-3">
        <label for="konfirmasikatasandi">Konfirmasi Kata Sandi</b></label>
        <input type="password" id="konfirmasikatasandi" name="konfirmasikatasandi" class="form-control" placeholder=" " onkeyup ='check();' required>
    </div>
   
    <!-- <div class="mb-3">
        <label for="konfirmasikatasandi">Warna Nav- Bar</b></label>
        <input type="password" id="konfirmasikatasandi" name="konfirmasikatasandi" class="form-control" placeholder=" " onkeyup ='check();' required>
    </div> -->

     <div class="mb-3">
        <div class="d-flex center">
        <button class ="btn btn-primary" type= "submit" name= "Update" > Update </button>                   
    </div>
        </form>

<img src="../asset/logo-ead.png" alt="" style="width:100px;height:30px;float:left" /><p>Mima_1202201256</p>   
</body>
</html>