        <?php
            $connect = mysqli_connect("localhost:3315", "root","", "wad_modul4_mima");
            $id=$_GET['id'];
            $query = mysqli_query($connect, "DELETE FROM showroom_mima_table WHERE id_mobil='$id'");
            header("Location:../pages/ListCar-Mima.php?");

            if($query) {
                echo "<script>alert('Berhasil Di Hapus')</script>";
                echo "<meta http-equiv='refresh' content='1 url=../pages/ListCar-Mima.php'>";
            } else {
                echo "<script>alert('Gagal')</script>";
                echo "<meta http-equiv='refresh' content='1 url=../pages/ListCar-Mima.php'>";
            }

