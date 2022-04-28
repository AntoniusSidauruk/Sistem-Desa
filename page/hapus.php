<?php
    error_reporting(0);
    include "./config/koneksi.php";

   $no_kk =  $_GET['no_kk'];
   $query = mysqli_query($con, "DELETE FROM akses_prasarana_transportasi WHERE no_kk='$no_kk'");
   $query .= mysqli_query($con, "DELETE FROM form_keluarga WHERE no_kk='$no_kk' ");

   if ($query){
    $message= "Data berhasil dihapus";
   }else{
    echo "gagal".mysqli_error($con);
   }

