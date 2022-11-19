<?php
$tipe = $_POST['tipe'];
$kode = $_POST['kode'];
$nilai = $_POST['nilai'];
include "../config/koneksi.php";
if ($tipe == 'tambah') {

    $i = 0;
    foreach ($nilai as $a) {
        $new_sort  = $i + 1;
        $kodes = 'C0' . $new_sort;
        $cek = $koneksi->query("select * from nilai_kriteria where kode_alternatif='$kode' and kode_kriteria='$kodes'");
        $cekk = $cek->num_rows;
        if ($cekk == 0) {
            $koneksi->query("insert into nilai_kriteria (kode_alternatif, kode_kriteria, nilai) values ('$kode', 'C0$new_sort', '$a')");
        }
        $i++;
    }
?>
    <script type="text/javascript">
        alert('Berhasil Tambah nilai');
        window.location = "https://localhost/saw-wildan/?page=nilai-kriteria";
    </script>
<?php
} else {
    $i = 0;
    foreach ($nilai as $a) {
        $new_sort  = $i + 1;
        $koneksi->query("update nilai_kriteria set nilai='$a' where kode_alternatif='$kode' and kode_kriteria='C0$new_sort'");
        $i++;
    }
?>
    <script type="text/javascript">
        alert('Berhasil Tambah nilai');
        history.go(-2);
    </script>
<?php
}
?>