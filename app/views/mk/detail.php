<div class="container mt-5">

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['mk']['nama_mk']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted">Bobot SKS : <?= $data['mk']['sks']; ?></h6>
            <p class="card-text">Semester :<?= $data['mk']['smt']; ?></p>
            <a href="<?= BASEURL; ?>/mk" class="card-link">Kembali</a>
        </div>
    </div>

</div>