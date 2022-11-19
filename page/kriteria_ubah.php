<?php
include_once "../config/koneksi.php";
$kode = $_POST['kode'];
$q = $koneksi->query("SELECT * FROM kriteria where kode_kriteria='$kode'");
$data = $q->fetch_array();
$atribut = $data['atribut'];
?>
<form role="form" name="form" action="posts/kriteria-proses.php" method="post">
    <div class="mb-3">
        <label class="form-label">Kode Kriteria</label>
        <input name="tipe" type="text" class="form-control" value="ubah" hidden>
        <input type="text" id="company" name="kode" class="form-control" readonly value="<?= $data['kode_kriteria'] ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Nama Kriteria</label>
        <input type="text" id="vat" name="nama_kriteria" class="form-control" value="<?= $data['nama_kriteria'] ?>">
    </div>
    <div class="mb-3">
        <label for="street" class=" form-control-label">Atribut</label>
        <select name="atribut" id="atribut" class="form-control">
            <option>Please select</option>
            <option value="Benefit" <?php if ($atribut == 'Benefit') echo 'selected="selected"'; ?>>Benefit</option>
            <option value="Cost" <?php if ($atribut == 'Cost') echo 'selected="selected"'; ?>>Cost</option>
        </select>
    </div>
    <div class="">
        <label class="form-label">Bobot Kriteria</label>
    </div>
    <div class="input-group mb-3">
        <input type="text" class="form-control" name="bobot" id="bobot" value="<?= $data['nilai_input'] ?>">
        <div class="input-group-append">
            <span class="input-group-text" id="basic-addon2">%</span>
        </div>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-info btn-sm">Simpan Data</button>
    </div>
</form>