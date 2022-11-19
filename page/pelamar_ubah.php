<?php
include_once "../config/koneksi.php";
$kode = $_POST['kode'];
$q = $koneksi->query("SELECT * FROM pelamar where kode_pelamar='$kode'");
$data = $q->fetch_array();
?>

<form role="form" name="form" action="posts/pelamar-proses.php" method="post">
    <div class="mb-3">
        <label class="form-label">Kode Pelamar</label>
        <input name="tipe" type="text" class="form-control" value="ubah" hidden>
        <input type="text" id="company" name="kode" class="form-control" readonly value="<?= $data['kode_pelamar'] ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Nama Pelamar</label>
        <input type="text" id="vat" name="nama_pelamar" class="form-control" value="<?= $data['nama_pelamar'] ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Telp Pelamar</label>
        <input type="text" id="bobot" name="telp_pelamar" class="form-control" value="<?= $data['telp_pelamar'] ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Alamat Pelamar</label>
        <input type="text" id="bobot" name="alamat" class="form-control" value="<?= $data['alamat'] ?>">
    </div>
    <div class=" mb-3">
        <button type="submit" class="btn btn-info btn-sm">Ubah Data</button>
    </div>
</form>