<div class="container mt-5">

  <div class="row mt-5 justify-content-center">
    <div class="col-md-8">
      <div class="card" style="width: 45rem;">
        <div class="card-body">
          <h2 class="card-title"><?= $data['mhs']['nama']; ?></h2>
          <h6 class="card-subtitle mb-2 text-muted"><?= $data['mhs']['nrp']; ?></h6>
          <p class="card-text pt-3">Email : <?= $data['mhs']['email']; ?></p>
          <p class="card-text pb-3">Jurusan : <?= $data['mhs']['jurusan']; ?></p>
          <a class="btn btn-danger" href="<?= BASEURL; ?>/mahasiswa" class="card-link">Kembali</a>
        </div>
      </div>
    </div>
  </div>




</div>