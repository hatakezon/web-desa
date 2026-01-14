<?php 
include 'koneksi.php';
$id = $_GET['id'];
$q = mysqli_query($koneksi, "SELECT * FROM berita WHERE id='$id'");
$d = mysqli_fetch_array($q);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <title><?= $d['judul'] ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <style>
        .news-header { background: var(--primary); color: white; padding: 40px 0; text-align: center; }
        .news-img { width: 100%; max-height: 500px; object-fit: cover; border-radius: 15px; margin-bottom: 20px; }
        .content { font-size: 1.1rem; line-height: 1.8; text-align: justify; }
        .meta { color: #666; font-size: 0.9rem; margin-bottom: 20px; border-bottom: 1px solid #ddd; padding-bottom: 10px; }
    </style>
</head>
<body>

    <nav class="navbar navbar-dark bg-success mb-4">
        <div class="container">
            <span class="navbar-brand mb-0 h1">PORTAL DESA DIGITAL</span>
            <a href="index.php" class="btn btn-outline-light btn-sm">Kembali ke Admin</a>
        </div>
    </nav>

    <div class="container" style="max-width: 800px;">
        <h1 class="mb-3 text-center fw-bold text-success"><?= $d['judul'] ?></h1>
        
        <div class="meta text-center">
            <span><i class="bi bi-calendar"></i> <?= date('d F Y', strtotime($d['tanggal'])) ?></span> &nbsp;|&nbsp; 
            <span><i class="bi bi-person"></i> Penulis: <?= $d['penulis'] ?></span>
        </div>

        <img src="gambar/<?= $d['gambar'] ?>" class="news-img shadow">

        <div class="content">
            <?= nl2br($d['isi']) ?>
        </div>

        <hr class="mt-5">
        <div class="text-center pb-5">
            <a href="berita.php" class="btn btn-secondary">Kembali ke Daftar Berita</a>
        </div>
    </div>

</body>
</html><?php 
include 'koneksi.php';
$id = $_GET['id'];
$q = mysqli_query($koneksi, "SELECT * FROM berita WHERE id='$id'");
$d = mysqli_fetch_array($q);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <body>

    <div class="public-nav">
        <div class="container">
            <h2 class="fw-bold">PORTAL DESA DIGITAL</h2>
            <a href="index.php" class="btn btn-outline-light btn-sm mt-2">Kembali ke Dashboard</a>
        </div>
    </div>

    <div class="container">
        <div class="news-container">
            <h1 class="news-title"><?= $d['judul'] ?></h1>
            
            <div class="news-meta">
                <i class="bi bi-calendar-check me-2"></i> <?= date('d F Y', strtotime($d['tanggal'])) ?> 
                &nbsp;&nbsp;|&nbsp;&nbsp; 
                <i class="bi bi-person me-2"></i> <?= $d['penulis'] ?>
            </div>

            <img src="gambar/<?= $d['gambar'] ?>" class="news-hero">

            <div class="news-content">
                <?= nl2br($d['isi']) ?>
            </div>
            
            <div class="text-center mt-5">
                <a href="berita.php" class="btn btn-light border">← Kembali ke Arsip</a>
            </div>
        </div>
    </div>

</body>
</head>
<body>

    <nav class="navbar navbar-dark bg-success mb-4">
        <div class="container">
            <span class="navbar-brand mb-0 h1">PORTAL DESA DIGITAL</span>
            <a href="index.php" class="btn btn-outline-light btn-sm">Kembali ke Admin</a>
        </div>
    </nav>

    <div class="container" style="max-width: 800px;">
        <h1 class="mb-3 text-center fw-bold text-success"><?= $d['judul'] ?></h1>
        
        <div class="meta text-center">
            <span><i class="bi bi-calendar"></i> <?= date('d F Y', strtotime($d['tanggal'])) ?></span> &nbsp;|&nbsp; 
            <span><i class="bi bi-person"></i> Penulis: <?= $d['penulis'] ?></span>
        </div>

        <img src="gambar/<?= $d['gambar'] ?>" class="news-img shadow">

        <div class="content">
            <?= nl2br($d['isi']) ?>
        </div>

        <hr class="mt-5">
        <div class="text-center pb-5">
            <a href="berita.php" class="btn btn-secondary">Kembali ke Daftar Berita</a>
        </div>
    </div>

</body>
</html>