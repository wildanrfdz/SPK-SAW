<?php
include "include/meta.php";
include "config/koneksi.php";
error_reporting(0);
session_start();
if (!isset($_SESSION['level'])) {
  include "login.php";
} else {
?>

  <body class=" layout-fluid">
    <div class="page">
      <div class="sticky-top">
        <?php
        include "include/header.php";
        include "include/top-menu.php";
        ?>

      </div>
      <div class="page-wrapper">

        <?php
        $page  = $_GET['page'];
        if ($page == '') {
          include "page/beranda.php";
        } else {
          include "page/$page.php";
        }
        include "include/footer.php";
        ?>
      </div>
    </div>

    <!-- Libs JS -->
    <?php
    include "include/lib_js.php";
    ?>
  </body>
<?php
}
?>