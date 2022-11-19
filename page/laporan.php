<div class="container-xl">
    <!-- Page title -->
    <div class="page-header d-print-none">
        <div class="row g-2 align-items-center">
            <div class="col">
                <!-- Page pre-title -->

                <h2 class="page-title">
                    Laporan
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
                        <div class="row">
                            <div class="col-6">
                                <h3 class="card-title">Hasil Akhir</h3>
                            </div>
                            <div class="col-6">
                                <button class="btn btn-primary btn-sm" onclick="printDiv('cetak')">Cetak Laporan</button>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive" id="cetak">
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

<script>
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>