<?php
include "../config/koneksi.php";
error_reporting(0);
$tipe = $_POST['tipe'];

if ($tipe == 'tambah') {
    $kode = $_POST['kode'];
    $nama_kriteria = $_POST['nama_kriteria'];
    $atribut = $_POST['atribut'];
    $bobot = $_POST['bobot'];
    $normalisasi = $bobot / 100;
    $query = $koneksi->query("insert into kriteria (kode_kriteria, nama_kriteria, atribut, nilai_input, nilai) values ('$kode','$nama_kriteria','$atribut','$bobot', '$normalisasi')");
    if ($query) {
?>
        <script type="text/javascript">
            alert('Berhasil Tambah');
            window.location = "https://localhost/saw-wildan/?page=kriteria";
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
    $nama_kriteria = $_POST['nama_kriteria'];
    $atribut = $_POST['atribut'];
    $bobot = $_POST['bobot'];
    $normalisasi = $bobot / 100;
    $query = $koneksi->query("update kriteria set kode_kriteria='$kode', nama_kriteria='$nama_kriteria', atribut='$atribut', nilai='$normalisasi', nilai_input='$bobot' where kode_kriteria='$kode'");
    if ($query) {
    ?>
        <script type="text/javascript">
            alert('Berhasil Ubah');
            window.location = "https://localhost/saw-wildan/?page=kriteria";
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
    $koneksi->query("delete from kriteria where kode_kriteria = '$kode'");
?>
    <script type="text/javascript">
        history.back();
    </script>
<?php
}
