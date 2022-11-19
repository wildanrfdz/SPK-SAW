<?php
include_once "../config/koneksi.php";
$q = $koneksi->query("SELECT max(kode_pelamar) as kodeTerbesar FROM pelamar");
$data = $q->fetch_array();
$kodeKaryawan = $data['kodeTerbesar'];
$urutan = (int) substr($kodeKaryawan, 1, 3);
$urutan++;
$huruf = "A";
$kodeKaryawan = $huruf . sprintf("%02s", $urutan);
?>

<form role="form" name="form" action="posts/pelamar-proses.php" method="post">
    <div class="mb-3">
        <label class="form-label">Kode Pelamar</label>
        <input name="tipe" type="text" class="form-control" value="tambah" hidden>
        <input type="text" id="company" name="kode" class="form-control" readonly value="<?= $kodeKaryawan ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Nama Pelamar</label>
        <input type="text" id="vat" name="nama_pelamar" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Telp Pelamar</label>
        <input type="text" id="bobot" name="telp_pelamar" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Alamat Pelamar</label>
        <input type="text" id="bobot" name="alamat" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-info btn-sm">Simpan Data</button>
    </div>
</form>