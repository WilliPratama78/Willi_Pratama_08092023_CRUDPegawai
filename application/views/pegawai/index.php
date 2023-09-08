<div class="container mt-4">
    <h3>Daftar Pegawai</h3>

    <div class="row mt-3">
        <div class="col-md-4">
            <a href="<?= base_url('pegawai/tambah') ?>" class="btn btn-primary">Tambah Data Pegawai</a>

        </div>
    </div>
    <div class="flash-data" data-flashdata="<?= $this->session->flashData('flash') ?>"></div>


    <div class="row mt-3">
        <div class="col-md-10">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>


                    <?php $i = 1;
                    foreach ($pegawai as $p) : ?>
                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?= $p['pegawai_nama'] ?></td>
                            <td><?= $p['pegawai_jabatan'] ?></td>
                            <td>
                                <a href="<?= base_url('pegawai/detail') ?>/<?= $p['pegawai_id'] ?>" class="badge text-bg-warning">Detail</a>
                                <a href="<?= base_url('pegawai/ubah') ?>/<?= $p['pegawai_id'] ?>" class="badge text-bg-success">Edit</a>
                                <a href="<?= base_url('pegawai/hapus') ?>/<?= $p['pegawai_id'] ?>" class="badge text-bg-danger tombol-hapus">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>