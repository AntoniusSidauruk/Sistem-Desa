
<?php
error_reporting(0);
session_start();

include  "./config/koneksi.php";
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

$_SESSION["sukses"] = 'Data Berhasil Disimpan';

//redirect ke halaman index.php
// mysqli_query($con,$deskripsi_lokasi);



?>