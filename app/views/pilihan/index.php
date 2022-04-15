<div class="container mt-3">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <h3 class="pt-5">Data Mata Kuliah Mahasiswa</h3>
    <div class="row mb-3">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
                Tambah Data
            </button>
        </div>
    </div>

    <div class="row mb-3 pt-3">
        <div class="col-lg-12">
            <ul class="list-group">
                <?php foreach ($data['mhs'] as $mhs) : ?>
                    <li class="list-group-item">
                        <h4><?= $mhs['nama']; ?></h4>
                        <h6 class="text-muted pb-3"><?= $mhs['nrp']; ?></h6>
                        <p>Jumlah Mata Kuliah Yang <?= $mhs['jumlah']; ?></p>
                        <a href="<?= BASEURL; ?>/pilihan/detail/<?= $mhs['nrp']; ?>" class="btn btn-primary btn-sm">Lihat Detail</a>
                        <a href="<?= BASEURL; ?>/pilihan/hapus/<?= $mhs['nrp']; ?>" class="btn btn-danger btn-sm">Hapus</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Tambah Data pilihan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="<?= BASEURL; ?>/pilihan/tambah" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="nrp">NRP</label>
                        <input type="number" class="form-control" id="nrp" name="nrp" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <label for="nama_mk">Mata Kuliah</label>
                        <select class="form-control" id="nama_mk" name="nama_mk">
                            <option value="Pemrograman Web">Pemrograman Web</option>
                            <option value="Data Mining">Data Mining</option>
                            <option value="Jaringan Komputer">Jaringan Komputer</option>
                            <option value="Pemrograman API">Pemrograman API</option>
                            <option value="Analisis Data">Analisis Data</option>
                            <option value="Aplikasi ERP">Aplikasi ERP</option>
                        </select>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>