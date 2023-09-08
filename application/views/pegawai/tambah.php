<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Tambah Data Pegawai
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama : </label>
                            <input type="text" class="form-control" id="nama" name="nama">
                            <div class="form-text text-danger">
                                <?= form_error('nama') ?>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="jabatan" class="form-label">Jabatan :</label>
                            <input type="text" class="form-control" id="jabatan" name="jabatan">
                            <div class="form-text text-danger">
                                <?= form_error('jabatan') ?>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="umur" class="form-label">Umur :</label>
                            <input type="text" class="form-control" id="umur" name="umur">
                            <div class="form-text text-danger">
                                <?= form_error('umur') ?>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="jurusan" class="form-label">Alamat :</label>
                            <input type="text" class="form-control" id="alamat" name="alamat">
                            <div class="form-text text-danger">
                                <?= form_error('alamat') ?>
                            </div>
                        </div>

                        <button class="btn btn-primary float-end" type="submit">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>