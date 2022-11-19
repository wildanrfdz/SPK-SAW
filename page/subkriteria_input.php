<?php
include_once "../config/koneksi.php";
$q = $koneksi->query("SELECT max(kode_subkriteria) as kodeTerbesar FROM subkriteria");
$data = $q->fetch_array();
$kodeKaryawan = $data['kodeTerbesar'];
$urutan = (int) substr($kodeKaryawan, 2, 4);
$urutan++;
$huruf = "CK";
$kodeKaryawan = $huruf . sprintf("%02s", $urutan);
?>

<form role="form" name="form" action="posts/subkriteria-proses.php" method="post">
    <div class="mb-3">
        <label class="form-label">Kode Subkriteria</label>
        <input name="tipe" type="text" class="form-control" value="tambah" hidden>
        <input type="text" id="company" name="kode" class="form-control" readonly value="<?= $kodeKaryawan ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Kriteria</label>
        <select name="kriteria" id="kriteria" class="form-control" onchange="cari_kriteria(this.value)">
            <option>Please select</option>
            <?php
            $query = $koneksi->query("select * from kriteria");
            while ($hasil = $query->fetch_assoc()) {
            ?>
                <option value="<?= $hasil['kode_kriteria'] ?>"><?= $hasil['nama_kriteria'] ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Nama Subkriteria</label>
        <input type="text" id="nama_subkriteria" name="nama_subkriteria" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Keterangan</label>
        <input type="text" id="keterangan" name="keterangan" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Nilai</label>
        <input type="text" id="nilai" name="nilai" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-info btn-sm">Simpan Data</button>
    </div>
</form>