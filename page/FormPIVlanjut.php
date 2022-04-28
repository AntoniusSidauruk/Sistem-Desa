<?php

error_reporting(0);
session_start();

include "./config/koneksi.php";

if (isset($_POST['next'])) {
    $jarakpaud = $_POST['jarakpaud'];
    $jaraktk = $_POST['jaraktk'];
    $jaraksd = $_POST['jaraksd'];
    $jaraksmp = $_POST['jaraksmp'];
    $jaraksma = $_POST['jaraksma'];
    $jarakperguruan = $_POST['jarakperguruan'];
    $jarakpesantren = $_POST['jarakpesantren'];
    $jarakseminari = $_POST['jarakseminari'];
    $jarakpendidikan = $_POST['jarakpendidikan'];

    $waktepaud = $_POST['waktepaud'];
    $waktetk = $_POST['waktetk'];
    $waktesd = $_POST['waktesd'];
    $waktesmp = $_POST['waktesmp'];
    $waktesma = $_POST['waktesma'];
    $wakteperguruan = $_POST['wakteperguruan'];
    $waktepesantren = $_POST['waktepesantren'];
    $wakteseminari = $_POST['wakteseminari'];
    $waktependidikan = $_POST['waktependidikan'];

    $kemudahanpaud = $_POST['kemudahanpaud'];
    $kemudahantk = $_POST['kemudahantk'];
    $kemudahansd = $_POST['kemudahansd'];
    $kemudahansmp = $_POST['kemudahansmp'];
    $kemudahansma = $_POST['kemudahansma'];
    $kemudahanperguruan = $_POST['kemudahanperguruan'];
    $kemudahanpesantren = $_POST['kemudahanpesantren'];
    $kemudahanseminari = $_POST['kemudahanseminari'];
    $kemudahanpendidikan = $_POST['kemudahanpendidikan'];

    $jarakrumkit = $_POST['jarakrumkit'];
    $jarakrumkitbersalin = $_POST['jarakrumkitbersalin'];
    $jarakpoliklinik = $_POST['jarakpoliklinik'];
    $jarakpuskesmas = $_POST['jarakpuskesmas'];
    $jarakpustu = $_POST['jarakpustu'];
    $jarakpolindes = $_POST['jarakpolindes'];
    $jarakposkesdes = $_POST['jarakposkesdes'];
    $jarakposyandu = $_POST['jarakposyandu'];
    $jarakapotik = $_POST['jarakapotik'];
    $jaraktokoobat = $_POST['jaraktokoobat'];

    $wakterumkit = $_POST['wakterumkit'];
    $wakterumkitbersalin = $_POST['wakterumkitbersalin'];
    $waktepoliklinik = $_POST['waktepoliklinik'];
    $waktepuskesmas = $_POST['waktepuskesmas'];
    $waktepustu = $_POST['waktepustu'];
    $waktepolindes = $_POST['waktepolindes'];
    $wakteposkesdes = $_POST['wakteposkesdes'];
    $wakteposyandu = $_POST['wakteposyandu'];
    $wakteapotik = $_POST['wakteapotik'];
    $waktetokoobat = $_POST['waktetokoobat'];

    $kemudahanrumkit = $_POST['kemudahanrumkit'];
    $kemudahanrumkitbersalin = $_POST['kemudahanrumkitbersalin'];
    $kemudahanpoliklinik = $_POST['kemudahanpoliklinik'];
    $kemudahanpuskesmas = $_POST['kemudahanpuskesmas'];
    $kemudahanpustu = $_POST['kemudahanpustu'];
    $kemudahanpolindes = $_POST['kemudahanpolindes'];
    $kemudahanposkesdes = $_POST['kemudahanposkesdes'];
    $kemudahanposyandu = $_POST['kemudahanposyandu'];
    $kemudahanapotik = $_POST['kemudahanapotik'];
    $kemudahantokoobat = $_POST['kemudahantokoobat'];

    $no_kk = $_GET['no_kk'];

    $query = mysqli_query($con, "INSERT INTO akses_pendidikan (no_kk,paud,tk,sd,smp,sma,perguruan_tinggi,pesantren,seminari,pendidikan_keagamaan) VALUES 
        ('$no_kk','$jarakpaud','$jaraktk','$jaraksd','$jaraksmp','$jaraksma','$jarakperguruan','$jarakpesantren','$jarakseminari','$jarakpendidikan')");

    $query .= mysqli_query($con, "INSERT INTO wakte_pendidikan (no_kk,wakte_paud,wakte_tk,wakte_sd,wakte_smp,wakte_sma,wakte_perguruan,wakte_pesantren,wakte_seminari,wakte_pendidikan_keagamaan) VALUES 
        ('$no_kk','$waktepaud','$waktetk','$waktesd','$waktesmp','$waktesma','$wakteperguruan','$waktepesantren','$wakteseminari','$waktependidikan') ");

    $query .= mysqli_query($con, "INSERT INTO kemudahan_pendidikan (no_kk,kem_paud,kem_tk,kem_sd,kem_smp,kem_sma,kem_perguruan_tinggi,kem_pesantren,kem_seminari,kem_pendidikan_keagamaan) VALUES 
        ('$no_kk','$kemudahanpaud','$kemudahantk','$kemudahansd','$kemudahansmp','$kemudahansma','$kemudahanperguruan','$kemudahanpesantren','$kemudahanseminari','$kemudahanpendidikan')");

    $query .= mysqli_query($con, "INSERT INTO akses_fasilitas_kesehatan (no_kk,rumkit,rumki_bersalin,poliklinik,puskesmas,pustu,polindes,poskesdes,posyandu,apotik,toko_obat) VALUES 
        ('$no_kk','$jarakrumkit','$jarakrumkitbersalin','$jarakpoliklinik','$jarakpuskesmas','$jarakpustu','$jarakpolindes','$jarakposkesdes','$jarakposyandu','$jarakapotik','$jaraktokoobat') ");

    $query .= mysqli_query($con, "INSERT INTO wakte_fasilitas (no_kk,wakte_rumkit,wakte_rumkit_bersalin,wakte_poliklinik,wakte_puskesmas,wakte_pustu,wakte_polindes,wakte_poskesdes,wakte_posyandu,wakte_apotik,wakte_toko_obat) VALUES 
        ('$no_kk','$wakterumkit','$wakterumkitbersalin','$waktepoliklinik','$waktepuskesmas','$waktepustu','$waktepolindes','$wakteposkesdes','$wakteposyandu','$wakteapotik', '$waktetokoobat') ");

    $query .= mysqli_query($con, "INSERT INTO kemudahan_fasilitas (no_kk,kem_rumkit,kem_rumkit_bersalin,kem_poliklinik,kem_puskesmas,kem_pustu,kem_polindes,kem_poskesdes,kem_posyandu,kem_apotik,kem_toko_obat) VALUES 
        ('$no_kk','$kemudahanrumkit','$kemudahanrumkitbersalin','$kemudahanpoliklinik','$kemudahanpuskesmas','$kemudahanpustu','$kemudahanpolindes','$kemudahanposkesdes','$kemudahanposyandu','$kemudahanapotik','$kemudahantokoobat') ");

    $query1 = mysqli_query($con, "SELECT * FROM akses_pendidikan WHERE (no_kk='$no_kk')");
    if ($query) {
        $row = mysqli_fetch_assoc($query1);
        $_SESSION['no_kk'] = $row['no_kk'];
        echo "<script>window.location.href = '?page=form-pIVlanjutI&no_kk=$no_kk'</script>";
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
                    <b >AKSES PERNDIDIKAN TERDEKAT</b>
                    <form class="mt-3" method="POST">
                        <div class="row">
                            <div class="col-lg-12">

                                <div class="form-row">
                                    <div class="col">
                                        <label>PAUD<span class="star">*</span></label>
                                        <input class="form-control" name="jarakpaud" type="text" placeholder="jarak (km) ..">
                                        <input type="hidden" name="no_kk" value="<?php echo $_GET['no_kk'] ?>" >
                                    </div>
                                    <div class="col">
                                        <label>WAKTU TEMPUH<span class="star">*</span></label>
                                        <input type="text" name="waktepaud" class="form-control" onkeypress="return number(event)">
                                    </div>

                                    <div class="col">
                                        <label>KEMUDAHAN<span class="star">*</span></label>
                                        <select name="kemudahanpaud" id="" class="form-control">
                                            <option value="Mudah">Mudah</option>
                                            <option value="Sulit">Sulit</option>
                                        </select>
                                    </div>
                                </div><br>



                                <div class="form-row">
                                    <div class="col">
                                        <label>TK / RA<span class="star">*</span></label>
                                        <input class="form-control" name="jaraktk" type="text" placeholder="jarak (km) ..">
                                    </div>
                                    <div class="col">
                                        <label>WAKTU TEMPUH<span class="star">*</span></label>
                                        <input type="text" name="waktetk" class="form-control" onkeypress="return number(event)">
                                    </div>

                                    <div class="col">
                                        <label>KEMUDAHAN<span class="star">*</span></label>
                                        <select name="kemudahantk" id="" class="form-control">
                                            <option value="Mudah">Mudah</option>
                                            <option value="Sulit">Sulit</option>
                                        </select>
                                    </div>
                                </div><br>


                                <div class="form-row">
                                    <div class="col">
                                        <label>SD / MI SEDERAJAT<span class="star">*</span></label>
                                        <input class="form-control" name="jaraksd" type="text" placeholder="jarak (km) ..">
                                    </div>
                                    <div class="col">
                                        <label>WAKTU TEMPUH<span class="star">*</span></label>
                                        <input type="text" name="waktesd" class="form-control" onkeypress="return number(event)">
                                    </div>

                                    <div class="col">
                                        <label>KEMUDAHAN<span class="star">*</span></label>
                                        <select name="kemudahansd" id="" class="form-control">
                                            <option value="Mudah">Mudah</option>
                                            <option value="Sulit">Sulit</option>
                                        </select>
                                    </div>
                                </div><br>


                                <div class="form-row">
                                    <div class="col">
                                        <label for="">SMP / MTS atau sederajat</label>
                                        <input type="text" name="jaraksmp" class="form-control" onkeypress="return number(event)" placeholder="jarak ..">
                                    </div>
                                    <div class="col">
                                        <label>WAKTU TEMPUH</label>
                                        <input type="text" name="waktesmp" class="form-control" onkeypress="return number(event)">
                                    </div>
                                    <div class="col">
                                        <label>KEMUDAHAN</label>
                                        <select name="kemudahansmp" id="" class="form-control">
                                            <option value="Mudah">Mudah</option>
                                            <option value="Sulit">Sulit</option>
                                        </select>
                                    </div>
                                </div><br>

                                <div class="form-row">
                                    <div class="col">
                                        <label>SMA / MA SEDERAJAT</label>
                                        <input type="text" name="jaraksma" class="form-control" onkeypress="return number(event)" placeholder="jarak ..">
                                    </div>
                                    <div class="col">
                                        <label>WAKTU TEMPUH</label>
                                        <input type="text" name="waktesma" class="form-control" onkeypress="return number(event)">
                                    </div>
                                    <div class="col">
                                        <label>KEMUDAHAN</label>
                                        <select name="kemudahansma" class="form-control" id="">
                                            <option value="Mudah">Mudah</option>
                                            <option value="Sulit">Sulit</option>
                                        </select>
                                    </div>
                                </div><br>

                                <div class="form-row">
                                    <div class="col">
                                        <label>PERGURUAN TINGGI</label>
                                        <input type="text" name="jarakperguruan" class="form-control" onkeypress="return number(event)"placeholder="jarak ..">
                                    </div>
                                    <div class="col">
                                        <label>WAKTU TEMPUH</label>
                                        <input type="text" name="wakteperguruan" class="form-control" onkeypress="return number(event)">
                                    </div>
                                    <div class="col">
                                        <label>KEMUDAHAN</label>
                                        <select name="kemudahanperguruan" class="form-control" id="">
                                            <option value="Mudah">Mudah</option>
                                            <option value="Sulit">Sulit</option>
                                        </select>
                                    </div>
                                </div><br>

                                <div class="form-row">
                                    <div class="col">
                                        <label>PESANTREN</label>
                                        <input type="text" name="jarakpesantren" class="form-control" onkeypress="return number(event)"placeholder="jarak ..">
                                    </div>
                                    <div class="col">
                                        <label>WAKTU TEMPUH</label>
                                        <input type="text" name="waktepesantren" class="form-control" onkeypress="return number(event)">
                                    </div>
                                    <div class="col">
                                        <label>KEMUDAHAN</label>
                                        <select name="kemudahanpesantren" class="form-control" id="">
                                            <option value="Mudah">Mudah</option>
                                            <option value="Sulit">Sulit</option>
                                        </select>
                                    </div>
                                </div><br>

                                <div class="form-row">
                                    <div class="col">
                                        <label>SEMINARI</label>
                                        <input type="text" name="jarakseminari" placeholder="jarak .."class="form-control" onkeypress="return number(event)">
                                    </div>
                                    <div class="col">
                                        <label>WAKTU TEMPUH</label>
                                        <input type="text" name="wakteseminari" class="form-control" onkeypress="return number(event)">
                                    </div>
                                    <div class="col">
                                        <label>KEMUDAHAN</label>
                                        <select name="kemudahanseminari" class="form-control" id="">
                                            <option value="Mudah">Mudah</option>
                                            <option value="Sulit">Sulit</option>
                                        </select>
                                    </div>
                                </div><br>

                                <div class="form-row">
                                    <div class="col">
                                        <label>PENDIDIKAN KEAGAMAAN LAIN</label>
                                        <input type="text" name="jarakpendidikan" class="form-control" onkeypress="return number(event)" placeholder="jarak ..">
                                    </div>
                                    <div class="col">
                                        <label>WAKTU TEMPUH</label>
                                        <input type="text" name="waktependidikan" class="form-control" onkeypress="return number(event)">
                                    </div>
                                    <div class="col">
                                        <label>KEMUDAHAN</label>
                                        <select name="kemudahanpendidikan" class="form-control" id="">
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
                <b>AKSES FASILITAS KESEHATAN TERDEKAT</b>
            </div>
            <div class="card-body">
                <div class="basic-elements ">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-row">
                                    <div class="col">
                                        <label>RUMAH SAKIT</label>
                                        <input type="text" name="jarakrumkit" class="form-control" onkeypress="return number(event)" placeholder="jarak ..">
                                    </div>
                                    <div class="col">
                                        <label>WAKTU TEMPUH</label>
                                        <input type="text" name="wakterumkit" class="form-control" onkeypress="return number(event)">
                                    </div>
                                    <div class="col">
                                        <label>KEMUDAHAN</label>
                                        <select name="kemudahanrumkit" class="form-control" id="">
                                            <option value="Mudah">Mudah</option>
                                            <option value="Sulit">Sulit</option>
                                        </select>
                                    </div>
                                </div><br>

                                <div class="form-row">
                                    <div class="col">
                                        <label>RUMAH SAKIT BERSALIN</label>
                                        <input type="text" name="jarakrumkitbersalin" class="form-control" onkeypress="return number(event)" placeholder="jarak ..">
                                    </div>
                                    <div class="col">
                                        <label>WAKTU TEMPUH</label>
                                        <input type="text" name="wakterumkitbersalin" class="form-control" onkeypress="return number(event)">
                                    </div>
                                    <div class="col">
                                        <label>KEMUDAHAN</label>
                                        <select name="kemudahanrumkitbersalin" class="form-control" id="">
                                            <option value="Mudah">Mudah</option>
                                            <option value="Sulit">Sulit</option>
                                        </select>
                                    </div>
                                </div><br>

                                <div class="form-row">
                                    <div class="col">
                                        <label>POLIKLINIK</label>
                                        <input type="text" name="jarakpoliklinik" class="form-control" onkeypress="return number(event)"placeholder="jarak ..">
                                    </div>
                                    <div class="col">
                                        <label>WAKTU TEMPUH</label>
                                        <input type="text" name="waktepoliklinik" class="form-control" onkeypress="return number(event)">
                                    </div>
                                    <div class="col">
                                        <label>KEMUDAHAN</label>
                                        <select name="kemudahanpoliklinik" class="form-control" id="">
                                            <option value="Mudah">Mudah</option>
                                            <option value="Sulit">Sulit</option>
                                        </select>
                                    </div>
                                </div><br>

                                <div class="form-row">
                                    <div class="col">
                                        <label>PUSKESMAS</label>
                                        <input type="text" name="jarakpuskesmas" class="form-control" onkeypress="return number(event)"placeholder="jarak ..">
                                    </div>
                                    <div class="col">
                                        <label>WAKTU TEMPUH</label>
                                        <input type="text" name="waktepuskesmas" class="form-control" onkeypress="return number(event)">
                                    </div>
                                    <div class="col">
                                        <label>KEMUDAHAN</label>
                                        <select name="kemudahanpuskesmas" class="form-control" id="">
                                            <option value="Mudah">Mudah</option>
                                            <option value="Sulit">Sulit</option>
                                        </select>
                                    </div>
                                </div><br>

                                <div class="form-row">
                                    <div class="col">
                                        <label>PUSTU</label>
                                        <input type="text" name="jarakpustu" class="form-control" onkeypress="return number(event)"placeholder="jarak ..">
                                    </div>
                                    <div class="col">
                                        <label>WAKTU TEMPUH</label>
                                        <input type="text" name="waktepustu" class="form-control" onkeypress="return number(event)">
                                    </div>
                                    <div class="col">
                                        <label>KEMUDAHAN</label>
                                        <select name="kemudahanpustu" class="form-control" id="">
                                            <option value="Mudah">Mudah</option>
                                            <option value="Sulit">Sulit</option>
                                        </select>
                                    </div>
                                </div><br>
                         

                                <div class="form-row">
                                    <div class="col">
                                        <label>POLINDES</label>
                                        <input type="text" name="jarakpolindes" class="form-control" onkeypress="return number(event)"placeholder="jarak ..">
                                    </div>
                                    <div class="col">
                                        <label>WAKTU TEMPUH</label>
                                        <input type="text" name="waktepolindes" class="form-control" onkeypress="return number(event)">
                                    </div>
                                    <div class="col">
                                        <label>KEMUDAHAN</label>
                                        <select name="kemudahanpolindes" class="form-control" id="">
                                            <option value="Mudah">Mudah</option>
                                            <option value="Sulit">Sulit</option>
                                        </select>
                                    </div>
                                </div><br>

                                <div class="form-row">
                                    <div class="col">
                                        <label>POSKESDES</label>
                                        <input type="text" name="jarakposkesdes" class="form-control" onkeypress="return number(event)"placeholder="jarak ..">
                                    </div>
                                    <div class="col">
                                        <label>WAKTU TEMPUH</label>
                                        <input type="text" name="wakteposkesdes" class="form-control" onkeypress="return number(event)">
                                    </div>
                                    <div class="col">
                                        <label>KEMUDAHAN</label>
                                        <select name="kemudahanposkesdes" class="form-control" id="">
                                            <option value="Mudah">Mudah</option>
                                            <option value="Sulit">Sulit</option>
                                        </select>
                                    </div>
                                </div><br>

                                <div class="form-row">
                                    <div class="col">
                                        <label>POSYANDU</label>
                                        <input type="text" name="jarakposyandu" class="form-control" onkeypress="return number(event)"placeholder="jarak ..">
                                    </div>
                                    <div class="col">
                                        <label>WAKTU TEMPUH</label>
                                        <input type="text" name="wakteposyandu" class="form-control" onkeypress="return number(event)">
                                    </div>
                                    <div class="col">
                                        <label>KEMUDAHAN</label>
                                        <select name="kemudahanposyandu" class="form-control" id="">
                                            <option value="Mudah">Mudah</option>
                                            <option value="Sulit">Sulit</option>
                                        </select>
                                    </div>
                                </div><br>

                                <div class="form-row">
                                    <div class="col">
                                        <label>APOTIK</label>
                                        <input type="text" name="jarakapotik" class="form-control" onkeypress="return number(event)"placeholder="jarak ..">
                                    </div>
                                    <div class="col">
                                        <label>WAKTU TEMPUH</label>
                                        <input type="text" name="wakteapotik" class="form-control" onkeypress="return number(event)">
                                    </div>
                                    <div class="col">
                                        <label>KEMUDAHAN</label>
                                        <select name="kemudahanapotik" class="form-control" id="">
                                            <option value="Mudah">Mudah</option>
                                            <option value="Sulit">Sulit</option>
                                        </select>
                                    </div>
                                </div><br>

                                <div class="form-row">
                                    <div class="col">
                                        <label>TOKO OBAT</label>
                                        <input type="text" name="jaraktokoobat" class="form-control" onkeypress="return number(event)"placeholder="jarak ..">
                                    </div>
                                    <div class="col">
                                        <label>WAKTU TEMPUH</label>
                                        <input type="text" name="waktetokoobat" class="form-control" onkeypress="return number(event)">
                                    </div>
                                    <div class="col">
                                        <label>KEMUDAHAN</label>
                                        <select name="kemudahantokoobat" class="form-control" id="">
                                            <option value="Mudah">Mudah</option>
                                            <option value="Sulit">Sulit</option>
                                        </select>
                                    </div>
                                </div>




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
<link rel="stylesheet" type="text/css" href="./assets/css/style_formpIV.css">
</head>

<body>
<div class="container">

    <form action="" method="POST">

        <table border="1">
            <tr>
                <th class="kotak">P421</th>
                <th class="kotak" colspan="4" style="width:100%; position:relative; text-align:left; padding:10px;">
                    <h3 style="margin-left:20px;">AKSES PENDIDIKAN TERDEKAT</h3>
                </th>
            </tr>
            </tr>
            <tr>
                <th class="no-border"></th>
                <th style="">NO</th>
                <th style="width:400px;">FASILITAS</th>
                <th style="">JARAK <br>(km)</th>
                <th style="">WAKTU TEMPUH (jam)</th>
                <th style="">KEMUDAHAN</th>

            </tr>
            <tbody>
                <tr>
                    <td class="no-border"></td>
                    <td>1</td>
                    <td><label for="">PAUD</label></td>
                    <td colspan=""><input type="text" name="jarakpaud" onkeypress="return number(event)"></td>
                    <td><input type="text" name="waktepaud" onkeypress="return number(event)"></td>
                    <td><select name="kemudahanpaud" id="">
                            <option value="Mudah">Mudah</option>
                            <option value="Sulit">Sulit</option>
                        </select></td>
                </tr>
                <tr>
                    <td class="no-border"></td>
                    <td>2</td>
                    <td><label for="">TK / RA</label></td>
                    <td colspan=""><input type="text" name="jaraktk" onkeypress="return number(event)"></td>
                    <td><input type="text" name="waktetk" onkeypress="return number(event)"></td>
                    <td><select name="kemudahantk" id="">
                            <option value="Mudah">Mudah</option>
                            <option value="Sulit">Sulit</option>
                        </select></td>
                </tr>
                <tr>
                    <td class="no-border"></td>
                    <td>3</td>
                    <td><label for="">SD / MI atau sederajat</label></td>
                    <td colspan=""><input type="text" name="jaraksd" onkeypress="return number(event)"></td>
                    <td><input type="text" name="waktesd" onkeypress="return number(event)"></td>
                    <td><select name="kemudahansd" id="">
                            <option value="Mudah">Mudah</option>
                            <option value="Sulit">Sulit</option>
                        </select></td>
                    <input type="hidden" name="no_kk" value="<?php session_start();
                                                                echo $_SESSION['no_kk'] ?>">
                </tr>
                <tr>
                    <td class="no-border"></td>
                    <td>4</td>
                    <td><label for="">SMP / MTS atau sederajat</label></td>
                    <td colspan=""><input type="text" name="jaraksmp" onkeypress="return number(event)"></td>
                    <td><input type="text" name="waktesmp" onkeypress="return number(event)"></td>
                    <td><select name="kemudahansmp" id="">
                            <option value="Mudah">Mudah</option>
                            <option value="Sulit">Sulit</option>
                        </select></td>
                </tr>

                <tr>
                    <td class="no-border"></td>
                    <td>5</td>
                    <td><label for="">SMA / MA atau sederajat</label></td>
                    <td colspan=""><input type="text" name="jaraksma" onkeypress="return number(event)"></td>
                    <td><input type="text" name="waktesma" onkeypress="return number(event)"></td>
                    <td><select name="kemudahansma" id="">
                            <option value="Mudah">Mudah</option>
                            <option value="Sulit">Sulit</option>
                        </select></td>
                </tr>
                <tr>
                    <td class="no-border"></td>
                    <td>6</td>
                    <td><label for="">Perguruan Tinggi</label></td>
                    <td colspan=""><input type="text" name="jarakperguruan" onkeypress="return number(event)"></td>
                    <td><input type="text" name="wakteperguruan" onkeypress="return number(event)"></td>
                    <td><select name="kemudahanperguruan" id="">
                            <option value="Mudah">Mudah</option>
                            <option value="Sulit">Sulit</option>
                        </select></td>
                </tr>
                <tr>
                    <td class="no-border"></td>
                    <td>7</td>
                    <td><label for="">Pesantren</label></td>
                    <td colspan=""><input name="jarakpesantren" type="text" onkeypress="return number(event)"></td>
                    <td><input type="text" name="waktepesantren" onkeypress="return number(event)"></td>
                    <td><select name="kemudahanpesantren" id="">
                            <option value="Mudah">Mudah</option>
                            <option value="Sulit">Sulit</option>
                        </select></td>
                </tr>
                <tr>
                    <td class="no-border"></td>
                    <td>8</td>
                    <td><label for="">Seminari</label></td>
                    <td colspan=""><input type="text" name="jarakseminari" onkeypress="return number(event)"></td>
                    <td><input type="text" name="wakteseminari" onkeypress="return number(event)"></td>
                    <td><select name="kemudahanseminari" id="">
                            <option value="Mudah">Mudah</option>
                            <option value="Sulit">Sulit</option>
                        </select></td>
                </tr>

                <tr>
                    <td class="no-border"></td>
                    <td>9</td>
                    <td><label for="">Pendidikan keagamaan lain</label></td>
                    <td colspan=""><input name="jarakpendidikan" type="text" onkeypress="return number(event)"></td>
                    <td><input type="text" name="waktependidikan" onkeypress="return number(event)"></td>
                    <td><select name="kemudahanpendidikan" id="">
                            <option value="Mudah">Mudah</option>
                            <option value="Sulit">Sulit</option>
                        </select></td>
                </tr>

                <tr>
                    <th class="kotak">P422</th>
                    <th class="kotak" colspan="4" style="width:100%; position:relative; text-align:left; padding:10px;">
                        <h3 style="margin-left:20px;">AKSES FASILITAS KESEHATAN TERDEKAT</h3>
                    </th>
                </tr>
                </tr>
                <tr>
                    <th class="no-border"></th>
                    <th style="">NO</th>
                    <th style="width:400px;">FASILITAS</th>
                    <th style="">JARAK <br>(km)</th>
                    <th style="">WAKTU TEMPUH (jam)</th>
                    <th style="">KEMUDAHAN</th>

                </tr>
            <tbody>
                <tr>
                    <td class="no-border"></td>
                    <td>1</td>
                    <td><label for="">Rumah sakit</label></td>
                    <td colspan=""><input type="text" name="jarakrumkit" onkeypress="return number(event)"></td>
                    <td><input type="text" name="wakterumkit" onkeypress="return number(event)"></td>
                    <td><select name="kemudahanrumkit" id="">
                            <option value="Mudah">Mudah</option>
                            <option value="Sulit">Sulit</option>
                        </select></td>
                </tr>
                <tr>
                    <td class="no-border"></td>
                    <td>2</td>
                    <td><label for="">Rumah sakit bersalin</label></td>
                    <td colspan=""><input type="text" name="jarakrumkitbersalin" onkeypress="return number(event)"></td>
                    <td><input type="text" name="wakterumkitbersalin" onkeypress="return number(event)"></td>
                    <td><select name="kemudahanrumkitbersalin" id="">
                            <option value="Mudah">Mudah</option>
                            <option value="Sulit">Sulit</option>
                        </select></td>
                </tr>
                <tr>
                    <td class="no-border"></td>
                    <td>3</td>
                    <td><label for="">Poliklinik</label></td>
                    <td colspan=""><input type="text" name="jarakpoliklinik" onkeypress="return number(event)"></td>
                    <td><input type="text" name="waktepoliklinik" onkeypress="return number(event)"></td>
                    <td><select name="kemudahanpoliklinik" id="">
                            <option value="Mudah">Mudah</option>
                            <option value="Sulit">Sulit</option>
                        </select></td>
                </tr>
                <tr>
                    <td class="no-border"></td>
                    <td>4</td>
                    <td><label for="">Puskesmas</label></td>
                    <td colspan=""><input type="text" name="jarakpuskesmas" onkeypress="return number(event)"></td>
                    <td><input type="text" name="waktepuskesmas" onkeypress="return number(event)"></td>
                    <td><select name="kemudahanpuskesmas" id="">
                            <option value="Mudah">Mudah</option>
                            <option value="Sulit">Sulit</option>
                        </select></td>
                </tr>

                <tr>
                    <td class="no-border"></td>
                    <td>5</td>
                    <td><label for="">Pustu</label></td>
                    <td colspan=""><input type="text" name="jarakpustu" onkeypress="return number(event)"></td>
                    <td><input type="text" name="waktepustu" onkeypress="return number(event)"></td>
                    <td><select name="kemudahanpustu" id="">
                            <option value="Mudah">Mudah</option>
                            <option value="Sulit">Sulit</option>
                        </select></td>
                </tr>
                <tr>
                    <td class="no-border"></td>
                    <td>6</td>
                    <td><label for="">Polindes</label></td>
                    <td colspan=""><input type="text" name="jarakpolindes" onkeypress="return number(event)"></td>
                    <td><input type="text" name="waktepolindes" onkeypress="return number(event)"></td>
                    <td><select name="kemudahanpolindes" id="">
                            <option value="Mudah">Mudah</option>
                            <option value="Sulit">Sulit</option>
                        </select></td>
                </tr>
                <tr>
                    <td class="no-border"></td>
                    <td>7</td>
                    <td><label for="">Poskesdes</label></td>
                    <td colspan=""><input type="text" name="jarakposkesdes" onkeypress="return number(event)"></td>
                    <td><input type="text" name="wakteposkesdes" onkeypress="return number(event)"></td>
                    <td><select name="kemudahanposkesdes" id="">
                            <option value="Mudah">Mudah</option>
                            <option value="Sulit">Sulit</option>
                        </select></td>
                </tr>
                <tr>
                    <td class="no-border"></td>
                    <td>8</td>
                    <td><label for="">Posyandu</label></td>
                    <td colspan=""><input type="text" name="jarakposyandu" onkeypress="return number(event)"></td>
                    <td><input type="text" name="wakteposyandu" onkeypress="return number(event)"></td>
                    <td><select name="kemudahanposyandu" id="">
                            <option value="Mudah">Mudah</option>
                            <option value="Sulit">Sulit</option>
                        </select></td>
                </tr>
                <tr>
                    <td class="no-border"></td>
                    <td>9</td>
                    <td><label for="">Apotik</label></td>
                    <td colspan=""><input type="text" name="jarakapotik" onkeypress="return number(event)"></td>
                    <td><input type="text" name="wakteapotik" onkeypress="return number(event)"></td>
                    <td><select name="kemudahanapotik" id="">
                            <option value="Mudah">Mudah</option>
                            <option value="Sulit">Sulit</option>
                        </select></td>
                </tr>

                <tr>
                    <td class="no-border"></td>
                    <td>10</td>
                    <td><label for="">Toko obat</label></td>
                    <td colspan=""><input type="text" name="jaraktokoobat" onkeypress="return number(event)"></td>
                    <td><input type="text" name="waktetokoobat" onkeypress="return number(event)"></td>
                    <td><select name="kemudahantokoobat" id="">
                            <option value="Mudah">Mudah</option>
                            <option value="Sulit">Sulit</option>
                        </select></td>
                </tr>



        </table>
        <section class="section">
            <button type="submit" name="next" class="next" value=""><span class="next">NEXT</span></button>

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