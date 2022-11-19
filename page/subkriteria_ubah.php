<?php
include_once "../config/koneksi.php";
$kode = $_POST['kode'];
$q = $koneksi->query("SELECT * FROM subkriteria where kode_subkriteria='$kode'");
$data = $q->fetch_array();
$kode_kriteria = $data['kode_kriteria'];
?>

<form role="form" name="form" action="posts/subkriteria-proses.php" method="post">
    <div class="mb-3">
        <label class="form-label">Kode Subkriteria</label>
        <input name="tipe" type="text" class="form-control" value="ubah" hidden>
        <input type="text" id="company" name="kode" class="form-control" readonly value="<?= $data['kode_subkriteria'] ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Kriteria</label>
        <select name="kriteria" id="kriteria" class="form-control" onchange="cari_kriteria(this.value)">
            <option>Please select</option>
            <?php
            $query = $koneksi->query("select * from kriteria");
            while ($hasil = $query->fetch_assoc()) {
                $kr = $hasil['kode_kriteria'];
            ?>
                <option value="<?= $hasil['kode_kriteria'] ?>" <?php if ($kode_kriteria == $kr) echo 'selected="selected"'; ?>><?= $hasil['nama_kriteria'] ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Nama Subkriteria</label>
        <input type="text" id="nama_subkriteria" name="nama_subkriteria" class="form-control" value="<?= $data['nama_subkriteria'] ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Keterangan</label>
        <input type="text" id="keterangan" name="keterangan" class="form-control" value="<?= $data['keterangan'] ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Nilai</label>
        <input type="text" id="nilai" name="nilai" class="form-control" value="<?= $data['bobot'] ?>">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-info btn-sm">Simpan Data</button>
    </div>
</form>