<div class="container mt-3">

    <div class="row justify-content-center pt-2">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <h2 class="pt-4">Data Mata Kuliah</h2>
    <div class="row mb-3 pt-2">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary tombolTambahMk" data-toggle="modal" data-target="#formModal">
                Tambah Data
            </button>
        </div>
    </div>

    <div class="row mb-3 justify-content-end">
        <div class="col-lg-4">
            <form action="<?= BASEURL; ?>/mk/cari" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="cari mata kuliah.." name="keyword" id="keyword" autocomplete="off">
                    <div class="input-group-append">
                        <button class="btn btn-get-started" type="submit" id="tombolCari">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table align-middle table-striped table-hover">
            <thead class="thead" style="background-color: navy; color:white">
                <tr>
                    <th>
                        <center>Kode MK</center>
                    </th>
                    <th>
                        <center>Nama Mata Kuliah</center>
                    </th>
                    <th>
                        <center>Bobot SKS</center>
                    </th>
                    <th>
                        <center>Semester</center>
                    </th>
                    <th>
                        <center>Action</center>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data['mk'] as $mk) : ?>
                    <tr>
                        <td>
                            <center><?= $mk['kode_mk']; ?></center>
                        </td>
                        <td>
                            <center><?= $mk['nama_mk']; ?></center>
                        </td>
                        <td>
                            <center><?= $mk['sks']; ?></center>
                        </td>
                        <td>
                            <center><?= $mk['smt']; ?></center>
                        </td>
                        <td>
                            <center>
                                <a href="<?= BASEURL; ?>/mk/hapus/<?= $mk['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Tersebut?');">hapus</a>
                                <a href="<?= BASEURL; ?>/mk/ubah/<?= $mk['id']; ?>" class="btn btn-success btn-sm tampilModalUbahMk" data-toggle="modal" data-target="#formModal" data-id="<?= $mk['id']; ?>">ubah</a>
                                <a href="<?= BASEURL; ?>/mk/detail/<?= $mk['id']; ?>" class="btn btn-primary btn-sm">detail</a>
                            </center>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Tambah Data Mata Kuliah</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="<?= BASEURL; ?>/mk/tambah" method="post">
                    <input type="hidden" name="id" id="id">
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

                    <div class="form-group">
                        <label for="kode_mk">Kode Mata Kuliah</label>
                        <input type="text" class="form-control" id="kode_mk" name="kode_mk" autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <label for="sks">SKS</label>
                        <input type="number" class="form-control" id="sks" name="sks" autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <label for="smt">Semester</label>
                        <input type="number" class="form-control" id="smt" name="smt" placeholder="Semester" required>
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