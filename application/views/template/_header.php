<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Internal Applications PT PINTEX">
    <meta name="author" content="Yudha">

    <title>Laporan Supir | PINTEX</title>

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/bootstrap/5.0.2/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/bootstrap/5.0.2/bootstrap.min.css">

</head>
<div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
        <a href="<?= base_url(); ?>index.php/Home">
            <h5 class="text-white h4">Menu Aplikasi</h5>
        </a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?= base_url(); ?>index.php/Home/pengecekan">Input Kartu Pengecekan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page"
                    href="<?= base_url(); ?>index.php/Home/printView">Print Kartu Pengecekan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page"
                    href="<?= base_url(); ?>index.php/Home/laporan">Laporan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>index.php/Login/logout">Logout</a>
            </li>
        </ul>
    </div>
</div>
<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

<br>