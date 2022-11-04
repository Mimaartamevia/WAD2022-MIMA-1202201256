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
            <ul class="navbar-nav">
                <li class="nav-item" ><a class="nav-link " href="Mima_Home.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="Mima_booking.php" >Booking</a></li>
            </ul>
        </div>
        </nav>
        <div class="row mx-auto w-75 p-3 mt-2">
        <div class="col-6 text-center">
        <?php
                    if(isset($_GET['mobil'])){
                        if($_GET['mobil']=='Xpander'){
                            echo '<img width="250" height="150" src= "https://assets.mitsubishi-motors.co.id/products/colors/1642040743-cross-black-at-2x-minpng.png"></img>';
                        }
                        elseif($_GET['mobil']=='Avanza'){
                            echo '<img width="250" height="150" src="https://www.toyota.astra.co.id/sites/default/files/2021-11/1-avanza-purplish-silver.png"></img>';
                        }
                        elseif($_GET['mobil']=='Mobilio'){
                            echo '<img width="250" height="150" src="https://www.semisena.com/wp-content/uploads/2020/02/Honda-Mobilio-F.jpg"></img>';
                        }
                    
                    else{
                        echo '<img width="250" height="150"" src="https://assets.mitsubishi-motors.co.id/products/colors/1642040743-cross-black-at-2x-minpng.png"></img>';
                    }
                ?>
                </div>
                <div class="col">
                    <form action="Mima_mybooking.php" method="POST">
                        <div class="mb-3">
                            <label for="Namalengkap">Name</label>
                            <input type="text" id="Namalengkap" name="Namalengkap" class="form-control form-control-readonly" value="Mima_1202201256" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="Tanggal_Pemesanan">Book Date</label>
                            <input type="date" id="Tanggal_Pemesanan" name="Tanggal_Pemesanan" class="form-control" placeholder="mm / dd / yyyy">
                        </div>
                        <div class="mb-3">
                            <label for="Waktu_pesan">Start Time</label>
                            <input type="time" id="Waktu_pesan" name ="Waktu_pesan" class="form-control" placeholder="-- : --">
                        </div>
                        <div class="mb-3">
                            <label for="Durasi_Pesanan">Duration (Days)</label>
                            <input type="number" id="Durasi_Pesanan" name="Durasi_Pesanan" class="form-control" min="3" max="10">
                        </div>
                        <div class="mb-3">
                            <label for="Jenis_mobil">Car Type</label>
                            <select id="Jenis_mobil" name="Jenis_mobil" class="form-select" onchange="priceFunction()" aria-label="Default select example">
                                <option value="Xpander">Mitsubishi Xpander</option>
                                <option value="Avanza">Toyota Avanza</option>
                                <option value="Mobilio">Honda Mobilio</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="Nomor_telepon">Phone Number</label>
                            <input type="tel" name="Nomor_telepon" id="Nomor_telepon" class="form-control" >
                        </div>
                        <div class="mb-3">
                            <label for="Pelayanan_tambahan"> Add Service(s):</label>
                            <div class="form-check">
                                <input class="form-check-input" name="Pelayanan_tambahan[]" type="checkbox" value="25000" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Health Protocol/Rp.25.000
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="Pelayanan_tambahan[]" type="checkbox" value="100000" id="defaultCheck2">
                                <label class="form-check-label" for="defaultCheck2">
                                    Driver/Rp.100.000
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="Pelayanan_tambahan[]" type="checkbox" value="250000" id="defaultCheck3">
                                <label class="form-check-label" for="defaultCheck3">
                                    Full filled/Rp.250.000
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="Pelayanan_tambahan[]" type="hidden" value="checked" id="defaultCheck4" style="display:none">
                                <label class="form-check-label" for="defaultCheck4">
                                </label>
                            </div>
                            <div class="d-grid gap-2">
                                <input class="btn btn-primary" type="submit" name="Book" value="Book">                   
                            </div>
                        </div>
                    </form>
                </div>
        </body>
        <footer>
            <center>
                <p>Created by mima_1202201256
            </center>
        </html>