<form role="form" name="form" action="posts/user-proses.php" method="post">
    <div class="mb-3">
        <label class="form-label">Username</label>
        <input name="tipe" type="text" class="form-control" value="tambah" hidden>
        <input type="text" id="username" name="username" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" id="password" name="password" class="form-control">
    </div>
    <div class="mb-3">
        <label for="street" class=" form-control-label">Level</label>
        <select name="level" id="level" class="form-control">
            <option>Please select</option>
            <option value="admin">Admin</option>
            <option value="pimpinan">Pimpinan</option>
        </select>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-info btn-sm">Simpan Data</button>
    </div>
</form>