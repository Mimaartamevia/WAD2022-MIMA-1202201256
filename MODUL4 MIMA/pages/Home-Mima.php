    <?php session_start()?>

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
    <?php if (isset($_SESSION['login']) && $_SESSION['login'] == 'Berhasil!'){unset($_SESSION['login'])?>
        <div class="alert alert-warning alert-dismissible" role="alert">Anda berhasil login!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php }?>
    <body>
    <?php if (!isset($_SESSION['login'])) { ?>

    <nav class="navbar navbar-expand-lg bg-primary " >
      <div class=" d-flex justify-content-left container-fluid">
          <ul class="navbar-nav">
            <li class="nav-item" ><a class="nav-link " href="../pages/Home-Mima" style="color:white;" >Home</a></li>
            <li class="nav-item"><a class="nav-link" href="../pages/List-Mima" style="color:white;" >MyCar</a></li>
          </ul>
      </div>
      <div class=" d-flex justify-content-right container-right">
          <ul class="navbar-nav gap-1">
            <!-- <li class="nav-item "><a href='../pages/Login-Mima.php' button class='btn btn-light' type='Login'>Login</a></li> -->
            <li class="nav-item "><a href='../pages/Add-Mima.php' button class='btn btn-light'>AddCar</a></li>
            <div class="dropdown">
      <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">

      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <li><a class="dropdown-item" href="../pages/Profile-Mima.php">Profil</a></li>
        <li><a class="dropdown-item" href="../config/logout.php">Logout</a></li>
      </ul>
    </div>

                    
                  </ul>

      </div>
    </nav>
    <?php } else {?>
      <nav class="navbar navbar-expand-lg bg-primary " >
      <div class=" d-flex justify-content-left container-fluid">
          <ul class="navbar-nav">
            <li class="nav-item" ><a class="nav-link " href="../pages/Home-Mima" style="color:white;" >Home</a></li>
            <li class="nav-item"><a class="nav-link" href="../pages/List-Mima" style="color:white;" >MyCar</a></li>
          </ul>
      </div>
      <div class=" d-flex justify-content-right container-right">
          <ul class="navbar-nav gap-1">
            <li class="nav-item "><a href='../pages/Login-Mima.php' button class='btn btn-light' type='Login'>Login</a></li>
          </ul>
      </div>
    </nav>



      <?php } ?>
    <div class="row mx-auto w-75 p-3 mt-2">
        <div class="col-6 text-left"  style="margin-top: 120px">
        <h1 style="font-size:300%" alt="center">Selamat Datang Di <br>
        Show Room Mima </h1>
        <p style="font-size:90%" style="color:DDDDDD;"> At lacus vitae nulla sagittis scelerisque nisl. Pallentsquue duis cursus vestibulum, facilisi ac, sed faucibus.</p>
        <br>
        <br>
        <a class ="btn btn-primary" href="ListCar-Mima.php" >MyCar</a><br>
            <br>
            <div class="d-flex left">
            <img src="../asset/logo-ead.png" alt="" style="width:100px;height:30px;float:left" /><p>Mima_1202201256</p>      
        </div>
        </div>
        <div class="col-6 text-center">
            <br>
            <br>
            <br>
            <br>
            <br>
        <img src=" https://www.toyota.astra.co.id/sites/default/files/2020-10/1_innova-super-white-2_0.png"  alt="">
        </div>
      
    </body>

    </html>



