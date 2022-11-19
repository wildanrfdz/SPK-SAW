<div class="container-xl">
    <!-- Page title -->
    <div class="page-header d-print-none">
        <div class="row g-2 align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">
                    Nilai Kriteria
                </div>
                <h2 class="page-title">
                    Data Nilai Kriteria
                </h2>
            </div>
            <!-- Page title actions -->
            <div class="col-12 col-md-auto ms-auto d-print-none">
                <div class="btn-list">

                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-body">
    <div class="container-xl">
        <div class="row row-deck row-cards">
            <div class="col-12">
                <div class="card">
                    <div class="table-responsive">
                        <table class="table align-items-center mb-0" style="font-size:12px;">
                            <thead>
                                <?php
                                $sql_kriteria = $koneksi->query("select * from kriteria");
                                $jml_kolom = $sql_kriteria->num_rows;
                                ?>
                                <tr>
                                    <th colspan="3" class="text-uppercase text-secondary text-xxs text-center font-weight-bolder opacity-7">Alternatif</th>
                                    <th colspan="<?= $jml_kolom ?>" class="text-uppercase text-secondary text-xxs text-center font-weight-bolder opacity-7">Kriteria</th>
                                </tr>
                                <tr>
                                    <th class="text-secondary opacity-7"></th>
                                    <th class="text-uppercase text-secondary text-xxs text-center font-weight-bolder opacity-7">Kode Alternatif</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama Alternatif</th>
                                    <?php
                                    while ($hasilkriteria = $sql_kriteria->fetch_array()) {
                                    ?>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-center"><?= $hasilkriteria['nama_kriteria'] ?></th>
                                    <?php } ?>


                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = $koneksi->query("select * from pelamar");
                                while ($hasil = $sql->fetch_array()) {
                                ?>
                                    <tr>
                                        <td class="align-middle text-center">
                                            <a class="btn btn-secondary btn-sm d-none d-sm-inline-block" onclick="ubah('<?= $hasil['kode_pelamar'] ?>')"> Ubah</a>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold"><?= $hasil['kode_pelamar'] ?></span>
                                        </td>
                                        <td class="">
                                            <span class="text-secondary text-xs font-weight-bold"><?= $hasil['nama_pelamar'] ?></span>
                                        </td>
                                        <?php
                                        $sqlnilaikriteria = $koneksi->query("select * from nilai_kriteria");
                                        while ($hasilnilai = $sqlnilaikriteria->fetch_array()) {
                                        ?>
                                            <?php if ($hasil["kode_pelamar"] == $hasilnilai["kode_alternatif"]) : ?>
                                                <td class="align-middle text-center">

                                                    <span class="text-secondary text-xs font-weight-bold"><?= $hasilnilai['nilai'] ?></span>

                                                </td>
                                            <?php endif ?>

                                        <?php
                                        }
                                        ?>

                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal modal-blur fade" id="modal-ubah" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Input Nilai Kriteria</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="modal-body-ubah">

            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<script>
    function ubah(kode) {
        $('#modal-ubah').modal('show');
        $.ajax({
            url: 'page/nilai-kriteria-ubah.php',
            type: 'POST',
            dataType: 'html',
            data: 'kode=' + kode,
            success: function(jawaban) {
                $('#modal-body-ubah').html(jawaban);
            },
        })
    }
</script>