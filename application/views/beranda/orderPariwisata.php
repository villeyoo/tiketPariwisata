<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Treker - Booking</title>
    <!-- Stylesheets -->
    <link href="<?= base_url('assets/') ?>css/bootstrap.css" rel="stylesheet">
    <link href="<?= base_url('assets/') ?>css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?= base_url('assets/') ?>images/favicon.png" type="image/x-icon">
    <link rel="icon" href="<?= base_url('assets/') ?>images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@5/dark.css" />
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="<?= base_url('assets/') ?>css/responsive.css" rel="stylesheet">
    <link href="<?= base_url('assetUser/') ?>css/user.css" rel="stylesheet">


    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->

</head>

<body>
    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>
        <div class="search-backdrop"></div>
        <!-- Main Header-->
        <header class="main-header header-style-two">
            <!-- Header Upper -->
            <div class="header-upper">
                <div class="auto-container">
                    <!-- Main Box -->
                    <div class="main-box clearfix">
                        <!--Logo-->
                        <div class="logo-box">
                            <div class="logo"><a href="index.html" title="Treker"><img
                                        src="<?= base_url('assets/') ?>images/logo.svg" width="100px"></a></div>
                        </div>

                        <div class="nav-box clearfix">
                            <!--Nav Outer-->
                            <div class="nav-outer clearfix">
                                <nav class="main-menu">
                                    <ul class="navigation clearfix">
                                        <li class="dropdown"><a href="index.html">Home</a>
                                            <ul>
                                                <li><a href="index.html">Home 01</a></li>
                                                <li><a href="index-2.html">Home 02</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="about.html">About Us</a>
                                            <ul>
                                                <li><a href="team.html">Our Team</a></li>
                                                <li><a href="team-member.html">Team Member</a></li>
                                                <li><a href="faq.html">FAQs</a></li>
                                                <li><a href="gallery.html">Gallery</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="shop.html">Shop</a>
                                            <ul>
                                                <li><a href="shop.html">Our Shop</a></li>
                                                <li><a href="product-single.html">Product Details</a></li>
                                                <li><a href="wishlist.html">My Wishlist</a></li>
                                                <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="signup.html">Signup</a></li>
                                                <li><a href="login.html">Login</a></li>
                                                <li><a href="reset-password.html">Forgot Password</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="destinations.html">Destinations</a></li>
                                        <li><a href="trekking.html">Trekking</a></li>
                                        <li class="current dropdown"><a href="#">Pages</a>
                                            <ul>
                                                <li><a href="activities.html">Activities</a></li>
                                                <li><a href="destinations-2.html">Destinations 02</a></li>
                                                <li><a href="tours.html">Tours</a></li>
                                                <li><a href="packages.html">Packages 01</a></li>
                                                <li><a href="packages-2.html">Packages 02</a></li>
                                                <li><a href="booking.html">Booking</a></li>
                                                <li><a href="terms-conditions.html">Terms & Conditions</a></li>
                                                <li><a href="error-page.html">404 Page</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="blog.html">News</a>
                                            <ul>
                                                <li><a href="blog.html">Our Blog</a></li>
                                                <li><a href="blog-2.html">Blog Classic</a></li>
                                                <li><a href="blog-single.html">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </nav>
                                <!-- Main Menu End-->
                            </div>
                            <!--Nav Outer End-->

                            <div class="links-box clearfix">
                                <div class="link search-btn search-toggle"><span class="icon far fa-search"></span>
                                </div>
                                <div class="link fav-btn"><a href="#"><span class="icon far fa-heart"></span><span
                                            class="count">02</span></a></div>
                                <div class="link cart-btn"><a href="#" class="clearfix">
                                        <div class="cart-info"><span class="icon far fa-shopping-cart"></span>00 Items
                                        </div>
                                    </a></div>
                            </div>

                            <!-- Hidden Nav Toggler -->
                            <div class="nav-toggler">
                                <button class="hidden-bar-opener"><span class="icon"><img
                                            src="<?= base_url('assets/') ?>images/icons/menu-icon.svg"
                                            alt=""></span></button>
                            </div>

                        </div>

                        <!-- End Header Upper -->
                        <div class="search-box">
                            <div class="outer-container">
                                <div class="inner-box">
                                    <div class="form-box">
                                        <div class="s-close-btn"><span class="icon far fa-times"></span></div>
                                        <span class="s-icon fa fa-search"></span>
                                        <form method="post" action="index.html">
                                            <div class="form-group">
                                                <input type="search" name="search" value="" placeholder="Search Here"
                                                    required="">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </header>
        <!--End Main Header -->

        <!--Search Backdrop-->
        <div class="search-backdrop"></div>


        <!--Menu Backdrop-->
        <div class="menu-backdrop"></div>

        <!-- Hidden Navigation Bar -->
        <section class="hidden-bar">
            <!-- Hidden Bar Wrapper -->
            <div class="hidden-bar-wrapper">
                <div class="hidden-bar-closer"><span class="icon"><svg class="icon-close" role="presentation"
                            viewBox="0 0 16 14">
                            <path d="M15 0L1 14m14 0L1 0" stroke="currentColor" fill="none" fill-rule="evenodd"></path>
                        </svg></span></div>
                <div class="nav-logo-box">
                    <div class="logo"><a href="index.html" title="Treker"><img
                                src="<?= base_url('assets/') ?>images/logo.svg" alt="" title="Treker"></a></div>
                </div>
                <!-- .Side-menu -->
                <div class="side-menu">
                    <ul class="navigation clearfix">
                        <li class="dropdown"><a href="index.html">Home</a>
                            <ul>
                                <li><a href="index.html">Home 01</a></li>
                                <li><a href="index-2.html">Home 02</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="about.html">About Us</a>
                            <ul>
                                <li><a href="team.html">Our Team</a></li>
                                <li><a href="team-member.html">Team Member</a></li>
                                <li><a href="faq.html">FAQs</a></li>
                                <li><a href="gallery.html">Gallery</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="shop.html">Shop</a>
                            <ul>
                                <li><a href="shop.html">Our Shop</a></li>
                                <li><a href="product-single.html">Product Details</a></li>
                                <li><a href="wishlist.html">My Wishlist</a></li>
                                <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="signup.html">Signup</a></li>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="reset-password.html">Forgot Password</a></li>
                            </ul>
                        </li>
                        <li><a href="destinations.html">Destinations</a></li>
                        <li><a href="trekking.html">Trekking</a></li>
                        <li class="current dropdown"><a href="#">Pages</a>
                            <ul>
                                <li><a href="activities.html">Activities</a></li>
                                <li><a href="destinations-2.html">Destinations 02</a></li>
                                <li><a href="tours.html">Tours</a></li>
                                <li><a href="packages.html">Packages 01</a></li>
                                <li><a href="packages-2.html">Packages 02</a></li>
                                <li><a href="booking.html">Booking</a></li>
                                <li><a href="terms-conditions.html">Terms & Conditions</a></li>
                                <li><a href="error-page.html">404 Page</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="blog.html">News</a>
                            <ul>
                                <li><a href="blog.html">Our Blog</a></li>
                                <li><a href="blog-2.html">Blog Classic</a></li>
                                <li><a href="blog-single.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div><!-- /.Side-menu -->

                <div class="links-box clearfix">
                    <div class="clearfix">
                        <div class="link"><a href="login.html" class="theme-btn btn-style-one"><span>Login<i
                                        class="icon far fa-angle-right"></i></span></a></div>
                        <div class="link"><a href="signup.html" class="theme-btn btn-style-two"><span>Sign Up<i
                                        class="icon far fa-angle-right"></i></span></a></div>
                    </div>
                </div>

            </div><!-- / Hidden Bar Wrapper -->
        </section>
        <!-- / Hidden Bar -->

        <div class="cart-backdrop"></div>
        <!--Cart Sidebar-->
        <div class="cart-sidebar">
            <div class="cart-side-inner">
                <div class="cart-side-header">
                    <div class="closer-btn"><span>Close</span></div>
                    <h5>Shopping Cart</h5>
                </div>
                <div class="prod-box">
                    <div class="prod-block">
                        <div class="prod-inner">
                            <div class="prod-thumb"><a href="#"><img
                                        src="<?= base_url('assets/') ?>images/resource/shop/shop-thumb-1.jpg"
                                        alt=""></a>
                            </div>
                            <div class="remove-item"><a href="#"><i class="far fa-times"></i></a></div>
                            <div class="prod-title"><a href="#">Smart Air Bag Travel</a></div>
                            <div class="quantity-box">
                                <div class="item-quantity">
                                    <input class="qty-spinner" type="text" value="1" name="quantity">
                                </div>
                            </div>
                            <div class="calculations">1 x <span>$225.00</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lower-content">
                <div class="count clearfix">
                    <span class="ttl">Subtotal</span>
                    <span class="dtl">$225.00</span>
                </div>
                <div class="links clearfix">
                    <div class="left"><a href="#" class="theme-btn btn-style-one"><span>View Cart</span></a></div>
                    <div class="right"><a href="#" class="theme-btn btn-style-two"><span>Checkout</span></a></div>
                </div>
            </div>
        </div>

        <!-- Banner Section -->
        <section class="inner-banner">
            <div class="image-layer" style="background-image: url(<?= base_url('assets/') ?>images/smg.jpg);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h2>PARIWISATA</h2>
                    <div class="bread-crumb">
                        <ul class="clearfix">
                            <li><span class="icon-home fa fa-home"></span><a href="<?= base_url('home') ?>">Beranda</a>
                            </li>
                            <li class="current">TIKET PARIWISATA</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--End Banner Section -->

        <!--Booking Section-->
        <section class="booking-section">
            <div class="floated-icon left"><img src="<?= base_url('assets/') ?>images/resource/stones-left.svg" alt=""
                    title=""></div>
            <div class="floated-icon right"><img src="<?= base_url('assets/') ?>images/resource/stones-right-3.svg"
                    alt="" title=""></div>
            <div class="auto-container">
                <div class="title-box centered">
                    <h2><span>Pesan Tiket Pariwisata</span></h2>
                    <div class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, laudantium?
                    </div>
                </div>
                <div class="form-box site-form">
                    <div class="booking-form">
                        <form method="post" action="<?= base_url('tiket/orderTiketParwis') ?>">
                            <div class="row clearfix">
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <div class="f-label">Nama Lengkap <i>*</i></div>
                                    <div class="field-inner">
                                        <input type="text" name="namaLengkap" id="namaLengkap" value="" placeholder=""
                                            required>
                                    </div>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <div class="f-label">Email anda <i>*</i></div>
                                    <div class="field-inner">
                                        <div class="field-inner">
                                            <input type="email" name="email" id="email" value="" placeholder="" required
                                                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <div class="f-label">Nomer Identitas KTP <i>*</i></div>
                                    <div class="field-inner">
                                        <input type="text" name="NIK" id="NIK" value="" placeholder="" maxlength="16"
                                            required>
                                        <div id="nikAlert" style="color: red;"></div>
                                    </div>
                                </div>

                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <div class="f-label">Nomor Telepon / Whatsapp <i>*</i></div>
                                    <div class="field-inner">
                                        <input type="text" name="telp" id="telp" value="" placeholder="" required>
                                    </div>
                                </div>
                                <!-- Bagian View (HTML) -->
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <div class="f-label">Mau Wisata Ke Mana? <i>*</i></div>
                                    <div class="field-inner">
                                        <select name="Wisata" id="Wisata">
                                            <option value="" disabled selected>Pilih Tujuan</option>
                                            <?php foreach ($wisata as $da): ?>
                                                <option value="<?php echo $da->Wisata ?>">
                                                    <?php echo $da->Wisata ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                        <span class="alt-icon far fa-angle-down"></span>
                                    </div>
                                </div>

                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <div class="f-label">Tanggal kunjungan <i>*</i></div>
                                    <div class="field-inner">
                                        <input type="text" class="datepicker" name="tanggalKunjungan"
                                            id="tanggalKunjungan" value="" placeholder="" required>
                                        <span class="alt-icon fal fa-calendar fa-fw"></span>
                                    </div>
                                </div>


                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <label for="adults">Dewasa:</label>
                                    <input type="number" id="adults" name="adults" min="0" value="0">
                                </div>

                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <div class="f-label" for="children">Pengujung Anak Anak <i>*/usia di bawah 12
                                            tahun</i></div>
                                    <input type="number" id="children" name="children" min="0" value="0">
                                </div>

                                <div id="total-price"></div>
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <div class="rates clearfix">
                                        <i style="color:red;">Untuk anak diskon 50%</i>
                                        <div id="Harga" class="nama">
                                            Harga Tiket: <span class="harga" name="harga"></span>
                                            <input type="hidden" name="harga" id="hargaInput">
                                        </div>
                                        <div id="Total" class="nama">
                                            Total Harga: <span class="total" name="totalHarga"></span>
                                            <input type="hidden" name="totalHarga" id="totalHargaInput">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <button type="button" class="theme-btn btn-style-one" id="hitungHarga"><span>Hitung
                                            Total Harga<i class="icon far fa-angle-right"></i></span></button>
                                    <button type="submit" class="theme-btn btn-style-two" id="hitungHarga"><span>Pesan
                                            Tiket<i class="icon far fa-angle-right"></i></span></button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!--FAQs Section-->
        <section class="faq-one alternate">
            <div class="floated-icon left"><img src="<?= base_url('assets/') ?>images/resource/floated-icon-right-2.svg"
                    alt="" title=""></div>
            <div class="floated-icon right"><img src="<?= base_url('assets/') ?>images/resource/stones-right-3.svg"
                    alt="" title=""></div>
            <div class="auto-container">
                <div class="title-box centered">
                    <h2><span>Get Some Important Answer</span></h2>
                </div>
                <div class="row clearfix">
                    <!--Text Col-->
                    <div class="text-col col-lg-6 col-md-12 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="accordion-box clearfix">
                                <!--Block-->
                                <div class="accordion block active-block">
                                    <div class="acc-btn active">What is Trekking? <i
                                            class="fa-regular fa-angle-down"></i></div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">One of the major benefits of trekking is that it improves
                                                your physical health immensely. Spending multiple hours on the trail,
                                                climbing around boulders, rock hopping and ascending hills gives your
                                                whole body a workout, improving your strength, agility and cardio
                                                fitness.</div>
                                        </div>
                                    </div>
                                </div>
                                <!--Block-->
                                <div class="accordion block">
                                    <div class="acc-btn">What do I need to carry? <i
                                            class="fa-regular fa-angle-down"></i></div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">One of the major benefits of trekking is that it improves
                                                your physical health immensely. Spending multiple hours on the trail,
                                                climbing around boulders, rock hopping and ascending hills gives your
                                                whole body a workout, improving your strength, agility and cardio
                                                fitness.</div>
                                        </div>
                                    </div>
                                </div>
                                <!--Block-->
                                <div class="accordion block">
                                    <div class="acc-btn">How concerned should I be about the altitude? <i
                                            class="fa-regular fa-angle-down"></i></div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">One of the major benefits of trekking is that it improves
                                                your physical health immensely. Spending multiple hours on the trail,
                                                climbing around boulders, rock hopping and ascending hills gives your
                                                whole body a workout, improving your strength, agility and cardio
                                                fitness.</div>
                                        </div>
                                    </div>
                                </div>
                                <!--Block-->
                                <div class="accordion block">
                                    <div class="acc-btn">What do we eat and drink while on trek? <i
                                            class="fa-regular fa-angle-down"></i></div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">One of the major benefits of trekking is that it improves
                                                your physical health immensely. Spending multiple hours on the trail,
                                                climbing around boulders, rock hopping and ascending hills gives your
                                                whole body a workout, improving your strength, agility and cardio
                                                fitness.</div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--Text Col-->
                    <div class="text-col col-lg-6 col-md-12 col-sm-12">
                        <div class="inner wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="accordion-box clearfix">
                                <!--Block-->
                                <div class="accordion block">
                                    <div class="acc-btn">What is Trekking? <i class="fa-regular fa-angle-down"></i>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">One of the major benefits of trekking is that it improves
                                                your physical health immensely. Spending multiple hours on the trail,
                                                climbing around boulders, rock hopping and ascending hills gives your
                                                whole body a workout, improving your strength, agility and cardio
                                                fitness.</div>
                                        </div>
                                    </div>
                                </div>
                                <!--Block-->
                                <div class="accordion block active-block">
                                    <div class="acc-btn active">What do I need to carry? <i
                                            class="fa-regular fa-angle-down"></i></div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">One of the major benefits of trekking is that it improves
                                                your physical health immensely. Spending multiple hours on the trail,
                                                climbing around boulders, rock hopping and ascending hills gives your
                                                whole body a workout, improving your strength, agility and cardio
                                                fitness.</div>
                                        </div>
                                    </div>
                                </div>
                                <!--Block-->
                                <div class="accordion block">
                                    <div class="acc-btn">How concerned should I be about the altitude? <i
                                            class="fa-regular fa-angle-down"></i></div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">One of the major benefits of trekking is that it improves
                                                your physical health immensely. Spending multiple hours on the trail,
                                                climbing around boulders, rock hopping and ascending hills gives your
                                                whole body a workout, improving your strength, agility and cardio
                                                fitness.</div>
                                        </div>
                                    </div>
                                </div>
                                <!--Block-->
                                <div class="accordion block">
                                    <div class="acc-btn">What do we eat and drink while on trek? <i
                                            class="fa-regular fa-angle-down"></i></div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">One of the major benefits of trekking is that it improves
                                                your physical health immensely. Spending multiple hours on the trail,
                                                climbing around boulders, rock hopping and ascending hills gives your
                                                whole body a workout, improving your strength, agility and cardio
                                                fitness.</div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Sponsors Section-->
        <section class="sponsors-one">
            <div class="auto-container">
                <div class="carousel-box">
                    <div class="sponsors-carousel owl-theme owl-carousel">
                        <!--Block-->
                        <div class="sponsor-block">
                            <div class="inner-box">
                                <div class="image"><a href="#"><img
                                            src="<?= base_url('assets/') ?>images/resource/sponsor-1.png" alt=""></a>
                                </div>
                            </div>
                        </div>

                        <!--Block-->
                        <div class="sponsor-block">
                            <div class="inner-box">
                                <div class="image"><a href="#"><img
                                            src="<?= base_url('assets/') ?>images/resource/sponsor-2.png" alt=""></a>
                                </div>
                            </div>
                        </div>

                        <!--Block-->
                        <div class="sponsor-block">
                            <div class="inner-box">
                                <div class="image"><a href="#"><img
                                            src="<?= base_url('assets/') ?>images/resource/sponsor-3.png" alt=""></a>
                                </div>
                            </div>
                        </div>

                        <!--Block-->
                        <div class="sponsor-block">
                            <div class="inner-box">
                                <div class="image"><a href="#"><img
                                            src="<?= base_url('assets/') ?>images/resource/sponsor-4.png" alt=""></a>
                                </div>
                            </div>
                        </div>

                        <!--Block-->
                        <div class="sponsor-block">
                            <div class="inner-box">
                                <div class="image"><a href="#"><img
                                            src="<?= base_url('assets/') ?>images/resource/sponsor-1.png" alt=""></a>
                                </div>
                            </div>
                        </div>

                        <!--Block-->
                        <div class="sponsor-block">
                            <div class="inner-box">
                                <div class="image"><a href="#"><img
                                            src="<?= base_url('assets/') ?>images/resource/sponsor-2.png" alt=""></a>
                                </div>
                            </div>
                        </div>

                        <!--Block-->
                        <div class="sponsor-block">
                            <div class="inner-box">
                                <div class="image"><a href="#"><img
                                            src="<?= base_url('assets/') ?>images/resource/sponsor-3.png" alt=""></a>
                                </div>
                            </div>
                        </div>

                        <!--Block-->
                        <div class="sponsor-block">
                            <div class="inner-box">
                                <div class="image"><a href="#"><img
                                            src="<?= base_url('assets/') ?>images/resource/sponsor-4.png" alt=""></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!--Main Footer-->
        <footer class="footer-two">
            <div class="bg-layer"
                style="background-image: url(<?= base_url('assets/') ?>images/background/footer-bg.png);"></div>
            <div class="upper-section">
                <div class="auto-container">

                    <div class="row clearfix">

                        <div class="footer-column col-xl-4 col-lg-12 col-md-12 col-sm-12">
                            <!--Logo-->
                            <div class="footer-logo">
                                <div class="logo"><a href="index.html" title="Treker"><img
                                            src="<?= base_url('assets/') ?>images/logo.svg" alt="" title="Treker"></a>
                                </div>
                            </div>
                            <div class="footer-text">Treker was founded in 1991 by a group of safety-focused
                                professionals who created The Wingman Standard for rigorously vetting air charter
                                operators.</div>
                            <div class="social-links">
                                <ul class="clearfix">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="big-column col-xl-8 col-lg-12 col-md-12 col-sm-12">
                            <div class="row clearfix">

                                <div class="footer-column col-lg-3 col-md-4 col-sm-12">
                                    <h6>Exlopre Treker</h6>
                                    <div class="links">
                                        <ul>
                                            <li><a href="#">Account</a></li>
                                            <li><a href="#">Privacy Policy</a></li>
                                            <li><a href="#">Affilitate</a></li>
                                            <li><a href="#">Program</a></li>
                                            <li><a href="#">Our Partner</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="footer-column col-lg-3 col-md-4 col-sm-12">
                                    <h6>Quick lInks</h6>
                                    <div class="links">
                                        <ul>
                                            <li><a href="#">About us</a></li>
                                            <li><a href="#">News & press</a></li>
                                            <li><a href="#">Blog</a></li>
                                            <li><a href="#">FAQs</a></li>
                                            <li><a href="#">Careers</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="info-block col-lg-6 col-md-4 col-sm-12">
                                    <h6>Address</h6>
                                    <div class="info">
                                        <ul>
                                            <li>Europe 45 Gloucester Road London DT1M 3BF <a
                                                    href="tel:+44(0)2036715709">+44 (0)20 3671 5709</a></li>
                                            <li>Europe 45 Gloucester Road London DT1M 3BF <a
                                                    href="tel:+44(0)2036715709">+44 (0)20 3671 5709</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="f-bottom">
                <div class="auto-container">
                    <div class="inner clearfix">
                        <div class="copyright">Copyright &copy; 2022 Treker. All Rights Reserved. Designed by ThemeIM
                        </div>
                    </div>
                </div>
            </div>

        </footer>

    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon"><img
                src="<?= base_url('assets/') ?>images/icons/arrow-up.svg" alt="" title="Go To Top"></span></div>

    <script src="<?= base_url('assets/') ?>js/jquery.js"></script>
    <script src="<?= base_url('assets/') ?>js/popper.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/jquery-ui.js"></script>
    <script src="<?= base_url('assets/') ?>js/jquery.fancybox.js"></script>
    <script src="<?= base_url('assets/') ?>js/mixitup.js"></script>
    <script src="<?= base_url('assets/') ?>js/touchspin.js"></script>
    <script src="<?= base_url('assets/') ?>js/owl.js"></script>
    <script src="<?= base_url('assets/') ?>js/wow.js"></script>
    <script src="<?= base_url('assets/') ?>js/custom-script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <script>
        $("#Wisata").change(function () {
            var Wisata = $("#Wisata").val();

            $.ajax({
                url: "<?php echo site_url('home/munculHarga'); ?>",
                type: "POST",
                data: { Wisata: Wisata },
                cache: false,
                dataType: 'json',
                success: function (response) {


                    $("#Harga .harga").text(response.Harga);


                    // $("#Foto").attr("src", "<?php echo base_url('foto/'); ?>" + response.Foto);
                }
            });
        });

        // $("#bukuID").change(function () {
        //     var bukuID = $("#bukuID").val();

        //     $.ajax({
        //         url: "<?php echo site_url('peminjaman/cari_buku'); ?>",
        //         type: "POST",
        //         data: { bukuID: bukuID },
        //         cache: false,
        //         dataType: 'json',
        //         success: function (response) {
        //             // Menyertakan bukuID, Judul, dan Penulis dalam respons
        //             $("#bukuID").val(response.bukuID);
        //             $("#Judul").val(response.Judul);
        //             $("#Penulis").val(response.Penulis);
        //             $("#Kategori").val(response.Kategori);
        //             $("#Penerbit").val(response.Penerbit);

        //             // $("#Foto").attr("src", "<?php echo base_url('foto/'); ?>" + response.Foto);
        //         }
        //     });
        // });

    </script>
    <script>
        $(document).ready(function () {
            $("#hitungHarga").click(function () {
                var adultsCount = parseInt($("#adults").val()); // Mengambil nilai jumlah dewasa
                var childrenCount = parseInt($("#children").val()); // Mengambil nilai jumlah anak-anak
                var hargaPerOrangText = $(".harga").text(); // Mengambil teks harga per orang dari elemen dengan kelas 'harga'

                // Menghapus karakter non-numerik dan mendapatkan nilai numerik
                var hargaPerOrang = parseFloat(hargaPerOrangText.replace(/\D/g, ''));

                // Periksa apakah harga per orang adalah angka valid
                if (!isNaN(hargaPerOrang)) {
                    // Menghitung total harga berdasarkan jumlah dewasa
                    var totalHargaAdults = adultsCount * hargaPerOrang;

                    // Menambah potongan harga sebesar 50% untuk setiap anak
                    var totalHargaChildren = childrenCount * (hargaPerOrang * 0.5);

                    // Menghitung total harga keseluruhan
                    var totalHarga = totalHargaAdults + totalHargaChildren;

                    // Format total harga sebagai mata uang Rupiah dengan pemisah ribuan
                    var formattedTotalHarga = 'RP ' + totalHarga.toLocaleString('id-ID');

                    // Memperbarui tampilan total harga
                    $(".total").text(formattedTotalHarga);

                    // Mengatur ulang nilai input dengan id "adults" dan "children" menjadi 0
                    $("#hargaInput").val(totalHarga);
                    $("#totalHargaInput").val(totalHarga);
                } else {
                    console.error("Harga per orang tidak valid.");
                }
            });
        });
    </script>
    <script>
        // Mendaftarkan fungsi untuk memeriksa panjang NIK saat pengguna mengetik
        document.getElementById("NIK").addEventListener("input", function () {
            var nikInput = document.getElementById("NIK").value;
            var nikAlert = document.getElementById("nikAlert");

            // Memeriksa jika panjang NIK kurang dari 16 karakter
            if (nikInput.length < 16) {
                nikAlert.textContent = "Nomer Identitas KTP harus terdiri dari 16 karakter";
            } else {
                nikAlert.textContent = ""; // Menghapus pesan peringatan jika NIK valid
            }
        });

    </script>
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
                title: "Testing : data berhasil di kirim ke database"
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
</body>

</html>