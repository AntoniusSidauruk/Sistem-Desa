<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        span{
            text-align: center;
        }
    </style>
</head>
<body onload="view_data()">
<div class="col-lg-12">

  <div class="card">
    <div class="card-title">
        <form>
        <input type="search" id="searchi" name="search" class="form-control" placeholder="cari berdasarkan nama/no_kk ..">
    </form>
    </div>
    <div class="bootstrap-data-table-panel text-center">
        <div class="table-responsive">
            <table id="row-select" class="display table table-borderd table-hover">
                <thead>
                    <tr>
                        <th>No Kartu Keluarga</th>
                        <th>Nama Kepala Keluarga</th>
                        <th>Alamat Dusun</th>
                        <th>Desa</th>
                        <th>Kecamatan</th>
                        <th>Kabupaten</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>

                <tbody id="tampill">
                    <?php
                    include './config/koneksi.php';

                    $query = mysqli_query($con, "SELECT * FROM form_keluarga");
                    while ($a = mysqli_fetch_array($query)) {
                        ?>
                        <tr>
                            <td><?php echo $a['no_kk']; ?></td>
                            <td><?php echo $a['nama_kk']; ?></td>
                            <td><?php echo $a['alamat_dusun']; ?></td>
                            <td><?php echo $a['desa']; ?></td>
                            <td><?php echo $a['kecamatan']; ?></td>
                            <td><?php echo $a['kabupaten']; ?></td>
                            <td>
                                <a href="?page=detail&no_kk=<?php echo $a['no_kk'] ?>" class="detail"><span class="btn btn-warning ti-pencil" type="button" title="Edit"></span></a>
                                <a href="?page=hapus&no_kk=<?php echo $a['no_kk'] ?>" class="delete"><span class="btn btn-danger ti-trash" type="button" title="Edit"></span></a>
                            </td>
                        
                        <?php } ?>
                        </tr>
                    </tbody>


                </table>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="./assets/js/lib/jquery.min.js"></script>
<script src="./assets/js/script.js"></script>
</body>
