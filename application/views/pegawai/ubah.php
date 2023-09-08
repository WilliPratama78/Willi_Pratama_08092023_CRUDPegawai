<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Ubah Data Mahasiswa
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" value="<?= $p['pegawai_id'] ?>" name="id">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" value="<?= $p['pegawai_nama'] ?>" name="nama">
                        </div>
                        <div class="mb-3">
                            <label for="jabatan" class="form-label">Jabatan</label>
                            <input type="text" class="form-control" id="jabatan" value="<?= $p['pegawai_jabatan'] ?>" name="jabatan">
                        </div>
                        <div class="mb-3">
                            <label for="umur" class="form-label">Umur</label>
                            <input type="text" class="form-control" id="umur" value="<?= $p['pegawai_umur'] ?>" name="umur">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" value="<?= $p['pegawai_alamat'] ?>" name="alamat">
                        </div>

                        <button type="submit" class="btn btn-primary float-end">Ubah Data</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>