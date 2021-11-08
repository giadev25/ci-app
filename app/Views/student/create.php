<?= $this->extend('layouts/index'); ?>

<?= $this->section('content'); ?>
<h2>Tambah data kelas 8C</h2>
<div class="card shadow mb-4 p-3">
    <form action="<?= base_url(); ?>/StudentController/store" method="POST">
        <?= csrf_field(); ?>
        <div class="form-group">
            <label for="nama">nama: </label>
            <input type="text" name="nama" id="nama" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">email: </label>
            <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="telp">telp: </label>
            <input type="text" name="telp" id="telp" class="form-control">
        </div>
        <button name="simpan" type="submit" class="btn btn-primary">Simpan!</button>
    </form>
</div>
<?= $this->endSection(); ?>