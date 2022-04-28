    <?php


    error_reporting(0);


    include  "./config/koneksi.php";

    if (isset($_POST['next'])) {
        $no_kk = $_GET['no_kk'];
        $nik_kk = $_POST['nik_kk'];
        $tempat_tinggal = $_POST['tempat_tinggal'];
        $status_lahan = $_POST['status_lahan'];
        $luas_lantai = $_POST['luas_lantai'];
        $luas_lahan = $_POST['luas_lahan'];
        $jenislantai = $_POST['jenis_lantai'];
        $dinding_sebagian = $_POST['dinding_sebagian'];
        $jendela = $_POST['jendela'];
        $atap = $_POST['atap'];
        $penerangan_rumah = $_POST['penerangan_rumah'];
        $energi = $_POST['energi'];

        $sumberkayu = $_POST['sumber_kayu'];
        $tempat_pembuangan = $_POST['tempat_pembuangan'];
        $fasilitas_mck = $_POST['fasilitas_mck'];
        $sumber_air = $_POST['sumber_air_mandi'];

        $failitas_bab = $_POST['fasilitas_bab'];
        $sumber_minum = $_POST['sumber_minum'];
        $tempat_pembuangan = $_POST['tempat_pembuangan'];
        $limbah = $_POST['limbah'];
        $sutet = $_POST['rumah'];

        $rumah = $_POST['rmh_bantaran_sungai'];
        $rumah_lereng = $_POST['rmh_lereng'];
        $keseluruhan = $_POST['keseluruhan'];


        $query = mysqli_query($con, "INSERT INTO deskripsi_keluarga (no_kk,nik_kepala) VALUES ('$no_kk','$nik_kk')");
        $query .= mysqli_query($con, " INSERT INTO deskripsi_permukiman (tempat_tinggal,status_lahan,luas_lantai,luas_lahan,jenis_lantai,dinding_sebagian,jendela,atap,penerangan_rumah,
            energi,sumber_kayu,tempat_pembuangan,fasilitas_mck,sumberiair_mandi,fasilitas_bab,sumberair_minum,limbah,sutet,
            rumah_bantaran_sungai,rumah_lereng_bukit,keseluruhan,no_kk) VALUES ('$tempat_tinggal','$status_lahan','$luas_lantai','$luas_lahan','$jenislantai','$dinding_sebagian',
            '$jendela','$atap','$penerangan_rumah','$energi','$sumberkayu','$tempat_pembuangan','$fasilitas_mck','$sumber_air',
            '$failitas_bab','$sumber_minum','$limbah','$sutet','$rumah','$rumah_lereng','$keseluruhan','$no_kk')");
        $query1 = mysqli_query($con, "SELECT * FROM deskripsi_keluarga WHERE (no_kk='$no_kk') ");
        if ($query) {
            session_start();
            $row = mysqli_fetch_assoc($query1);
            $_SESSION['no_kk'] = $row['no_kk'];
            echo "<script>window.location.href = '?page=form-pIVlanjut&no_kk=$no_kk'</script>";

        } else {
    // mysqli_query($con,$deskripsi_lokasi);
            echo "Error: <br>" . mysqli_error($con);
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
        <div class="basic-form">

            <div class="card-body">
                <div class="basic-elements ">
                    <b>DESKRIPSI KELUARGA</b>
                    <form class="mt-3" method="POST">
                        <div class="row">
                            <div class="col-lg-12">

                                <div class="form-group ">
                                    <label>Nomor Kartu Keluarga<span class="star">*</span></label>
                                    <input type="text" name="no_kk" class="form-control " placeholder="no kk .." disabled value="<?php echo $_GET['no_kk'] ?>" required>
                                </div>
                                <div class="form-group">
                                    <label>NIK Kepala Keluarga<span class="star">*</span></label>
                                    <input id="example-email" name="nik_kk" class="form-control" type="text" placeholder="nik kepala keluarga ..">
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

                    <b>DESKRIPSI PERMUKIMAN</b><br><br>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group ">
                                <label>Tempat tinggal yang ditempati<span class="star">*</span></label>
                                <select name="tempat_tinggal" class="form-control">
                                 <option value="Milik sendiri">Milik sendiri</option>
                                 <option values="Kontrak/sewa">Kontrak/Sewa</option>
                                 <option value="Bebas sewa">Bebas Sewa </option><br>
                                 <option value="Dipinjami">Dipinjami </option>
                                 <option value="Dinas">Dinas</option>
                                 <option value="Lainnya">Lainnya</option>
                             </select>
                         </div>
                         <div class="form-group">
                            <label>Status lahan tempat tinggal yang ditempati<span class="star">*</span></label>
                            <select name="status_lahan" class="form-control">
                         <option value="Milik sendiri">Milik sendiri</option>
                         <option value="Milik oranglain">Milik orang lain</option>
                         <option value="Tanah negara">Tanah negara</option>
                         <option value="Lainnya">Lainnya</option>
                     </select>
                        </div>
                        <div class="form-group">
                            <div class="col">
                                <label>Luas lantai <span class="star">*</span></label>
                                <input id="example-email" name="luas_lantai" class="form-control" type="number" placeholder="luas lantai .." name="example-email">
                            </div>
                            <div class="col">
                                <label>Luas lahan <span class="star">*</span></label>
                                <input id="example-email" name="luas_lahan" class="form-control" type="number" placeholder="luas lahan .." name="example-email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Jenis lantai tempat tinggal terluas<span class="star">*</span></label>
                            <select name="jenis_lantai" class="form-control">
                               <option value="Marmer/granit">Marmer/granit</option>
                               <option value="Keramik">Keramik</option>
                               <option value="Parket">Parket/vini/permadani</option>
                               <option value="Ubin">Ubin/tegel/teraso</option>
                               <option value="Kayu/papan">Kayu/papan kualitas tinggi </option>
                               <option value="Semen / bata merah">Semen/bata merah</option>
                               <option value="Bambu">Bambu </option>
                               <option value="Kayu/papankualitasrendah">Kayu/papan kualitas rendah</option>
                               <option value="Bambu">Bambu </option>
                               <option value="Lainnya">Lainnya</option>
                           </select>
                       </div>
                       <div class="form-group">
                        <label>Dinding sebagian besar rumah<span class="star">*</span></label>
                        <select name="dinding_sebagian" class="form-control">
                           <option value="Semen/beton">Semen/beton/kayu berkualitas tinggi</option>
                           <option value="Kayu/bamboo">Kayu berkualitas rendah/bamboo</option>
                           <option value="Lainnya">Lainnya</option>
                       </select>
                   </div>
                   <div class="form-group">
                    <label>Jendela<span class="star">*</span></label>
                    <select class="form-control" name="jendela">
                       <option value="Ada, berfungsi">Ada, Berfungsi</option>
                       <option value="Ada, tidak berfungsi">Ada, Tidak berfungsi</option>
                       <option vaue="Tidak ada">Tidak ada</option>
                   </select>
               </div>
               <div class="form-group">
                <label>Atap<span class="star">*</span></label>
                <select class="form-control" name="atap">
                   <option value="Genteng">Genteng</option>
                   <option value="Kayu / Jerami">Kayu/jerami</toption>
                       <option value="Lainnya">Lainnya</option>
                   </select>
               </div>
               <div class="form-group">
                <label>Penerangan rumah<span class="star">*</span></label>
                <select class="form-control" name="penerangan_rumah">
                   <option value="Listrik PLN">Listrik PLN</option>
                   <option value="Listrik Non PLN">Listrik Non PLN</option>
                   <option value="Lampu minyak / lilin">Lampu minyak/lilin</option>
                   <option value="Sumber penerangan lainnya">Sumber penerangan lainnya</option>
                   <option value="Tidak ada">Tidak ada</option>
               </select>
           </div>
           <div class="form-group">
            <label>Energi untuk memasak</label>
            <select class="form-control" name="energi">
               <option value="Gas kota / LPG / Biogas (keP407)">Gas kota / LPG /biogas (keP407)</option>
               <option value="Minyak tanah / batu bara (keP407)">Minyak tanah/batu bara (keP407)</option>
               <option value="Kayu bakar">Kayu bakar</option>
               <option value="Lainnya (keP407)">Lainnya (keP407)</option>
           </select>
       </div>
       <div class="form-group">
        <label>Jika menggunakan kayu bakar untuk memasak, sumber kayu bakar ...</label>
        <select name="sumber_kayu" class="form-control">
         <option value="Pembelian">Pembelian</option>
         <option value="Diambil dari hutan">Diambil dari hutan</option>
         <option value="Diambil dari luar">Diambil dari luar/bukan hutan </option>
         <option value="Lainnya">Lainnya</option>
     </select>
 </div>
 <div class="form-group">
    <label>Tempat pembuangan sampah</label>
    <select name="tempat_pembuangan" class="form-control">
     <option value="Tidak ada">Tidak ada</option>
     <option value="Dikebun / sungai / drainese">Dikebun / sungai /drainase</option>
     <option value="Dibakar">Dibakar </option>
     <option value="Tempat sampah">Tempat sampah</option>
     <option value="Tempat sampah diangkut reguler">Tempat sampah diangkut reguler</option>
 </select>
</div>
<div class="form-group">
 <label>Fasilitas MCK</label>
 <select name="fasilitas_mck" class="form-control">
   <option value="Sendiri">Sendiri</option>
   <option value="Berkelompok / tetangga">Berkelompok/tetangga</option>
   <option value="MCK umum">MCK umum </option>
   <option value="Tidak ada">Tidak ada</option>
</option>
</select>
</div>
<div class="form-group">
    <label>Sumber air mandi terbanyak dari :</label>
    <select name="sumber_air_mandi" class="form-control">
     <option value="Ledeng / Perpipaan berbayar / Kemasan">Ledeng / perpipaan berbayar / air isi ulang / kemasan </option>
     <option value="Perpipaan">Perpipaan</option>
     <option value="Sungai / danau / embung">Sungai / danau / embung</option>
     <option value="Tadah air hujan">Tadah air hujan</option>
     <option value="Mata air / sumur">Mata air / sumur </option>
     <option value="Lainnya">Lainnya</option>
 </select>
</div>
<div class="form-group">
 <label>Fasilitas buang air besar</label>
 <select name="fasilitas_bab" class="form-control">
   <option value="Jamban sendiri">Jamban sendiri</option>
   <option value="Jamban bersama / tetangga">Jamban bersama / tetangga </option>
   <option value="Jamban umum">Jamban umum</option>
   <option value="Lainnya">Lainnya</option>
</select>
</div>
<div class="form-group">
   <label>Sumber air minum terbanyak dari :</label>
   <select name="sumber_minum" class="form-control">
     <option value="Ledeng / Perpipaan berbayar / Kemasan">Ledeng / perpipaan berbayar / air isi ulang / kemasan </option>
     <option value="Perpipaan">Mata air perpipaan</option>
     <option value="Sungai / danau / embung">Sungai / danau / embung</option>
     <option value="Tadah air hujan">Tadah air hujan</option>
     <option value="Mata air / sumur">Mata air / sumur </option>
     <option value="Lainnya">Lainnya</option>
 </select>
</div>
<div class="form-group">
  <label> Tempat pembuangan limbah cair</label>
  <select class="form-control" name="limbah">
     <option value="Tangki / instalasi pengelolaan limbah">Tangki / instalasi pengelolaan limbah</option>
     <option value="Sawah / kolam / sungai / drainase / laut">Sawah / kolam / sungai / drainase / laut </option>
     <option value="Lubang ditanah">Lubang ditanah </option>
     <option value="Lainnya">Lainnya</option>
 </select>
</div>
<div class="form-group">
    <label>Rumah berada dibawah SUTET / SUTT / SUTTAS</label>
     <select class="form-control" name="rumah">
     <option value="YA">YA</option>
     <option value="TIDAK">TIDAK </option>
 </select>
</div>
<div class="form-group">
    <label>Rumah dibantaran sungai</label>
     <select class="form-control" name="rmh_bantaran_sungai">
     <option value="YA">YA</option>
     <option value="TIDAK">TIDAK </option>
 </select>
</div>
<div class="form-group">
    <label>Rumah dilereng bukit/gunung</label>
     <select class="form-control" name="rmh_lereng">
     <option value="YA">YA</option>
     <option value="TIDAK">TIDAK </option>
 </select>
</div>

<div class="form-group">
    <label>Secara keseluruhan kondisi rumah</label>
    <input type="text" name="keseluruhan" class="form-control" placeholder="keseluruhan ..">
</div>



<button type="submit" name="next" class="btn btn-success btn-lg btn-block mt-3 float-right" id="next"><span class="next">NEXT</span></button>

</div>
</div>

</form>
</div>



</div>














    <!-- <!DOCTYPE html>
    <html lang="en">

    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/style_formpIII.css">
    </head>

    <body>
    <div class="container">

    <form action="" method="POST">

     <table border="1">
         <tr>
             <th class="kotak">P3</th>
             <th class="kotak" colspan="4" style="width:100%; position:relative; text-align:left; padding:10px;">
                 <h3 style="margin-left:20px;">DESKRIPSI KELUARGA</h3>
             </th>
         </tr>
         </tr>
         <tbody>
             <tr>
                 <td>P.301</td>
                 <td>NO.KK</td>
                 <td>:</td>
                 <td><input type="text" class="t1" name="no_kk" value="<?php session_start();
                                                            echo $_SESSION['no_kk'] ?> " disabled></td>
             </tr>

             <tr>
                 <td>P.302</td>
                 <td>NIK Kepala Keluarga</td>
                 <td>:</td>
                 <td><input type="text" name="nik_kk"></td>
             </tr>


             <tr> <br>
                 <th class="kotak">P4</th>
                 <th class="kotak" colspan="4" style="width:100%; position:relative; text-align:left; padding:10px;">
                     <h3 style="margin-left:20px;">PERMUKIMAN</h3>
                 </th>
             </tr>
             </tr>
         <tbody class="permukiman">
             <tr>
                 <td>P.401</td>
                 <td>Tempat tinggal yang ditempati </td>
                 <td>:</td>
                 <td>
                     <select name="tempat_tinggal" class="select">
                         <option value="Milik sendiri">Milik sendiri</option>
                         <option values="Kontrak/sewa">Kontrak/Sewa</option>
                         <option value="Bebas sewa">Bebas Sewa </option><br>
                         <option value="Dipinjami">Dipinjami </option>
                         <option value="Dinas">Dinas</option>
                         <option value="Lainnya">Lainnya</option>
                     </select>
                 </td>


             </tr>

             <tr>
                 <td>P.402</td>
                 <td>Status lahan tempat tinggal yang ditempati</td>
                 <td>:</td>
                 <td><select name="status_lahan" class="select">
                         <option value="Milik sendiri">Milik sendiri</option>
                         <option value="Milik oranglain">Milik orang lain</option>
                         <option value="Tanah negara">Tanah negara</option>
                         <option value="Lainnya">Lainnya</option>
                     </select>
                 </td>

             </tr>

             <tr>
                 <td>P.403</td>
                 <td>1).Luas lantai tempat tinggal <br><br> 2).Luas lahan tempat tinggal</td>
                 <td>:</td>
                 <td> <input name="luas_lantai" style="width:200px;" type="text" placeholder="(m2)"> <br> <input name="luas_lahan" style="width:200px" type="text" placeholder="(m2)"></td>
             </tr>
             <tr>
                 <td>P.404</td>
                 <td>Jenis lantai tempat tinggal terluas </td>
                 <td>:</td>
                 <td>
                     <select name="jenis_lantai" class="select">
                         <option value="Marmer/granit">Marmer/granit</option>
                         <option value="Keramik">Keramik</option>
                         <option value="Parket">Parket/vini/permadani</option>
                         <option value="Ubin">Ubin/tegel/teraso</option>
                         <option value="Kayu/papan">Kayu/papan kualitas tinggi </option>
                         <option value="Semen / bata merah">Semen/bata merah</option>
                         <option value="Bambu">Bambu </option>
                         <option value="Kayu/papankualitasrendah">Kayu/papan kualitas rendah</option>
                         <option value="Bambu">Bambu </option>
                         <option value="Lainnya">Lainnya</option>
                     </select>
                 </td>

             </tr>

             <tr>
                 <td>P.405</td>
                 <td>Dinding sebagian besar rumah</td>
                 <td>:</td>
                 <td>
                     <select name="dinding_sebagian" class="select">
                         <option value="Semen/beton">Semen/beton/kayu berkualitas tinggi</option>
                         <option value="Kayu/bamboo">Kayu berkualitas rendah/bamboo</option>
                         <option value="Lainnya">Lainnya</option>
                     </select>
                 </td>
             </tr>

             <tr>
                 <td>P.406</td>
                 <td>Jendela</td>
                 <td>:</td>
                 <td>
                     <select class="select" name="jendela">
                         <option value="Ada, berfungsi">Ada, Berfungsi</option>
                         <option value="Ada, tidak berfungsi">Ada, Tidak berfungsi</option>
                         <option vaue="Tidak ada">Tidak ada</option>
                     </select>
                 </td>
             </tr>

             <tr>
                 <td>P.407</td>
                 <td>Atap</td>
                 <td>:</td>
                 <td>
                     <select class="select" name="atap">
                         <option value="Genteng">Genteng</option>
                         <option value="Kayu / Jerami">Kayu/jerami</toption>
                         <option value="Lainnya">Lainnya</option>
                     </select>
                 </td>
             </tr>

             <tr>
                 <td>P.408</td>
                 <td>Penerangan rumah</td>
                 <td>:</td>
                 <td>
                     <select class="select" name="penerangan_rumah">
                         <option value="Listrik PLN">Listrik PLN</option>
                         <option value="Listrik Non PLN">Listrik Non PLN</option>
                         <option value="Lampu minyak / lilin">Lampu minyak/lilin</option>
                         <option value="Sumber penerangan lainnya">Sumber penerangan lainnya</option>
                         <option value="Tidak ada">Tidak ada</option>
                     </select>
                 </td>
             </tr>

             <tr>
                 <td>P.409</td>
                 <td>Energi untuk memasak</td>
                 <td>:</td>
                 <td>
                     <select class="select" name="energi">
                         <option value="Gas kota / LPG / Biogas (keP407)">Gas kota / LPG /biogas (keP407)</option>
                         <option value="Minyak tanah / batu bara (keP407)">Minyak tanah/batu bara (keP407)</option>
                         <option value="Kayu bakar">Kayu bakar</option>
                         <option value="Lainnya (keP407)">Lainnya (keP407)</option>
                     </select>
                 </td>
             </tr>
             <tr>
                 <td>P.410</td>
                 <td>Jika menggunakan kayu bakar untuk memasak, sumber kayu bakar ... </td>
                 <td>:</td>
                 <td class="checkbox">
                     <select class="select" name="sumber_kayu">
                         <option value="Pembelian">Pembelian</option>
                         <option value="Diambil dari hutan">Diambil dari hutan</option>
                         <option value="Diambil dari luar">Diambil dari luar/bukan hutan </option>
                         <option value="Lainnya">Lainnya</option>
                     </select>
                 </td>

             </tr>

             <tr>
                 <td>P.411</td>
                 <td>Tempat pembuangan sampah</td>
                 <td>:</td>
                 <td class="checkbox">
                     <select class="select" name="tempat_pembuangan">
                         <option value="Tidak ada">Tidak ada</option>
                         <option value="Dikebun / sungai / drainese">Dikebun / sungai /drainase</option>
                         <option value="Dibakar">Dibakar </option>
                         <option value="Tempat sampah">Tempat sampah</option>
                         <option value="Tempat sampah diangkut reguler">Tempat sampah diangkut reguler</option>
                     </select>
                 </td>

             </tr>

             <tr>
                 <td>P.412</td>
                 <td>Fasilitas MCK</td>
                 <td>:</td>
                 <td class="checkbox">
                     <select class="select" name="fasilitas_mck">
                         <option value="Sendiri">Sendiri</option>
                         <option value="Berkelompok / tetangga">Berkelompok/tetangga
                         <option>
                         <option value="MCK umum">MCK umum </option>
                         <option value="Tidak ada">Tidak ada</option>
                     </select>
                 </td>
             </tr>
             <tr>
                 <td>P.413</td>
                 <td>Sumber air mandi terbanyak dari : </td>
                 <td>:</td>
                 <td class="checkbox">
                     <select class="select" name="sumber_air_mandi">
                         <option value="Ledeng / Perpipaan berbayar / Kemasan">Ledeng / perpipaan berbayar / air isi ulang / kemasan </option>
                         <option value="Perpipaan">Perpipaan</option>
                         <option value="Sungai / danau / embung">Sungai / danau / embung</option>
                         <option value="Tadah air hujan">Tadah air hujan</option>
                         <option value="Mata air / sumur">Mata air / sumur </option>
                         <option value="Lainnya">Lainnya</option>
                     </select>
                 </td>
             </tr>

             <tr>
                 <td>P.414</td>
                 <td>Fasilitas buang air besar</td>
                 <td>:</td>
                 <td><select class="select" name="fasilitas_bab">
                         <option value="Jamban sendiri">Jamban sendiri</option>
                         <option value="Jamban bersama / tetangga">Jamban bersama / tetangga </option>
                         <option value="Jamban umum">Jamban umum</option>
                         <option value="Lainnya">Lainnya</option>
                     </select></td>
             </tr>

             <tr>
                 <td>P.415</td>
                 <td>Sumber air minum terbanyak dari :</td>
                 <td>:</td>
                 <td><select class="select" name="sumber_minum">
                         <option value="Ledeng / Perpipaan berbayar / Kemasan">Ledeng / perpipaan berbayar / air isi ulang / kemasan </option>
                         <option value="Perpipaan">Mata air perpipaan</option>
                         <option value="Sungai / danau / embung">Sungai / danau / embung</option>
                         <option value="Tadah air hujan">Tadah air hujan</option>
                         <option value="Mata air / sumur">Mata air / sumur </option>
                         <option value="Lainnya">Lainnya</option>
                     </select></td>
             </tr>

             <tr>
                 <td>P.416</td>
                 <td>Tempat pembuangan limbah cair</td>
                 <td>:</td>
                 <td><select class="select" name="limbah">
                         <option value="Tangki / instalasi pengelolaan limbah">Tangki / instalasi pengelolaan limbah</option>
                         <option value="Sawah / kolam / sungai / drainase / laut">Sawah / kolam / sungai / drainase / laut </option>
                         <option value="Lubang ditanah">Lubang ditanah </option>
                         <option value="Lainnya">Lainnya</option>
                     </select></td>
             </tr>

             <tr>
                 <td>P.417</td>
                 <td>Rumah berada dibawah SUTET / SUTT / SUTTAS </td>
                 <td>:</td>
                 <td><input type="checkbox" name="rumah[]" value="YA">YA |<input name="rumah[]" type="checkbox" value="TIDAK">TIDAK</td>
             </tr>

             <tr>
                 <td>P.418</td>
                 <td>Rumah dibantaran sungai </td>
                 <td>:</td>
                 <td><input type="checkbox" name="rmh_bantaran_sungai[]" value="YA">YA |<input name="rmh_bantaran_sungai[]" type="checkbox" value="TIDAK">TIDAK</td>
             </tr>



             <tr>
                 <td>P.419</td>
                 <td>Rumah dilereng bukit/gunung </td>
                 <td>:</td>
                 <td><input type="checkbox" name="rmh_lereng[]" value="YA">YA |<input type="checkbox" name="rmh_lereng[]" value="TIDAK">TIDAK</td>
             </tr>
             <tr>
                 <td>P.420</td>
                 <td>Secara keseluruhan kondisi rumah </td>
                 <td>:</td>
                 <td><input type="text" name="keseluruhan"></td>
             </tr>
         </tbody>


     </table>

     <section class="section">
         <button type="submit" name="next" class="next" value=""><span class="next">NEXT</span></button>

     </section>
    </form>

    </div>

    </body>

    </html> -->