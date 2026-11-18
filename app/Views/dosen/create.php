<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<h2>Tambah Dosen</h2>

<?php if (session()->getFlashdata('error')): ?>
    <p><?= esc(session()->getFlashdata('error')) ?></p>
<?php endif; ?>

<form action="<?= site_url('dosen/store') ?>" method="post">

    <?= csrf_field() ?>

    <p>
        <label>NIDN</label><br>
        <input
            type="text"
            name="nidn"
            value="<?= old('nidn') ?>"
            required
        >
    </p>

    <p>
        <label>Nama</label><br>
        <input
            type="text"
            name="nama"
            value="<?= old('nama') ?>"
            required
        >
    </p>

    <p>
        <label>Program Studi</label><br>
        <input
            type="text"
            name="prodi"
            value="<?= old('prodi') ?>"
            required
        >
    </p>

    <button type="submit">Simpan</button>

    <a href="<?= site_url('dosen') ?>">Batal</a>

</form>

<?= $this->endSection() ?>
