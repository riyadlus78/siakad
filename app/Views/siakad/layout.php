<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'SIAKAD') ?> — Sistem Informasi Akademik</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/siakad.css') ?>">
</head>
<body>
<header class="app-header">
    <div class="container header-inner">
        <div class="brand">
            <span class="brand-mark">S</span>
            <div>
                <h1>Sistem Informasi Akademik</h1>
                <p>Program Studi Sistem Informasi</p>
            </div>
        </div>
        <span class="back-link">Web SIAKAD</span>
    </div>
</header>

<nav class="app-nav" aria-label="Navigasi SIAKAD">
    <div class="container nav-inner">
        <a class="nav-item <?= $active === 'beranda' ? 'active' : '' ?>" href="<?= site_url('siakad') ?>">Beranda</a>
        <a class="nav-item <?= $active === 'mahasiswa' ? 'active' : '' ?>" href="<?= site_url('siakad/mahasiswa') ?>">Mahasiswa</a>
        <a class="nav-item <?= $active === 'dosen' ? 'active' : '' ?>" href="<?= site_url('siakad/dosen') ?>">Dosen</a>
        <a class="nav-item <?= $active === 'matakuliah' ? 'active' : '' ?>" href="<?= site_url('siakad/matakuliah') ?>">Mata Kuliah</a>
        <a class="nav-item <?= $active === 'tentang' ? 'active' : '' ?>" href="<?= site_url('siakad/tentang') ?>">Tentang</a>
    </div>
</nav>

<main class="container app-main">
    <?= $this->renderSection('content') ?>
</main>

<footer class="app-footer">
    <div class="container">Praktikum Pemrograman Web II - SIAKAD</div>
</footer>
</body>
</html>
