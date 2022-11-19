<div class="container-xl">
    <!-- Page title -->
    <div class="page-header d-print-none">
        <div class="row g-2 align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">
                    Subkriteria
                </div>
                <h2 class="page-title">
                    Data Subkriteria
                </h2>
            </div>
            <!-- Page title actions -->
            <div class="col-12 col-md-auto ms-auto d-print-none">
                <div class="btn-list">
                    <a onclick="tambah()" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-report">
                        <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <line x1="12" y1="5" x2="12" y2="19" />
                            <line x1="5" y1="12" x2="19" y2="12" />
                        </svg>
                        Tambah Data
                    </a>
                    <a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal" data-bs-target="#modal-report" aria-label="Create new report">
                        <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <line x1="12" y1="5" x2="12" y2="19" />
                            <line x1="5" y1="12" x2="19" y2="12" />
                        </svg>
                    </a>
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
                        <table class="table card-table table-vcenter text-nowrap datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Subkriteria</th>
                                    <th>Nama Kriteria</th>
                                    <th>Nama Subkriteria</th>
                                    <th>Keterangan</th>
                                    <th>Bobot</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $query = $koneksi->query("select * from subkriteria inner join kriteria on kriteria.kode_kriteria=subkriteria.kode_kriteria");
                                while ($hasil = $query->fetch_assoc()) {
                                ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $hasil['kode_subkriteria'] ?></td>
                                        <td><?= $hasil['nama_kriteria'] ?></td>
                                        <td><?= $hasil['nama_subkriteria'] ?></td>
                                        <td><?= $hasil['keterangan'] ?></td>
                                        <td><?= $hasil['bobot'] ?></td>
                                        <td><a onclick="ubah('<?= $hasil['kode_subkriteria'] ?>')" class="btn btn-primary btn-sm">Edit</a> | <a onclick="return confirm('Apakah kamu yakin akan menghapus?')" href="posts/subkriteria-proses.php?tipe=hapus&kode=<?= $hasil['kode_pelamar'] ?>" class="btn btn-danger btn-sm">Hapus</a></td>
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

<div class="modal modal-blur fade" id="modal-tambah" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data Pelamar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="modal-body-tambah">

            </div>
        </div>
    </div>
</div>

<div class="modal modal-blur fade" id="modal-ubah" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ubah Data Kriteria</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="modal-body-ubah">

            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<script>
    function tambah() {
        $('#modal-tambah').modal('show');
        $.ajax({
            url: 'page/subkriteria_input.php',
            type: 'POST',
            dataType: 'html',
            success: function(jawaban) {
                $('#modal-body-tambah').html(jawaban);
            },
        })
    }

    function ubah(kode) {
        $('#modal-ubah').modal('show');
        $.ajax({
            url: 'page/subkriteria_ubah.php',
            type: 'POST',
            dataType: 'html',
            data: 'kode=' + kode,
            success: function(jawaban) {
                $('#modal-body-ubah').html(jawaban);
            },
        })
    }
</script>