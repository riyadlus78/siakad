<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<h2>Edit Mata Kuliah</h2>

<?php if (session()->getFlashdata('error')): ?>
    <p><?= esc(session()->getFlashdata('error')) ?></p>
<?php endif; ?>

<form
    action="<?= site_url('mata-kuliah/update/' . $matakuliah['id']) ?>"
    method="post"
>

    <?= csrf_field() ?>

    <p>
        <label>Kode</label><br>
        <input
            type="text"
            name="kode"
            value="<?= old('kode', $matakuliah['kode']) ?>"
            required
        >
    </p>

    <p>
        <label>Nama Mata Kuliah</label><br>
        <input
            type="text"
            name="nama"
            value="<?= old('nama', $matakuliah['nama']) ?>"
            required
        >
    </p>

    <p>
        <label>SKS</label><br>
        <input
            type="number"
            name="sks"
            value="<?= old('sks', $matakuliah['sks']) ?>"
            required
        >
    </p>

    <button type="submit">Simpan Perubahan</button>

    <a href="<?= site_url('mata-kuliah') ?>">Batal</a>

</form>

<?= $this->endSection() ?>
