<?= $this->extend('layouts/index'); ?>

<?= $this->section('content'); ?>
<h2>Edit data kelas 8C</h2>
<div class="card shadow mb-4 p-3">
    <form action="<?= base_url(); ?>/StudentController/update" method="POST">
        <?= csrf_field(); ?>
        <input type="hidden" name="id" value="<?= $data['id']; ?>">
        <div class="form-group">
            <label for="nama">nama: </label>
            <input type="text" name="nama" id="nama" class="form-control" value="<?= $data['nama']; ?>">
        </div>
        <div class="form-group">
            <label for="email">email: </label>
            <input type="email" name="email" id="email" class="form-control" value="<?= $data['email']; ?>">
        </div>
        <div class="form-group">
            <label for="telp">telp: </label>
            <input type="text" name="telp" id="telp" class="form-control" value="<?= $data['telp']; ?>">
        </div>
        <button name="simpan" type="submit" class="btn btn-primary">Simpan!</button>
    </form>
</div>
<?= $this->endSection(); ?>