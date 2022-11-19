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
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Analisa</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table card-table table-vcenter text-nowrap datatable">
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
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"><?= $hasilkriteria['nama_kriteria'] ?></th>
                                    <?php } ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $sql = $koneksi->query("select * from pelamar");
                                while ($hasil = $sql->fetch_array()) {
                                ?>
                                    <tr>
                                        <td class="align-middle text-center">
                                            <?= $no++ ?>
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
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tahap Normalisasi</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table card-table table-vcenter text-nowrap datatable">
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
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"><?= $hasilkriteria['nama_kriteria'] ?></th>
                                    <?php } ?>


                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $sql = $koneksi->query("select * from pelamar");
                                while ($hasil = $sql->fetch_array()) {
                                ?>
                                    <tr>
                                        <td class="align-middle text-center">
                                            <?= $no++ ?>
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
                                            $nilai = $hasilnilai['nilai'];
                                            $cc = $koneksi->query("SELECT max(nilai) as nilaimax FROM nilai_kriteria WHERE kode_kriteria='$hasilnilai[kode_kriteria]'");
                                            $crmax = $cc->fetch_array();
                                            $cm = $koneksi->query("SELECT min(nilai) as nilaimax FROM nilai_kriteria WHERE kode_kriteria='$hasilnilai[kode_kriteria]'");
                                            $crmin = $cm->fetch_array();
                                            $sql_kriteria = $koneksi->query("select * from kriteria where kode_kriteria='$hasilnilai[kode_kriteria]'");
                                            $kriteria = $sql_kriteria->fetch_array();
                                            $atribut = $kriteria['atribut'];
                                            if ($atribut == 'Benefit') {
                                                $total = $nilai / $crmax['nilaimax'];
                                            } elseif ($atribut == 'Cost') {
                                                $total = $crmin['nilaimax'] / $nilai;
                                            }
                                        ?>
                                            <?php if ($hasil["kode_pelamar"] == $hasilnilai["kode_alternatif"]) : ?>
                                                <td class="align-middle text-center">
                                                    <span class="text-secondary text-xs font-weight-bold"><?= $total ?></span>
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

            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Perangkingan</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table card-table table-vcenter text-nowrap datatable">
                            <thead>
                                <tr>
                                    <th class="text-secondary opacity-7"></th>
                                    <th class="text-uppercase text-secondary text-xxs text-center font-weight-bolder opacity-7">Kode Alternatif</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama Alternatif</th>
                                    <th class="text-uppercase text-secondary text-xxs text-center font-weight-bolder opacity-7">Total Nilai</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $sql = $koneksi->query("select * from pelamar");
                                while ($hasil = $sql->fetch_array()) {
                                ?>
                                    <tr>
                                        <td class="align-middle text-center">
                                            <?= $no++ ?>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold"><?= $hasil['kode_pelamar'] ?></span>
                                        </td>
                                        <td class="">
                                            <span class="text-secondary text-xs font-weight-bold"><?= $hasil['nama_pelamar'] ?></span>
                                        </td>
                                        <?php
                                        $totalnilai = 0;
                                        $sqlnilaikriteria = $koneksi->query("select * from nilai_kriteria where kode_alternatif='$hasil[kode_pelamar]'");
                                        while ($hasilnilai = $sqlnilaikriteria->fetch_array()) {
                                            $crmax = $koneksi->query("SELECT max(nilai) as nilaimax FROM nilai_kriteria WHERE kode_kriteria='$hasilnilai[kode_kriteria]'");
                                            $max = $crmax->fetch_array();

                                            $crmin = $koneksi->query("SELECT min(nilai) as nilaimax FROM nilai_kriteria WHERE kode_kriteria='$hasilnilai[kode_kriteria]'");
                                            $min = $crmin->fetch_array();
                                            $nilai = $hasilnilai['nilai'];

                                            $sql_kriteria = $koneksi->query("select * from kriteria where kode_kriteria='$hasilnilai[kode_kriteria]'");
                                            $kriteria = $sql_kriteria->fetch_array();
                                            $atribut = $kriteria['atribut'];
                                            if ($atribut == 'Benefit') {
                                                $total = $nilai / $max['nilaimax'];
                                            } elseif ($atribut == 'Cost') {
                                                $total = $min['nilaimax'] / $nilai;
                                            }

                                            $kr = $koneksi->query("select * from kriteria where kode_kriteria='$hasilnilai[kode_kriteria]'");
                                            $nilaikriteria = $kr->fetch_array();
                                            $nilaikr = $nilaikriteria['nilai'];
                                            $rank = $total * $nilaikr;
                                            $totalnilai = $totalnilai + $rank;
                                            $koneksi->query("delete from hasil_rekomendasi where kode_alternatif='$hasil[kode_pelamar]'");
                                            $koneksi->query("insert into hasil_rekomendasi (kode_alternatif, hasil) values ('$hasil[kode_pelamar]', '$totalnilai')");
                                        }
                                        ?>
                                        <td class="">
                                            <?= $totalnilai ?>
                                        </td>

                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Hasil Akhir</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table card-table table-vcenter text-nowrap datatable">
                            <thead>
                                <tr>
                                    <th class="text-secondary opacity-7"></th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama Alternatif</th>
                                    <th class="text-uppercase text-secondary text-xxs text-center font-weight-bolder opacity-7">Nilai Akhir</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $sql = $koneksi->query("select * from hasil_rekomendasi inner join pelamar on pelamar.kode_pelamar=hasil_rekomendasi.kode_alternatif order by hasil desc");
                                while ($hasil = $sql->fetch_array()) {
                                ?>
                                    <tr>
                                        <td class="align-middle text-center">
                                            <?= $no++ ?>
                                        </td>
                                        <td class="">
                                            <span class="text-secondary text-xs font-weight-bold"><?= $hasil['nama_pelamar'] ?></span>
                                        </td>
                                        <td class="">
                                            <?= $hasil['hasil'] ?>
                                        </td>

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