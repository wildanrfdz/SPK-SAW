<?php
include "../config/koneksi.php";
error_reporting(0);
$tipe = $_POST['tipe'];

if ($tipe == 'tambah') {
    $kode = $_POST['kode'];
    $kriteria = $_POST['kriteria'];
    $nama_subkriteria = $_POST['nama_subkriteria'];
    $keterangan = $_POST['keterangan'];
    $nilai = $_POST['nilai'];
    $query = $koneksi->query("insert into subkriteria (kode_subkriteria, nama_subkriteria, kode_kriteria, keterangan, bobot) values ('$kode','$nama_subkriteria','$kriteria','$keterangan', '$nilai')");
    if ($query) {
?>
        <script type="text/javascript">
            alert('Berhasil Tambah');
            window.location = "https://localhost/saw-wildan/?page=subkriteria";
        </script>
    <?php
    } else {
    ?>
        <script type="text/javascript">
            alert('Gagal Tambah');
            history.back(-1);
        </script>
    <?php
    }
    ?>

    <?php
} elseif ($tipe == 'ubah') {
    $kode = $_POST['kode'];
    $kriteria = $_POST['kriteria'];
    $nama_subkriteria = $_POST['nama_subkriteria'];
    $keterangan = $_POST['keterangan'];
    $nilai = $_POST['nilai'];
    $query = $koneksi->query("update subkriteria set kode_subkriteria='$kode', nama_subkriteria='$nama_subkriteria', kode_kriteria='$kriteria', keterangan='$keterangan', bobot='$nilai' where kode_subkriteria='$kode'");
    if ($query) {
    ?>
        <script type="text/javascript">
            alert('Berhasil Ubah');
            window.location = "https://localhost/saw-wildan/?page=subkriteria";
        </script>
    <?php
    } else {
    ?>
        <script type="text/javascript">
            alert('Gagal Ubah');
            history.back();
        </script>
    <?php
    }
    ?>

<?php
} else {
    $kode = $_GET['kode'];
    $koneksi->query("delete from subkriteria where kode_subkriteria = '$kode'");
?>
    <script type="text/javascript">
        history.back();
    </script>
<?php
}
