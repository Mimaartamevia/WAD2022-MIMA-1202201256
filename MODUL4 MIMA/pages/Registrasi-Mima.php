<? session_start()?>
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

<?php if (isset($_SESSION['register']) && $_SESSION['register'] == 'gagal') {$_SESSION['registrasi'] = ''; ?>
    <div class="alert alert-warning m-0 p-2 alert-dismissible" role="alert">Email Anda sudah pernah terdaftar!
        <button type="button" class="btn-close p-3" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php } ?>
<body>
<div class="row mx-auto ">
    <div class="col-6 d-flex justify-content-center">
    <img src= "../asset/lucu.jpg" style="float:left;width:1200;height:750px;" alt="">
    </div>

    <div class="col-6 d-flex justify-content-center align-items-center">
    <div class="container" >
        <h1 class="text-right">Register</h1>
        <form action="../config/registrasi.php" method="POST" style="margin-right:10px;">

                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder=" " required>
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

                <div class="mb-3">
                    <div class="d-flex left">
                    <button class ="ps-5 pe-5 btn btn-primary" type="submit" name="Daftar" > Daftar </button>                   
                </div>
        </form>
                </div>
                <h6 class="mb-4" style="text-align : left;" > Anda sudah punya akun?<a href="../pages/Login-Mima.php">Login</a></h6>
            </div>
</div>

</body>
</html>