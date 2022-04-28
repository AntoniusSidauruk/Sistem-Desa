<?php
include '../config/koneksi.php';
if (!isset($_POST['cari'])) {

    $data = mysqli_query($con, "SELECT * FROM form_keluarga ");
} else {
    $data = mysqli_query($con, "SELECT * FROM form_keluarga WHERE no_kk LIKE '%$_POST[cari]%'  || nama_kk LIKE '%$_POST[cari]%'  ");
}

if (mysqli_num_rows($data) > 0) {

    while ($a = mysqli_fetch_array($data)) {
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
        </tr>
<?php }
} else {
    echo '<tr>';
    echo '<td colspan="7"><center>Data tidak diketahui ..</center></td>';

    echo '</tr>';
}
?>