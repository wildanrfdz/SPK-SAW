<?php
$koneksi = new mysqli("localhost", "root", "", "saw-wildan");

if ($koneksi->connect_error) {
    // jika terjadi error, matikan proses dengan die() atau exit();
    die('Maaf koneksi gagal: ' . $koneksi->connect_error);
}
