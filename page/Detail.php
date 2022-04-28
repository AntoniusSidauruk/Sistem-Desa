<?php
include "./config/koneksi.php";
if (isset($_POST['edit'])) {
$nama_kk = $_POST['nama_kk'];
$alamat_dusun = $_POST['alamat_dusun'];
$desa = $_POST['desa'];
$kecamatan = $_POST['kecamatan'];
$kabupaten = $_POST['kabupaten'];
$nama_enumerator = $_POST['nama_enumerator'];
$jabatan_pokja = $_POST['jabatan_pokja'];

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$hp = $_POST['hp'];

$provinsi = $_POST['provinsi'];
$kabkot = $_POST['kabkot'];
$kecamatan_lok = $_POST['kecamatann'];
$kabupaten_lok = $_POST['kabkot'];
$desa_lok = $_POST['desa_lok'];
$rt = $_POST['rt'];
$nama_lok = $_POST['nama_lok'];
$alamat_lok = $_POST['alamat_lok'];
$no_hp = $_POST['no_hp'];
$no_telpkabel = $_POST['no_telpkabel'];
$rw = $_POST['rw'];

$nik_kepala = $_POST['nik_kk'];

$status_lahan = $_POST['status_lahan'];
$luas_lantai = $_POST['luas_lantai'];
$luas_lahan = $_POST['luas_lahan'];
$jenis_lantai = $_POST['jenis_lantai'];
$dinding_sebagian = $_POST['dinding_sebagian'];
$tempat_tinggal = $_POST['tempat_tinggal'];
$jendela = $_POST['jendela'];
$atap = $_POST['atap'];
$penerangan_rumah = $_POST['penerangan_rumah'];
$energi = $_POST['energi'];
$sumber_kayu=$_POST['sumber_kayu'];
$tempat_pembuangan = $_POST['tempat_pembuangan'];
$fasilitas_mck = $_POST['fasilitas_mck'];
$sumberair_mandi = $_POST['sumber_air_mandi'];
$fasilitas_bab = $_POST['fasilitas_bab'];
$sumberair_minum = $_POST['sumber_minum'];
$limbah = $_POST['limbah'];
$sutet = $_POST['sutet'];
$rumah_bantaran_sungai = $_POST['rumah_bantaran'];
$rumah_lereng_bukit = $_POST['rumah_lereng_bukit'];
$keseluruhan = $_POST['keseluruhan'];

$paud = $_POST['paud'];
$tk = $_POST['tk'];
$sd = $_POST['sd'];
$smp = $_POST['smp'];
$sma = $_POST['sma'];
$perguruan_tinggi = $_POST['perguruan_tinggi'];
$pesantren = $_POST['pesantren'];
$seminari = $_POST['seminari'];
$pendidikan_keagamaan = $_POST['pendidikan_keagamaan'];

$waktepaud = $_POST['waktepaud'];
$waktetk = $_POST['waktetk'];
$waktesd = $_POST['waktesd'];
$waktesmp = $_POST['waktesmp'];
$waktesma = $_POST['waktesma'];
$wakteperguruan = $_POST['wakteperguruan'];
$waktepesantren = $_POST['waktepesantren'];
$wakteseminari = $_POST['wakteseminari'];
$waktependidikan = $_POST['waktependidikan'];

$kemudahanpaud = $_POST['kemudahan_paud'];
$kemudahantk = $_POST['kemudahan_tk'];
$kemudahansd = $_POST['kemudahan_sd'];
$kemudahansmp = $_POST['kemudahan_smp'];
$kemudahansma = $_POST['kemudahan_sma'];
$kemudahanperguruan = $_POST['kemudahan_perguruan_tinggi'];
$kemudahanpesantren = $_POST['kemudahan_pesantren'];
$kemudahanseminari = $_POST['kemudahan_seminari'];
$kemudahanpendidikan = $_POST['kemudahan_pendidikan_keagamaan'];

$rumkit = $_POST['rumkit'];
$rumkitbersalin = $_POST['rumkit_bersalin'];
$poliklinik = $_POST['poliklinik'];
$puskesmas = $_POST['puskesmas'];
$pustu = $_POST['pustu'];
$polindes = $_POST['polindes'];
$poskesdes = $_POST['poskesdes'];
$posyandu = $_POST['posyandu'];
$apotik = $_POST['apotik'];
$tokoobat = $_POST['toko_obat'];

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

$dokter_spesialis = $_POST['dokter_spesialis'];
$dokter_umum = $_POST['dokter_umum'];
$bidan = $_POST['bidan'];
$tenaga_kesehatan = $_POST['tenaga_kesehatan'];
$dusun = $_POST['dusun'];

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


$lokasi_pekerjaanutama = $_POST['lokasi_pekerjaanutama'];
$lahan_pertanian = $_POST['lahan_pertanian'];
$sekolah = $_POST['sekolah'];
$berobat = $_POST['berobat'];
$beribadah = $_POST['beribadah'];
$rekreasi = $_POST['rekreasi'];

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

$blt = implode(",", $_POST['blt']);
$pkh = implode(",", $_POST['pkh']);
$bst = implode(",", $_POST['bst']);
$banpres = implode(",", $_POST['banpres']);
$bantuan_umkm = implode(",", $_POST['bantuan_umkm']);
$bantuanpekerja = implode(",", $_POST['bantuan_pekerja']);
$bantuan_anak = implode(",", $_POST['bantuan_anak']);
$lainnya = implode(",", $_POST['lainnya']);



$no_kk = $_POST['no_kk'];
$no_kk_enumerator = $_POST['no_kk_enumerator'];
$no_kk_keluarga = $_POST['no_kk_keluarga'];
$no_kk_permukiman = $_POST['no_kk_permukiman'];
$no_kk_lokasi = $_POST['no_kk_lokasi'];

$no_kk_pendidikan = $_POST['no_kk_pendidikan'];
$no_kk_fasilitas = $_POST['no_kk_fasilitas'];
$no_kk_tenaga = $_POST['no_kk_tenaga'];
$no_kk_prasarana = $_POST['no_kk_prasarana'];
$no_kk_pemanfaaat = $_POST['no_kk_pemanfaat'];

$no_kk_wakte_pendidikan = $_POST['no_kk_wakte_pendidikan'];
$no_kk_kemudahan_pendidikan = $_POST['no_kk_kemudahan_pendidikan'];
$no_kk_wakte_fasilitas = $_POST['no_kk_wakte_fasilitas'];
$no_kk_kemudahan_fasilitas = $_POST['no_kk_kemudahan_fasilitas'];
$no_kk_wakte_tenaga_kesehatan = $_POST['no_kk_wakte_tenaga_kesehatan'];
$no_kk_kemudahan_tenaga_kesehatan = $_POST['no_kk_kemudahan_tenaga_kesehatan'];

$no_kk_biaya_transportasi = $_POST['no_kk_biaya_transportasi'];
$no_kk_wakte_transportasi = $_POST['no_kk_wakte_transportasi'];
$no_kk_penggunaan = $_POST['no_kk_penggunaan_transportasi'];
$no_kk_kemudahan_transportasi = $_POST['no_kk_kemudahan_transportasi'];
$sql = mysqli_query(
$con,
"UPDATE form_keluarga JOIN deksripsi_enumerator JOIN deskripsi_lokal JOIN deskripsi_keluarga JOIN deskripsi_permukiman JOIN akses_pendidikan JOIN wakte_pendidikan JOIN kemudahan_pendidikan JOIN akses_fasilitas_kesehatan JOIN wakte_fasilitas JOIN kemudahan_fasilitas JOIN akses_tenaga_kesehatan JOIN wakte_tenaga_kesehatan JOIN kemudahan_tenaga_kesehatan JOIN akses_prasarana_transportasi JOIN penggunaan_transportasi JOIN wakte_transportasi JOIN biaya_transportasi JOIN kemudahan_trasnportasi JOIN pemanfaatan_program
SET form_keluarga.nama_kk='$nama_kk',form_keluarga.alamat_dusun='$alamat_dusun',form_keluarga.desa='$desa',form_keluarga.kecamatan='$kecamatan',form_keluarga.kabupaten='$kabupaten',form_keluarga.nama_enumerator='$nama_enumerator',form_keluarga.jabatan_pokja='$jabatan_pokja',
deksripsi_enumerator.nama='$nama',deksripsi_enumerator.alamatt='$alamat',deksripsi_enumerator.hp='$hp',
deskripsi_lokal.provinsi='$provinsi',deskripsi_lokal.kabkot='$kabkot',deskripsi_lokal.kecamatann='$kecamatan_lok',deskripsi_lokal.desaa='$desa_lok',deskripsi_lokal.rt='$rt',deskripsi_lokal.rw='$rw',deskripsi_lokal.namaa='$nama_lok',deskripsi_lokal.alamat='$alamat_lok',deskripsi_lokal.no_hp='$no_hp',deskripsi_lokal.no_telpkabel='$no_telpkabel',
deskripsi_keluarga.nik_kepala='$nik_kepala',


deskripsi_permukiman.status_lahan='$status_lahan',deskripsi_permukiman.luas_lantai='$luas_lantai',deskripsi_permukiman.luas_lahan='$luas_lahan',deskripsi_permukiman.dinding_sebagian='$dinding_sebagian',deskripsi_permukiman.tempat_tinggal='$tempat_tinggal',deskripsi_permukiman.jendela='$jendela',deskripsi_permukiman.atap='$atap',deskripsi_permukiman.penerangan_rumah='$penerangan_rumah',deskripsi_permukiman.energi='$energi',deskripsi_permukiman.sumber_kayu='$sumber_kayu',deskripsi_permukiman.tempat_pembuangan='$tempat_pembuangan',deskripsi_permukiman.fasilitas_mck='$fasilitas_mck',
deskripsi_permukiman.sumberiair_mandi='$sumberair_mandi',deskripsi_permukiman.fasilitas_bab='$fasilitas_bab',deskripsi_permukiman.sumberair_minum='$sumberair_minum',
deskripsi_permukiman.limbah='$limbah',deskripsi_permukiman.sutet='$sutet',deskripsi_permukiman.rumah_bantaran_sungai='$rumah_bantaran_sungai',deskripsi_permukiman.rumah_lereng_bukit='$rumah_lereng_bukit',deskripsi_permukiman.keseluruhan='$keseluruhan',

akses_pendidikan.paud='$paud',akses_pendidikan.tk='$tk',akses_pendidikan.sd='$sd',akses_pendidikan.smp='$smp',akses_pendidikan.sma='$sma',akses_pendidikan.perguruan_tinggi='$pesantren',akses_pendidikan.seminari='$seminari',akses_pendidikan.pendidikan_keagamaan='$pendidikan_keagamaan',


wakte_pendidikan.wakte_paud='$waktepaud',wakte_pendidikan.wakte_tk='$waktetk',wakte_pendidikan.wakte_sd='$waktesd',wakte_pendidikan.wakte_smp='$waktesmp',wakte_pendidikan.wakte_sma='$waktesma',wakte_pendidikan.wakte_perguruan='$wakteperguruan',wakte_pendidikan.wakte_pesantren='$waktepesantren',wakte_pendidikan.wakte_seminari='$wakteseminari',wakte_pendidikan.wakte_pendidikan_keagamaan='$waktependidikan',

kemudahan_pendidikan.kem_paud='$kemudahanpaud',kemudahan_pendidikan.kem_tk='$kemudahantk',kemudahan_pendidikan.kem_sd='$kemudahansd',kemudahan_pendidikan.kem_smp='$kemudahansmp',kemudahan_pendidikan.kem_sma='$kemudahansma',kemudahan_pendidikan.kem_perguruan_tinggi='$kemudahanperguruan',kemudahan_pendidikan.kem_pesantren='$kemudahanpesantren',kemudahan_pendidikan.kem_seminari='$kemudahanseminari',kemudahan_pendidikan.kem_pendidikan_keagamaan='$kemudahanpendidikan',



akses_fasilitas_kesehatan.rumkit='$rumkit',akses_fasilitas_kesehatan.rumki_bersalin='$rumkitbersalin',  akses_fasilitas_kesehatan.poliklinik='$poliklinik',  akses_fasilitas_kesehatan.puskesmas='$puskesmas',  akses_fasilitas_kesehatan.pustu='$pustu',akses_fasilitas_kesehatan.polindes='$polindes',  akses_fasilitas_kesehatan.poskesdes='$poskesdes',  akses_fasilitas_kesehatan.posyandu='$posyandu',akses_fasilitas_kesehatan.apotik='$apotik',  akses_fasilitas_kesehatan.toko_obat='$tokoobat',    
wakte_fasilitas.wakte_rumkit='$wakterumkit',wakte_fasilitas.wakte_rumkit_bersalin='$wakterumkitbersalin',wakte_fasilitas.wakte_poliklinik='$waktepoliklinik',wakte_fasilitas.wakte_puskesmas='$waktepuskesmas',wakte_fasilitas.wakte_pustu='$waktepustu',wakte_fasilitas.wakte_polindes='$waktepolindes',wakte_fasilitas.wakte_poskesdes='$wakteposkesdes',wakte_fasilitas.wakte_posyandu='$wakteposyandu',wakte_fasilitas.wakte_apotik='$wakteapotik',wakte_fasilitas.wakte_toko_obat='$waktetokoobat',

kemudahan_fasilitas.kem_rumkit='$kemudahanrumkit',kemudahan_fasilitas.kem_rumkit_bersalin='$kemudahanrumkitbersalin',  kemudahan_fasilitas.kem_poliklinik='$kemudahanpoliklinik',  kemudahan_fasilitas.kem_puskesmas='$kemudahanpuskesmas',  kemudahan_fasilitas.kem_pustu='$kemudahanpustu',kemudahan_fasilitas.kem_polindes='$kemudahanpolindes',  kemudahan_fasilitas.kem_poskesdes='$kemudahanposkesdes',  kemudahan_fasilitas.kem_posyandu='$kemudahanposyandu',kemudahan_fasilitas.kem_apotik='$kemudahanapotik',  kemudahan_fasilitas.kem_toko_obat='$kemudahantokoobat', 

akses_tenaga_kesehatan.dokter_spesialis='$dokter_spesialis',akses_tenaga_kesehatan.dokter_umum='$dokter_umum',akses_tenaga_kesehatan.bidan='$bidan',akses_tenaga_kesehatan.tenaga_kesehatan='$tenaga_kesehatan',akses_tenaga_kesehatan.dusun='$dusun',
wakte_tenaga_kesehatan.wakte_dokter_spesialis='$waktedokterspesialis',wakte_tenaga_kesehatan.wakte_dokter_umum='$waktedokterumum',
wakte_tenaga_kesehatan.wakte_bidan='$waktebidan',wakte_tenaga_kesehatan.wakte_tenaga_kesehatan='$waktetenagakesehatan',wakte_tenaga_kesehatan.wakte_dusun='$waktedusun',
kemudahan_tenaga_kesehatan.kem_dokter_spesialis='$kemudahandokterspesialis',kemudahan_tenaga_kesehatan.kem_dokter_umum='$kemudahandokterumum',
kemudahan_tenaga_kesehatan.kem_bidan='$kemudahanbidan',kemudahan_tenaga_kesehatan.kem_tenaga_kesehatan='$kemudahantenagakesehatan',kemudahan_tenaga_kesehatan.kem_dusun='$kemudahandusun',

akses_prasarana_transportasi.lokasi_pekerjaanutama='$lokasi_pekerjaanutama',akses_prasarana_transportasi.lahan_pertanian='$lahan_pertanian',
akses_prasarana_transportasi.sekolah='$sekolah',
akses_prasarana_transportasi.berobat='$berobat',akses_prasarana_transportasi.beribadah='$beribadah',akses_prasarana_transportasi.rekreasi='$rekreasi',

wakte_transportasi.wakte_lokasi_pekerjaanutama='$waktesekalijalan_lokasi',wakte_transportasi.wakte_lahan_pertanian='$waktesekalijalan_lahan',wakte_transportasi.wakte_sekolah='$waktesekalijalan_sekolah',wakte_transportasi.wakte_berobat='$waktesekalijalan_berobat',wakte_transportasi.wakte_beribadah='$waktesekalijalan_beribadah',wakte_transportasi.wakte_rekreasi='$waktesekalijalan_rekreasi',

penggunaan_transportasi.pen_lokasi_pekerjaanutama='$penggunaantransportasi_lokasi',penggunaan_transportasi.pen_lahan_pertanian='$penggunaantransportasi_lahan',penggunaan_transportasi.pen_sekolah='$penggunaantransportasi_sekolah',penggunaan_transportasi.pen_berobat='$penggunaantransportasi_berobat',penggunaan_transportasi.pen_beribadah='$penggunaantransportasi_beribadah',penggunaan_transportasi.pen_rekreasi='$penggunaantransportasi_rekreasi',

biaya_transportasi.biaya_lokasi_pekerjaanutama='$biayasekalijalan_lokasi',biaya_transportasi.biaya_lahan_pertanian='$biayasekalijalan_lahan',biaya_transportasi.biaya_sekolah='$biayasekalijalan_sekolah',biaya_transportasi.biaya_berobat='$biayasekalijalan_berobat',biaya_transportasi.biaya_beribadah='$biayasekalijalan_beribadah',biaya_transportasi.biaya_rekreasi='$biayasekalijalan_rekreasi',


kemudahan_trasnportasi.kem_lokasi_pekerjaanutama='$kemudahan_lokasi',kemudahan_trasnportasi.kem_lahan_pertanian='$kemudahan_lahan',kemudahan_trasnportasi.kem_sekolah='$kemudahan_sekolah',kemudahan_trasnportasi.kem_berobat='$kemudahan_berobat',kemudahan_trasnportasi.kem_beribadah='$kemudahan_beribadah',kemudahan_trasnportasi.kem_rekreasi='$kemudahan_rekreasi',

pemanfaatan_program.blt='$blt',pemanfaatan_program.pkh='$pkh',pemanfaatan_program.bst='$bst',pemanfaatan_program.banpres='$banpres',pemanfaatan_program.bantuan_umkm='$bantuan_umkm',pemanfaatan_program.bantuan_pekerja='$bantuanpekerja',pemanfaatan_program.bantuan_anak='$bantuan_anak',
pemanfaatan_program.lainnya='$lainnya'




WHERE form_keluarga.no_kk='$no_kk' AND deksripsi_enumerator.no_kk='$no_kk_enumerator' AND  deskripsi_lokal.no_kk='$no_kk_lokasi' AND deskripsi_keluarga.no_kk='$no_kk_keluarga' AND deskripsi_permukiman.no_kk='$no_kk_permukiman' AND akses_pendidikan.no_kk='$no_kk_pendidikan' AND akses_fasilitas_kesehatan.no_kk='$no_kk_fasilitas' AND akses_tenaga_kesehatan.no_kk='$no_kk_tenaga' AND akses_prasarana_transportasi.no_kk='$no_kk_prasarana' AND pemanfaatan_program.no_kk='$no_kk_pemanfaaat'


AND wakte_pendidikan.no_kk='$no_kk_wakte_pendidikan' AND kemudahan_pendidikan.no_kk='$no_kk_kemudahan_pendidikan'
AND wakte_fasilitas.no_kk='$no_kk_wakte_fasilitas' AND kemudahan_fasilitas.no_kk='$no_kk_kemudahan_fasilitas'
AND wakte_tenaga_kesehatan.no_kk='$no_kk_wakte_tenaga_kesehatan' AND kemudahan_tenaga_kesehatan.no_kk='$no_kk_kemudahan_tenaga_kesehatan'

AND biaya_transportasi.no_kk='$no_kk_biaya_transportasi' AND wakte_transportasi.no_kk='$no_kk_wakte_transportasi' AND penggunaan_transportasi.no_kk='$no_kk_penggunaan' AND  kemudahan_trasnportasi.no_kk='$no_kk_kemudahan_transportasi'
"
);

if ($sql) {
$warning = " <u>berhasil diupdate ..</u>";
} else {
echo "Gagal" . mysqli_error($con);
}
}


?>
<style type="text/css">
.card-title{
text-align: center;
line-height: 10px;
}
</style>


<?php
include "./config/koneksi.php";
$no_kk = $_GET['no_kk'];

$sql = mysqli_query($con, "  SELECT form_keluarga.no_kk,form_keluarga.nama_kk,form_keluarga.alamat_dusun,form_keluarga.desa,form_keluarga.kecamatan,form_keluarga.kabupaten,form_keluarga.nama_enumerator,form_keluarga.jabatan_pokja, 
deksripsi_enumerator.nama,deksripsi_enumerator.alamatt,deksripsi_enumerator.hp,
deskripsi_lokal.provinsi,deskripsi_lokal.kabkot,deskripsi_lokal.kecamatann,deskripsi_lokal.desaa,deskripsi_lokal.rt,deskripsi_lokal.rw,deskripsi_lokal.namaa,deskripsi_lokal.no_hp,deskripsi_lokal.no_telpkabel,deskripsi_lokal.alamat,
deskripsi_keluarga.nik_kepala,
deskripsi_permukiman.luas_lantai,deskripsi_permukiman.luas_lahan,deskripsi_permukiman.jenis_lantai,deskripsi_permukiman.dinding_sebagian,deskripsi_permukiman.tempat_tinggal,deskripsi_permukiman.jendela,deskripsi_permukiman.atap,deskripsi_permukiman.penerangan_rumah,deskripsi_permukiman.energi,deskripsi_permukiman.sumber_kayu,deskripsi_permukiman.tempat_pembuangan,deskripsi_permukiman.fasilitas_mck,
deskripsi_permukiman.sumberiair_mandi,deskripsi_permukiman.fasilitas_bab,deskripsi_permukiman.sumberair_minum,
deskripsi_permukiman.limbah,
deskripsi_permukiman.status_lahan,deskripsi_permukiman.sutet,deskripsi_permukiman.rumah_bantaran_sungai,deskripsi_permukiman.rumah_lereng_bukit,deskripsi_permukiman.keseluruhan,

akses_pendidikan.paud,akses_pendidikan.tk,akses_pendidikan.sd,akses_pendidikan.smp,akses_pendidikan.sma,akses_pendidikan.perguruan_tinggi,akses_pendidikan.pesantren,akses_pendidikan.seminari,akses_pendidikan.pendidikan_keagamaan,

wakte_pendidikan.wakte_paud,wakte_pendidikan.wakte_tk,wakte_pendidikan.wakte_sd,wakte_pendidikan.wakte_smp,wakte_pendidikan.wakte_sma,wakte_pendidikan.wakte_perguruan,wakte_pendidikan.wakte_pesantren,wakte_pendidikan.wakte_seminari,wakte_pendidikan.wakte_pendidikan_keagamaan,

kemudahan_pendidikan.kem_paud,kemudahan_pendidikan.kem_tk,kemudahan_pendidikan.kem_sd,kemudahan_pendidikan.kem_smp,kemudahan_pendidikan.kem_sma,kemudahan_pendidikan.kem_perguruan_tinggi,kemudahan_pendidikan.kem_pesantren,kemudahan_pendidikan.kem_seminari,kemudahan_pendidikan.kem_pendidikan_keagamaan,


akses_fasilitas_kesehatan.rumkit,akses_fasilitas_kesehatan.rumki_bersalin,akses_fasilitas_kesehatan.poliklinik,akses_fasilitas_kesehatan.puskesmas,akses_fasilitas_kesehatan.pustu,akses_fasilitas_kesehatan.polindes,akses_fasilitas_kesehatan.poskesdes,akses_fasilitas_kesehatan.posyandu,akses_fasilitas_kesehatan.apotik,akses_fasilitas_kesehatan.toko_obat,

wakte_fasilitas.wakte_rumkit,wakte_fasilitas.wakte_rumkit_bersalin,wakte_fasilitas.wakte_poliklinik,wakte_fasilitas.wakte_puskesmas,wakte_fasilitas.wakte_pustu,wakte_fasilitas.wakte_polindes,wakte_fasilitas.wakte_poskesdes,wakte_fasilitas.wakte_posyandu,wakte_fasilitas.wakte_apotik,wakte_fasilitas.wakte_toko_obat,

kemudahan_fasilitas.kem_rumkit,kemudahan_fasilitas.kem_rumkit_bersalin,kemudahan_fasilitas.kem_poliklinik,kemudahan_fasilitas.kem_puskesmas,kemudahan_fasilitas.kem_pustu,kemudahan_fasilitas.kem_polindes,kemudahan_fasilitas.kem_poskesdes,kemudahan_fasilitas.kem_posyandu,kemudahan_fasilitas.kem_apotik,kemudahan_fasilitas.kem_toko_obat,


akses_tenaga_kesehatan.dokter_spesialis,akses_tenaga_kesehatan.dokter_umum,
akses_tenaga_kesehatan.bidan,akses_tenaga_kesehatan.tenaga_kesehatan,akses_tenaga_kesehatan.dusun,
wakte_tenaga_kesehatan.wakte_dokter_spesialis,wakte_tenaga_kesehatan.wakte_dokter_umum,
wakte_tenaga_kesehatan.wakte_bidan,wakte_tenaga_kesehatan.wakte_tenaga_kesehatan,wakte_tenaga_kesehatan.wakte_dusun,
kemudahan_tenaga_kesehatan.kem_dokter_spesialis,kemudahan_tenaga_kesehatan.kem_dokter_umum,
kemudahan_tenaga_kesehatan.kem_bidan,kemudahan_tenaga_kesehatan.kem_tenaga_kesehatan,kemudahan_tenaga_kesehatan.kem_dusun,


akses_prasarana_transportasi.lokasi_pekerjaanutama,akses_prasarana_transportasi.lahan_pertanian,akses_prasarana_transportasi.sekolah,akses_prasarana_transportasi.berobat,akses_prasarana_transportasi.beribadah,akses_prasarana_transportasi.rekreasi,
wakte_transportasi.wakte_lokasi_pekerjaanutama,wakte_transportasi.wakte_lahan_pertanian,wakte_transportasi.wakte_sekolah,wakte_transportasi.wakte_berobat,wakte_transportasi.wakte_beribadah,wakte_transportasi.wakte_rekreasi,
penggunaan_transportasi.pen_lokasi_pekerjaanutama,penggunaan_transportasi.pen_lahan_pertanian,penggunaan_transportasi.pen_sekolah,penggunaan_transportasi.pen_berobat,penggunaan_transportasi.pen_beribadah,penggunaan_transportasi.pen_rekreasi,
biaya_transportasi.biaya_lokasi_pekerjaanutama,biaya_transportasi.biaya_lahan_pertanian,biaya_transportasi.biaya_sekolah,biaya_transportasi.biaya_berobat,biaya_transportasi.biaya_beribadah,biaya_transportasi.biaya_rekreasi,

kemudahan_trasnportasi.kem_lokasi_pekerjaanutama,kemudahan_trasnportasi.kem_lahan_pertanian,kemudahan_trasnportasi.kem_sekolah,kemudahan_trasnportasi.kem_berobat,kemudahan_trasnportasi.kem_beribadah,kemudahan_trasnportasi.kem_rekreasi,
pemanfaatan_program.blt,pemanfaatan_program.pkh,pemanfaatan_program.bst,pemanfaatan_program.banpres,pemanfaatan_program.bantuan_umkm,pemanfaatan_program.bantuan_pekerja,pemanfaatan_program.bantuan_anak,pemanfaatan_program.lainnya

FROM form_keluarga INNER JOIN deksripsi_enumerator ON form_keluarga.no_kk=deksripsi_enumerator.no_kk INNER JOIN deskripsi_lokal ON deksripsi_enumerator.no_kk=deskripsi_lokal.no_kk INNER JOIN deskripsi_keluarga ON deskripsi_lokal.no_kk=deskripsi_keluarga.no_kk INNER JOIN deskripsi_permukiman ON deskripsi_keluarga.no_kk=deskripsi_permukiman.no_kk INNER JOIN akses_pendidikan ON  deskripsi_permukiman.no_kk=akses_pendidikan.no_kk INNER JOIN wakte_pendidikan ON akses_pendidikan.no_kk=wakte_pendidikan.no_kk INNER JOIN kemudahan_pendidikan ON wakte_pendidikan.no_kk = kemudahan_pendidikan.no_kk INNER JOIN


akses_fasilitas_kesehatan ON kemudahan_pendidikan.no_kk = akses_fasilitas_kesehatan.no_kk INNER JOIN wakte_fasilitas ON akses_fasilitas_kesehatan.no_kk=wakte_fasilitas.no_kk INNER JOIN kemudahan_fasilitas ON wakte_fasilitas.no_kk = kemudahan_fasilitas.no_kk INNER JOIN akses_tenaga_kesehatan ON kemudahan_fasilitas.no_kk=akses_tenaga_kesehatan.no_kk INNER JOIN wakte_tenaga_kesehatan ON akses_tenaga_kesehatan.no_kk=wakte_tenaga_kesehatan.no_kk INNER JOIN kemudahan_tenaga_kesehatan ON wakte_tenaga_kesehatan.no_kk=kemudahan_tenaga_kesehatan.no_kk  INNER JOIN


akses_prasarana_transportasi ON kemudahan_tenaga_kesehatan.no_kk=akses_prasarana_transportasi.no_kk INNER JOIN 

penggunaan_transportasi ON akses_prasarana_transportasi.no_kk = penggunaan_transportasi.no_kk INNER JOIN wakte_transportasi ON penggunaan_transportasi.no_kk=wakte_transportasi.no_kk INNER JOIN biaya_transportasi ON wakte_transportasi.no_kk=biaya_transportasi.no_kk INNER JOIN kemudahan_trasnportasi ON biaya_transportasi.no_kk=kemudahan_trasnportasi.no_kk INNER JOIN

pemanfaatan_program ON kemudahan_trasnportasi.no_kk = pemanfaatan_program.no_kk WHERE form_keluarga.no_kk='$no_kk'");



while ($data = mysqli_fetch_array($sql)) {
$checked = explode(', ', $data['blt']);
$checked_pkh = explode(', ', $data['pkh']);
$checked_bst = explode(', ', $data['bst']);
$checked_banpres = explode(', ', $data['banpres']);
$checked_bantuan_umkm = explode(', ', $data['bantuan_umkm']);
$checked_bantuan_pekerja = explode(', ', $data['bantuan_pekerja']);
$checked_bantuan_anak = explode(', ', $data['bantuan_anak']);
$checked_lainnya = explode(', ', $data['lainnya']);

?>



<div class="col-lg-7 m-auto" >
<div class="card ">
<div class="card-title">
<h3>Sustainable Development Goals (SDGs)</h3>
<h4>Upaya terpadu mewujudkan Desa tanpa kemiskinan dan kelaparan</h4>

</div><br>
<div class="card-body">
<div class="basic-form">
<form>
<div class="form-group menu">
<select  name="passport" id="passport" class="form-control" >

    <option value="" selected> -- > Pilih Kategori Data</option>
    <option value="keluarga">Deskripsi Keluarga</option>
    <option value="enumerator">Deskripsi Enumerator</option>
    <option value="lokasi">Deskripsi Lokasi</option>
    <option value="deskripsi_keluarga">Deskripsi Keluarga</option>
    <option value="permukiman">Deskripsi Permukiman</option>
    <option value="akses_pendidikan">Akses Pendidikan</option>
    <option value="akses_fasilitas_kesehatan">Akses Fasilitas</option>
    <option value="akses_tenaga_kesehatan">Akses Tenaga Kesehatan</option>
    <option value="akses_transportasi">Akses Prasarana</option>
    <option value="pemanfaatan_program">Pemanfaatan Program</option>
    <option value="No">No</option>
</select>
</div>

<div class="content">
<div id="keluarga" class="data">

    <div class="form-group">
        <input type="text" name="no_kk" style="" class="form-control" value="<?php echo $data['no_kk'] ?>" title="NO KK" required>
    </div>
    <div class="form-group">
        <input type="text" name="nama_kk" class="form-control" value="<?php echo $data['nama_kk'] ?> " required>
    </div>
    <div class="form-group">
        <input type="text" name="alamat_dusun"class="form-control"  value="<?php echo $data['alamat_dusun'] ?>" required>
    </div>
    <div class="form-group">
        <input type="text" name="desa" class="form-control" value="<?php echo $data['desa'] ?>" required>
    </div>
    <div class="form-group">

        <input type="text" name="kecamatan" class="form-control" value="<?php echo $data['kecamatan'] ?>" required>

    </div>
    <div class="form-group">
        <input type="text" name="kabupaten" class="form-control" value="<?php echo $data['kabupaten'] ?>" required>

    </div>
    <div class="form-group">
        <input type="text" name="nama_enumerator" class="form-control" value="<?php echo $data['nama_enumerator'] ?>" required>

    </div>
    <div class="form-group">
        <input type="text" name="jabatan_pokja" class="form-control" value="<?php echo $data['jabatan_pokja'] ?>" required>
    </div>
</div>
</div>

<div class="content">
<div id="enumerator" class="data">
    <div class="form-group">
        <input type="hidden" name="no_kk_enumerator" value="<?php echo $data['no_kk'] ?>" required>
        <input type="text" class="form-control" name="nama" value="<?php echo $data['nama'] ?>" required>
    </div>
    <div class="form-group">
        <input type="text" style="padding: 40px 20px 40px 10px;" name="" value="<?php echo $data['alamatt'] ?>" class="form-control">
    </div>
    <div class="form-group">
        <input class="form-control" type="text" name="hp" value="<?php echo $data['hp'] ?>" required>
    </div>
</div>
</div>

<div class="content">
<div id="lokasi" class="data">
   <div class="form-group">
    <input type="text" name="provinsi" class="form-control" value="<?php echo $data['provinsi'] ?>" required>
</div>
<div class="form-group">
    <input type="text" name="kabkot" class="form-control" value="<?php echo $data['kabkot'] ?>" required>

</div>
<div class="form-group">
    <input type="text" name="kecamatann" class="form-control" value="<?php echo $data['kecamatann'] ?>" required>
</div>
<div class="form-group">
    <input type="text" name="desa_lok" class="form-control" value="<?php echo $data['desaa'] ?>" required>
</div>
<div class="form-group">
    <input  type="text" name="rt"class="form-control"  value="<?php echo $data['rt'] ?>" required>
    <input  type="text" name="rw" class="form-control" value="<?php echo $data['rw'] ?>" required>
</div>

<div class="form-group">
    <input type="text" name="nama_lok" class="form-control" value="<?php echo $data['namaa'] ?>" required>
</div>
<div class="form-group">
    <input type="text" name="alamat_lok" class="form-control" value="<?php echo $data['alamat'] ?>" required>

</div>
<div class="form-group">
    <input type="text" name="no_hp" class="form-control" value="<?php echo $data['no_hp'] ?>" required>
</div>
<div class="form-group">
    <input type="text" name="no_telpkabel" class="form-control" value="<?php echo $data['no_telpkabel'] ?>" required>
</div>

</div>
</div>

<div class="content">
<div id="deskripsi_keluarga" class="data">
<div class="form-group">
    <input type="text" name="nik_kk" class="form-control" value="<?php echo $data['nik_kepala'] ?>" required>
</div>
</div>
</div>

<div class="content">
<div id="permukiman" class="data">
<div class="form-group">
    <select name="status_lahan" class="form-control">
       <?php $status_lahan = $data['status_lahan'] ?>
       <option <?=($status_lahan=='Milik oranglain')?'selected="selected"':''?>>Milik orang lain</option>
       <option <?=($status_lahan=='Milik sendiri')?'selected="selected"':''?>>Milik Sendiri</option>
       <option <?= ($status_lahan=='Tanah negara')? 'selected="selected"':''?>>Tanah negara</option>
       <option <?= ($status_lahan=='Lainnya')? 'selected="selected"':''?>>Lainnya</option>
   </select>
</div>
<div class="form-group">
<input class="form-control" type="text" name="luas_lantai" value="<?php echo $data['luas_lantai'] ?>">
<input class="form-control" type="text" name="luas_lahan" value="<?php echo $data['luas_lahan'] ?>">
</div>
<div class="form-group">
<select name="jenis_lantai" class="form-control">
    <?php $jenislantai = $data['jenis_lantai'] ?>
    <option <?=($jenislantai=='Keramik')? 'selected="selected"':''?>>Keramik</option>
    <option <?=($jenislantai=='Marmer/granit')? 'selected="selected"':''?>>Marmer/Granit</option>
    <option <?=($jenislantai == 'Parket')? 'selected="selected"':''?>>Parket/vini/permadani</option>
    <option <?=($jenislantai=='Ubin')? 'selected="selected"':''?>>Ubin/tegel/teraso</option>
    <option <?=($jenislantai=='Kayu/papan')? 'selected="selected"':''?>>Kayu/papan kualitas tinggi </option>
    <option <?=($jenislantai=='Semen / bata merah')? 'selected="selected"':''?>>Semen/bata merah</option>
    <option <?=($jenislantai=='Bambu')? 'selected="selected"':''?>>Bambu </option>
    <option <?=($jenislantai=='Kayu/papankualitasrendah')? 'selected="selected"':''?>>Kayu/papan kualitas rendah</option>
    <option <?=($jenislantai=='Bambu')? 'selected="selected"':''?>>Bambu </option>
    <option <?=($jenislantai=='Lainnya')? 'selected="selected"':''?>>Lainnya</option>
</select>
</div>
<div class="form-group">
<select name="dinding_sebagian" class="form-control">
    <?php $dinding_sebagian = $data['dinding_sebagian']; ?>
    <option <?=($dinding_sebagian=="Semen/beton")? 'selected="selected"':''?>>Semen/beton/kayu berkualitas tinggi</option>
    <option <?=($dinding_sebagian=="Kayu/bamboo")? 'selected="selected"':''?>>Kayu berkualitas rendah/bamboo</option>
    <option <?=($dinding_sebagian=="Lainnya")? 'selected="selected"':''?>>Lainnya</option>
</select>
</div>
<div class="form-group">
<select name="tempat_tinggal" class="form-control">
    <?php $tempat_tinggal = $data['tempat_tinggal'] ?>
    <option <?=($tempat_tinggal=="Milik sendiri")? 'selected="selected"':''?>>Milik sendiri</option>
    <option <?=($tempat_tinggal=="Kontrak/sewa")? 'selected="selected"':''?>>Kontrak/Sewa</option>
    <option <?=($tempat_tinggal=="Bebas sewa")? 'selected="selected"':''?>>Bebas Sewa </option><br>
    <option <?=($tempat_tinggal=="Dipinjami")? 'selected="selected"':''?>>Dipinjami </option>
    <option <?=($tempat_tinggal=="Dinas")? 'selected="selected"':''?>>Dinas</option>
    <option <?=($tempat_tinggal=="Lainnya")? 'selected="selected"':''?>>Lainnya</option>
</select>
</div>

<div class="form-group">
<select class="form-control" name="jendela">
    <?php $jendela = $data['jendela']; ?>
    <option <?=($jendela=="Ada, berfungsi")? 'selected="selected"':''?>>Ada, Berfungsi</option>
    <option <?=($jendela=="Ada, tidak berfungsi")? 'selected="selected"':''?>>Ada, Tidak berfungsi</option>
    <option <?=($jendela=="Tidak ada")? 'selected="selected"':''?>>Tidak ada</option>
</select>
</div>

<div class="form-group">
<select class="form-control" name="atap">
    <?php $atap = $data['atap']; ?>
    <option <?=($atap=="Genteng")? 'selected="selected"':''?>>Genteng</option>
    <option <?=($atap=="Kayu / Jerami")? 'selected="selected"':''?>>Kayu/jerami</toption>
       <option <?=($atap=="Lainnya")? 'selected="selected"':''?>>Lainnya</option>
   </select>
</option>
</select>
</div>
<div class="form-group">
<select class="form-control" name="penerangan_rumah">
<?php $penerangan_rumah = $data['penerangan_rumah']; ?>
<option <?=($penerangan_rumah=="Listrik PLN")? 'selected="selected"':''?>>Listrik PLN</option>
<option <?=($penerangan_rumah=="Listrik Non PLN")? 'selected="selected"':''?>>Listrik Non PLN</option>
<option <?=($penerangan_rumah=="Lampu minyak / lilin")? 'selected="selected"':''?>>Lampu minyak/lilin</option>
<option <?=($penerangan_rumah=="Sumber penerangan lainnya")? 'selected="selected"':''?>>Sumber penerangan lainnya</option>
<option <?=($penerangan_rumah=="Tidak ada")? 'selected="selected"':''?>>Tidak ada</option>
</select>
</div>

<div class="form-group">
<select class="form-control" name="energi">
<?php $energi = $data['energi'] ?>
<option <?=($energi=="Gas kota / LPG / Biogas (keP407)")? 'selected="selected"':''?>>Gas kota / LPG /biogas (keP407)</option>
<option <?=($energi=="Minyak tanah / batu bara (keP407)")? 'selected="selected"':''?>>Minyak tanah/batu bara (keP407)</option>
<option <?=($energi=="Kayu bakar")? 'selected="selected"':''?>>Kayu bakar</option>
<option <?=($energi=="Lainnya (keP407)")? 'selected="selected"':''?>>Lainnya (keP407)</option>
</select>
</div>

<div class="form-group">
<select class="form-control" name="sumber_kayu">
<?php $sumberkayu = $data['sumber_kayu']; ?>
<option <?=($sumberkayu=="Pembelian")? 'selected="selected"':''?>>Pembelian</option>
<option <?=($sumberkayu=="Diambil dari hutan")? 'selected="selected"':''?>>Diambil dari hutan</option>
<option <?=($sumberkayu=="Diambil dari luar")? 'selected="selected"':''?>>Diambil dari luar/bukan hutan </option>
<option <?=($sumberkayu=="Lainnya")? 'selected="selected"':''?>>Lainnya</option>
</select>
</div>

<div class="form-group">
<select class="form-control" name="tempat_pembuangan">
<?php $tempat_pembuangan = $data['tempat_pembuangan']; ?>
<option <?=($tempat_pembuangan=="Tidak ada")? 'selected="selected"':''?>>Tidak ada</option>
<option <?=($tempat_pembuangan=="Dikebun / sungai / drainese")? 'selected="selected"':''?>>Dikebun / sungai /drainase</option>
<option <?=($tempat_pembuangan=="Dibakar")? 'selected="selected"':''?>>Dibakar </option>
<option <?=($tempat_pembuangan=="Tempat sampah")? 'selected="selected"':''?>>Tempat sampah</option>
<option <?=($tempat_pembuangan=="Tempat sampah diangkut reguler")? 'selected="selected"':''?>>Tempat sampah diangkut reguler</option>
</select>
</div>

<div class="form-group">
<select class="form-control" name="fasilitas_mck">
<?php $fasilitas_mck = $data['fasilitas_mck']; ?>
<option <?=($fasilitas_mck=="Sendiri")? 'selected="selected"':''?>>Sendiri</option>
<option <?=($fasilitas_mck=="Berkelompok / tetangga")? 'selected="selected"':''?>>Berkelompok/tetangga
</option>
<option <?=($fasilitas_mck=="MCK umum")? 'selected="selected"':''?>>MCK umum </option>
<option <?=($fasilitas_mck=="Tidak ada")? 'selected="selected"':''?>>Tidak ada</option>
</select>
</div>
<div class="form-group">
<select class="form-control" name="sumber_air_mandi">
<?php $sumberair_mandi = $data['sumberiair_mandi']; ?>
<option <?=($sumberair_mandi=="Ledeng / Perpipaan berbayar / Kemasan")? 'selected="selected"':''?>>Ledeng / perpipaan berbayar / air isi ulang / kemasan </option>
<option <?=($sumberair_mandi=="Perpipaan")? 'selected="selected"':''?>>Perpipaan</option>
<option <?=($sumberair_mandi=="Sungai / danau / embung")? 'selected="selected"':''?>>Sungai / danau / embung</option>
<option <?=($sumberair_mandi=="Tadah air hujan")? 'selected="selected"':''?>>Tadah air hujan</option>
<option <?=($sumberair_mandi=="Mata air / sumur")? 'selected="selected"':''?>>Mata air / sumur </option>
<option <?=($sumberair_mandi=="Lainnya")? 'selected="selected"':''?>>Lainnya</option>
</select>
</div>

<div class="form-group">
<select class="form-control" name="fasilitas_bab">
<?php $fasilitas_bab = $data['fasilitas_bab']; ?>
<option <?=($fasilitas_bab=="Jamban sendiri")? 'selected="selected"':''?>>Jamban sendiri</option>
<option <?=($fasilitas_bab=="Jamban bersama / tetangga")? 'selected="selected"':''?>>Jamban bersama / tetangga </option>
<option <?=($fasilitas_bab=="Jamban umum")? 'selected="selected"':''?>>Jamban umum</option>
<option <?=($fasilitas_bab=="Lainnya")? 'selected="selected"':''?>>Lainnya</option>
</select>
</div>

<div class="form-group">
<select class="form-control" name="sumber_minum">
<?php $sumber_minum = $data['sumber_minum']; ?>
<option <?=($sumber_minum=="Ledeng / Perpipaan berbayar / Kemasan")? 'selected="selected"':''?>>Ledeng / perpipaan berbayar / air isi ulang / kemasan </option>
<option <?=($sumber_minum=="Perpipaan")? 'selected="selected"':''?>>Mata air perpipaan</option>
<option <?=($sumber_minum=="Sungai / danau / embung")? 'selected="selected"':''?>>Sungai / danau / embung</option>
<option <?=($sumber_minum=="Tadah air hujan")? 'selected="selected"':''?>>Tadah air hujan</option>
<option <?=($sumber_minum=="Mata air / sumur")? 'selected="selected"':''?>>Mata air / sumur </option>
<option <?=($sumber_minum=="Lainnya")? 'selected="selected"':''?>>Lainnya</option>
</select>
</div>

<div class="form-group">
<select class="form-control" name="limbah">
<?php $limbah = $data['limbah']; ?>
<option <?=($limbah=="Tangki / instalasi pengelolaan limbah")? 'selected="selected"':''?>>Tangki / instalasi pengelolaan limbah</option>
<option <?=($limbah=="Sawah / kolam / sungai / drainase / laut")? 'selected="selected"':''?>>Sawah / kolam / sungai / drainase / laut </option>
<option <?=($limbah=="Lubang ditanah")? 'selected="selected"':''?>>Lubang ditanah </option>
<option <?=($limbah=="Lainnya")? 'selected="selected"':''?>>Lainnya</option>
</select>
</div>

<div class="form-row">
<div class="col">
<input type="radio" name="sutet" class="form-control" value="YA" <?php if($data['sutet']=='YA') echo 'checked'?>>YA
</div>
<div class="col">
<input type="radio" name="sutet" class="form-control" value="TIDAK" <?php if($data['sutet']=='TIDAK') echo 'checked'?>>TIDAK
</div>
</div>
<div class="form-row">
<div class="col">
<input type="radio" name="rumah_bantaran" class="form-control" value="YA" <?php if($data['rumah_bantaran_sungai']=='YA') echo 'checked'?>>YA
</div>
<div class="col">
<input type="radio" name="rumah_bantaran" class="form-control" value="TIDAK" <?php if($data['rumah_bantaran_sungai']=='TIDAK') echo 'checked'?>>TIDAK
</div>
</div>

<div class="form-row">
<div class="col">
<input type="radio" name="rumah_lereng_bukit" class="form-control" value="YA" <?php if($data['rumah_lereng_bukit']=='YA') echo 'checked'?>>YA
</div>
<div class="col">
<input type="radio" name="rumah_lereng_bukit" class="form-control" value="TIDAK" <?php if($data['rumah_lereng_bukit']=='TIDAK') echo 'checked'?>>TIDAK
</div>


</div>
<div class="form-group">
<input type="text" name="keseluruhan" class="form-control" value="<?php echo $data['keseluruhan'] ?> " required>
</div>
</div>
<div class="content">
<div id="akses_pendidikan" class="data">
<div class="form-row">
<div class="col">
<input    class="form-control"  type="text" name="paud" value="<?php echo $data['paud'] ?> " required>
</div>
<div class="col">
<input    class="form-control"  type="text" name="waktepaud" value="<?php echo $data['wakte_paud']?>">
</div>
<div class="col">
<select    class="form-control" name="kemudahan_paud">
    <?php $kemudahan = $data['kem_paud']; ?>
    <option <?=($kemudahan == "Mudah")? 'selected="selected"':'' ?>>Mudah</option>
    <option <?=($kemudahan == "Sulit")? 'selected="selected"':'' ?>>Sulit</option>
</select>
</div>
</div><br>
<div class="form-row">
<div class="col">
<input   class="form-control"  type="text" name="tk" value="<?php echo $data['tk'] ?> " required>
</div>
<div class="col">
<input    class="form-control"  type="text" name="waktetk" value="<?php echo $data['wakte_tk']?>">
</div>
<div class="col">
<select    class="form-control" name="kemudahan_tk">
    <?php $kemudahan_tk = $data['kem_tk']; ?>
    <option <?=($kemudahan_tk == "Mudah")? 'selected="selected"':'' ?>>Mudah</option>
    <option <?=($kemudahan_tk == "Sulit")? 'selected="selected"':'' ?>>Sulit</option>
</select>
</div>
</div><br>
<div class="form-row">
<div class="col">
<input   class="form-control" type="text" name="sd" value="<?php echo $data['sd'] ?> " required>
</div>
<div class="col">
<input    class="form-control"  type="text" name="waktesd" value="<?php echo $data['wakte_sd']?>">
</div>
<div class="col">
<select    class="form-control" name="kemudahan_sd">
    <?php $kemudahan_sd = $data['kem_sd']; ?>
    <option <?=($kemudahan_sd == "Mudah")? 'selected="selected"':'' ?>>Mudah</option>
    <option <?=($kemudahan_sd == "Sulit")? 'selected="selected"':'' ?>>Sulit</option>
</select>
</div>
</div><br>
<div class="form-row">
<div class="col">
<input  class="form-control" type="text" name="smp" value="<?php echo $data['smp'] ?> " required>
</div>
<div class="col">
<input    class="form-control"  type="text" name="waktesmp" value="<?php echo $data['wakte_smp']?>">
</div>
<div class="col">
<select    class="form-control" name="kemudahan_smp">
    <?php $kemudahan_smp = $data['kem_smp']; ?>
    <option <?=($kemudahan_smp == "Mudah")? 'selected="selected"':'' ?>>Mudah</option>
    <option <?=($kemudahan_smp == "Sulit")? 'selected="selected"':'' ?>>Sulit</option>
</select>
</div>
</div><br>
<div class="form-row">
<div class="col">
<input class="form-control" type="text" name="sma" value="<?php echo $data['sma'] ?> " required>
</div>
<div class="col">
<input    class="form-control"  type="text" name="waktesma" value="<?php echo $data['wakte_sma']?>">
</div>
<div class="col">
<select    class="form-control" name="kemudahan_sma">
    <?php $kemudahan_sma = $data['kem_sma']; ?>
    <option <?=($kemudahan_sma == "Mudah")? 'selected="selected"':'' ?>>Mudah</option>
    <option <?=($kemudahan_sma == "Sulit")? 'selected="selected"':'' ?>>Sulit</option>
</select>
</div>
</div><br>
<div class="form-row">
<div class="col">
<input class="form-control" type="text" name="perguruan_tinggi" value="<?php echo $data['perguruan_tinggi'] ?> " required>
</div>
<div class="col">
<input    class="form-control"  type="text" name="wakteperguruan" value="<?php echo $data['wakte_perguruan']?>">
</div>
<div class="col">
<select    class="form-control" name="kemudahan_perguruan_tinggi">
    <?php $kemudahan_perguruan = $data['kem_perguruan_tinggi']; ?>
    <option <?=($kemudahan_perguruan == "Mudah")? 'selected="selected"':'' ?>>Mudah</option>
    <option <?=($kemudahan_perguruan == "Sulit")? 'selected="selected"':'' ?>>Sulit</option>
</select>
</div>
</div><br>
<div class="form-row">
<div class="col">
<input class="form-control" type="text" name="pesantren" value="<?php echo $data['pesantren'] ?> " required>
</div>
<div class="col">
<input    class="form-control"  type="text" name="waktepesantren" value="<?php echo $data['wakte_pesantren']?>">
</div>
<div class="col">

<select    class="form-control" name="kemudahan_pesantren">
    <?php $kemudahan_pesantren = $data['kem_pesantren']; ?>
    <option <?=($kemudahan_pesantren == "Mudah")? 'selected="selected"':'' ?>>Mudah</option>
    <option <?=($kemudahan_pesantren == "Sulit")? 'selected="selected"':'' ?>>Sulit</option>
</select>
</div>
</div><br>
<div class="form-row">
<div class="col">
<input class="form-control" type="text" name="seminari" value="<?php echo $data['seminari'] ?> " required>
</div>
<div class="col">
<input    class="form-control"  type="text" name="wakteseminari" value="<?php echo $data['wakte_seminari']?>">
</div>
<div class="col">
<select    class="form-control" name="kemudahan_seminari">
    <?php $kemudahan_seminari = $data['kem_seminari']; ?>
    <option <?=($kemudahan_seminari == "Mudah")? 'selected="selected"':'' ?>>Mudah</option>
    <option <?=($kemudahan_seminari == "Sulit")? 'selected="selected"':'' ?>>Sulit</option>
</select>
</div>

</div><br>

<div class="form-row">
<div class="col">
<input class="form-control" type="text" name="pendidikan_keagamaan" value="<?php echo $data['pendidikan_keagamaan'] ?> " required>
</div>
<div class="col">
<input    class="form-control"  type="text" name="waktependidikan" value="<?php echo $data['wakte_pendidikan_keagamaan']?>">
</div>
<div class="col">
<select    class="form-control" name="kemudahan_pendidikan_keagamaan">
    <?php $kemudahan_pendidikan = $data['kem_pendidikan_keagamaan']; ?>
    <option <?=($kemudahan_pendidikan == "Mudah")? 'selected="selected"':'' ?>>Mudah</option>
    <option <?=($kemudahan_pendidikan == "Sulit")? 'selected="selected"':'' ?>>Sulit</option>
</select>
</div>
</div><br>
</div>
<div class="content">
<div class="data" id="akses_fasilitas_kesehatan">
<div class="form-row">
<div class="col">
    <input type="text" class="form-control" name="rumkit" value="<?php echo $data['rumkit'] ?> " required>
</div>
<div class="col">
    <input    class="form-control"  type="text" name="wakterumkit" value="<?php echo $data['wakte_rumkit']?>">
</div>
<div class="col">
    <select    class="form-control" name="kemudahanrumkit">
        <?php $kemudahanrumkit = $data['kem_rumkit']; ?>
        <option <?=($kemudahanrumkit == "Mudah")? 'selected="selected"':'' ?>>Mudah</option>
        <option <?=($kemudahanrumkit == "Sulit")? 'selected="selected"':'' ?>>Sulit</option>
    </select>
</div>
</div><br>
<div class="form-row">
<div class="col">
    <input type="text" class="form-control" name="rumkit_bersalin" value="<?php echo $data['rumki_bersalin'] ?> " required>
</div>
<div class="col">
    <input    class="form-control"  type="text" name="wakterumkitbersalin" value="<?php echo $data['wakte_rumkit_bersalin']?>">
</div>
<div class="col">
    <select    class="form-control" name="kemudahanrumkitbersalin">
        <?php $kemudahanrumkit_bersalin = $data['kem_rumkit_bersalin']; ?>
        <option <?=($kemudahanrumkit_bersalin == "Mudah")? 'selected="selected"':'' ?>>Mudah</option>
        <option <?=($kemudahanrumkit_bersalin == "Sulit")? 'selected="selected"':'' ?>>Sulit</option>
    </select>
</div>
</div><br>
<div class="form-row">
<div class="col">
    <input type="text" class="form-control" name="poliklinik" value="<?php echo $data['poliklinik'] ?> " required>
</div>
<div class="col">
    <input    class="form-control"  type="text" name="waktepoliklinik" value="<?php echo $data['wakte_poliklinik']?>">
</div>
<div class="col">
    <select    class="form-control" name="kemudahanpoliklinik">
        <?php $kemudahanpoliklinik = $data['kem_poliklinik']; ?>
        <option <?=($kemudahanpoliklinik == "Mudah")? 'selected="selected"':'' ?>>Mudah</option>
        <option <?=($kemudahanpoliklinik == "Sulit")? 'selected="selected"':'' ?>>Sulit</option>
    </select>
</div>
</div><br>
<div class="form-row">
<div class="col">
    <input type="text" class="form-control" name="puskesmas" value="<?php echo $data['puskesmas'] ?> " required>
</div>
<div class="col"> 
    <input    class="form-control"  type="text" name="waktepuskesmas" value="<?php echo $data['wakte_puskesmas']?>">
</div>
<div class="col">
    <select    class="form-control" name="kemudahanpuskesmas">
        <?php $kemudahanpuskesmas = $data['kem_puskesmas']; ?>
        <option <?=($kemudahanpuskesmas == "Mudah")? 'selected="selected"':'' ?>>Mudah</option>
        <option <?=($kemudahanpuskesmas == "Sulit")? 'selected="selected"':'' ?>>Sulit</option>
    </select>
</div>
</div><br>
<div class="form-row">
<div class="col">
    <input type="text" class="form-control" name="pustu" value="<?php echo $data['pustu'] ?> " required>
</div>
<div class="col">
    <input    class="form-control"  type="text" name="waktepustu" value="<?php echo $data['wakte_pustu']?>">
</div>
<div class="col">
    <select    class="form-control" name="kemudahanpustu">
        <?php $kemudahanpustu = $data['kem_pustu']; ?>
        <option <?=($kemudahanpustu == "Mudah")? 'selected="selected"':'' ?>>Mudah</option>
        <option <?=($kemudahanpustu == "Sulit")? 'selected="selected"':'' ?>>Sulit</option>
    </select>
</div>
</div><br>
<div class="form-row">
<div class="col">
    <input type="text" class="form-control" name="polindes" value="<?php echo $data['polindes'] ?> " required>
</div>
<div class="col">
    <input    class="form-control"  type="text" name="waktepolindes" value="<?php echo $data['wakte_polindes']?>">
</div>
<div class="col">
    <select    class="form-control" name="kemudahanpolindes">
        <?php $kemudahanpolindes = $data['kem_polindes']; ?>
        <option <?=($kemudahanpolindes == "Mudah")? 'selected="selected"':'' ?>>Mudah</option>
        <option <?=($kemudahanpolindes == "Sulit")? 'selected="selected"':'' ?>>Sulit</option>
    </select>
</div>
</div><br>
<div class="form-row">
<div class="col">
    <input type="text" class="form-control" name="poskesdes" value="<?php echo $data['poskesdes'] ?> " required>
</div>
<div class="col">
    <input    class="form-control"  type="text" name="wakteposkesdes" value="<?php echo $data['wakte_poskesdes']?>">
</div>
<div class="col">
    <select    class="form-control" name="kemudahanposkesdes">
        <?php $kemudahanposkesdes = $data['kem_poskesdes']; ?>
        <option <?=($kemudahanposkesdes == "Mudah")? 'selected="selected"':'' ?>>Mudah</option>
        <option <?=($kemudahanposkesdes == "Sulit")? 'selected="selected"':'' ?>>Sulit</option>
    </select>
</div>
</div><br>
<div class="form-row">
<div class="col">
    <input type="text" class="form-control" name="posyandu" value="<?php echo $data['posyandu'] ?> " required>
</div>
<div class="col">
    <input    class="form-control"  type="text" name="wakteposyandu" value="<?php echo $data['wakte_posyandu']?>">
</div>
<div class="col">
    <?php $kemudahanposyandu = $data['kem_posyandu'] ?>
    <select    class="form-control" name="kemudahanposyandu">
        <?php $kemudahanposyandu = $data['kem_posyandu']; ?>
        <option <?=($kemudahanposyandu == "Mudah")? 'selected="selected"':'' ?>>Mudah</option>
        <option <?=($kemudahanposyandu == "Sulit")? 'selected="selected"':'' ?>>Sulit</option>
    </select>
</div>
</div><br>
<div class="form-row">
<div class="col">
    <input type="text" class="form-control" name="apotik" value="<?php echo $data['apotik'] ?> " required>
</div>
<div class="col">
    <input    class="form-control"  type="text" name="wakteapotik" value="<?php echo $data['wakte_apotik']?>">
</div>
<div class="col">
    <?php $kemudahanapotik = $data['kem_apotik'] ?>
    <select    class="form-control" name="kemudahanapotik">
        <?php $kemudahanapotik = $data['kem_apotik']; ?>
        <option <?=($kemudahanapotik == "Mudah")? 'selected="selected"':'' ?>>Mudah</option>
        <option <?=($kemudahanapotik == "Sulit")? 'selected="selected"':'' ?>>Sulit</option>
    </select>
</div>
</div><br>
<div class="form-row">
<div class="col">
    <input type="text" class="form-control" name="toko_obat" value="<?php echo $data['toko_obat'] ?> " required>
</div>
<div class="col">
    <input    class="form-control"  type="text" name="waktetokoobat" value="<?php echo $data['wakte_toko_obat']?>">
</div>
<div class="col">
    <?php $kemudahantokoobat = $data['kem_toko_obat'] ?>
    <select    class="form-control" name="kemudahantokoobat">
        <?php $kemudahantokoobat = $data['kem_toko_obat']; ?>
        <option <?=($kemudahantokoobat == "Mudah")? 'selected="selected"':'' ?>>Mudah</option>
        <option <?=($kemudahantokoobat == "Sulit")? 'selected="selected"':'' ?>>Sulit</option>
    </select>
</div>
</div><br>
</div>



<div class="content">
<div class="data" id="akses_tenaga_kesehatan">
<div class="form-row">
    <div class="col">
        <input type="text"class="form-control" name="dokter_spesialis" value="<?php echo $data['dokter_spesialis'] ?> " required>
    </div>
    <div class="col">
        <input  class="form-control"  class="form-control"  type="text" name="waktedokterspesialis" value="<?php echo $data['wakte_dokter_spesialis']?>">
    </div>
    <div class="col">
        <select  class="form-control"  class="form-control" name="kemudahandokterspesialis" >
            <?php $kem_dokter_spesialis = $data['kem_dokter_spesialis']; ?>
            <option <?=($kem_dokter_spesialis == "Mudah")? 'selected="selected"':'' ?>>Mudah</option>
            <option <?=($kem_dokter_spesialis == "Sulit")? 'selected="selected"':'' ?>>Sulit</option>
        </select>
    </div>
</div><br>
<div class="form-row">
    <div class="col">
        <input type="text"class="form-control" name="dokter_umum" value="<?php echo $data['dokter_umum'] ?> " required>
    </div>
    <div class="col">
        <input  class="form-control"  class="form-control"  type="text" name="waktedokterumum" value="<?php echo $data['wakte_dokter_umum']?>">
    </div>
    <div class="col">
        <select  class="form-control"  class="form-control" name="kemudahandokterumum">
            <?php $kem_dokter_umum = $data['kem_dokter_umum']; ?>
            <option <?=($kem_dokter_umum == "Mudah")? 'selected="selected"':'' ?>>Mudah</option>
            <option <?=($kem_dokter_umum == "Sulit")? 'selected="selected"':'' ?>>Sulit</option>
        </select>
    </div>
</div><br>
<div class="form-row">
    <div class="col">
        <input type="text" class="form-control" name="bidan" value="<?php echo $data['bidan'] ?> " required>
    </div>
    <div class="col">
        <input    class="form-control"  type="text" name="waktebidan" value="<?php echo $data['wakte_bidan']?>">
    </div>
    <div class="col">
        <select    class="form-control" name="kemudahanbidan">
            <?php $kem_bidan = $data['kem_bidan']; ?>
            <option <?=($kem_bidan == "Mudah")? 'selected="selected"':'' ?>>Mudah</option>
            <option <?=($kem_bidan == "Sulit")? 'selected="selected"':'' ?>>Sulit</option>
        </select>
    </div>
</div><br>
<div class="form-row">
    <div class="col">
        <input type="text" class="form-control" name="tenaga_kesehatan" value="<?php echo $data['tenaga_kesehatan'] ?> " required>
    </div>
    <div class="col">
        <input   class="form-control" class="form-control"  type="text" name="waktetenagakesehatan" value="<?php echo $data['wakte_tenaga_kesehatan']?>">
    </div>
    <div class="col">
        <select    class="form-control" name="kemudahantenagakesehatan">
            <?php $kem_tenaga_kesehatan = $data['kem_tenaga_kesehatan']; ?>
            <option <?=($kem_tenaga_kesehatan == "Mudah")? 'selected="selected"':'' ?>>Mudah</option>
            <option <?=($kem_tenaga_kesehatan == "Sulit")? 'selected="selected"':'' ?>>Sulit</option>
        </select>
    </div>
</div><br>
<div class="form-row">
    <div class="col">
        <input type="text" class="form-control" name="dusun" value="<?php echo $data['dusun'] ?> " required>
    </div>
    <div class="col">
        <input   class="form-control" class="form-control"  type="text" name="waktedusun" value="<?php echo $data['wakte_dusun']?>">
    </div>
    <div class="col">
        <select    class="form-control" name="kemudahandusun">
            <?php $kem_dusun = $data['kem_dusun']; ?>
            <option <?=($kem_dusun == "Mudah")? 'selected="selected"':'' ?>>Mudah</option>
            <option <?=($kem_dusun == "Sulit")? 'selected="selected"':'' ?>>Sulit</option>
        </select>
    </div>
</div>
</div>

<div class="content">
<div class="data" id="akses_transportasi">

    <div class="form-row">
        <div class="col">
            <select class="form-control" name="lokasi_pekerjaanutama" id="">
                <?php $lokasi_pekerjaanutama = $data['lokasi_pekerjaanutama'] ?>
                <option <?=($lokasi_pekerjaanutama=="Darat")? 'selected="selected"':''?>>Darat</option>
                <option <?=($lokasi_pekerjaanutama=="Air")? 'selected="selected"':''?>>Air</option>
                <option <?=($lokasi_pekerjaanutama=="Udara")? 'selected="selected"':''?>>Udara</option>
            </select>
        </div>
        <div class="col">
            <select class="form-control" name="penggunaantransportasi_lokasi" id="">
                <?php $pen_lokasi_pekerjaanutama = $data['pen_lokasi_pekerjaanutama'] ?>
                <option <?=($pen_lokasi_pekerjaanutama=="YA")? 'selected="selected"':''?>>YA</option>
                <option <?=($pen_lokasi_pekerjaanutama=="TIDAK")? 'selected="selected"':''?>>TIDAK</option>
            </select>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="waktesekalijalan_lokasi" value="<?php echo $data['wakte_lokasi_pekerjaanutama'] ?> " required>           
        </div>
        <div class="col">

            <input type="text" class="form-control" name="biayasekalijalan_lokasi" value="<?php echo $data['biaya_lokasi_pekerjaanutama'] ?> " required> </div>
            <div class="col">
                <select    class="form-control" name="kemudahan_lokasi">
                    <?php $kemudahan = $data['kem_lokasi_pekerjaanutama']; ?>
                    <option <?=($kemudahan == "Mudah")? 'selected="selected"':'' ?>>Mudah</option>
                    <option <?=($kemudahan == "Sulit")? 'selected="selected"':'' ?>>Sulit</option>
                </select>
            </div>


        </div><br>
        <div class="form-row">
            <div class="col">
                <select name="lahan_pertanian"class="form-control">
                    <?php $lahan_pertanian = $data['lahan_pertanian'] ?>
                    <option <?=($lahan_pertanian=="Darat")? 'selected="selected"':''?>>Darat</option>
                    <option <?=($lahan_pertanian=="Air")? 'selected="selected"':''?>>Air</option>
                    <option <?=($lahan_pertanian=="Udara")? 'selected="selected"':''?>>Udara</option>
                </select>
            </div>
            <div class="col">
                <select class="form-control" name="penggunaantransportasi_lahan" id="">
                    <?php $pen_lahan_pertanian = $data['pen_lahan_pertanian'] ?>
                    <option <?=($pen_lahan_pertanian=="YA")? 'selected="selected"':''?>>YA</option>
                    <option <?=($pen_lahan_pertanian=="TIDAK")? 'selected="selected"':''?>>TIDAK</option>
                </select>
            </div><div class="col">
                <input type="text" class="form-control" name="waktesekalijalan_lahan" value="<?php echo $data['wakte_lahan_pertanian'] ?> " required>                            
            </div>
            <div class="col">

                <input type="text" class="form-control" name="biayasekalijalan_lahan" value="<?php echo $data['biaya_lahan_pertanian'] ?> " required> </div>
                <div class="col">
                    <select    class="form-control" name="kemudahan_lahan">
                        <?php $kem_lahan_pertanian = $data['kem_lahan_pertanian']; ?>
                        <option <?=($kem_lahan_pertanian == "Mudah")? 'selected="selected"':'' ?>>Mudah</option>
                        <option <?=($kem_lahan_pertanian == "Sulit")? 'selected="selected"':'' ?>>Sulit</option>
                    </select></div>
                </div><br>
                <div class="form-row">
                    <div class="col">
                        <select name="sekolah"class="form-control">
                            <?php $sekolah = $data['sekolah'] ?>
                            <option <?=($sekolah=="Darat")? 'selected="selected"':''?>>Darat</option>
                            <option <?=($sekolah=="Air")? 'selected="selected"':''?>>Air</option>
                            <option <?=($sekolah=="Udara")? 'selected="selected"':''?>>Udara</option>
                        </select>
                    </div>
                    <div class="col">
                        <select class="form-control" name="penggunaantransportasi_sekolah" id="">
                            <?php $pen_lokasi_pekerjaanutama = $data['pen_sekolah'] ?>
                            <option <?=($pen_lokasi_pekerjaanutama=="YA")? 'selected="selected"':''?>>YA</option>
                            <option <?=($pen_lokasi_pekerjaanutama=="TIDAK")? 'selected="selected"':''?>>TIDAK</option>
                        </select>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="waktesekalijalan_sekolah" value="<?php echo $data['wakte_sekolah'] ?> " required>                            
                    </div>
                    <div class="col">

                        <input type="text" class="form-control" name="biayasekalijalan_sekolah" value="<?php echo $data['biaya_sekolah'] ?> " required> 
                    </div>
                    <div class="col">
                        <select    class="form-control" name="kemudahan_sekolah">
                            <?php $kemudahan = $data['kem_lokasi_pekerjaanutama']; ?>
                            <option <?=($kemudahan == "Mudah")? 'selected="selected"':'' ?>>Mudah</option>
                            <option <?=($kemudahan == "Sulit")? 'selected="selected"':'' ?>>Sulit</option>
                        </select>
                    </div>
                </div><br>
                <div class="form-row">
                    <div class="col">
                        <select name="berobat"class="form-control">
                            <?php $berobat = $data['berobat'] ?>
                            <option <?=($berobat=="Darat")? 'selected="selected"':''?>>Darat</option>
                            <option <?=($berobat=="Air")? 'selected="selected"':''?>>Air</option>
                            <option <?=($berobat=="Udara")? 'selected="selected"':''?>>Udara</option>
                        </select>
                    </div>
                    <div class="col">
                        <select class="form-control" name="penggunaantransportasi_berobat" id="">
                            <?php $pen_lokasi_pekerjaanutama = $data['pen_berobat'] ?>
                            <option <?=($pen_lokasi_pekerjaanutama=="YA")? 'selected="selected"':''?>>YA</option>
                            <option <?=($pen_lokasi_pekerjaanutama=="TIDAK")? 'selected="selected"':''?>>TIDAK</option>
                        </select>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="waktesekalijalan_berobat" value="<?php echo $data['wakte_berobat'] ?> " required> </div>                           
                        <div class="col">
                            <input type="text" class="form-control" name="biayasekalijalan_berobat" value="<?php echo $data['biaya_berobat'] ?> " required> 
                        </div>
                        <div class="col">
                            <select    class="form-control" name="kemudahan_berobat">
                                <?php $kem_berobat = $data['kem_berobat']; ?>
                                <option <?=($kem_berobat == "Mudah")? 'selected="selected"':'' ?>>Mudah</option>
                                <option <?=($kem_berobat == "Sulit")? 'selected="selected"':'' ?>>Sulit</option>
                            </select>
                        </div>
                    </div><br>
                    <div class="form-row">
                        <div class="col">
                            <select name="beribadah"class="form-control">
                                <?php $beribadah = $data['beribadah'] ?>
                                <option <?=($beribadah=="Darat")? 'selected="selected"':''?>>Darat</option>
                                <option <?=($beribadah=="Air")? 'selected="selected"':''?>>Air</option>
                                <option <?=($beribadah=="Udara")? 'selected="selected"':''?>>Udara</option>
                            </select>
                        </div>
                        <div class="col"> 
                            <select class="form-control" name="penggunaantransportasi_beribadah" id="">
                                <?php $pen_lokasi_pekerjaanutama = $data['pen_beribadah'] ?>
                                <option <?=($pen_lokasi_pekerjaanutama=="YA")? 'selected="selected"':''?>>YA</option>
                                <option <?=($pen_lokasi_pekerjaanutama=="TIDAK")? 'selected="selected"':''?>>TIDAK</option>
                            </select>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="waktesekalijalan_beribadah" value="<?php echo $data['wakte_beribadah'] ?> " required>
                        </div>                
                        <div class="col">

                            <input type="text" class="form-control" name="biayasekalijalan_beribadah" value="<?php echo $data['biaya_beribadah'] ?> " required> 
                        </div>
                        <div class="col">
                            <select    class="form-control" name="kemudahan_beribadah">
                                <?php $kem_beribadah = $data['kem_beribadah']; ?>
                                <option <?=($kem_beribadah == "Mudah")? 'selected="selected"':'' ?>>Mudah</option>
                                <option <?=($kem_beribadah == "Sulit")? 'selected="selected"':'' ?>>Sulit</option>
                            </select>
                        </div>
                    </div><br>
                    <div class="form-row">
                        <div class="col">
                            <select name="rekreasi"class="form-control">
                                <?php $rekreasi = $data['rekreasi'] ?>
                                <option <?=($rekreasi=="Darat")? 'selected="selected"':''?>>Darat</option>
                                <option <?=($rekreasi=="Air")? 'selected="selected"':''?>>Air</option>
                                <option <?=($rekreasi=="Udara")? 'selected="selected"':''?>>Udara</option>
                            </select>
                        </div>
                        <div class="col">
                            <select class="form-control" name="penggunaantransportasi_rekreasi" id="">
                                <?php $pen_lokasi_pekerjaanutama = $data['pen_rekreasi'] ?>
                                <option <?=($pen_lokasi_pekerjaanutama=="YA")? 'selected="selected"':''?>>YA</option>
                                <option <?=($pen_lokasi_pekerjaanutama=="TIDAK")? 'selected="selected"':''?>>TIDAK</option>
                            </select>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="waktesekalijalan_rekreasi" value="<?php echo $data['wakte_rekreasi'] ?> " required>
                        </div>                  
                        <div class="col">
                            <input type="text" class="form-control" name="biayasekalijalan_rekreasi" value="<?php echo $data['biaya_rekreasi'] ?> " required>
                        </div>
                        <div class="col">
                            <select    class="form-control" name="kemudahan_rekreasi">
                                <?php $kem_rekreasi = $data['kem_rekreasi']; ?>
                                <option <?=($kem_rekreasi == "Mudah")? 'selected="selected"':'' ?>>Mudah</option>
                                <option <?=($kem_rekreasi == "Sulit")? 'selected="selected"':'' ?>>Sulit</option>
                            </select> 
                        </div>
                    </div><br>
                </div>
                <div class="content">
                    <div class="data" id="pemanfaatan_program">
                        <div class="form-row">
                            <div class="col">
                                <td><input class="form-control" type="checkbox" name="blt[]" title="YA" value="YA" <?php if (in_array("YA", $checked)) echo "checked";?>></td>
                            </div>
                            <div class="col">
                                <td><input class="form-control" type="checkbox" name="blt[]" title="TIDAK" value="TIDAK" <?php if (in_array("TIDAK", $checked)) echo "checked";?>></td>
                            </div>

                        </div><br>
                        <div class="form-row">
                            <div class="col">
                                <td><input class="form-control" type="checkbox" name="pkh[]" value="YA"<?php if (in_array("YA", $checked_pkh)) echo "checked";?>></td>
                            </div>
                            <div class="col">
                                <td><input class="form-control" type="checkbox" name="pkh[]" value="TIDAK"<?php if (in_array("TIDAK", $checked_pkh)) echo "checked";?>></td>
                            </div>
                        </div><br>
                        <div class="form-row">
                            <div class="col">
                                <td><input class="form-control" type="checkbox" name="bst[]" value="YA"<?php if (in_array("YA", $checked_bst)) echo "checked";?>></td>
                            </div>
                            <div class="col">
                                <td><input class="form-control" type="checkbox" name="bst[]" value="TIDAK"<?php if (in_array("TIDAK", $checked_bst)) echo "checked";?>></td>
                            </div>
                        </div><br>
                        <div class="form-row">
                            <div class="col">
                                <td><input type="checkbox" class="form-control" name="banpres[]" value="YA"<?php if (in_array("YA", $checked_banpres)) echo "checked";?>></td>
                            </div>
                            <div class="col">
                                <td><input type="checkbox" class="form-control" name="banpres[]" value="TIDAK"<?php if (in_array("TIDAK", $checked_banpres)) echo "checked";?>></td>
                            </div>
                        </div><br>
                        <div class="form-row">
                            <div class="col">
                                <td><input type="checkbox" class="form-control"name="bantuan_umkm[]" value="YA"<?php if (in_array("YA", $checked_bantuan_umkm)) echo "checked";?>></td>
                            </div>
                            <div class="col">
                                <td><input type="checkbox" class="form-control" name="bantuan_umkm[]" value="TIDAK"<?php if (in_array("TIDAK", $checked_bantuan_umkm)) echo "checked";?>></td>
                            </div>
                        </div><br>
                        <div class="form-row"> 
                            <div class="col">
                                <td><input type="checkbox" class="form-control" name="bantuan_pekerja[]" value="YA"<?php if (in_array("YA", $checked_bantuan_pekerja)) echo "checked";?>></td>
                            </div>
                            <div class="col">
                                <td><input type="checkbox" class="form-control" name="bantuan_pekerja[]" value="TIDAK"<?php if (in_array("TIDAK", $checked_bantuan_pekerja)) echo "checked";?>></td>
                            </div></div><br>
                            <div class="form-row">
                                <div class="col">
                                    <td><input type="checkbox" class="form-control" name="bantuan_anak[]" value="YA"<?php if (in_array("YA", $checked_bantuan_anak)) echo "checked";?>></td>
                                </div>
                                <div class="col">
                                    <td><input type="checkbox" class="form-control"name="bantuan_anak[]" value="TIDAK"<?php if (in_array("TIDAK", $checked_bantuan_anak)) echo "checked";?>></td>
                                </div>
                            </div><br>
                            <div class="form-row">
                                <div class="col">
                                    <td><input type="checkbox" class="form-control"name="lainnya[]" value="YA"<?php if (in_array("YA", $checked_lainnya)) echo "checked";?>></td>
                                </div>
                                <div class="col">
                                    <td><input class="form-control" type="checkbox" name="lainnya[]" value="TIDAK"<?php if (in_array("TIDAK", $checked_lainnya)) echo "checked";?>></td>
                                </div>
                            </div>
                        </div><br>
                    </div>
                </div>


            </div>

        </div>
    </div>


</div>
</div>

<button type="submit" class="btn btn-danger btn-lg btn-block float-right">EDIT</button>
</form>
</div>
<?php } ?>
<script src="./assets/js/lib/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
$("#passport").on('change', function(){
$(".data").hide();
$("#" + $(this).val()).fadeIn(700);
}).change();
});
</script>