<?php
include_once "../config/koneksi.php";
$kode = $_POST['kode'];
$q = $koneksi->query("SELECT * FROM user where id_login='$kode'");
$data = $q->fetch_array();
$level = $data['level'];
?>

<form role="form" name="form" action="posts/user-proses.php" method="post">
    <div class="mb-3">
        <label class="form-label">Username</label>
        <input name="tipe" type="text" class="form-control" value="ubah" hidden>
        <input name="kode" type="text" class="form-control" value="<?= $data['id_login'] ?>" hidden>
        <input type="text" id="username" name="username" class="form-control" value="<?= $data['username'] ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" id="password" name="password_lama" class="form-control" value="<?= $data['password'] ?>" hidden>
        <input type="password" id="password" name="password" class="form-control">
    </div>
    <div class="mb-3">
        <label for="street" class=" form-control-label">Level</label>
        <select name="level" id="level" class="form-control">
            <option>Please select</option>
            <option value="admin" <?php if ($level == 'admin') echo 'selected="selected"'; ?>>Admin</option>
            <option value="pimpinan" <?php if ($level == 'pimpinan') echo 'selected="selected"'; ?>>Pimpinan</option>
        </select>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-info btn-sm">Ubah Data</button>
    </div>
</form>