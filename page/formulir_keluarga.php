
<?php
error_reporting(0);
session_start();

include  "./config/koneksi.php";

if (isset($_POST["nexts"])) {
    $no_kk = $_POST['no_kk'];$nama_kk = $_POST['nama_kk'];
    $alamat_dusun = $_POST['alamat_dusun'];
    $desa = $_POST['desa'];
    $kecamatan = $_POST['kecamatan'];
    $kabupaten = $_POST['kabupaten'];
    $nama_enumerator = $_POST['nama_enumerator'];
    $jabatan_pokja = $_POST['jabatan_pokja'];
    $agree = implode(",", $_POST['agree']);


    $query = "INSERT INTO form_keluarga VALUES ('$no_kk','$nama_kk','$alamat_dusun','$desa','$kecamatan','$kabupaten','$nama_enumerator','$jabatan_pokja','$agree') ";
    $eks = mysqli_query($con, $query);
    $query1 = mysqli_query($con, "SELECT * FROM form_keluarga WHERE no_kk='$no_kk' ");

    if ($eks){
        $row = mysqli_fetch_assoc($query1);
        $_SESSION['no_kk'] = $row['no_kk'];
        echo "<script>window.location.href = '?page=form-pII&no_kk=$no_kk'</script>";
    }else{
        echo "Gagal";
    }
}


?>




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

input[type=text]{
    text-transform: capitalize;
}

</style>
</head>
<body>
    <div class="card">
        <div class="card-body">
            <div class="basic-form">
                <div class="text-center mt-4">
                    <h2>KUESIONER UNTUK KELUARGA <br> (RUMAH TANGGA)</h2>
                    <p class="font-italic">FOMULIR DICETAK SEJUMLAH KARTU KELUARGA DALAM DESA</p>

                </div>
                <div class="card-body ">
                    <div class="basic-elements ">
                        <form class="mt-5" method="POST">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group ">
                                        <label>Nomor Kartu Keluarga<span class="star">*</span></label>
                                        <input type="text" class="form-control" name="no_kk" placeholder="no kk ..">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Kepala Keluarga<span class="star">*</span></label>
                                        <input id="example-email" name="nama_kk" class="form-control" type="text" placeholder="nama kepala keluarga ..">
                                    </div>
                                    <div class="form-group">
                                        <label>ALAMAT DUSUN<span class="star">*</span></label>
                                        <textarea class="form-control" rows="3" name="alamat_dusun" placeholder="alamat .."></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>DESA<span class="star">*</span></label>
                                        <input class="form-control" name="desa" type="text" placeholder="desa ..">
                                    </div>
                                    <div class="form-group">
                                        <label>KECAMATAN<span class="star">*</span></label>
                                        <input class="form-control" name="kecamatan" type="text" placeholder="kecamatan ..">
                                    </div>
                                    <div class="form-group">
                                        <label>KABUPATEN<span class="star">*</span></label>
                                        <input class="form-control" name="kabupaten" type="text" placeholder="kabupaten ..">
                                    </div>

                                </div>
                                <div class="col-lg-6">

                                    <div class="form-group">
                                        <label for="" class="tema">NAMA ENUMERATOR / PETUGAS PENDATA</label>
                                        <textarea class="form-control" name="nama_enumerator" aria-label="With" col="3" style="height: 135px;"></textarea>
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="" class="tema2">JABATAN DALAM POKJA PENDATAAN DESA</label>
                                    <textarea class="form-control" name="jabatan_pokja" aria-label="With" col="3" style="height: 135px;"></textarea>
                                </span>
                            </div>
                            <div class="checkbox m-t-40">
                                <input id="drop-remove" name="agree[]" value="SETUJU" type="checkbox">
                                <label for="drop-remove">Konfirmasi / Tanda tangan</label>

                            </div>


                            <button type="submit" name="nexts" class="btn btn-success btn-lg btn-block mt-3 float-right"><span class="next">NEXT</span></button>

                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
