<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<h2>Edit Dosen</h2>

<?php if (session()->getFlashdata('error')): ?>
    <p><?= esc(session()->getFlashdata('error')) ?></p>
<?php endif; ?>

<form
    action="<?= site_url('dosen/update/' . $dosen['id']) ?>"
    method="post"
>

    <?= csrf_field() ?>

    <p>
        <label>NIDN</label><br>
        <input
            type="text"
            name="nidn"
            value="<?= old('nidn', $dosen['nidn']) ?>"
            required
        >
    </p>

    <p>
        <label>Nama</label><br>
        <input
            type="text"
            name="nama"
            value="<?= old('nama', $dosen['nama']) ?>"
            required
        >
    </p>

    <p>
        <label>Program Studi</label><br>
        <input
            type="text"
            name="prodi"
            value="<?= old('prodi', $dosen['prodi']) ?>"
            required
        >
    </p>

    <button type="submit">Simpan Perubahan</button>

    <a href="<?= site_url('dosen') ?>">Batal</a>

</form>

<?= $this->endSection() ?>
