<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Espire - Admin Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url('assetsAdmin/') ?>images/logo/favicon.ico">

    <!-- page css -->
    <link href="<?= base_url('assetsAdmin/') ?>vendors/datatables/dataTables.bootstrap.min.css" rel="stylesheet">

    <!-- Core css -->
    <link href="<?= base_url('assetsAdmin/') ?>css/app.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assetsAdmin/css/admin.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assetsAdmin/css/pariwisata.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/font-awesome/css/all.css') ?>">

</head>

<body>
    <div class="layout">
        <div class="vertical-layout">
            <!-- Header START -->
            <div class="header-text-dark header-nav layout-vertical">
                <div class="header-nav-wrap">
                    <div class="header-nav-left">
                        <div class="header-nav-item desktop-toggle">
                            <div class="header-nav-item-select cursor-pointer">
                                <i class="nav-icon feather icon-menu icon-arrow-right"></i>
                            </div>
                        </div>
                        <div class="header-nav-item mobile-toggle">
                            <div class="header-nav-item-select cursor-pointer">
                                <i class="nav-icon feather icon-menu icon-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="header-nav-right">
                        <div class="header-nav-item">
                            <div class="dropdown header-nav-item-select nav-notification">
                                <div class="toggle-wrapper" id="nav-notification-dropdown" data-bs-toggle="dropdown">
                                    <i class="header-nav-item-select nav-icon feather icon-bell"></i>
                                </div>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div class="nav-notification-header">
                                        <h5 class="mb-0">Notifications</h5>
                                        <a href="#" class="font-size-sm">Mark All as Read</a>
                                    </div>
                                    <div class="nav-notification-body">
                                        <div class="nav-notification-item ">
                                            <div class="avatar avatar-circle avatar-image"
                                                style="width: 40px; height: 40px; line-height: 40px;">
                                                <img src="<?= base_url('assetsAdmin/') ?>images/avatars/thumb-8.jpg"
                                                    alt="">
                                            </div>
                                            <div class="ms-2">
                                                <span>
                                                    <span class="fw-bolder text-dark">Jean Bowman </span>
                                                    <span>invited you to new project.</span>
                                                </span>
                                                <div class="font-size-sm fw-bold mt-1">
                                                    <i class="feather icon-clock"></i>
                                                    <span class="ms-1">4 months ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nav-notification-item ">
                                            <div class="bg-primary feather font-size-lg icon-info avatar avatar-circle"
                                                style="width: 40px; height: 40px; line-height: 40px;"> </div>
                                            <div class="ms-2">
                                                <span>
                                                    <span class="fw-bolder text-dark"> </span>
                                                    <span>Please submit your daily report.</span>
                                                </span>
                                                <div class="font-size-sm fw-bold mt-1">
                                                    <i class="feather icon-clock"></i>
                                                    <span class="ms-1">4 months ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nav-notification-item ">
                                            <div class="bg-success feather font-size-lg icon-info avatar avatar-circle"
                                                style="width: 40px; height: 40px; line-height: 40px;"> </div>
                                            <div class="ms-2">
                                                <span>
                                                    <span class="fw-bolder text-dark"> </span>
                                                    <span>Your request has been approved.</span>
                                                </span>
                                                <div class="font-size-sm fw-bold mt-1">
                                                    <i class="feather icon-clock"></i>
                                                    <span class="ms-1">4 months ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nav-notification-item ">
                                            <div class="avatar avatar-circle avatar-image"
                                                style="width: 40px; height: 40px; line-height: 40px;">
                                                <img src="<?= base_url('assetsAdmin/') ?>images/avatars/thumb-4.jpg"
                                                    alt="">
                                            </div>
                                            <div class="ms-2">
                                                <span>
                                                    <span class="fw-bolder text-dark">Jenifer Ruiz </span>
                                                    <span>mentioned you in comment.</span>
                                                </span>
                                                <div class="font-size-sm fw-bold mt-1">
                                                    <i class="feather icon-clock"></i>
                                                    <span class="ms-1">4 months ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nav-notification-item ">
                                            <div class="bg-success feather font-size-lg icon-x-circle avatar avatar-circle"
                                                style="width: 40px; height: 40px; line-height: 40px;"> </div>
                                            <div class="ms-2">
                                                <span>
                                                    <span class="fw-bolder text-dark"> </span>
                                                    <span>Your request has been rejected.</span>
                                                </span>
                                                <div class="font-size-sm fw-bold mt-1">
                                                    <i class="feather icon-clock"></i>
                                                    <span class="ms-1">4 months ago</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nav-notification-footer">
                                        <a href="#" class="font-size-sm">View All</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header-nav-item">
                            <div class="header-nav-item-select">
                                <div class="toggle-wrapper" data-bs-toggle="modal" data-bs-target="#quick-view">
                                    <i class="nav-icon feather icon-settings"></i>
                                </div>
                            </div>
                        </div>
                        <div class="header-nav-item">
                            <div class="dropdown header-nav-item-select">
                                <div class="toggle-wrapper" id="nav-lang-dropdown" data-bs-toggle="dropdown">
                                    <div class="avatar avatar-circle avatar-image"
                                        style="width: 22px; height: 22px; line-height: 22px;">
                                        <img src="<?= base_url('assetsAdmin/') ?>images/thumbs/en_US.png" alt="">
                                    </div>
                                </div>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="javascript:void(0)" class="dropdown-item">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-circle avatar-image"
                                                style="width: 18px; height: 18px; line-height: 18px;">
                                                <img src="<?= base_url('assetsAdmin/') ?>images/thumbs/en_US.png"
                                                    alt="">
                                            </div>
                                            <span class="ms-2">English</span>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="dropdown-item">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-circle avatar-image"
                                                style="width: 18px; height: 18px; line-height: 18px;">
                                                <img src="<?= base_url('assetsAdmin/') ?>images/thumbs/fr_FR.png"
                                                    alt="">
                                            </div>
                                            <span class="ms-2">French</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="header-nav-item">
                            <div class="dropdown header-nav-item-select nav-profile">
                                <div class="toggle-wrapper" id="nav-profile-dropdown" data-bs-toggle="dropdown">
                                    <div class="avatar avatar-circle avatar-image"
                                        style="width: 35px; height: 35px; line-height: 35px;">
                                        <img src="<?= base_url('assetsAdmin/') ?>images/avatars/thumb-1.jpg" alt="">
                                    </div>
                                    <span class="fw-bold mx-1">Julio Baker</span>
                                    <i class="feather icon-chevron-down"></i>
                                </div>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div class="nav-profile-header">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-circle avatar-image">
                                                <img src="<?= base_url('assetsAdmin/') ?>images/avatars/thumb-1.jpg"
                                                    alt="">
                                            </div>
                                            <div class="d-flex flex-column ms-1">
                                                <span class="fw-bold text-dark">Julio Baker</span>
                                                <span class="font-size-sm">Julio@themenate.com</span>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0)" class="dropdown-item">
                                        <div class="d-flex align-items-center">
                                            <i class="font-size-lg me-2 feather icon-user"></i>
                                            <span>Profile</span>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="dropdown-item">
                                        <div class="d-flex align-items-center">
                                            <i class="font-size-lg me-2 feather icon-settings"></i>
                                            <span>Settings</span>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="dropdown-item">
                                        <div class="d-flex align-items-center"><i
                                                class="font-size-lg me-2 feather icon-life-buoy"></i>
                                            <span>Support</span>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="dropdown-item">
                                        <div class="d-flex align-items-center"><i
                                                class="font-size-lg me-2 feather icon-power"></i>
                                            <span>Sign Out</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header END -->

            <!-- Side Nav START -->
            <!-- Side Nav START -->
            <div class="side-nav vertical-menu nav-menu-light scrollable">
                <div class="nav-logo">
                    <div class="w-100 logo">
                        <img class="img-fluid" src="<?= base_url('assets/') ?>images/logo.svg" style="max-height: 70px;"
                            alt="logo">
                    </div>
                    <div class="mobile-close">
                        <i class="icon-arrow-left feather"></i>
                    </div>
                </div>
                <ul class="nav-menu">
                    <li class="nav-menu-item">
                        <a href="<?= base_url('admin') ?>">
                            <i class="fa-duotone fa-house"></i>
                            <span class="nav-menu-item-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-group-title">PARIWISATA</li>
                    <li class="nav-menu-item">
                        <a href="<?= base_url('tiket/') ?>">
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
                    <li class="nav-menu-item router-link-active">
                        <a href="">
                            <i class="fa-regular fa-layer-plus"></i>
                            <span class="nav-menu-item-title">Tambah Data Bus</span>
                        </a>
                    </li>
                    <!-- <li class="nav-menu-item">
                        <a href="v-chat.html">
                            <i class="fa-duotone fa-bus-simple"></i>
                            <span class="nav-menu-item-title">Tambah PO Bus</span>
                        </a>
                    </li> -->
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
                    <!-- <li class="nav-menu-item">
                        <a href="v-calendar.html">
                            <i class="feather icon-calendar"></i>
                            <span class="nav-menu-item-title">Calendar</span>
                        </a>
                    </li> -->

            </div>
            <!-- Side Nav END -->

            <!-- Content START -->
            <div class="content">
                <div class="main">
                    <div class="page-header">
                        <h4 class="page-title">Tambahkan Data Bus</h4>
                    </div>

                    <br>
                    <form action="<?= base_url('tiket/simpanRute') ?> " method="POST">
                        <!-- Form di sebelah kiri -->
                        <div class="card">
                            <div class="card-body">
                                <h5>Pilih Kelas Bus</h5>
                                <select name="Kelas" id="Kelas" class="input-text" style="width:100%;">
                                    <option value="" disabled selected>Pilih Kelas Bus</option>
                                    <?php foreach ($kelas_list as $kelas): ?>
                                        <option value="<?php echo $kelas['Kelas']; ?>">
                                            <?php echo $kelas['Kelas']; ?>


                                        </option>
                                    <?php endforeach; ?>
                                </select>
                                <h5>Harga</h5>
                                <input type="text" id="harga" name="harga" class="input-text1" placeholder="RP"
                                    required>
                                <button type="submit" class="btn btn-primary"
                                    style="margin-left:10px;">Tambahkan</button>
                            </div>
                        </div>

                        <!-- Form di sebelah kanan -->
                </div>

                </form>

                <!-- Footer START -->
                <div class="footer">
                    <div class="footer-content">
                        <p class="mb-0">Copyright © 2021 Theme_Nate. All rights reserved.</p>
                        <span>
                            <a href="" class="text-gray me-3">Term &amp; Conditions</a>
                            <a href="" class="text-gray">Privacy &amp; Policy</a>
                        </span>
                    </div>
                </div>
                <!-- Footer End -->
            </div>

            <!-- Content END -->

            <!-- Quick View START -->
            <div class="modal modal-right fade quick-view" id="quick-view">
                <div class="modal-dialog right">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title pull-left">Theme Config</h4>
                            <button type="button" class="close pull-right" data-bs-dismiss="modal">
                                <span>×</span>
                            </button>
                        </div>
                        <div class="modal-body scrollable">
                            <div class="mb-4">
                                <h5 class="mb-0">Header Color</h5>
                                <p>Config header background color</p>
                                <div class="theme-configurator d-flex mt-2">
                                    <div class="radio">
                                        <input id="header-default" name="header-theme" type="radio" checked
                                            value="#ffffff">
                                        <label for="header-default"></label>
                                    </div>
                                    <div class="radio">
                                        <input id="header-primary" name="header-theme" type="radio" value="#11a1fd">
                                        <label for="header-primary"></label>
                                    </div>
                                    <div class="radio">
                                        <input id="header-success" name="header-theme" type="radio" value="#00c569">
                                        <label for="header-success"></label>
                                    </div>
                                    <div class="radio">
                                        <input id="header-info" name="header-theme" type="radio" value="#5a75f9">
                                        <label for="header-info"></label>
                                    </div>
                                    <div class="radio">
                                        <input id="header-warning" name="header-theme" type="radio" value="#ffc833">
                                        <label for="header-warning"></label>
                                    </div>
                                    <div class="radio">
                                        <input id="header-danger" name="header-theme" type="radio" value="#f46363">
                                        <label for="header-danger"></label>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div>
                                <h5 class="mb-0">Side Nav Dark</h5>
                                <p>Change Side Nav to dark</p>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="side-nav-theme-toggle"
                                        id="side-nav-theme-toggle">
                                    <label class="form-check-label" for="side-nav-theme-toggle"></label>
                                </div>
                            </div>
                            <hr>
                            <div>
                                <h5 class="mb-0">Folded Menu</h5>
                                <p>Toggle Folded Menu</p>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="side-nav-fold-toogle"
                                        id="side-nav-fold-toogle">
                                    <label class="form-check-label" for="side-nav-fold-toogle"></label>
                                </div>
                            </div>
                            <hr>
                            <div>
                                <h5 class="mb-0">Horizontal Layout</h5>
                                <p>Set Horizontal Layout</p>
                                <div class="btn-group btn-group-sm">
                                    <a href="#" class="btn btn-outline-primary active" aria-current="page">Vertical</a>
                                    <a href="h-index.html" class="btn btn-outline-primary">Horizontal</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Quick View END -->
        </div>
    </div>



    <script src="<?= base_url('assetsAdmin/') ?>js/vendors.min.js"></script>
    <script src="<?= base_url('assetsAdmin/') ?>vendors/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('assetsAdmin/') ?>vendors/datatables/dataTables.bootstrap.min.js"></script>
    <script>
        $('.data-table').DataTable({
            'columnDefs': [
                { 'orderable': false, 'targets': 0 }
            ]
        });
    </script>
    <script src="<?= base_url('assetsAdmin/') ?>js/app.min.js"></script>
    <script>
        const hargaInput = document.getElementById('harga');


        hargaInput.addEventListener('input', function (event) {
            let formattedValue = event.target.value.replace(/\D/g, "");
            formattedValue = formattedValue.replace(/\B(?=(\d{3})+(?!\d))/g, ".");
            event.target.value = "RP " + formattedValue;
        });

    </script>


</body>

</html>