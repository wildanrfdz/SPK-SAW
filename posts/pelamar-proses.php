<?php
include "../config/koneksi.php";
error_reporting(0);
$tipe = $_POST['tipe'];

if ($tipe == 'tambah') {
    $kode = $_POST['kode'];
    $nama_pelamar = $_POST['nama_pelamar'];
    $telp_pelamar = $_POST['telp_pelamar'];
    $alamat = $_POST['alamat'];
    $query = $koneksi->query("insert into pelamar (kode_pelamar, nama_pelamar, telp_pelamar, alamat) values ('$kode','$nama_pelamar','$telp_pelamar','$alamat')");
    if ($query) {
?>
        <script type="text/javascript">
            alert('Berhasil Tambah');
            window.location = "https://localhost/saw-wildan/?page=pelamar";
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
    $nama_pelamar = $_POST['nama_pelamar'];
    $telp_pelamar = $_POST['telp_pelamar'];
    $alamat = $_POST['alamat'];
    $query = $koneksi->query("update pelamar set kode_pelamar='$kode', nama_pelamar='$nama_pelamar', telp_pelamar='$telp_pelamar', alamat='$alamat' where kode_pelamar='$kode'");
    if ($query) {
    ?>
        <script type="text/javascript">
            alert('Berhasil Ubah');
            window.location = "https://localhost/saw-wildan/?page=pelamar";
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
    $koneksi->query("delete from pelamar where kode_pelamar = '$kode'");
?>
    <script type="text/javascript">
        history.back();
    </script>
<?php
}
