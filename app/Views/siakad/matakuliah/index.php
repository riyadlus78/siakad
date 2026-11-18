<?= $this->extend('siakad/layout') ?>

<?= $this->section('content') ?>
<div class="page-heading">
    <span class="page-badge">Data Akademik</span>
    <h2>Data Mata Kuliah</h2>
    <p>Daftar mata kuliah yang dijalankan pada Program Studi Sistem Informasi.</p>
</div>

<div class="table-panel">
    <table class="data-table">
        <thead>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama Mata Kuliah</th>
            <th>SKS</th>
            <th>Semester</th>
        </tr>
        </thead>
        <tbody>
        <tr><td>1</td><td>SI101</td><td>Dasar Pemrograman Web</td><td>3</td><td>Ganjil</td></tr>
        <tr><td>2</td><td>SI102</td><td>Struktur Data</td><td>3</td><td>Ganjil</td></tr>
        <tr><td>3</td><td>SI201</td><td>Basis Data</td><td>3</td><td>Genap</td></tr>
        <tr><td>4</td><td>SI202</td><td>Pemrograman Web II</td><td>3</td><td>Genap</td></tr>
        <tr><td>5</td><td>SI301</td><td>Rekayasa Perangkat Lunak</td><td>3</td><td>Ganjil</td></tr>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>
