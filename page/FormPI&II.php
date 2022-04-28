<?php
error_reporting(0);
session_start();

include "./config/koneksi.php";

if (isset($_POST['next'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $hp = $_POST['hp'];
    $provinsi = $_POST['provinsi'];
    $kabupaten = $_POST['kabupaten/kota'];
    $kecamatan = $_POST['kecamatan'];
    $nama_lok = $_POST['nama_lok'];
    $desa = $_POST['desa'];
    $rt = $_POST['rt'];
    $alamat_lok = $_POST['alamat_lok'];
    $no_hp = $_POST['no_hp'];
    $no_telpkabel = $_POST['no_telpkabel/rumah'];
    $rw = $_POST['rw'];
    $no_kk = $_GET['no_kk'];


    $query = mysqli_query($con, "INSERT INTO deksripsi_enumerator (nama,alamatt,hp,no_kk) VALUES ('$nama','$alamat','$hp','$no_kk')");
    $query .= mysqli_query($con, " INSERT INTO deskripsi_lokal (provinsi,kabkot,kecamatann,desaa,rt,namaa,alamat,no_hp,no_telpkabel,rw,no_kk) VALUES ('$provinsi','$kabupaten','$kecamatan','$desa','$rt','$nama_lok','$alamat_lok','$no_hp','$no_telpkabel','$rw','$no_kk')");
    $query1 = mysqli_query($con, " SELECT * FROM deksripsi_enumerator WHERE no_kk='$no_kk' ");
    if ($query) {
        $row = mysqli_fetch_assoc($query1);
        $_SESSION['no_kk'] = $row['no_kk'];
        echo "<script>window.location.href = '?page=form-pIII&no_kk=$no_kk'</script>";

    } else {
        // mysqli_query($con,$deskripsi_lokasi);
        echo "Error: <br>" . mysqli_error($con);
    }
}

?>

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/style_formpII.css">
</head>

<body>
    <div class="container">

        <form action="" method="POST">
            <section class="kata">
                <h3>SDGs DESA</h3>
                <p>KUESIONER RUMAH TANGGA (KELUARGA)</p>
            </section>
            <table border="1">
                <tr>
                    <th class="kotak">P1</th>
                    <th class="kotak" colspan="4" style="width:100%; position:relative; text-align:left; padding:10px;">
                        <h3 style="margin-left:20px;">DESKRIPSI ENUMERATOR</h3>
                    </th>
                </tr>
                </tr>
                <tbody>
                    <tr>
                        <td>P101</td>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input type="text" name="nama" required></td>
                    </tr>

                    <tr>
                        <td>P102</td>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><textarea name="alamat" required></textarea></td>
                    </tr>

                    <tr>
                        <td>P103</td>
                        <td>HP/Telepon</td>
                        <td>:</td>
                        <td><input name="hp" type="number" required></td>
                    </tr>
                    <tr>

                        <input name="no_kk" type="hidden" value="<?php echo $_SESSION['no_kk'] ?>" required>
                    </tr>

                    <tr> <br>
                        <th class="kotak">P2</th>
                        <th class="kotak" colspan="4" style="width:100%; position:relative; text-align:left; padding:10px;">
                            <h3 style="margin-left:20px;">DESKRIPSI LOKASI</h3>
                        </th>
                    </tr>
                    </tr>
                <tbody>
                    <tr>
                        <td>P201</td>
                        <td>Provinsi </td>
                        <td>:</td>
                        <td><input type="text" name="provinsi" required></td>
                    </tr>

                    <tr>
                        <td>P202</td>
                        <td>Kabupaten/kota</td>
                        <td>:</td>
                        <td><input type="text" name="kabupaten/kota" required></td>
                    </tr>

                    <tr>
                        <td>P203</td>
                        <td>Kecamatan</td>
                        <td>:</td>
                        <td><input type="text" name="kecamatan" required></td>
                    </tr>
                    <tr>
                        <td>P204</td>
                        <td>Desa </td>
                        <td>:</td>
                        <td><input type="text" name="desa" required></td>
                    </tr>

                    <tr>
                        <td>P205</td>
                        <td>RT/RW</td>
                        <td>:</td>
                        <td><input style="width:100px; text-align:center;" name="rt" type="text" maxlength="2" required> / <input style="width:100px; text-align:center;" type="text" maxlength="2" name="rw"></td>
                    </tr>

                    <tr>
                        <td>P206</td>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input type="text" name="nama_lok" required></td>
                    </tr>

                    <tr>
                        <td>P207</td>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><textarea style=" " name="alamat_lok" required></textarea></td>
                    </tr>

                    <tr>
                        <td>P208</td>
                        <td>NO.HP</td>
                        <td>:</td>
                        <td><input type="number" name="no_hp" required></td>
                    </tr>

                    <tr>
                        <td>P209</td>
                        <td>NO.Telepon kabel/rumah</td>
                        <td>:</td>
                        <td><input type="number" name="no_telpkabel/rumah" required></td>
                    </tr>



            </table>

            <section class="section">
                <button type="submit" name="next" value=""><span class="next">NEXT </span></button>

            </section>
        </form>

    </div>

</body>

</html> -->

<style type="text/css">
    button {
        padding: 5px 10px 5px 50px;
    }
    button .next {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
    }

    button .next:after {
        content: '\00bb';
        position: absolute;
        opacity: 0;
        top: 0;
        right: -20px;
        transition: 0.5s;
    }

    button:hover .next {
      padding-right: 25px;
  }

  button:hover .next:after {
      opacity: 1;
      right: 0;
  }

  .star {
    color: red;
    margin-left:6px ;
}

.text-justify {
    line-height: 10px;
}

.kues::after {
    content: '';
    border-bottom: 5px solid green;
    display: block;
    width: 100px;
    padding: 10px 0 10px 0;
}

input[type=text]{
    text-transform: capitalize;
}



</style>
<div class="card ">
    <div class="card-body">
        <div class="basic-form">
            <div class="text-justify mt-4">
                <h4>SDGs DESA</h4>
                <p class="kues">KUESIONER RUMAH TANGGA (KELUARGA)</p>
            </div>

            <div class="card-body">
                <div class="basic-elements ">
                    <p >DESKRIPSI ENUMERATOR</p>
                    <form class="mt-3" method="POST">
                        <div class="row">
                            <div class="col-lg-12">

                                <div class="form-group ">
                                    <label>Nama<span class="star">*</span></label>
                                    <input type="text" name="nama" class="form-control " placeholder="nama .." required>
                                    <input type="hidden" name="no_kk" class="form-control " placeholder="no kk .." value="<?php echo $_GET['no_kk'] ?>" required>
                                </div>
                                <div class="form-group">
                                    <label>Alamat<span class="star">*</span></label>
                                    <input id="example-email" name="alamat" class="form-control" type="text" placeholder="alamat ..">
                                </div>
                                <div class="form-group">
                                    <label>HP/TELEPON<span class="star">*</span></label>
                                    <input type="text" class="form-control" name="hp" rows="3" placeholder="no hp ..">
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
                    <p>DESKRIPSI LOKASI</p>
                </div>
                <div class="card-body">
                    <div class="basic-elements ">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group ">
                                    <label>Provinsi<span class="star">*</span></label>
                                    <input type="text" name="provinsi" class="form-control " placeholder="provinsi ..">
                                </div>
                                <div class="form-group">
                                    <label>Kabupaten/kota<span class="star">*</span></label>
                                    <input id="example-email" name="kabupaten/kota" class="form-control" type="text" placeholder="kabupaten/kota .." name="example-email">
                                </div>
                                <div class="form-group">
                                    <label>Kecamatan<span class="star">*</span></label>
                                    <textarea class="form-control" name="kecamatan" rows="3" placeholder="kecamatan .."></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Desa<span class="star">*</span></label>
                                    <input class="form-control" name="desa" type="text" placeholder="desa ..">
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                    <label>RT<span class="star">*</span></label>
                                    <input class="form-control" name="rt" type="text" placeholder="rt ..">
                                </div>
                                <div class="col">
                                    <label>RW<span class="star">*</span></label>
                                    <input class="form-control" name="rw" type="text" placeholder="rw ..">
                                </div>
                                </div>
                                <div class="form-group">
                                    <label>Nama<span class="star">*</span></label>
                                    <input class="form-control" name="nama_lok" type="text" placeholder="kabupaten ..">
                                </div>
                                <div class="form-group">
                                    <label>Alamat<span class="star">*</span></label>
                                    <input class="form-control" name="alamat_lok" type="text" placeholder="desa ..">
                                </div>
                                <div class="form-group">
                                    <label>NO.HP<span class="star">*</span></label>
                                    <input class="form-control" name="no_hp" type="text" placeholder="no hp ..">
                                </div>
                                <div class="form-group">
                                    <label>NO.Telepon kabel/rumah<span class="star">*</span></label>
                                    <input class="form-control" name="no_telpkabel/rumah" type="text" placeholder="no telp kabel/rumah ..">
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