<?= $this->extend('layouts/index') ?>

<!-- DataTales Example -->
<?= $this->section('content'); ?>
<h1 class="h3 mb-2 text-gray-800">Data murid kelas 8.C</h1>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="<?= base_url(); ?>/student/create">Tambah data</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No Absen</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No Telp</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No Absen</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No Telp</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($data as $d) : ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $d['nama']; ?></td>
                            <td><?= $d['email']; ?></td>
                            <td><?= $d['telp']; ?></td>
                            <td>
                                <form action="student/edit/<?= $d['id']; ?>" method="post">
                                    <input type="hidden" name="_method" value="PUT">
                                    <button class="btn btn-success">Ubah</button>
                                </form>
                                <form action="student/delete/<?= $d['id']; ?>" method="POST">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>