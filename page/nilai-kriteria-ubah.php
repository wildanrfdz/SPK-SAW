<?php
error_reporting(0);
include_once "../config/koneksi.php";
$kode_alternatif = $_POST['kode'];
$query = $koneksi->query("select * from pelamar where kode_pelamar='$kode_alternatif'");
$hasilalternatif = $query->fetch_array();

?>
<form role="form" name="form" action="posts//nilai-kriteria-post.php" method="post">
    <div class="mb-3">
        <label class="form-label">Alternatif</label>
        <input name="kode" type="hidden" class="form-control" value="<?= $hasilalternatif['kode_pelamar'] ?>">
        <input name="tipe" type="text" class="form-control" value="ubah" hidden>
        <input type="text" class="form-control" readonly value="<?= $hasilalternatif['nama_pelamar'] ?>">
    </div>
    <?php
    $query = $koneksi->query("select * from kriteria");
    while ($kriteria = $query->fetch_array()) {
        $kd_kriteria = $kriteria['kode_kriteria'];
        $qnilai = $koneksi->query("select * from nilai_kriteria where kode_alternatif='$kode_alternatif' and kode_kriteria='$kd_kriteria'");
        $hasilnilai = $qnilai->fetch_array();
        $nilai = $hasilnilai['nilai'];
    ?>
        <div class="mb-3">
            <?php
            if ($nilai != '') {
            ?>
                <input name="tipe" type="hidden" class="form-control" value="ubah" placeholder="ubah">
            <?php
            } else {
            ?>
                <input name="tipe" type="hidden" class="form-control" value="tambah" placeholder="tambah">

            <?php } ?>
            <label class="form-label"><?= $kriteria['nama_kriteria'] ?></label>
            <select name="nilai[]" id="kd_kriteria" class="form-control">
                <option>Please select</option>
                <?php
                $query2 = $koneksi->query("select * from subkriteria where kode_kriteria='$kd_kriteria'");
                while ($subkriteria = $query2->fetch_array()) {
                    $kode_kriteria = $subkriteria['kode_kriteria'];
                    $kode_subkriteria = $subkriteria['kode_subkriteria'];
                    $nama_subkriteria = $subkriteria['nama_subkriteria'];
                    $bobot = $subkriteria['bobot'];
                ?>
                    <option value="<?= $bobot ?>" <?php if ($nilai == $bobot) echo 'selected="selected"'; ?>><?= $nama_subkriteria ?> | Nilai <?= $bobot ?></option>
                <?php
                }
                ?>
            </select>
        </div>
    <?php } ?>
    <div class="mb-3">
        <button type="submit" class="btn btn-info btn-sm">Simpan Data</button>
    </div>
</form>