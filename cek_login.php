<?php
session_start();
// koneksi database -------------------------------------------->
include "config/koneksi.php";
//<--------------------------------------------------------------

if (isset($_POST['username']) && ($_POST['password'])) {
    $username = $koneksi->real_escape_string($_POST['username']);
    $password = $koneksi->real_escape_string(md5($_POST['password']));

    $sql = "select * from user where username = '$username' AND password = '$password'";
    $result = $koneksi->query($sql) or die('Terjadi Kesalahan : ' . $koneksi->error);
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION['id_login'] = $row['id_login'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['level'] = $row['level'];
?>
        <script>
            alert('Login berhasil');
            window.location = "index.php";
        </script>
    <?php
    } else {
    ?>
        <script>
            alert('Username atau password salah');
            window.location = "login.php";
        </script>
    <?php
    }
} else {
    ?>
    <script>
        alert('Username dan password tidak boleh kosong');
        window.location = "login.php";
    </script>
<?php
}
