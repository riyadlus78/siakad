<?= $this->extend('siakad/layout') ?>

<?= $this->section('content') ?>
<div class="page-heading">
    <span class="page-badge">Data Akademik</span>
    <h2>Data Dosen</h2>
    <p>Daftar dosen pengajar pada Program Studi Sistem Informasi.</p>
</div>

<div class="table-panel">
    <table class="data-table">
        <thead>
        <tr>
            <th>No</th>
            <th>NIDN</th>
            <th>Nama Dosen</th>
            <th>Program Studi</th>
            <th>Jabatan</th>
        </tr>
        </thead>
        <tbody>
        <tr><td>1</td><td>0024058301</td><td>Dr. Ahmad Fauzi, M.Kom.</td><td>Sistem Informasi</td><td>Kaprodi</td></tr>
        <tr><td>2</td><td>0021069203</td><td>Dewi Anggraini, S.Kom., M.T.</td><td>Sistem Informasi</td><td>Lektor</td></tr>
        <tr><td>3</td><td>0019057402</td><td>Budi Santoso, M.Inf.</td><td>Sistem Informasi</td><td>Lektor</td></tr>
        <tr><td>4</td><td>0022084504</td><td>Rina Kartika, S.Kom., M.Kom.</td><td>Sistem Informasi</td><td>Asisten Ahli</td></tr>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>
