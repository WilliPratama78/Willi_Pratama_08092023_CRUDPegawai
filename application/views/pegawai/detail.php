<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?= $pegawai['pegawai_nama'] ?></h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">Jabatan : <?= $pegawai['pegawai_jabatan'] ?></h6>
                    <p class="card-text">Umur : <?= $pegawai['pegawai_umur'] ?></p>
                    <p class="card-text">Alamat : <?= $pegawai['pegawai_alamat'] ?></p>
                    <a href="<?= base_url() ?>pegawai" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>