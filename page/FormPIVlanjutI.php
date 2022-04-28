<?php

error_reporting(0);
session_start();

include "./config/koneksi.php";
if (isset($_POST['next'])) {
    $jarakdokterspesialis = $_POST['jarakdokterspesialis'];
    $jarakdokterumum = $_POST['jarakdokterumum'];
    $jarakbidan = $_POST['jarakbidan'];
    $jaraktenagakesehatan = $_POST['jaraktenagakesehatan'];
    $jarakdusun = $_POST['jarakdusun'];

    $waktedokterspesialis = $_POST['waktedokterspesialis'];
    $waktedokterumum = $_POST['waktedokterumum'];
    $waktebidan = $_POST['waktebidan'];
    $waktetenagakesehatan = $_POST['waktetenagakesehatan'];
    $waktedusun = $_POST['waktedusun'];

    $kemudahandokterspesialis = $_POST['kemudahandokterspesialis'];
    $kemudahandokterumum = $_POST['kemudahandokterumum'];
    $kemudahanbidan = $_POST['kemudahanbidan'];
    $kemudahantenagakesehatan = $_POST['kemudahantenagakesehatan'];
    $kemudahandusun = $_POST['kemudahandusun'];



    $jenistransportasi_lokasi = $_POST['jenistransportasi_lokasi'];
    $jenistransportasi_lahan = $_POST['jenistransportasi_lahan'];
    $jenistransportasi_sekolah = $_POST['jenistransportasi_sekolah'];
    $jenistransportasi_berobat = $_POST['jenistransportasi_berobat'];
    $jenistransportasi_beribadah = $_POST['jenistransportasi_beribadah'];
    $jenistransportasi_rekreasi = $_POST['jenistransportasi_rekreasi'];

    $penggunaantransportasi_lokasi = $_POST['penggunaantransportasi_lokasi'];
    $penggunaantransportasi_lahan = $_POST['penggunaantransportasi_lahan'];
    $penggunaantransportasi_sekolah = $_POST['penggunaantransportasi_sekolah'];
    $penggunaantransportasi_berobat = $_POST['penggunaantransportasi_berobat'];
    $penggunaantransportasi_beribadah = $_POST['penggunaantransportasi_beribadah'];
    $penggunaantransportasi_rekreasi = $_POST['penggunaantransportasi_rekreasi'];

    $waktesekalijalan_lokasi = $_POST['waktesekalijalan_lokasi'];
    $waktesekalijalan_lahan = $_POST['waktesekalijalan_lahan'];
    $waktesekalijalan_sekolah = $_POST['waktesekalijalan_sekolah'];
    $waktesekalijalan_berobat = $_POST['waktesekalijalan_berobat'];
    $waktesekalijalan_beribadah = $_POST['waktesekalijalan_beribadah'];
    $waktesekalijalan_rekreasi = $_POST['waktesekalijalan_rekreasi'];

    $biayasekalijalan_lokasi = $_POST['biayasekalijalan_lokasi'];
    $biayasekalijalan_lahan = $_POST['biayasekalijalan_lahan'];
    $biayasekalijalan_sekolah = $_POST['biayasekalijalan_sekolah'];
    $biayasekalijalan_berobat = $_POST['biayasekalijalan_berobat'];
    $biayasekalijalan_beribadah = $_POST['biayasekalijalan_beribadah'];
    $biayasekalijalan_rekreasi = $_POST['biayasekalijalan_rekreasi'];

    $kemudahan_lokasi = $_POST['kemudahan_lokasi'];
    $kemudahan_lahan = $_POST['kemudahan_lahan'];
    $kemudahan_sekolah = $_POST['kemudahan_sekolah'];
    $kemudahan_berobat = $_POST['kemudahan_berobat'];
    $kemudahan_beribadah = $_POST['kemudahan_beribadah'];
    $kemudahan_rekreasi = $_POST['kemudahan_rekreasi'];

    $no_kk = $_GET['no_kk'];

    $query = mysqli_query($con, "INSERT INTO akses_tenaga_kesehatan (no_kk,dokter_spesialis,dokter_umum,bidan,tenaga_kesehatan,dusun) VALUES
        ('$no_kk','$jarakdokterspesialis','$jarakdokterumum','$jarakbidan','$jaraktenagakesehatan','$jarakdusun')");
    $query .= mysqli_query($con, "INSERT INTO wakte_tenaga_kesehatan (no_kk,wakte_dokter_spesialis,wakte_dokter_umum,wakte_bidan,wakte_tenaga_kesehatan,wakte_dusun) VALUES
        ('$no_kk','$waktedokterspesialis','$waktedokterumum','$waktebidan','$waktetenagakesehatan','$waktedusun')");
    $query .= mysqli_query($con, "INSERT INTO kemudahan_tenaga_kesehatan (no_kk,kem_dokter_spesialis,kem_dokter_umum,kem_bidan,kem_tenaga_kesehatan,kem_dusun) VALUES
        ('$no_kk','$kemudahandokterspesialis','$kemudahandokterumum','$kemudahanbidan','$kemudahantenagakesehatan','$kemudahandusun') ");

    $query .= mysqli_query($con, "INSERT INTO akses_prasarana_transportasi (no_kk,lokasi_pekerjaanutama,lahan_pertanian,sekolah,berobat,beribadah,rekreasi) VALUES
        ('$no_kk','$jenistransportasi_lokasi','$jenistransportasi_lahan','$jenistransportasi_sekolah','$jenistransportasi_berobat','$jenistransportasi_beribadah','$jenistransportasi_rekreasi')");
    $query .= mysqli_query($con, "INSERT INTO penggunaan_transportasi (no_kk,pen_lokasi_pekerjaanutama,pen_lahan_pertanian,pen_sekolah,pen_berobat,pen_beribadah,pen_rekreasi) VALUES 
        ('$no_kk','$penggunaantransportasi_lokasi','$penggunaantransportasi_lahan','$penggunaantransportasi_sekolah','$penggunaantransportasi_berobat','$penggunaantransportasi_beribadah','$penggunaantransportasi_rekreasi')");
    $query .= mysqli_query($con, "INSERT INTO wakte_transportasi (no_kk,wakte_lokasi_pekerjaanutama,wakte_lahan_pertanian,wakte_sekolah,wakte_berobat,wakte_beribadah,wakte_rekreasi) VALUES 
        ('$no_kk','$waktesekalijalan_lokasi','$waktesekalijalan_lahan','$waktesekalijalan_sekolah','$waktesekalijalan_berobat','$waktesekalijalan_beribadah','$waktesekalijalan_rekreasi') ");
    $query .= mysqli_query($con, "INSERT INTO biaya_transportasi (no_kk,biaya_lokasi_pekerjaanutama,biaya_lahan_pertanian,biaya_sekolah,biaya_berobat,biaya_beribadah,biaya_rekreasi) VALUES 
        ('$no_kk','$biayasekalijalan_lokasi','$biayasekalijalan_lahan','$biayasekalijalan_sekolah','$biayasekalijalan_berobat','$biayasekalijalan_beribadah','$biayasekalijalan_rekreasi')");
    $query .= mysqli_query($con, "INSERT INTO kemudahan_trasnportasi (no_kk,kem_lokasi_pekerjaanutama,kem_lahan_pertanian,kem_sekolah,kem_berobat,kem_beribadah,kem_rekreasi) VALUES 
        ('$no_kk','$kemudahan_lokasi','$kemudahan_lahan','$kemudahan_sekolah','$kemudahan_berobat','$kemudahan_beribadah','$kemudahan_rekreasi')");

    $query1 = mysqli_query($con, "SELECT * FROM akses_tenaga_kesehatan WHERE (no_kk='$no_kk') ");
    if ($query) {
        $row = mysqli_fetch_assoc($query1);
        $_SESSION['no_kk'] = $row['no_kk'];
        echo "<script>window.location.href = '?page=form-pIVlanjutII&no_kk=$no_kk'</script>";
    } else {

        echo "Gagal" . mysqli_error($con);
    }
}

?>


<div class="card ">
    <div class="card-body">
        <div class="basic-form">
      

            <div class="card-body">
                <div class="basic-elements ">
                    <b >AKSES TENAGA KESEHATAN TERDEKAT</b>
                    <form class="mt-3" method="POST">
                        <div class="row">
                            <div class="col-lg-12">

                                <div class="form-row">
                                    <div class="col">
                                        <label>DOKTER SPESIALIS<span class="star">*</span></label>
                                        <input class="form-control" name="jarakdokterspesialis" type="text" placeholder="jarak (km) ..">
                                        <input type="hidden" name="no_kk" value="<?php echo $_GET['no_kk'] ?>">
                                    </div>
                                    <div class="col">
                                        <label>WAKTU TEMPUH (jam)<span class="star">*</span></label>
                                        <input type="text" name="waktedokterspesialis" class="form-control" onkeypress="return number(event)">
                                    </div>

                                    <div class="col">
                                        <label>KEMUDAHAN<span class="star">*</span></label>
                                        <select name="kemudahandokterspesialis" id="" class="form-control">
                                            <option value="Mudah">Mudah</option>
                                            <option value="Sulit">Sulit</option>
                                        </select>
                                    </div>
                                </div><br>



                                <div class="form-row">
                                    <div class="col">
                                        <label>DOKTER UMUM<span class="star">*</span></label>
                                        <input class="form-control" name="jarakdokterumum" type="text" placeholder="jarak (km) ..">
                                    </div>
                                    
                                    <div class="col">
                                        <label>WAKTU TEMPUH (jam)<span class="star">*</span></label>
                                        <input type="text" name="waktedokterumum" class="form-control" onkeypress="return number(event)">
                                    </div>

                                    <div class="col">
                                        <label>KEMUDAHAN<span class="star">*</span></label>
                                        <select name="kemudahandokterumum" id="" class="form-control">
                                            <option value="Mudah">Mudah</option>
                                            <option value="Sulit">Sulit</option>
                                        </select>
                                    </div>
                                </div><br>


                                <div class="form-row">
                                    <div class="col">
                                        <label>BIDAN<span class="star">*</span></label>
                                        <input class="form-control" name="jarakbidan" type="text" placeholder="jarak (km) ..">
                                    </div>
                                    <div class="col">
                                        <label>WAKTU TEMPUH (jam)<span class="star">*</span></label>
                                        <input type="text" name="waktebidan" class="form-control" onkeypress="return number(event)">
                                    </div>

                                    <div class="col">
                                        <label>KEMUDAHAN<span class="star">*</span></label>
                                        <select name="kemudahanbidan" id="" class="form-control">
                                            <option value="Mudah">Mudah</option>
                                            <option value="Sulit">Sulit</option>
                                        </select>
                                    </div>
                                </div><br>


                                <div class="form-row">
                                    <div class="col">
                                        <label>TENAGA KESEHATAN<span class="star">*</span></label>
                                        <input class="form-control" name="jaraktenagakesehatan" type="text" placeholder="jarak (km) ..">
                                    </div>
                                    <div class="col">
                                        <label>WAKTU TEMPUH (jam)<span class="star">*</span></label>
                                        <input type="text" name="waktetenagakesehatan" class="form-control" onkeypress="return number(event)">
                                    </div>

                                    <div class="col">
                                        <label>KEMUDAHAN<span class="star">*</span></label>
                                        <select name="kemudahantenagakesehatan" id="" class="form-control">
                                            <option value="Mudah">Mudah</option>
                                            <option value="Sulit">Sulit</option>
                                        </select>
                                    </div>
                                </div><br>

                                <div class="form-row">
                                    <div class="col">
                                        <label>DUSUN<span class="star">*</span></label>
                                        <input class="form-control" name="jarakdusun" type="text" placeholder="jarak (km) ..">
                                    </div>

                                    <div class="col">
                                        <label>WAKTU TEMPUH (jam)<span class="star">*</span></label>
                                        <input type="text" name="waktedusun" class="form-control" onkeypress="return number(event)">
                                    </div>

                                    <div class="col">
                                        <label>KEMUDAHAN<span class="star">*</span></label>
                                        <select name="kemudahandusun" id="" class="form-control">
                                            <option value="Mudah">Mudah</option>
                                            <option value="Sulit">Sulit</option>
                                        </select>
                                    </div>
                                </div><br>
                            </div>
                        </div>



                    </div>


                </div>
            </div>

        </div>
    </div>
</div>



</div>

<div class="card ">
    <div class="card-body">
        <div class="basic-form">
            <div class="text-justify mt-4">
                <b>AKSES PRASARANA TRANSPORTASI</b>
            </div>
            <div class="card-body">
                <div class="basic-elements ">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-row">
                                <div class="col">
                                    <label>LOKASI PEKERJAAN UTAMA</label>
                                    <select name="jenistransportasi_lokasi" id="" class="form-control">
                                        <option value="Darat">Darat</option>
                                        <option value="Air">Air</option>
                                        <option value="Udara">Udara</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label>PENGGUNAAN TRANSPORT</label>
                                    <select name="penggunaantransportasi_lokasi" id="" class="form-control">
                                        <option value="YA">YA</option>
                                        <option value="TIDAK">TIDAK</option>

                                    </select>
                                </div>
                                <div class="col">
                                    <label>WAKTE SEKALI JALAN</label>
                                    <input type="text" name="waktesekalijalan_lokasi" class="form-control" onkeypress="return number(event)">
                                </div>

                                <div class="col">
                                    <label>BIAYA SEKALI JALAN</label>
                                    <input type="text" class="form-control" name="biayasekalijalan_lokasi" onkeypress="return number(event)">
                                </div>

                                <div class="col">
                                    <label>KEMUDAHAN</label>
                                    <select name="kemudahan_lokasi" id="" class="form-control">
                                        <option value="Mudah">Mudah</option>
                                        <option value="Sulit">Sulit</option>
                                    </select>
                                </div>
                            </div><br>

                            

                            <div class="form-row">
                                <div class="col">
                                    <label>Lahan pertanian </label>
                                    <select name="jenistransportasi_lahan" id="" class="form-control">
                                        <option value="Darat">Darat</option>
                                        <option value="Air">Air</option>
                                        <option value="Udara">Udara</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label>PENGGUNAAN TRANSPORT</label>
                                    <select name="penggunaantransportasi_lahan" id="" class="form-control">
                                        <option value="YA">YA</option>
                                        <option value="TIDAK">TIDAK</option>

                                    </select>
                                </div>
                                <div class="col">
                                    <label>WAKTE SEKALI JALAN</label>
                                    <input type="text" name="waktesekalijalan_lahan" class="form-control" onkeypress="return number(event)">
                                </div>

                                <div class="col">
                                    <label>BIAYA SEKALI JALAN</label>
                                    <input type="text" class="form-control" name="biayasekalijalan_lahan" onkeypress="return number(event)">
                                </div>

                                <div class="col">
                                    <label>KEMUDAHAN</label>
                                    <select name="kemudahan_lahan" id="" class="form-control">
                                        <option value="Mudah">Mudah</option>
                                        <option value="Sulit">Sulit</option>
                                    </select>
                                </div>
                            </div><br>

                            <div class="form-row">
                                <div class="col">
                                    <label>SEKOLAH</label>
                                    <select name="jenistransportasi_sekolah" id="" class="form-control">
                                        <option value="Darat">Darat</option>
                                        <option value="Air">Air</option>
                                        <option value="Udara">Udara</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label>PENGGUNAAN TRANSPORT</label>
                                    <select name="penggunaantransportasi_sekolah" id="" class="form-control">
                                        <option value="YA">YA</option>
                                        <option value="TIDAK">TIDAK</option>

                                    </select>
                                </div>
                                <div class="col">
                                    <label>WAKTE SEKALI JALAN</label>
                                    <input type="text" name="waktesekalijalan_sekolah" class="form-control" onkeypress="return number(event)">
                                </div>

                                <div class="col">
                                    <label>BIAYA SEKALI JALAN</label>
                                    <input type="text" class="form-control" name="biayasekalijalan_sekolah" onkeypress="return number(event)">
                                </div>

                                <div class="col">
                                    <label>KEMUDAHAN</label>
                                    <select name="kemudahan_sekolah" id="" class="form-control">
                                        <option value="Mudah">Mudah</option>
                                        <option value="Sulit">Sulit</option>
                                    </select>
                                </div>
                            </div><br>

                            <div class="form-row">
                                <div class="col">
                                    <label>BEROBAT</label>
                                    <select name="jenistransportasi_berobat" id="" class="form-control">
                                        <option value="Darat">Darat</option>
                                        <option value="Air">Air</option>
                                        <option value="Udara">Udara</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label>PENGGUNAAN TRANSPORT</label>
                                    <select name="penggunaantransportasi_berobat" id="" class="form-control">
                                        <option value="YA">YA</option>
                                        <option value="TIDAK">TIDAK</option>

                                    </select>
                                </div>
                                <div class="col">
                                    <label>WAKTE SEKALI JALAN</label>
                                    <input type="text" name="waktesekalijalan_berobat" class="form-control" onkeypress="return number(event)">
                                </div>

                                <div class="col">
                                    <label>BIAYA SEKALI JALAN</label>
                                    <input type="text" class="form-control" name="biayasekalijalan_berobat" onkeypress="return number(event)">
                                </div>

                                <div class="col">
                                    <label>KEMUDAHAN</label>
                                    <select name="kemudahan_berobat" id="" class="form-control">
                                        <option value="Mudah">Mudah</option>
                                        <option value="Sulit">Sulit</option>
                                    </select>
                                </div>
                            </div><br>

                            <div class="form-row">
                                <div class="col">
                                    <label>BERIBADAH</label>
                                    <select name="jenistransportasi_beribadah" id="" class="form-control">
                                        <option value="Darat">Darat</option>
                                        <option value="Air">Air</option>
                                        <option value="Udara">Udara</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label>PENGGUNAAN TRANSPORT</label>
                                    <select name="penggunaantransportasi_beribadah" id="" class="form-control">
                                        <option value="YA">YA</option>
                                        <option value="TIDAK">TIDAK</option>

                                    </select>
                                </div>
                                <div class="col">
                                    <label>WAKTE SEKALI JALAN</label>
                                    <input type="text" name="waktesekalijalan_beribadah" class="form-control" onkeypress="return number(event)">
                                </div>

                                <div class="col">
                                    <label>BIAYA SEKALI JALAN</label>
                                    <input type="text" class="form-control" name="biayasekalijalan_beribadah" onkeypress="return number(event)">
                                </div>

                                <div class="col">
                                    <label>KEMUDAHAN</label>
                                    <select name="kemudahan_beribadah" id="" class="form-control">
                                        <option value="Mudah">Mudah</option>
                                        <option value="Sulit">Sulit</option>
                                    </select>
                                </div>
                            </div><br>
                            
                            <div class="form-row">
                                <div class="col">
                                    <label>REKREASI TERDEKAT</label>
                                    <select name="jenistransportasi_rekreasi" id="" class="form-control">
                                        <option value="Darat">Darat</option>
                                        <option value="Air">Air</option>
                                        <option value="Udara">Udara</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label>PENGGUNAAN TRANSPORT</label>
                                    <select name="penggunaantransportasi_rekreasi" id="" class="form-control">
                                        <option value="YA">YA</option>
                                        <option value="TIDAK">TIDAK</option>

                                    </select>
                                </div>
                                <div class="col">
                                    <label>WAKTE SEKALI JALAN</label>
                                    <input type="text" name="waktesekalijalan_rekreasi" class="form-control" onkeypress="return number(event)">
                                </div>

                                <div class="col">
                                    <label>BIAYA SEKALI JALAN</label>
                                    <input type="text" class="form-control" name="biayasekalijalan_rekreasi" onkeypress="return number(event)">
                                </div>

                                <div class="col">
                                    <label>KEMUDAHAN</label>
                                    <select name="kemudahan_rekreasi" id="" class="form-control">
                                        <option value="Mudah">Mudah</option>
                                        <option value="Sulit">Sulit</option>
                                    </select>
                                </div>
                            </div><br>



                            <button type="submit" name="next" class="btn btn-success btn-lg btn-block mt-3 float-right" id="next"><span class="next">NEXT</span></button>

                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>



</div>




























<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/style_formpIVlanjutI.css">
    <style>
        
    </style>
</head>

<body>
    <div class="container">

        <form action="" method="POST">

            <table border="1">
                <tr>
                    <th class="kotak">P423</th>
                    <th class="kotak" colspan="4" style="width:100%; position:relative; text-align:left; padding:10px;">
                        <h3 style="margin-left:20px;">AKSES TENAGA KESEHATAN TERDEKAT</h3>
                    </th>
                </tr>
                </tr>
                <tr>
                    <th class="no-border"></th>
                    <th style="">NO</th>
                    <th colspan="3" style="">FASILITAS</th>
                    <th style="">JARAK <br>(km)</th>
                    <th style="">WAKTU TEMPUH (jam)</th>
                    <th style="">KEMUDAHAN</th>

                </tr>
                <tbody>
                    <tr>
                        <td class="no-border"></td>
                        <td>1</td>
                        <td colspan="3"><label for="">Dokter spesialis</label></td>
                        <td colspan=""><input type="text" name="jarakdokterspesialis" onkeypress="return number(event)"></td>
                        <td><input type="text" name="waktedokterspesialis" onkeypress="return number(event)"></td>
                        <td><select name="kemudahandokterspesialis" id="">
                                <option value="Mudah">Mudah</option>
                                <option value="Sulit">Sulit</option>
                            </select></td>

                    </tr>
                    <tr>
                        <td class="no-border"></td>
                        <td>2</td>
                        <td colspan="3"><label for="">Dokter umum</label></td>
                        <td colspan=""><input type="text" name="jarakdokterumum" onkeypress="return number(event)"></td>
                        <td><input type="text" name="waktedokterumum" onkeypress="return number(event)"></td>
                        <td><select name="kemudahandokterumum" id="">
                                <option value="Mudah">Mudah</option>
                                <option value="Sulit">Sulit</option>
                            </select></td>
                    </tr>
                    </tr>
                    <tr>
                        <td class="no-border"></td>
                        <td>3</td>
                        <td colspan="3"><label for="">Bidan</label></td>
                        <td colspan=""><input type="text" name="jarakbidan" onkeypress="return number(event)"></td>
                        <td><input type="text" name="waktebidan" onkeypress="return number(event)"></td>
                        <td><select name="kemudahanbidan" id="">
                                <option value="Mudah">Mudah</option>
                                <option value="Sulit">Sulit</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td class="no-border"></td>
                        <td>4</td>
                        <td colspan="3"><label for="">Tenaga kesehatan</label></td>
                        <td colspan=""><input type="text" name="jaraktenagakesehatan" onkeypress="return number(event)"></td>
                        <td><input type="text" name="waktetenagakesehatan" onkeypress="return number(event)"></td>
                        <td><select name="kemudahantenagakesehatan" id="">
                                <option value="Mudah">Mudah</option>
                                <option value="Sulit">Sulit</option>
                            </select></td>
                    <tr>
                        <td class="no-border"></td>
                        <td>5</td>
                        <td colspan="3"><label for="">Dusun</label></td>
                        <td colspan=""><input type="text" name="jarakdusun" onkeypress="return number(event)"></td>
                        <td><input type="text" name="waktedusun" onkeypress="return number(event)"></td>
                        <td><select name="kemudahandusun" id="">
                                <option value="Mudah">Mudah</option>
                                <option value="Sulit">Sulit</option>
                            </select></td>
                    </tr>
                    <tr>

                        <input type="hidden" name='no_kk' onkeypress="return number(event)" value="<?php echo $_SESSION['no_kk'] ?>">

                    </tr>


                    <tr>
                        <th class="kotak">P424</th>
                        <th class="kotak" colspan="4" style="width:100%; position:relative; text-align:left; padding:10px;">
                            <h3 style="margin-left:20px;">AKSES PRASARANA TRANSPORTASI</h3>
                        </th>
                    </tr>
                    </tr>
                    <tr>
                        <th class="no-border"></th>
                        <th style="">NO</th>
                        <th colspan="" style="">TUJUAN</th>
                        <th style="">Jenis transportasi</th>
                        <th style="">Penggunaan transportasi</th>
                        <th style="">Wakte sekali jalan</th>
                        <th style="">Biaya sekali jalan</th>
                        <th style="">Kemudahan</th>

                    </tr>
                <tbody>
                    <tr>
                        <td class="no-border"></td>
                        <td>1</td>
                        <td><label for="">Lokasi pekerjaan utama</label></td>
                        <td><select name="jenistransportasi_lokasi" id="">
                                <option value="Darat">Darat</option>
                                <option value="Air">Air</option>
                                <option value="Udara">Udara</option>
                            </select></td>
                        <td><select name="penggunaantransportasi_lokasi" id="">
                                <option value="YA">YA</option>
                                <option value="TIDAK">TIDAK</option>

                            </select></td>
                        <td><input type="text" name="waktesekalijalan_lokasi" onkeypress="return number(event)"></td>
                        <td><input type="text" name="biayasekalijalan_lokasi" onkeypress="return number(event)"></td>
                        <td><select name="kemudahan_lokasi" id="">
                                <option value="Mudah">Mudah</option>
                                <option value="Sulit">Sulit</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td class="no-border"></td>
                        <td>2</td>
                        <td><label for="">Lahan pertanian yang sedang diusahakan</label></td>
                        <td><select name="jenistransportasi_lahan" id="">
                                <option value="Darat">Darat</option>
                                <option value="Air">Air</option>
                                <option value="Udara">Udara</option>

                            </select></td>
                        <td><select name="penggunaantransportasi_lahan" id="">
                                <option value="YA">YA</option>
                                <option value="TIDAK">TIDAK</option>

                            </select></td>
                        <td><input type="text" name="waktesekalijalan_lahan" onkeypress="return number(event)"></td>
                        <td><input type="text" name="biayasekalijalan_lahan" onkeypress="return number(event)"></td>
                        <td><select name="kemudahan_lahan" id="">
                                <option value="Mudah">Mudah</option>
                                <option value="Sulit">Sulit</option>
                            </select></td>
                    </tr>
                    </tr>
                    <tr>
                        <td class="no-border"></td>
                        <td>3</td>
                        <td><label for="">Sekolah</label></td>
                        <td><select name="jenistransportasi_sekolah" id="">
                                <option value="Darat">Darat</option>
                                <option value="Air">Air</option>
                                <option value="Udara">Udara</option>

                            </select></td>
                        <td><select name="penggunaantransportasi_sekolah" id="">
                                <option value="YA">YA</option>
                                <option value="TIDAK">TIDAK</option>

                            </select></td>
                        <td><input type="text" name="waktesekalijalan_sekolah" onkeypress="return number(event)"></td>
                        <td><input type="text" name="biayasekalijalan_sekolah" onkeypress="return number(event)"></td>
                        <td><select name="kemudahan_sekolah" id="">
                                <option value="Mudah">Mudah</option>
                                <option value="Sulit">Sulit</option>
                            </select></td>
                    </tr>
                    </tr>
                    <tr>
                        <td class="no-border"></td>
                        <td>4</td>
                        <td><label for="">Berobat</label></td>
                        <td><select name="jenistransportasi_berobat" id="">
                                <option value="Darat">Darat</option>
                                <option value="Air">Air</option>
                                <option value="Udara">Udara</option>

                            </select></td>
                        <td><select name="penggunaantransportasi_berobat" id="">
                                <option value="YA">YA</option>
                                <option value="TIDAK">TIDAK</option>

                            </select></td>
                        <td><input type="text" name="waktesekalijalan_berobat" onkeypress="return number(event)"></td>
                        <td><input type="text" name="biayasekalijalan_berobat" onkeypress="return number(event)"></td>
                        <td><select name="kemudahan_berobat" id="">
                                <option value="Mudah">Mudah</option>
                                <option value="Sulit">Sulit</option>
                            </select></td>
                    </tr>

                    <tr>
                        <td class="no-border"></td>
                        <td>5</td>
                        <td><label for="">Beribadah mingguan / bulanan / tahunan</label></td>
                        <td><select name="jenistransportasi_beribadah" id="">
                                <option value="Darat">Darat</option>
                                <option value="Air">Air</option>
                                <option value="Udara">Udara</option>

                            </select></td>
                        <td><select name="penggunaantransportasi_beribadah" id="">
                                <option value="YA">YA</option>
                                <option value="TIDAK">TIDAK</option>

                            </select></td>
                        <td><input type="text" name="waktesekalijalan_beribadah" onkeypress="return number(event)"></td>
                        <td><input type="text" name="biayasekalijalan_beribadah" onkeypress="return number(event)"></td>
                        <td><select name="kemudahan_beribadah" id="">
                                <option value="Mudah">Mudah</option>
                                <option value="Sulit">Sulit</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td class="no-border"></td>
                        <td>6</td>
                        <td><label for="">Rekreasi terdekat</label></td>
                        <td><select name="jenistransportasi_rekreasi" id="">
                                <option value="Darat">Darat</option>
                                <option value="Air">Air</option>
                                <option value="Udara">Udara</option>

                            </select></td>
                        <td><select name="penggunaantransportasi_rekreasi" id="">
                                <option value="YA">YA</option>
                                <option value="TIDAK">TIDAK</option>

                            </select></td>
                        <td><input type="text" name="waktesekalijalan_rekreasi" onkeypress="return number(event)"></td>
                        <td><input type="text" name="biayasekalijalan_rekreasi" onkeypress="return number(event)"></td>
                        <td><select name="kemudahan_rekreasi" id="">
                                <option value="Mudah">Mudah</option>
                                <option value="Sulit">Sulit</option>
                            </select></td>
                    </tr>




            </table>
            <section class="section">
                <button type="submit" name="next" class="next" value=""><span class="next"></span>NEXT</button>

            </section>
        </form>

    </div> -->

    <script>
        function number(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))

                return false;
            return true;
        }
    </script>

</body>

</html>