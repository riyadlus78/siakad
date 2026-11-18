<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<h2>Tambah Mata Kuliah</h2>

<?php if (session()->getFlashdata('error')): ?>
    <p><?= esc(session()->getFlashdata('error')) ?></p>
<?php endif; ?>

<form action="<?= site_url('mata-kuliah/store') ?>" method="post">

    <?= csrf_field() ?>

    <p>
        <label>Kode</label><br>
        <input
            type="text"
            name="kode"
            value="<?= old('kode') ?>"
            required
        >
    </p>

    <p>
        <label>Nama Mata Kuliah</label><br>
        <input
            type="text"
            name="nama"
            value="<?= old('nama') ?>"
            required
        >
    </p>

    <p>
        <label>SKS</label><br>
        <input
            type="number"
            name="sks"
            value="<?= old('sks') ?>"
            required
        >
    </p>

    <button type="submit">Simpan</button>

    <a href="<?= site_url('mata-kuliah') ?>">Batal</a>

</form>

<?= $this->endSection() ?>
