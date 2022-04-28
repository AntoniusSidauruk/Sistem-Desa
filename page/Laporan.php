<div class="col-lg-12">

    <div class="card">
        <div class="card-title">
            <h4>Laporan Data Penduduk</h4>

        </div>
        <div class="bootstrap-data-table-panel">
            <div class="table-responsive">
                <table id="row-select" class="display table table-borderd table-hover">
                    <thead>
                        <tr>
                            <th>No Kartu Keluarga</th>
                            <th>Nama Kepala Keluarga</th>
                            <th>Alamat Dusun</th>
                            <th>Desa</th>
                            <th>Eksekusi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php

                        include "./config/koneksi.php";

                        $query = "SELECT * FROM form_keluarga";
                        $result = mysqli_query($con,$query);
                        while($data = mysqli_fetch_array($result)){

                            ?>

                            <tr>
                             <th><?php echo $data['no_kk'] ?></th>
                             <th><?php echo $data['nama_kk'] ?></th>
                             <th><?php echo $data['alamat_dusun'] ?></th>
                             <th><?php echo $data['desa'] ?></th>

                             <td>
                              <a href="page/laporan1.php?no_kk=<?php echo $data ['no_kk'] ?>"class="btn btn-warning"><i class="ti-printer"></i> Cetak</a>
                          </td>
                      </tr>
                  <?php } ?>
              </tbody>



          </table>
          <a class="btn btn-success btn-lg btn-block mt-3 float-right" href="page/laporanalldata.php">Cetak Data</a>
      </div>
  </div>
</div>
</div>
