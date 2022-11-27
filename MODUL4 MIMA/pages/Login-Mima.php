
<?php

session_start();

require'../config/connector.php';

?>
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
<?php if (isset($_SESSION['message'])) { ?>
    <div class="alert alert-warning m-0 p-2 alert-dismissible" role="alert"><?php echo $_SESSION['message'] ?>
        <button type="button" class="btn-close p-3" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php } ?>
<body>
<div class="row mx-auto  ">
    <div class="col-6 text-left">
    <img src= "../asset/lucu.jpg" style="float:left;width:1200;height:710px;" alt="">
    </div>

    <div class="col-6 text-right">
    <div class="container">
        <h1 class="text-right">Login</h1>
    <form action="../config/login.php" method="POST" >

        <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="form-control" placeholder=" " value="<?php if (isset($_COOKIE['email'])){ echo $_COOKIE['email'];}?>" required>
        </div>

        <div class="mb-3">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" class="form-control" placeholder=" " value="<?php if (isset($_COOKIE['password'])){ echo $_COOKIE['password'];}?>" required>
        </div>

        <div class="mb-3">
        <input type="checkbox" name="rememberme" value="rememberme" id="rememberme" >
        <label class="form-check-label" for="rememberme">Remember me</label>
            <div class="d-flex left">
            <button class ="ps-5 pe-5 btn btn-primary" type= "submit" name= "Login" > Login </button>                   
        </div>
    </form>
</div>
<h6 class="mb-4" style="text-align : left;" > Anda belum punya akun ?<a href="../pages/Registrasi-Mima.php">Daftar</a></h6> <br>
   
</body>
</html>