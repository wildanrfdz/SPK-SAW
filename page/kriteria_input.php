<?php
include_once "../config/koneksi.php";
$q = $koneksi->query("SELECT max(kode_kriteria) as kodeTerbesar FROM kriteria");
$data = $q->fetch_array();
$kodeKaryawan = $data['kodeTerbesar'];
$urutan = (int) substr($kodeKaryawan, 1, 3);
$urutan++;
$huruf = "C";
$kodeKaryawan = $huruf . sprintf("%02s", $urutan);
?>

<form role="form" name="form" action="posts/kriteria-proses.php" method="post">
    <div class="mb-3">
        <label class="form-label">Kode Kriteria</label>
        <input name="tipe" type="text" class="form-control" value="tambah" hidden>
        <input type="text" id="company" name="kode" class="form-control" readonly value="<?= $kodeKaryawan ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Nama Kriteria</label>
        <input type="text" id="vat" name="nama_kriteria" class="form-control">
    </div>
    <div class="mb-3">
        <label for="street" class=" form-control-label">Atribut</label>
        <select name="atribut" id="atribut" class="form-control" onchange="cari_kriteria(this.value)">
            <option>Please select</option>
            <option value="Benefit">Benefit</option>
            <option value="Cost">Cost</option>
        </select>
    </div>
    <div class="">
        <label class="form-label">Bobot</label>
    </div>
    <div class="input-group mb-3">
        <input type="text" class="form-control" name="bobot" id="bobot">
        <div class="input-group-append">
            <span class="input-group-text" id="basic-addon2">%</span>
        </div>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-info btn-sm">Simpan Data</button>
    </div>
</form>