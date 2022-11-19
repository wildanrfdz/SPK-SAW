<?php
include "../config/koneksi.php";
error_reporting(0);
$tipe = $_POST['tipe'];

if ($tipe == 'tambah') {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $level = $_POST['level'];
    $query = $koneksi->query("insert into user (username, password, level) values ('$username','$password','$level')");
    if ($query) {
?>
        <script type="text/javascript">
            alert('Berhasil Tambah');
            window.location = "https://localhost/saw-wildan/?page=user";
        </script>
    <?php
    } else {
    ?>
        <script type="text/javascript">
            alert('Gagal Tambah');
            history.back(-1);
        </script>
    <?php
    }
    ?>

    <?php
} elseif ($tipe == 'ubah') {
    $kode = $_POST['kode'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($password == '') {
        $password = $_POST['password_lama'];
    } else {
        $password = md5($_POST['password']);
    }
    $level = $_POST['level'];
    $query = $koneksi->query("update `user` set username='$username', password='$password', level='$level' where id_login='$kode'");
    if ($query) {
    ?>
        <script type="text/javascript">
            alert('Berhasil Ubah');
            window.location = "https://localhost/saw-wildan/?page=user";
        </script>
    <?php
    } else {
    ?>
        <script type="text/javascript">
            alert('Gagal Ubah');
            history.back();
        </script>
    <?php
    }
    ?>

<?php
} else {
    $kode = $_GET['kode'];
    $koneksi->query("delete from user where id_login = '$kode'");
?>
    <script type="text/javascript">
        history.back();
    </script>
<?php
}
