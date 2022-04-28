
    <?php
error_reporting(0);
session_start();

include  "./config/koneksi.php";
if (isset($_POST['selesai'])){
$blt = $_POST['blt'];
$pkh = $_POST['pkh'];
$bst = $_POST['bst'];
$banpres = $_POST['banpres'];
$umkm = $_POST['umkm'];
$bantuanpekerja = $_POST['bantuanpekerja'];
$bantuananak = $_POST['bantuananak'];
$no_kk = $_GET['no_kk'];
$lainnya = $_POST['lainnya'];



$query = mysqli_query($con, "INSERT INTO pemanfaatan_program (no_kk,blt,pkh,bst,banpres,bantuan_umkm,bantuan_pekerja,bantuan_anak,lainnya) VALUES ('$no_kk','$blt','$pkh','$bst','$banpres',
        '$umkm','$bantuanpekerja','$bantuananak','$lainnya')");

if ($query){
            echo "<script>window.location.href = './index.php'</script>";

}else{

    echo "Gagal";
}
}
?>



<link rel="stylesheet" type="text/css" href="./assets/css/sweetalert/sweetalert.css">

<div class="card ">
<div class="card-body">
<div class="basic-form">

<div class="card-body">
    <div class="basic-elements ">
        <b>PEMANFAAT / PENERIMA PROGRAM PEMERINTAH</b>
        <form class="mt-3" method="POST">
            <div class="row">
                <div class="col-lg-12">

                    <div class="form-row">
                        <div class="col">
                            <label>BLT DANA DESA<span class="star">*</span></label>
                            <select name="blt" id="" class="form-control">
                                <option value="YA">Mudah</option>
                                <option value="TIDAK">Sulit</option>
                            </select>
                            <input type="hidden" name="no_kk" value="<?php echo $_GET['no_kk'] ?>">
                        </div>
                        <div class="col">
                            <label>PROGRAM KELUARGA / PKH<span class="star">*</span></label>
                            <select name="pkh" id="" class="form-control">
                                <option value="YA">Mudah</option>
                                <option value="TIDAK">Sulit</option>
                            </select>
                        </div>

                        
                    </div><br>

                    <div class="form-row">
                        <div class="col">
                            <label>BANTUAN SOSIAL TUNAI / BST<span class="star">*</span></label>
                            <select name="bst" id="" class="form-control">
                                <option value="YA">Mudah</option>
                                <option value="TIDAK">Sulit</option>
                            </select>
                        </div>
                        <div class="col">
                            <label>BANTUAN PRESIDEN / BANPRES<span class="star">*</span></label>
                            <select name="banpres" id="" class="form-control">
                                <option value="YA">Mudah</option>
                                <option value="TIDAK">Sulit</option>
                            </select>
                        </div>

                        
                    </div><br>
                    <div class="form-row">
                        <div class="col">
                            <label>BANTUAN UMKM<span class="star">*</span></label>
                            <select name="umkm" id="" class="form-control">
                                <option value="YA">Mudah</option>
                                <option value="TIDAK">Sulit</option>
                            </select>
                        </div>
                        <div class="col">
                            <label>BANTUAN UNTUK PEKERJA<span class="star">*</span></label>
                            <select name="bantuanpekerja" id="" class="form-control">
                                <option value="YA">Mudah</option>
                                <option value="TIDAK">Sulit</option>
                            </select>
                        </div>

                        
                    </div><br>
                    <div class="form-row">
                        <div class="col">
                            <label>BANTUAN PENDIDIKAN ANAK<span class="star">*</span></label>
                            <select name="bantuananak" id="" class="form-control">
                                <option value="YA">Mudah</option>
                                <option value="TIDAK">Sulit</option>
                            </select>
                        </div>
                        <div class="col">
                            <label>LAINNYA<span class="star">*</span></label>
                            <select name="lainnya" id="" class="form-control">
                                <option value="YA">Mudah</option>
                                <option value="TIDAK">Sulit</option>
                            </select>
                        </div>

                        
                    </div><br>

                    

                    <button type="submit" name="selesai" class="btn btn-success btn-lg btn-block mt-3 float-right" id="next"><span class="next">SELESAI</span></button>


                </div>



            </div>

</form>
        </div>
    </div>

</div>
</div>
</div>



</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"

      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"

        crossorigin="anonymous"></script>


