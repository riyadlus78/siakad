<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<h2>Tentang Aplikasi</h2>

<p>
    Sistem Informasi Akademik merupakan aplikasi
    sederhana untuk menampilkan informasi akademik.
</p>

<p>
    Aplikasi ini dikembangkan menggunakan
    framework CodeIgniter 4.
</p>

<img src="<?= base_url('image/potoku.jpeg') ?>" alt="Foto Profil" style="max-width:320px;">

<p>
    Aplikasi ini dibuat oleh: <br> <strong>Muhammad Riyadlus Sholihiin </strong> <br>
    <strong>2024 5720 1052 </strong><br>
    <strong>Sistem Informasi</strong> <br>
    pada 18 November 2026.
</p>

<p>
    Aplikasi ini dibuat untuk memenuhi tugas mata kuliah Pemrograman Web Lanjut.
</p>

<p>
    Aplikasi ini menggunakan database MySQL untuk menyimpan data akademik.
</p>

<?= $this->endSection() ?>
