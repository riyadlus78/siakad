<?= $this->extend('siakad/layout') ?>

<?= $this->section('content') ?>
<div class="page-heading">
    <span class="page-badge">SIAKAD</span>
    <h2>Halaman Beranda</h2>
    <p>Selamat datang di Sistem Informasi Akademik.</p>
    <p>Aplikasi ini digunakan untuk mengelola informasi akademik Program Studi.</p>
</div>

<div class="card-grid">
    <a class="dashboard-card" href="<?= site_url('siakad/mahasiswa') ?>">
        <span class="card-icon">M</span>
        <div>
            <h3>Data Mahasiswa</h3>
            <p>Lihat daftar mahasiswa dan informasi program studinya.</p>
        </div>
    </a>
    <a class="dashboard-card" href="<?= site_url('siakad/dosen') ?>">
        <span class="card-icon">D</span>
        <div>
            <h3>Data Dosen</h3>
            <p>Lihat daftar dosen beserta jabatan dan program studinya.</p>
        </div>
    </a>
    <a class="dashboard-card" href="<?= site_url('siakad/matakuliah') ?>">
        <span class="card-icon">K</span>
        <div>
            <h3>Data Mata Kuliah</h3>
            <p>Lihat mata kuliah, kode, SKS, dan semester yang tersedia.</p>
        </div>
    </a>
</div>

<div class="panel">
    <h3>Informasi Singkat</h3>
    <p>SIAKAD ini dibuat sebagai latihan CodeIgniter 4 dengan beberapa halaman statis dan data contoh. Gunakan menu di atas untuk berpindah antarhalaman.</p>
</div>
<?= $this->endSection() ?>
