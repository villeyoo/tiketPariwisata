<!DOCTYPE html>
<html lang="en">

<head>
   <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Espire - Admin Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url('assetsAdmin/') ?>images/logo/favicon.ico">

    <!-- page css -->
    <link href="<?= base_url('assetsAdmin/') ?>vendors/apexcharts/dist/apexcharts.css" rel="stylesheet">

    <!-- Core css -->
    <link href="<?= base_url('assetsAdmin/') ?>css/app.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assetsAdmin/') ?>css/admin.css">

    <!-- font  -->
    <link rel="stylesheet" href="<?= base_url('assets/font-awesome/css/all.css') ?>">

</head>

</head>

<body>
    <ul class="nav-menu">
        <li class="nav-menu-item router-link-active">
            <a href="<?= base_url('admin') ?>">
                <i class="fa-duotone fa-house"></i>
                <span class="nav-menu-item-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-group-title">PARIWISATA</li>
        <li class="nav-menu-item">
            <a href="<?= base_url('tiket/tambahPariwisata') ?>">
                <i class="fa-duotone fa-suitcase-rolling"></i>
                <span class="nav-menu-item-title">Tambah Tempat Wisata</span>
            </a>
        </li>
        <li class="nav-menu-item">
            <a href="<?= base_url('tiket') ?>">
                <i class="fa-duotone fa-table"></i>
                <span class="nav-menu-item-title">Data Pariwisata</span>
            </a>
        </li>
        <li class="nav-group-title">BUS</li>
        <li class="nav-menu-item">
            <a href="<?= base_url('tiket/tambahRute') ?>">
                <i class="fa-duotone fa-route"></i>
                <span class="nav-menu-item-title">Tambah Rute Bus</span>
            </a>
        </li>
        <li class="nav-menu-item">
            <a href="<?= base_url('tiket/dataRuteBus') ?>">
                <i class="fa-duotone fa-table"></i>
                <span class="nav-menu-item-title">Data Bus</span>
            </a>
        </li>
        <li class="nav-menu-item">
            <a href="<?= base_url('tiket/kelasBus') ?>">
                <i class="fa-solid fa-buildings"></i>
                <span class="nav-menu-item-title">Tambah Kelas Bus</span>
            </a>
        </li>

</body>

</html>