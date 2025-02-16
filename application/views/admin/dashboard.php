<!DOCTYPE html>
<html lang="en">

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
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <h3>$168.90</h3>
                                            <span class="text-muted fw-semibold">This Month</span>
                                        </div>
                                        <div class="text-success fw-bold font-size-lg">+18%</div>
                                    </div>
                                    <div class="mt-4" id="monthly-revenue" style="max-width: 250px;"></div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-muted mb-2">This Quarter</div>
                                    <h3>$3,936.80</h3>
                                    <span class="text-muted fw-semibold">Total Revenue</span>
                                    <div class="mt-4">
                                        <h4 class="mb-1">88</h4>
                                        <div class="text-muted d-flex justify-content-between mb-2">
                                            <span>Online Revenue</span>
                                            <span>70%</span>
                                        </div>
                                        <div class="progress-sm progress">
                                            <div class="progress-bar bg-info" style="width: 70%"></div>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <h4 class="mb-1">69</h4>
                                        <div class="text-muted d-flex justify-content-between mb-2">
                                            <span>Offline Revenue</span>
                                            <span>50%</span>
                                        </div>
                                        <div class="progress-sm progress">
                                            <div class="progress-bar bg-success" style="width: 50%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="card">
                                <div class="row">
                                    <div class="col-md-8 border-end">
                                        <div class="p-3">
                                            <div id="region-data-map" style="width: 100%; height: 535px"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="d-flex justify-content-center mt-5 pt-3">
                                            <div id="regin-data-chart"></div>
                                        </div>
                                        <div class="mt-5 mx-auto" style="max-width: 200px;">
                                            <div class="mt-5 mx-auto" style="max-width: 200px;">
                                                <div class="d-flex align-item-center justify-content-between mb-3">
                                                    <div>
                                                        <span class="badge-dot"
                                                            style="background-color: rgb(17, 161, 253);"></span>
                                                        <span class="text-dark fw-bolder ms-2">Texas</span>
                                                    </div>
                                                    <span>4447100</span>
                                                </div>
                                                <div class="d-flex align-item-center justify-content-between mb-3">
                                                    <div>
                                                        <span class="badge-dot"
                                                            style="background-color: rgb(0, 197, 105);"></span>
                                                        <span class="text-dark fw-bolder ms-2">Georgia</span>
                                                    </div>
                                                    <span>626932</span>
                                                </div>
                                                <div class="d-flex align-item-center justify-content-between mb-3">
                                                    <div>
                                                        <span class="badge-dot"
                                                            style="background-color: rgb(255, 200, 51);"></span>
                                                        <span class="text-dark fw-bolder ms-2">Utah</span>
                                                    </div>
                                                    <span>5130632</span>
                                                </div>
                                                <div class="d-flex align-item-center justify-content-between mb-3">
                                                    <div>
                                                        <span class="badge-dot"
                                                            style="background-color: rgb(90, 117, 249);"></span>
                                                        <span class="text-dark fw-bolder ms-2">Nebraska</span>
                                                    </div>
                                                    <span>5130632</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mb-3">Overview</h4>
                                    <div class="row">
                                        <div class="col-6 col-md-3">
                                            <div class="text-center py-3 border-end">
                                                <h5>$43,669</h5>
                                                <span class="text-muted">Total Earning</span>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class="text-center py-3 border-end">
                                                <h5>$3,639</h5>
                                                <span class="text-muted">Average Earning</span>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class="text-center py-3 border-end">
                                                <h5>$30,277</h5>
                                                <span class="text-muted">Total Expense </span>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class="text-center py-3">
                                                <h5>$2,523</h5>
                                                <span class="text-muted">Average Expense</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="overview-chart"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between mb-4">
                                        <h4 class="mb-0">Recent Transaction</h4>
                                        <button class="btn btn-outline-secondary btn-sm">All Transaction</button>
                                    </div>
                                    <table class="table table-hover mt-2">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="cursor-pointer">
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-circle avatar-image"
                                                            style="width: 35px; height: 35px;">
                                                            <img
                                                                src="<?= base_url('assetsAdmin/') ?>images/avatars/thumb-1.jpg">
                                                        </div>
                                                        <div class="ms-2">
                                                            <div class="fw-bolder text-dark">Julio Baker</div>
                                                            <div class="text-muted fw-semibold">ID: 135</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>06 Mar</td>
                                                <td>
                                                    <div class="badge-dot bg-success"></div>
                                                    <span class="ms-2">Approved</span>
                                                </td>
                                            </tr>
                                            <tr class="cursor-pointer">
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-circle avatar-image"
                                                            style="width: 35px; height: 35px;">
                                                            <img
                                                                src="<?= base_url('assetsAdmin/') ?>images/avatars/thumb-2.jpg">
                                                        </div>
                                                        <div class="ms-2">
                                                            <div class="fw-bolder text-dark">Robert Mitchell</div>
                                                            <div class="text-muted fw-semibold">ID: 138</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>23 Feb</td>
                                                <td>
                                                    <div class="badge-dot bg-warning"></div>
                                                    <span class="ms-2">Pending</span>
                                                </td>
                                            </tr>
                                            <tr class="cursor-pointer">
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-circle avatar-image"
                                                            style="width: 35px; height: 35px;">
                                                            <img
                                                                src="<?= base_url('assetsAdmin/') ?>images/avatars/thumb-3.jpg">
                                                        </div>
                                                        <div class="ms-2">
                                                            <div class="fw-bolder text-dark">David Powell</div>
                                                            <div class="text-muted fw-semibold">ID: 115</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>02 Mar</td>
                                                <td>
                                                    <div class="badge-dot bg-danger"></div>
                                                    <span class="ms-2">Rejected</span>
                                                </td>
                                            </tr>
                                            <tr class="cursor-pointer">
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-circle avatar-image"
                                                            style="width: 35px; height: 35px;">
                                                            <img
                                                                src="<?= base_url('assetsAdmin/') ?>images/avatars/thumb-4.jpg">
                                                        </div>
                                                        <div class="ms-2">
                                                            <div class="fw-bolder text-dark">Christina Morrison</div>
                                                            <div class="text-muted fw-semibold">ID: 112</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>16 Jan</td>
                                                <td>
                                                    <div class="badge-dot bg-warning"></div>
                                                    <span class="ms-2">Pending</span>
                                                </td>
                                            </tr>
                                            <tr class="cursor-pointer">
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-circle avatar-image"
                                                            style="width: 35px; height: 35px;">
                                                            <img
                                                                src="<?= base_url('assetsAdmin/') ?>images/avatars/thumb-5.jpg">
                                                        </div>
                                                        <div class="ms-2">
                                                            <div class="fw-bolder text-dark">Calvin Reid</div>
                                                            <div class="text-muted fw-semibold">ID: 108</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>23 Feb</td>
                                                <td>
                                                    <div class="badge-dot bg-success"></div>
                                                    <span class="ms-2">Approved</span>
                                                </td>
                                            </tr>
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <h4>Recent Review</h4>
                                        <button class="btn btn-sm btn-outline-secondary">All Review</button>
                                    </div>
                                    <div class="scrollable position-relative" style="height: 365px;">
                                        <div class="my-3 border-bottom">
                                            <div class="d-flex pe-3">
                                                <div class="mt-1">
                                                    <div class="avatar avatar-circle avatar-image"
                                                        style="width: 35px; height: 35px; line-height: 35px;">
                                                        <img src="<?= base_url('assetsAdmin/') ?>images/avatars/thumb-6.jpg"
                                                            alt="">
                                                    </div>
                                                </div>
                                                <div class="ms-2 w-100">
                                                    <div
                                                        class="mb-2 d-md-flex justify-content-between align-items-center">
                                                        <div>
                                                            <div class="fw-bolder text-dark">Devon Hughes</div>
                                                            <div class="text-muted fw-semibold">02 Mar 2020</div>
                                                        </div>
                                                        <div>
                                                            <i class="font-size-lg la la-star text-warning"></i>
                                                            <i class="font-size-lg la la-star text-warning"></i>
                                                            <i class="font-size-lg la la-star text-warning"></i>
                                                            <i class="font-size-lg la la-star text-warning"></i>
                                                            <i class="font-size-lg la la-star text-warning"></i>
                                                        </div>
                                                    </div>
                                                    <p class="mb-3">My neighbor Georgie has one of these. She works as a
                                                        busboy and she says it looks brown.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="my-3 border-bottom">
                                            <div class="d-flex pe-3">
                                                <div class="mt-1">
                                                    <div class="avatar avatar-circle avatar-image"
                                                        style="width: 35px; height: 35px; line-height: 35px;">
                                                        <img src="<?= base_url('assetsAdmin/') ?>images/avatars/thumb-7.jpg"
                                                            alt="">
                                                    </div>
                                                </div>
                                                <div class="ms-2 w-100">
                                                    <div
                                                        class="mb-2 d-md-flex justify-content-between align-items-center">
                                                        <div>
                                                            <div class="fw-bolder text-dark">Tom Lucas</div>
                                                            <div class="text-muted fw-semibold">27 Feb 2020</div>
                                                        </div>
                                                        <div>
                                                            <i class="font-size-lg la la-star text-warning"></i>
                                                            <i class="font-size-lg la la-star text-warning"></i>
                                                            <i class="font-size-lg la la-star text-warning"></i>
                                                            <i class="font-size-lg la la-star-o text-muted"></i>
                                                            <i class="font-size-lg la la-star-o text-muted"></i>
                                                        </div>
                                                    </div>
                                                    <p class="mb-3">The box this comes in is 5 kilometer by 5 inch and
                                                        weights 13 kilogram!!!</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="my-3 border-bottom">
                                            <div class="d-flex pe-3">
                                                <div class="mt-1">
                                                    <div class="avatar avatar-circle avatar-image"
                                                        style="width: 35px; height: 35px; line-height: 35px;">
                                                        <img src="<?= base_url('assetsAdmin/') ?>images/avatars/thumb-8.jpg"
                                                            alt="">
                                                    </div>
                                                </div>
                                                <div class="ms-2 w-100">
                                                    <div
                                                        class="mb-2 d-md-flex justify-content-between align-items-center">
                                                        <div>
                                                            <div class="fw-bolder text-dark">Wade Jenkins</div>
                                                            <div class="text-muted fw-semibold">17 Jan 2020</div>
                                                        </div>
                                                        <div>
                                                            <i class="font-size-lg la la-star text-warning"></i>
                                                            <i class="font-size-lg la la-star text-warning"></i>
                                                            <i class="font-size-lg la la-star-o text-muted"></i>
                                                            <i class="font-size-lg la la-star-o text-muted"></i>
                                                            <i class="font-size-lg la la-star-o text-muted"></i>
                                                        </div>
                                                    </div>
                                                    <p class="mb-3">I tried to impale it but got fudge all over it.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="my-3 border-bottom">
                                            <div class="d-flex pe-3">
                                                <div class="mt-1">
                                                    <div class="avatar avatar-circle avatar-image"
                                                        style="width: 35px; height: 35px; line-height: 35px;">
                                                        <img src="<?= base_url('assetsAdmin/') ?>images/avatars/thumb-9.jpg"
                                                            alt="">
                                                    </div>
                                                </div>
                                                <div class="ms-2 w-100">
                                                    <div
                                                        class="mb-2 d-md-flex justify-content-between align-items-center">
                                                        <div>
                                                            <div class="fw-bolder text-dark">Kathy Barnes</div>
                                                            <div class="text-muted fw-semibold">18 Jan 2020</div>
                                                        </div>
                                                        <div>
                                                            <i class="font-size-lg la la-star text-warning"></i>
                                                            <i class="font-size-lg la la-star text-warning"></i>
                                                            <i class="font-size-lg la la-star text-warning"></i>
                                                            <i class="font-size-lg la la-star text-warning"></i>
                                                            <i class="font-size-lg la la-star text-warning"></i>
                                                        </div>
                                                    </div>
                                                    <p class="mb-3">I will refer everyone I know.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4>Device Satistic</h4>
                                    <div class="my-4">
                                        <div class="row">
                                            <div class="col-4">
                                                <h5>50%</h5>
                                                <span class="text-muted">Chrome</span>
                                            </div>
                                            <div class="col-4">
                                                <h5>30%</h5>
                                                <span class="text-muted">Firefox</span>
                                            </div>
                                            <div class="col-4">
                                                <h5>20%</h5>
                                                <span class="text-muted">Edge</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" style="width: 25%;"></div>
                                        <div class="progress-bar bg-warning" style="width: 15%;"></div>
                                        <div class="progress-bar bg-info" style="width: 50%;"></div>
                                        <div class="progress-bar bg-primary" style="width: 10%;"></div>
                                    </div>
                                    <div class="mt-3">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center py-2">
                                                            <span class="badge-dot bg-danger"></span>
                                                            <span class="ms-2">Desktop</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <i class="feather icon-user"></i>
                                                        <span class="ms-1">5882</span>
                                                    </td>
                                                    <td>25%</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center py-2">
                                                            <span class="badge-dot bg-warning"></span>
                                                            <span class="ms-2">Tablet</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <i class="feather icon-user"></i>
                                                        <span class="ms-1">3582</span>
                                                    </td>
                                                    <td>15%</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center py-2">
                                                            <span class="badge-dot bg-info"></span>
                                                            <span class="ms-2">Mobile</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <i class="feather icon-user"></i>
                                                        <span class="ms-1">11582</span>
                                                    </td>
                                                    <td>50%</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center py-2">
                                                            <span class="badge-dot bg-primary"></span>
                                                            <span class="ms-2">Other</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <i class="feather icon-user"></i>
                                                        <span class="ms-1">1845</span>
                                                    </td>
                                                    <td>10%</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4>Top Countries</h4>
                                    <div class="mt-3">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center my-2">
                                                            <div class="avatar avatar-circle avatar-image"
                                                                style="width: 30px; height: 30px; line-height: 30px;">
                                                                <img src="<?= base_url('assetsAdmin/') ?>images/thumbs/us.png"
                                                                    alt="">
                                                            </div>
                                                            <div class="ms-3">
                                                                <div class="fw-bolder text-dark">United State</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <i class="feather icon-user"></i>
                                                        <span class="ms-1">936</span>
                                                    </td>
                                                    <td>30%</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center my-2">
                                                            <div class="avatar avatar-circle avatar-image"
                                                                style="width: 30px; height: 30px; line-height: 30px;">
                                                                <img src="<?= base_url('assetsAdmin/') ?>images/thumbs/german.png"
                                                                    alt="">
                                                            </div>
                                                            <div class="ms-3">
                                                                <div class="fw-bolder text-dark">German</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <i class="feather icon-user"></i>
                                                        <span class="ms-1">743</span>
                                                    </td>
                                                    <td>25%</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center my-2">
                                                            <div class="avatar avatar-circle avatar-image"
                                                                style="width: 30px; height: 30px; line-height: 30px;">
                                                                <img src="<?= base_url('assetsAdmin/') ?>images/thumbs/japan.png"
                                                                    alt="">
                                                            </div>
                                                            <div class="ms-3">
                                                                <div class="fw-bolder text-dark">Japan</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <i class="feather icon-user"></i>
                                                        <span class="ms-1">699</span>
                                                    </td>
                                                    <td>20%</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center my-2">
                                                            <div class="avatar avatar-circle avatar-image"
                                                                style="width: 30px; height: 30px; line-height: 30px;">
                                                                <img src="<?= base_url('assetsAdmin/') ?>images/thumbs/italy.png"
                                                                    alt="">
                                                            </div>
                                                            <div class="ms-3">
                                                                <div class="fw-bolder text-dark">Italy</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <i class="feather icon-user"></i>
                                                        <span class="ms-1">328</span>
                                                    </td>
                                                    <td>15%</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center my-2">
                                                            <div class="avatar avatar-circle avatar-image"
                                                                style="width: 30px; height: 30px; line-height: 30px;">
                                                                <img src="<?= base_url('assetsAdmin/') ?>images/thumbs/spain.png"
                                                                    alt="">
                                                            </div>
                                                            <div class="ms-3">
                                                                <div class="fw-bolder text-dark">Spain</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <i class="feather icon-user"></i>
                                                        <span class="ms-1">266</span>
                                                    </td>
                                                    <td>10%</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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


    <!-- Core Vendors JS -->
    <script src="<?= base_url('assetsAdmin/') ?>js/vendors.min.js"></script>

    <!-- page js -->
    <script src="<?= base_url('assetsAdmin/') ?>vendors/apexcharts/dist/apexcharts.min.js"></script>
    <script src="<?= base_url('assetsAdmin/') ?>js/pages/dashboard.js"></script>

    <!-- Core JS -->
    <script src="<?= base_url('assetsAdmin/') ?>js/app.min.js"></script>

</body>

</html>