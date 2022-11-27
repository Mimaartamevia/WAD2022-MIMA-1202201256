<?php
    $connect = mysqli_connect("localhost:3315", "root","", "wad_modul4_mima");
    $id=$_GET['id'];
    $query=mysqli_query($connect, "SELECT * FROM showroom_mima_table WHERE id_mobil=$id");
    $selects=mysqli_fetch_array($query);
?>
<h1><b>Edit</b></h1>
<p>Edit Mobil <?php echo $selects['nama_mobil'] ?></p>
<div class='d-flex justify-content-center align-items-start gap-5 mt-5'>
    <img src="foto/<?php echo $selects['foto_mobil']?>" alt="No Image"></img>
    <form action="/update.php?id=<?php echo $selects['id_mobil']?>" method="POST" enctype='multipart/form-data'>
        <div class="mb-3">
            <label for="nama_mobil"><b>Nama Mobil</b></label>
            <input type="text" name="nama_mobil" class="form-control form-control-readonly" value="<?php echo $selects['nama_mobil']?>">
        </div>
        <div class="mb-3">
            <label for="nama_pemilik"><b>Nama Pemilik</b></label>
            <input type="text" name="nama_pemilik" class="form-control"value="<?php echo $selects['pemilik_mobil']?>">
        </div>
        <div class="mb-3">
            <label for="merk"><b>merk</b></label>
            <input type="text" name ="merk" class="form-control" value="<?php echo $selects['merk_mobil']?>">
        </div>
        <div class="mb-3">
            <label for="tanggal_beli"><b>Tanggal Beli</b></label>
            <input type="date" name="tanggal_beli" class="form-control" placeholder="mm/dd/yyyy" value="<?php echo $selects['tanggal_beli']?>">
        </div>
        <div class="mb-3">
            <label for="Deskripsi"><b>Deskripsi</b></label>
            <textarea class="form-control" rows="3" name="Deskripsi"><?php echo $selects['deskripsi']?></textarea>
        </div>
        <div class="mb-3">
            <label for="foto"><b>foto</b></label>
            <input type="file" name="foto" id="foto" class="form-control" value=""><span><?php echo $selects['foto_mobil']?></span>
        </div>
        <div class="mb-3">
            <label for="status_pembayaran"><b>Status Pembayaran</b></label>
            <div class="mb-3">
                <input type="radio" name="status_pembayaran" id="status_pembayaran" value="Lunas" <?php ($selects["status_pembayaran"] == 'Yes') ? "checked" : ""?>">
                <label for="Lunas">Lunas</label>
                <input type="radio" name="status_pembayaran" id="status_pembayaran" value="Belum Lunas" <?php ($selects["status_pembayaran"] == 'No') ? "checked" : ""?>">
                <label for="Belum Lunas">Belum Lunas</label>
            </div>
        </div>
        <div class="d-grid gap-2">
            <input class="btn btn-primary" type="submit" name="Simpan" value="Simpan">                   
        </div>
    </form>
</div>
