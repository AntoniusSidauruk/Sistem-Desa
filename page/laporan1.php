<?php
ob_start();
require('../assets/plugin/fpdf.php');

class PDF extends FPDF {

	function Header () {
		
	}

	function Footer () {
		$this->SetY(-1.5);
		$this->SetFont('Arial','I',8);
		$this->Cell(0,1, 'Halaman'.$this->PageNo().'/{nb}',0,0,'L');
		// $tanggal=date("D M Y", time());
		// $this->SetFont('Arial', '', 10);
		// $this->Cell(0,1, 'Dicetak tanggal: '.$tanggal,0,0,'R');

	}
} 



$cell=0;
$pdf = new PDF('P', 'cm','A4');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->image('../assets/images/sdgs.png',1.5,1.1,2.5);
$pdf->SetFont('Arial','B',18);

$tanggal = date("Y", time());

$pdf->Cell(19,1, ' Data SDGS : TAHUN '. $tanggal, 'T',0,'C');
$pdf->Ln();
$pdf->Cell(19,1,'Sustainable Development Goals','B',0,'C');
$pdf->Ln(1.5);
$pdf->SetFont('Arial','',10);
date_default_timezone_set('Asia/Jakarta');
$tanggal = date("d F Y H:i:s");
include "../config/koneksi.php";
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
	$pdf->Cell(4,1, ' NO KARTU KELUARGA ', 'B',0);
	$pdf->Cell(0.6,1,' :','B' ,0);
	$pdf->Cell(8,1,$data["no_kk"], 'B',0);

	$pdf->Cell(6,1, ' DATE : '.$tanggal, 'B',1,0);
	$pdf->Ln(0.5);
	$pdf->Cell(4,1,'Nama Kepala Keluarga','',0,0);
	$pdf->Cell(0.6,1,' :','',0 ,1);
	$pdf->Cell(6,1, $data["nama_kk"] ,'' ,0 ,1);

	$pdf->Cell(3,1,'Kabupaten',0,0);
	$pdf->Cell(0.6,1,' :','',0 ,1);

	$pdf->Cell(2,1,$data["kabupaten"], 0 ,1);
	$pdf->Cell(4,1,'Alamat Dusun','',0,0);
	$pdf->Cell(0.6,1,' :','',0 ,1);

	$pdf->Cell(6,1,$data["alamat_dusun"],'', 0 ,1);
	$pdf->Cell(3,1,'Nama Enumerator',0,0);
	$pdf->Cell(0.6,1,' :','',0 ,1);

	$pdf->Cell(6.5,1,$data["nama_enumerator"], 0 ,1);
	$pdf->Cell(4,1,'Desa','',0,1);
	$pdf->Cell(0.6,1,' :','',0 ,1);
	$pdf->Cell(6,1,$data["desa"], '',0 ,1);
	$pdf->Cell(3,1,'Jabatan Pokja',0,0);
	$pdf->Cell(0.6,1,' :','',0 ,1);

	$pdf->Cell(5,1,$data["jabatan_pokja"], 0 ,1);
	$pdf->Cell(4,1,'Kecamatan',0,0);
	$pdf->Cell(0.6,1,' :','',0 ,1);
	$pdf->Cell(5,1,$data["kecamatan"], 0 ,1);

	$pdf -> Line(1, 9, 20, 9);

	$pdf->Ln(0.4);
	$pdf->SetFillColor(210,221,242);
	$pdf->SetFont( 'Arial', 'B', 10 );
	$pdf->Cell( 19, 1,  'Data Deskripsi Enumerator' ,0,1,'',true );
	$pdf->SetFont( 'Arial','', 10 );
	$pdf->Ln(0.3);
	$pdf->Cell(4,1,'Nama Kepala Keluarga',0,0);
	$pdf->Cell(0.6,1,' :','',0 ,1);

	$pdf->Cell(4,1,$data["nama"],0 ,1);

	$pdf->Cell(4,1,'NO Telepon',0,0);
	$pdf->Cell(0.6,1,' :','',0 ,1);

	$pdf->Cell(4,1,$data["hp"], 0 ,1);
	$pdf->Cell(4,1,'Alamat Dusun','',0,0);
	$pdf->Cell(0.6,1,' :','',0 ,1);

	$pdf->Cell(8,1,$data["alamatt"],'', 0 ,1);


	$pdf -> Line(1, 14, 20, 14);
	$pdf->Ln(1.7);


	$pdf->SetFillColor(210,221,242);
	$pdf->SetFont( 'Arial', 'B', 10 );
	$pdf->Cell( 19, 1,  'Data Deskripsi Lokasi' ,0,1,'',true );
	$pdf->SetFont( 'Arial','', 10 );
	$pdf->Ln(0.3);
	$pdf->Cell(4,1,'Provinsi','',0,0);
	$pdf->Cell(0.6,1,' :','',0 ,1);
	$pdf->Cell(6,1,$data["provinsi"],'', 0 ,1);
	$pdf->Cell(3,1,'Nama',0,0);
	$pdf->Cell(0.6,1,' :','',0 ,1);

	$pdf->Cell(5,1,$data["namaa"], 0 ,1);
	$pdf->Cell(4,1,'Kabupaten/kota','',0,0);
	$pdf->Cell(0.6,1,' :','',0 ,1);
	$pdf->Cell(6,1,$data["kabkot"],'', 0 ,1);
	$pdf->Cell(3,1,'Alamat',0,0);
	$pdf->Cell(0.6,1,' :','',0 ,1);

	$pdf->Cell(5,1,$data["alamat"], 0 ,1);
	$pdf->Cell(4,1,'Kecamatan','',0,0);
	$pdf->Cell(0.6,1,' :','',0 ,1);

	$pdf->Cell(6,1,$data["kecamatan"],'', 0 ,1);
	$pdf->Cell(3,1,'NO HP',0,0);
	$pdf->Cell(0.6,1,' :','',0 ,1);

	$pdf->Cell(5,1,$data["no_hp"], 0 ,1);
	$pdf->Cell(4,1,'Desa','',0,0);
	$pdf->Cell(0.6,1,' :','',0 ,1);

	$pdf->Cell(6,1,$data["desaa"],'', 0 ,1);
	$pdf->Cell(3,1,'NO TelpKabel',0,0);
	$pdf->Cell(0.6,1,' :','',0 ,1);

	$pdf->Cell(5,1,$data["no_telpkabel"], 0 ,1);
	$pdf->Cell(4,1,'RT / RW','',0,0);
	$pdf->Cell(0.6,1,' :','',0 ,1);

	$pdf->Cell(1,1,$data["rt"],'', 0 ,1);
	$pdf->Cell(1,1,'/','', 0 ,1);
	$pdf->Cell(1,1,$data["rw"],'', 0 ,1);
	$pdf -> Line(1, 21, 20, 21);
	$pdf->Ln(1.7);
	$pdf->SetFillColor(210,221,242);
	$pdf->SetFont( 'Arial', 'B', 10 );
	$pdf->Cell( 19, 1,  'Data Deskripsi Keluarga' ,0,1,'',true );
	$pdf->SetFont( 'Arial','', 10 );
	$pdf->Ln(0.3);
	$pdf->Cell(4,1,'NO KK',0,0);
	$pdf->Cell(0.6,1,' :','',0 ,1);

	$pdf->Cell(5,1,$data["no_kk"], 0 ,1);
	$pdf->Cell(4,1,'NIK Kepala Keluarga',0,0);
	$pdf->Cell(0.6,1,' :','',0 ,1);

	$pdf->Cell(5,1,$data["nik_kepala"], 0 ,1);

	$pdf -> Line(1, 14, 20, 14);
	$pdf->Ln(10);
	$pdf->SetFillColor(210,221,242);
	$pdf->SetFont( 'Arial', 'B', 10 );
	$pdf->Cell( 19, 1,  'Data Deskripsi Permukiman' ,0,1,'',true );
	$pdf->SetFont( 'Arial','', 10 );
	$pdf->Ln(0.3);
	$pdf->Cell(8,1,'Tempat tinggal yang ditempati',0,0);
	$pdf->Cell(0.6,1,' :','',0 ,1);

	$pdf->Cell(5,1,$data["tempat_tinggal"], 0 ,1);

	$pdf->Cell(8,1,'Status lahan tempat tinggal yang ditempati',0,0);
	$pdf->Cell(0.6,1,' :','',0 ,1);

	$pdf->Cell(5,1,$data["tempat_tinggal"], 0 ,1);
	$pdf->Cell(8,1,'Alamat Dusun',0,0);
	$pdf->Cell(0.6,1,' :','',0 ,1);

	$pdf->Cell(5,1,$data["alamat_dusun"], 0 ,1);
	$pdf->Cell(8,1,'Luas lahan tempat tinggal',0,0);
	$pdf->Cell(0.6,1,' :','',0 ,1);

	$pdf->Cell(5,1,$data["luas_lahan"], 0 ,1);
	$pdf->Cell(8,1,'Luas lantai tempat tinggal',0,0);
	$pdf->Cell(0.6,1,' :','',0 ,1);

	$pdf->Cell(5,1,$data["luas_lantai"], 0 ,1);
	$pdf->Cell(8,1,'Jenis lantai tempat tinggal terluas',0,0);
	$pdf->Cell(0.6,1,' :','',0 ,1);

	$pdf->Cell(5,1,$data["jenis_lantai"], 0 ,1);
	$pdf->Cell(8,1,'Dinding sebagian besar rumah',0,0);
	$pdf->Cell(0.6,1,' :','',0 ,1);

	$pdf->Cell(5,1,$data["dinding_sebagian"], 0 ,1);
	$pdf->Cell(8,1,'Jendela',0,0);
	$pdf->Cell(0.6,1,' :','',0 ,1);

	$pdf->Cell(5,1,$data["jendela"], 0 ,1);
	$pdf->Cell(8,1,'Atap',0,0);
	$pdf->Cell(0.6,1,' :','',0 ,1);

	$pdf->Cell(5,1,$data["atap"], 0 ,1);
	$pdf->Cell(8,1,'Penerangan rumah',0,0);
	$pdf->Cell(0.6,1,' :','',0 ,1);

	$pdf->Cell(5,1,$data["penerangan_rumah"], 0 ,1);
	$pdf->Cell(8,1,'Energi untuk memasak',0,0);
	$pdf->Cell(0.6,1,' :','',0 ,1);

	$pdf->Cell(5,1,$data["energi"], 0 ,1);
	$pdf->Cell(8,1,'Sumber kayu bakar',0,0);
	$pdf->Cell(0.6,1,' :','',0 ,1);

	$pdf->Cell(5,1,$data["sumber_kayu"], 0 ,1);
	$pdf->Cell(8,1,'Tempat pembuangan sampah',0,0);
	$pdf->Cell(0.6,1,' :','',0 ,1);

	$pdf->Cell(5,1,$data["tempat_pembuangan"], 0 ,1);
	$pdf->Cell(8,1,'Fasilitas mck',0,0);
	$pdf->Cell(0.6,1,' :','',0 ,1);

	$pdf->Cell(5,1,$data["fasilitas_mck"], 0 ,1);
	$pdf->Cell(8,1,'Sumber air mandi terbanyak dari',0,0);
	$pdf->Cell(0.6,1,' :','',0 ,1);

	$pdf->Cell(5,1,$data["sumberiair_mandi"], 0 ,1);
	$pdf->Cell(8,1,'Fasilitas buang air besar',0,0);
	$pdf->Cell(0.6,1,' :','',0 ,1);

	$pdf->Cell(5,1,$data["fasilitas_bab"], 0 ,1);
	$pdf->Cell(8,1,'Sumber air minum terbanyak dari',0,0);
	$pdf->Cell(0.6,1,' :','',0 ,1);

	$pdf->Cell(5,1,$data["sumberair_minum"], 0 ,1);
	$pdf->Cell(8,1,'Tempat pembuangan limbah cair',0,0);
	$pdf->Cell(0.6,1,' :','',0 ,1);

	$pdf->Cell(5,1,$data["tempat_pembuangan"], 0 ,1);
	$pdf->Cell(8,1,'Rumah berada dibawah SUTET/SUTT/SUTAS',0,0);
	$pdf->Cell(0.6,1,' :','',0 ,1);

	$pdf->Cell(5,1,$data["sutet"], 0 ,1);
	$pdf->Cell(8,1,'Rumah dibantaran sungai',0,0);
	$pdf->Cell(0.6,1,' :','',0 ,1);

	$pdf->Cell(5,1,$data["rumah_bantaran_sungai"], 0 ,1);
	$pdf->Cell(8,1,'Rumah dilereng bukit/gunung',0,0);
	$pdf->Cell(0.6,1,' :','',0 ,1);

	$pdf->Cell(5,1,$data["rumah_lereng_bukit"], 0 ,1);
	$pdf->Cell(8,1,'Secara keseluruhan kondisi rumah',0,0);
	$pdf->Cell(0.6,1,' :','',0 ,1);

	$pdf->Cell(5,1,$data["keseluruhan"], 0 ,1);
	$pdf->Ln(10);
	$pdf->SetFillColor(210,221,242);
	$pdf->SetFont( 'Arial', 'B', 10 );
	$pdf->Cell( 19, 1,  'Data Akses Pendidikan' ,0,1,'',true );
	$pdf->SetFont( 'Arial','', 10 );
	$pdf->Ln(0.6);
	$pdf->Cell(8,1,'Fasilitas',1,0,'C');
	$pdf->Cell(3,1,'Jarak (km)',1,0,'C');
	$pdf->Cell(4,1,'Waktu Tempuh (jam)',1,0,'C');
	$pdf->Cell(4,1,'Kemudahan',1,0,'C');
	$pdf->Ln();
	$pdf->Cell(8,1,'PAUD',0,0);
	$pdf->Cell(3,1,$data['paud'],0,0,'C');
	$pdf->Cell(4,1,$data['wakte_paud'],0,0,'C');
	$pdf->Cell(4,1,$data['kem_paud'],0,0,'C');
	$pdf->Ln();
	$pdf->Cell(8,1,'TK / RA',0,0);
	$pdf->Cell(3,1,$data['tk'],0,0,'C');
	$pdf->Cell(4,1,$data['wakte_tk'],0,0,'C');
	$pdf->Cell(4,1,$data['kem_tk'],0,0,'C');
	$pdf->Ln();
	$pdf->Cell(8,1,'SD / MI atau sederajat',0,0);
	$pdf->Cell(3,1,$data['sd'],0,0,'C');
	$pdf->Cell(4,1,$data['wakte_sd'],0,0,'C');
	$pdf->Cell(4,1,$data['kem_sd'],0,0,'C');
	$pdf->Ln();
	$pdf->Cell(8,1,'SMP / MTs atau sederajat',0,0);
	$pdf->Cell(3,1,$data['smp'],0,0,'C');
	$pdf->Cell(4,1,$data['wakte_smp'],0,0,'C');
	$pdf->Cell(4,1,$data['kem_smp'],0,0,'C');
	$pdf->Ln();
	$pdf->Cell(8,1,'SMA / MA atau sederajat',0,0);
	$pdf->Cell(3,1,$data['sma'],	0,0,'C');
	$pdf->Cell(4,1,$data['wakte_sma'],0,0,'C');
	$pdf->Cell(4,1,$data['kem_sma'],0,0,'C');
	$pdf->Ln();
	$pdf->Cell(8,1,'Perguruan tinggi',0,0);
	$pdf->Cell(3,1,$data['perguruan_tinggi'],0,0,'C');
	$pdf->Cell(4,1,$data['wakte_perguruan'],0,0,'C');
	$pdf->Cell(4,1,$data['kem_perguruan_tinggi'],0,0,'C');
	$pdf->Ln();
	$pdf->Cell(8,1,'Pesantren',0,0);
	$pdf->Cell(3,1,$data['pesantren'],0,0,'C');
	$pdf->Cell(4,1,$data['wakte_pesantren'],0,0,'C');
	$pdf->Cell(4,1,$data['kem_pesantren'],0,0,'C');
	$pdf->Ln();
	$pdf->Cell(8,1,'Seminari',0,0);
	$pdf->Cell(3,1,$data['seminari'],0,0,'C');
	$pdf->Cell(4,1,$data['wakte_seminari'],0,0,'C');
	$pdf->Cell(4,1,$data['kem_seminari'],0,0,'C');
	$pdf->Ln();
	$pdf->Cell(8,1,'Pendikan keagamaan lain',0,0);
	$pdf->Cell(3,1,$data['pendidikan_keagamaan'],0,0,'C');
	$pdf->Cell(4,1,$data['wakte_pendidikan_keagamaan'],0,0,'C');
	$pdf->Cell(4,1,$data['kem_pendidikan_keagamaan'],0,0,'C');
	$pdf->Ln(2);

	$pdf->SetFillColor(210,221,242);
	$pdf->SetFont( 'Arial', 'B', 10 );
	$pdf->Cell( 19, 1,  'Data Akses Fasilitas Kesehatan' ,0,1,'',true );
	$pdf->SetFont( 'Arial','', 10 );
	$pdf->Ln(0.6);
	$pdf->Cell(8,1,'Fasilitas',1,0,'C');
	$pdf->Cell(3,1,'Jarak (km)',1,0,'C');
	$pdf->Cell(4,1,'Waktu Tempuh (jam)',1,0,'C');
	$pdf->Cell(4,1,'Kemudahan',1,0,'C');
	$pdf->Ln();
	$pdf->Cell(8,1,'Rumah sakit',0,0);
	$pdf->Cell(3,1,$data['rumkit'],0,0,'C');
	$pdf->Cell(4,1,$data['wakte_rumkit'],0,0,'C');
	$pdf->Cell(4,1,$data['kem_rumkit'],0,0,'C');
	$pdf->Ln();
	$pdf->Cell(8,1,'Rumah sakit bersalin',0,0);
	$pdf->Cell(3,1,$data['rumki_bersalin'],0,0,'C');
	$pdf->Cell(4,1,$data['wakte_rumkit_bersalin'],0,0,'C');
	$pdf->Cell(4,1,$data['kem_rumkit_bersalin'],0,0,'C');
	$pdf->Ln();
	$pdf->Cell(8,1,'Poliklinik',0,0);
	$pdf->Cell(3,1,$data['poliklinik'],0,0,'C');
	$pdf->Cell(4,1,$data['wakte_poliklinik'],0,0,'C');
	$pdf->Cell(4,1,$data['kem_poliklinik'],0,0,'C');
	$pdf->Ln();
	$pdf->Cell(8,1,'Puskesmas',0,0);
	$pdf->Cell(3,1,$data['puskesmas'],0,0,'C');
	$pdf->Cell(4,1,$data['wakte_seminari'],0,0,'C');
	$pdf->Cell(4,1,$data['kem_puskesmas'],0,0,'C');
	$pdf->Ln();
	$pdf->Cell(8,1,'Puskesmas pembantu / pustu',0,0);
	$pdf->Cell(3,1,$data['pustu'],0,0,'C');
	$pdf->Cell(4,1,$data['wakte_pustu'],0,0,'C');
	$pdf->Cell(4,1,$data['kem_pustu'],0,0,'C');
	$pdf->Ln();
	$pdf->Cell(8,1,'Polindes',0,0);
	$pdf->Cell(3,1,$data['polindes'],0,0,'C');
	$pdf->Cell(4,1,$data['wakte_polindes'],0,0,'C');
	$pdf->Cell(4,1,$data['kem_polindes'],0,0,'C');
	$pdf->Ln();
	$pdf->Cell(8,1,'Poskesdes',0,0);
	$pdf->Cell(3,1,$data['poskesdes'],0,0,'C');
	$pdf->Cell(4,1,$data['wakte_poskesdes'],0,0,'C');
	$pdf->Cell(4,1,$data['kem_poskesdes'],0,0,'C');
	$pdf->Ln();
	$pdf->Cell(8,1,'Posyandu',0,0);
	$pdf->Cell(3,1,$data['posyandu'],0,0,'C');
	$pdf->Cell(4,1,$data['wakte_posyandu'],0,0,'C');
	$pdf->Cell(4,1,$data['kem_posyandu'],0,0,'C');
	$pdf->Ln();
	$pdf->Cell(8,1,'Apotik',0,0);
	$pdf->Cell(3,1,$data['apotik'],0,0,'C');
	$pdf->Cell(4,1,$data['wakte_seminari'],0,0,'C');
	$pdf->Cell(4,1,$data['kem_apotik'],0,0,'C');
	$pdf->Ln();
	$pdf->Cell(8,1,'Toko obat',0,0);
	$pdf->Cell(3,1,$data['toko_obat'],0,0,'C');
	$pdf->Cell(4,1,$data['wakte_toko_obat'],0,0,'C');
	$pdf->Cell(4,1,$data['kem_toko_obat'],0,0,'C');
	$pdf->Ln(2);

	$pdf->SetFillColor(210,221,242);
	$pdf->SetFont( 'Arial', 'B', 10 );
	$pdf->Cell( 19, 1,  'Data Akses Tenaga Kesehatan' ,0,1,'',true );
	$pdf->SetFont( 'Arial','', 10 );
	$pdf->Ln(0.6);
	$pdf->Cell(8,1,'Fasilitas',1,0,'C');
	$pdf->Cell(3,1,'Jarak (km)',1,0,'C');
	$pdf->Cell(4,1,'Waktu Tempuh (jam)',1,0,'C');
	$pdf->Cell(4,1,'Kemudahan',1,0,'C');
	$pdf->Ln();
	$pdf->Cell(8,1,'Dokter spesialis',0,0);
	$pdf->Cell(3,1,$data['dokter_spesialis'],0,0,'C');
	$pdf->Cell(4,1,$data['wakte_dokter_spesialis'],0,0,'C');
	$pdf->Cell(4,1,$data['kem_dokter_spesialis'],0,0,'C');
	$pdf->Ln();
	$pdf->Cell(8,1,'Dokter umum',0,0);
	$pdf->Cell(3,1,$data['dokter_umum'],0,0,'C');
	$pdf->Cell(4,1,$data['wakte_dokter_umum'],0,0,'C');
	$pdf->Cell(4,1,$data['kem_dokter_umum'],0,0,'C');
	$pdf->Ln();
	$pdf->Cell(8,1,'Bidan',0,0);
	$pdf->Cell(3,1,$data['bidan'],0,0,'C');
	$pdf->Cell(4,1,$data['wakte_bidan'],0,0,'C');
	$pdf->Cell(4,1,$data['kem_bidan'],0,0,'C');
	$pdf->Ln();
	$pdf->Cell(8,1,'Tenaga kesehatan',0,0);
	$pdf->Cell(3,1,$data['tenaga_kesehatan'],0,0,'C');
	$pdf->Cell(4,1,$data['wakte_tenaga_kesehatan'],0,0,'C');
	$pdf->Cell(4,1,$data['kem_tenaga_kesehatan'],0,0,'C');
	$pdf->Ln();
	$pdf->Cell(8,1,'Dusun',0,0);
	$pdf->Cell(3,1,$data['dusun'],0,0,'C');
	$pdf->Cell(4,1,$data['wakte_dusun'],0,0,'C');
	$pdf->Cell(4,1,$data['kem_dusun'],0,0,'C');

	$pdf->Ln(2);

	$pdf->SetFillColor(210,221,242);
	$pdf->SetFont( 'Arial', 'B', 10 );
	$pdf->Cell( 19, 1,  'Data Akses Prasarana Dan Sarana Transportasi' ,0,1,'',true );
	$pdf->SetFont( 'Arial','', 10 );
	$pdf->Ln(0.6);
		$pdf->Cell(7,1,'Tujuan',1,0,'C');
	$pdf->Cell(4,1,'Jenis transportasi',1,0,'C');
	$pdf->Cell(5,1,'Penggunaan transportasi',1,0,'C');
	$pdf->Cell(3,1,'Waktu Tempuh',1,0,'C');
	
	$pdf->Ln();
	$pdf->Cell(8,1,'Lokasi pekerjaan utama',0,0);
	$pdf->Cell(3,1,$data['lokasi_pekerjaanutama'],0,0,'C');
	$pdf->Cell(4,1,$data['pen_lokasi_pekerjaanutama'],0,0,'C');
	$pdf->Cell(4,1,$data['wakte_lokasi_pekerjaanutama'],0,0,'C');
	$pdf->Ln();
	$pdf->Cell(8,1,'Lahan pertanian yang sedang digunakan',0,0);
	$pdf->Cell(3,1,'Fasilitas',0,0,'C');
	$pdf->Cell(4,1,'Jarak (km)',0,0,'C');
	$pdf->Cell(4,1,'Waktu Tem',0,0,'C');
	$pdf->Ln();
	$pdf->Cell(8,1,'Sekolah',0,0);
	$pdf->Cell(3,1,'Fasilitas',0,0,'C');
	$pdf->Cell(4,1,'Jarak (km)',0,0,'C');
	$pdf->Cell(4,1,'Waktu Tem',0,0,'C');
	$pdf->Ln();
	$pdf->Cell(8,1,'Berobat',0,0);
	$pdf->Cell(3,1,'Fasilitas',0,0,'C');
	$pdf->Cell(4,1,'Jarak (km)',0,0,'C');
	$pdf->Cell(4,1,'Waktu Tem',0,0,'C');
	$pdf->Ln();
	$pdf->Cell(8,1,'Beribadah mingguan / bulanan / tahunan',0,0);
	$pdf->Cell(3,1,'Fasilitas',0,0,'C');
	$pdf->Cell(4,1,'Jarak (km)',0,0,'C');
	$pdf->Cell(4,1,'Waktu Tem',0,0,'C');
	$pdf->Ln();
	$pdf->Cell(8,1,'Rekreasi terdekat',0,0);
	$pdf->Cell(3,1,'Fasilitas',0,0,'C');
	$pdf->Cell(4,1,'Jarak (km)',0,0,'C');
	$pdf->Cell(4,1,'Waktu Tem',0,0,'C');
	$pdf->Ln(2);

	$pdf->SetFillColor(210,221,242);
	
	$pdf->Ln(0.6);
		$pdf->Cell(10,1,'Biaya sekali jalan',1,0,'C');
	$pdf->Cell(9,1,'Kemudahan',1,0,'C');

	
	$pdf->Ln();
	$pdf->Cell(10,1,$data['biaya_lokasi_pekerjaanutama'],0,0,'C');
	$pdf->Cell(9,1,$data['kem_lokasi_pekerjaanutama'],0,0,'C');
	
	$pdf->Ln(15);



	$pdf->SetFillColor(210,221,242);
	$pdf->SetFont( 'Arial', 'B', 10 );
	$pdf->Cell( 19, 1,  'Pemanfaat / penerima program pemerintah :' ,0,1,'',true );
	$pdf->SetFont( 'Arial','', 10 );
	$pdf->Ln(0.6);
	$pdf->Cell(8,1,'BLT Dana Desa',0,0);
	$pdf->Cell(3,1,':',0,0,'C');
	$pdf->Cell(4,1,$data['blt'],0,0,'C');
	$pdf->Ln();
	$pdf->Cell(8,1,'Program Keluarga Harapan / pkh',0,0);
	$pdf->Cell(3,1,':',0,0,'C');
	$pdf->Cell(4,1,$data['pkh'],0,0,'C');
	$pdf->Ln();
	$pdf->Cell(8,1,'Bantuan Sosial Tunai / bst',0,0);
	$pdf->Cell(3,1,':',0,0,'C');
	$pdf->Cell(4,1,$data['bst'],0,0,'C');
	$pdf->Ln();
	$pdf->Cell(8,1,'Bantuan Presiden / banpres',0,0);
	$pdf->Cell(3,1,':',0,0,'C');
	$pdf->Cell(4,1,$data['banpres'],0,0,'C');
	$pdf->Ln();
	$pdf->Cell(8,1,'Bantuan UMKM',0,0);
	$pdf->Cell(3,1,':',0,0,'C');
	$pdf->Cell(4,1,$data['bantuan_umkm'],0,0,'C');
}
$pdf->Ln(4);
$tanggal=date("d, F Y", time());
$pdf->Cell(8,1,'',0,0);
$pdf->Cell(3,1,'',0,0,'C');
$pdf->Cell(4,1,'',0,0,'C');
$pdf->Cell(3,1,$tanggal,0,0,'C');
$pdf->Ln(0.6);
$pdf->Cell(8,1,'',0,0);
$pdf->Cell(3,1,'',0,0,'C');
$pdf->Cell(4,1,'',0,0,'C');
$pdf->SetFont('','I',0);
$pdf->Cell(3,1,'Name jabatan',0,0,'C');
$pdf->Ln(2);
$pdf->Cell(8,1,'',0,0);
$pdf->Cell(3,1,'',0,0,'C');
$pdf->Cell(4,1,'',0,0,'C');
$pdf->Cell(3,1,'Nama penandatangan / wakil',0,0,'C');
$pdf->Output();

ob_end_flush();
?>

$pdf->Cell(55,5,'Reference Code',1,0);
$pdf->Cell(58,5,' : 025ETY', 1 ,0);
$pdf->Cell(25,5,'Date',1,0);
$pdf->Cell(52,5,': 2018-12-24 11:47:10 AM',1, 1);

$pdf->Cell(55,5,'Amount',1,0);
$pdf->Cell(58,5,' : 2674', 1 ,0);
$pdf->Cell(25,5,'Channel',1,0);
$pdf->Cell(52,5,': WEB',1, 1);

$pdf->Cell(55,5,'Status',1,0);
$pdf->Cell(58,5,' : Complete', 1 ,0);
$pdf->Line(10,30,200,30);