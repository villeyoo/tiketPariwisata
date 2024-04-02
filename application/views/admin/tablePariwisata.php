<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Espire - Admin Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url('assetsAdmin/') ?>images/logo/favicon.ico">

    <link href="<?= base_url('assetsAdmin/') ?>vendors/datatables/dataTables.bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@5/dark.css" />

    <!-- Core css -->
    <link href="<?= base_url('assetsAdmin/') ?>css/app.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/font-awesome/css/all.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assetsAdmin/css/admin.css') ?>">

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
                        <a href="<?= base_url('tiket/tambahPariwisata') ?>">
                            <i class="fa-duotone fa-suitcase-rolling"></i>
                            <span class="nav-menu-item-title">Tambah Tempat Wisata</span>
                        </a>
                    </li>
                    <!-- <li class="nav-menu-item">
                        <a href="<?= base_url('tiket/tambahPariwisata') ?>">
                            <i class="fa-duotone fa-route"></i>
                            <span class="nav-menu-item-title">Tambah Rute</span>
                        </a>
                    </li> -->
                    <li class="nav-menu-item router-link-active">
                        <a href="<?= base_url('tiket') ?>">
                            <i class="fa-duotone fa-table"></i>
                            <span class="nav-menu-item-title">Data Pariwisata</span>
                        </a>
                    </li>
                    <li class="nav-group-title">BUS</li>
                    <li class="nav-menu-item">
                        <a href="<?= base_url('tiket/tambahRute') ?>">
                            <i class="fa-regular fa-layer-plus"></i>
                            <span class="nav-menu-item-title">Tambah Data Bus</span>
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
                        <h4 class="page-title">Data Pariwisata</h4>
                    </div>
                    <div>
                        <a href="<?= base_url('tiket/tambahPariwisata') ?>">
                            <button class="btn btn-primary">Tambah data Pariwisata</button>

                        </a>
                    </div>
                    <br>
                    <div class="card">
                        <div class="card-body">
                            <h4></h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, error.</p>
                            <div class="mt-4">
                                <table id="data-table" class="table data-table">
                                    <thead>
                                        <tr class="main-title">
                                            <td class="text-center" scope="col">NO</td>

                                            <td class="text-center" scope="col">Tempat Wisata</td>
                                            <td class="text-center" scope="col">HARGA</td>
                                            <td class="text-center" scope="col">Aksi</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($tiket as $tik):
                                            ?>
                                            <tr>
                                                <td class="text-center">
                                                    <?= $no++ ?>
                                                </td>
                                                <td class="text-center">
                                                    <?php echo $tik->Wisata ?>
                                                </td>
                                                <td class="text-center">
                                                    <?php echo $tik->Harga ?>
                                                </td>
                                                <td class="text-center">
                                                    <a href="#" class="btn btn-danger"
                                                        onclick="confirmDelete(event, <?= $tik->id ?>)">
                                                        <i class="fa-regular fa-trash"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-primary"
                                                        onclick="confirmEdit(event, <?= $tik->id ?>)">
                                                        <i class="fa-regular fa-pen-to-square" style="color: #000"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php endforeach;
                                        ?>
                                    </tbody>
                                </table>
                            </div>

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
                                                    <input id="header-primary" name="header-theme" type="radio"
                                                        value="#11a1fd">
                                                    <label for="header-primary"></label>
                                                </div>
                                                <div class="radio">
                                                    <input id="header-success" name="header-theme" type="radio"
                                                        value="#00c569">
                                                    <label for="header-success"></label>
                                                </div>
                                                <div class="radio">
                                                    <input id="header-info" name="header-theme" type="radio"
                                                        value="#5a75f9">
                                                    <label for="header-info"></label>
                                                </div>
                                                <div class="radio">
                                                    <input id="header-warning" name="header-theme" type="radio"
                                                        value="#ffc833">
                                                    <label for="header-warning"></label>
                                                </div>
                                                <div class="radio">
                                                    <input id="header-danger" name="header-theme" type="radio"
                                                        value="#f46363">
                                                    <label for="header-danger"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div>
                                            <h5 class="mb-0">Side Nav Dark</h5>
                                            <p>Change Side Nav to dark</p>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox"
                                                    name="side-nav-theme-toggle" id="side-nav-theme-toggle">
                                                <label class="form-check-label" for="side-nav-theme-toggle"></label>
                                            </div>
                                        </div>
                                        <hr>
                                        <div>
                                            <h5 class="mb-0">Folded Menu</h5>
                                            <p>Toggle Folded Menu</p>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox"
                                                    name="side-nav-fold-toogle" id="side-nav-fold-toogle">
                                                <label class="form-check-label" for="side-nav-fold-toogle"></label>
                                            </div>
                                        </div>
                                        <hr>
                                        <div>
                                            <h5 class="mb-0">Horizontal Layout</h5>
                                            <p>Set Horizontal Layout</p>
                                            <div class="btn-group btn-group-sm">
                                                <a href="#" class="btn btn-outline-primary active"
                                                    aria-current="page">Vertical</a>
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

                <!-- Core Vendors JS -->
                <script src="<?= base_url('assetsAdmin/') ?>js/vendors.min.js"></script>

                <!-- page js -->
                <script src="<?= base_url('assetsAdmin/') ?>vendors/datatables/jquery.dataTables.min.js"></script>
                <script src="<?= base_url('assetsAdmin/') ?>vendors/datatables/dataTables.bootstrap.min.js"></script>
                <script>
                    $('.data-table').DataTable({
                        'columnDefs': [
                            { 'orderable': false, 'targets': 0 }
                        ]
                    });
                </script>

                <!-- Core JS -->
                <script src="<?= base_url('assetsAdmin') ?>js/app.min.js"></script>



                <!-- Core JS -->
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
                <script>
                    const Toast = Swal.mixin({
                        toast: true,
                        position: "top-end",
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.onmouseenter = Swal.stopTimer;
                            toast.onmouseleave = Swal.resumeTimer;
                        }
                    });

                    // Check if the query parameter 'save_success' is present in the URL
                    const urlParams = new URLSearchParams(window.location.search);
                    const saveSuccess = urlParams.get('save_success');

                    if (saveSuccess === 'true') {
                        Toast.fire({
                            icon: "success",
                            title: "Data berhasil disimpan"
                        });
                    }

                    // Check if the query parameter 'delete_success' is present in the URL
                    const deleteSuccess = urlParams.get('delete_success');

                    if (deleteSuccess === 'true') {
                        Toast.fire({
                            icon: "success",
                            title: "Data berhasil dihapus"
                        });
                    }

                    // Check if the query parameter 'edit_success' is present in the URL
                    const editSuccess = urlParams.get('edit_success');

                    if (editSuccess === 'true') {
                        Toast.fire({
                            icon: "success",
                            title: "Data berhasil diubah"
                        });
                    }
                </script>
                <script>
                    function confirmEdit(event, id) {
                        event.preventDefault();

                        Swal.fire({
                            title: "Apakah yakin untuk mengedit buku ini?",
                            icon: "warning",
                            showCancelButton: true,
                            confirmButtonColor: "#3085d6",
                            cancelButtonColor: "#d33",
                            confirmButtonText: "Ya"
                        }).then((result) => {
                            if (result.isConfirmed) {
                                // Jika pengguna menekan OK, maka pindah ke halaman edit
                                window.location.href = "<?= base_url('tiket/editPariwisata/') ?>" + id;
                            }
                        });
                    }

                    function confirmDelete(event, id) {
                        event.preventDefault();

                        Swal.fire({
                            title: "Apakah yakin untuk menghapus buku ini?",
                            icon: "warning",
                            showCancelButton: true,
                            confirmButtonColor: "#3085d6",
                            cancelButtonColor: "#d33",
                            confirmButtonText: "Ya"
                        }).then((result) => {
                            if (result.isConfirmed) {
                                // Jika pengguna menekan OK, maka pindah ke halaman hapus
                                window.location.href = "<?= base_url('tiket/hapus_pariwisata/') ?>" + id;
                            }
                        });
                    }
                </script>



</body>

</html>