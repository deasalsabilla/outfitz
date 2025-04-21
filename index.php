<!DOCTYPE html>
<html lang="en">


<!-- molla/index-5.html  22 Nov 2019 09:55:58 GMT -->

<head>
    <script type="text/javascript">
        if (top !== window) {
            top.location.href = window.location.href;
        }
        if (window.location.hash) {
            window.location.href = window.location.href.replace(window.location.hash, '');
        }
    </script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Beranda - Outfitz</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Molla - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/icons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/icons/site.html">
    <link rel="mask-icon" href="assets/images/icons/safari-pinned-tab.svg" color="#666666">
    <link rel="shortcut icon" href="assets/images/icons/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="Molla">
    <meta name="application-name" content="Molla">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/plugins/jquery.countdown.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/skins/skin-demo-5.css">
    <link rel="stylesheet" href="assets/css/demos/demo-5.css">
</head>

<body>
    <div class="page-wrapper">
        <header class="header header-5">
            <div class="header-middle sticky-header">
                <div class="container-fluid" style="display: flex; justify-content: space-between; align-items: center;">
                    <div class="header-left" style="display: flex; align-items: center;">
                        <button class="mobile-menu-toggler">
                            <span class="sr-only">Toggle mobile menu</span>
                            <i class="icon-bars"></i>
                        </button>
                        <a href="index.php" class="logo" style="font-size: 50px; font-weight: bold; font-family: 'Poppins', sans-serif; color: #fff; text-decoration: none;">
                            Outfitz
                        </a>
                    </div>

                    <!-- ✅ NAV MENU DIPINDAHKAN KE TENGAH -->
                    <nav class="main-nav" style="flex: 1; text-align: center;">
                        <ul class="menu sf-arrows" style="display: inline-flex; gap: 30px; list-style: none; margin: 0; padding: 0;">
                            <li class="megamenu-container active"><a href="index.php" class="sf-with-ul">Beranda</a></li>
                            <li><a href="belanja.php" class="sf-with-ul">Belanja</a></li>
                            <li><a href="contact.php" class="sf-with-ul">Hubungi Kami</a></li>
                        </ul>
                    </nav>

                    <div class="header-right d-flex align-items-center">
                        <div class="dropdown cart-dropdown me-3">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                <i class="icon-shopping-cart"></i>
                                <span class="cart-count">2</span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-cart-products">
                                    <div class="product">
                                        <div class="product-cart-details">
                                            <h4 class="product-title">
                                                <a href="belanja.php">Zaitun Series: Jumpsuit Klasik</a>
                                            </h4>

                                            <span class="cart-product-info">
                                                <span class="cart-product-qty">1</span>
                                                x Rp. 92.876
                                            </span>
                                        </div><!-- End .product-cart-details -->

                                        <figure class="product-image-container">
                                            <a href="belanja.php" class="product-image">
                                                <img src="assets/images/products/product-6.jpg" alt="product">
                                            </a>
                                        </figure>
                                        <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                    </div><!-- End .product -->

                                    <div class="product">
                                        <div class="product-cart-details">
                                            <h4 class="product-title">
                                                <a href="product.html">Blue utility pinafore denim dress</a>
                                            </h4>

                                            <span class="cart-product-info">
                                                <span class="cart-product-qty">1</span>
                                                x Rp. 102.089
                                            </span>
                                        </div><!-- End .product-cart-details -->

                                        <figure class="product-image-container">
                                            <a href="product.html" class="product-image">
                                                <img src="assets/images/products/cart/product-2.jpg" alt="product">
                                            </a>
                                        </figure>
                                        <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                    </div><!-- End .product -->
                                </div><!-- End .cart-product -->

                                <div class="dropdown-cart-total">
                                    <span>Total</span>

                                    <span class="cart-total-price">Rp. 194.965</span>
                                </div><!-- End .dropdown-cart-total -->

                                <div class="dropdown-cart-action">
                                    <a href="cart.php" class="btn btn-primary">Lihat Keranjang</a>
                                    <a href="checkout.html" class="btn btn-outline-primary-2"><span>Checkout</span><i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .dropdown-cart-total -->
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .cart-dropdown -->
                        <div class="user-icon">
                            <a href="user-profile.html" class="user-link">
                                <i class="icon-user"></i>
                            </a>
                        </div>
                    </div><!-- End .header-right -->
                </div><!-- End .container-fluid -->
            </div><!-- End .header-middle -->
        </header><!-- End .header -->

        <main class="main">
            <div class="intro-slider-container mb-0">
                <div class="intro-slider owl-carousel owl-theme owl-nav-inside owl-light" data-toggle="owl" data-owl-options='{"nav": false, "dots": false}'>
                    <div class="intro-slide" style="background-image: url(assets/images/demos/demo-5/slider/slide-1.jpg);">
                        <div class="container intro-content text-center">
                            <h3 class="intro-subtitle text-white">Jangan Lewatkan</h3><!-- End .h3 intro-subtitle -->
                            <h1 class="intro-title text-white">Promo misterius</h1><!-- End .intro-title -->
                            <div class="intro-text text-white">Hanya Online</div><!-- End .intro-text -->
                            <a href="belanja.php" class="btn btn-primary">Temukan Sekarang</a>
                        </div><!-- End .intro-content -->
                    </div><!-- End .intro-slide -->

                    <div class="intro-slide" style="background-image: url(assets/images/demos/demo-5/slider/slide-2.jpg);">
                        <div class="container intro-content text-center">
                            <h3 class="intro-subtitle text-white">Waktu Terbatas</h3><!-- End .h3 intro-subtitle -->
                            <h1 class="intro-title text-white">Manjakan Dirimu</h1><!-- End .intro-title -->
                            <div class="intro-text text-white">Diskon hingga 50%</div><!-- End .intro-text -->
                            <a href="belanja.php" class="btn btn-primary">Belanja Sekarang</a>
                        </div><!-- End .intro-content -->
                    </div><!-- End .intro-slide -->
                </div><!-- End .intro-slider owl-carousel owl-theme -->

                <span class="slider-loader text-white"></span><!-- End .slider-loader -->
            </div><!-- End .intro-slider-container -->

            <div class="brands-border owl-carousel owl-simple mb-5" data-toggle="owl"
                data-owl-options='{
                    "nav": false, 
                    "dots": false,
                    "margin": 0,
                    "loop": false,
                    "responsive": {
                        "0": {
                            "items":2
                        },
                        "420": {
                            "items":3
                        },
                        "600": {
                            "items":4
                        },
                        "900": {
                            "items":5
                        },
                        "1024": {
                            "items":6
                        },
                        "1360": {
                            "items":7
                        }
                    }
                }'>

            </div><!-- End .owl-carousel -->

            <div class="container">
                <div class="banner-group">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="banner banner-border">
                                <a href="#">
                                    <img src="assets/images/demos/demo-5/banners/banner-1.jpg" alt="Banner">
                                </a>

                                <div class="banner-content">
                                    <h4 class="banner-subtitle"><a href="#">Sedang Tren</a></h4><!-- End .banner-subtitle -->
                                    <h3 class="banner-title"><a href="#"><span>Pilihan<br>Terfavorit Minggu Ini</span></a></h3><!-- End .banner-title -->
                                    <a href="belanja.php" class="btn btn-outline-primary-2 banner-link">Lihat Sekarang<i class="icon-long-arrow-right"></i></a>

                                </div><!-- End .banner-content -->
                            </div><!-- End .banner -->
                        </div><!-- End .col-md-6-->

                        <div class="col-md-6">
                            <div class="banner banner-border-hover">
                                <a href="#">
                                    <img src="assets/images/demos/demo-5/banners/banner-2.jpg" alt="Banner">
                                </a>

                                <div class="banner-content">
                                    <h4 class="banner-subtitle"><a href="#">Hanya untuk Waktu Terbatas</a></h4><!-- End .banner-subtitle -->
                                    <h3 class="banner-title"><a href="#"><span>Diskon <span style="color: #f39c12; text-transform: uppercase;">Outfitz</span><br>Hingga 70%</span></a></h3><!-- End .banner-title -->
                                    <a href="belanja.php" class="btn btn-outline-primary-2 banner-link">Belanja Sekarang<i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .banner-content -->
                            </div><!-- End .banner -->

                            <div class="banner banner-border-hover">
                                <a href="#">
                                    <img src="assets/images/demos/demo-5/banners/banner-3.jpg" alt="Banner">
                                </a>

                                <div class="banner-content">
                                    <h4 class="banner-subtitle"><a href="#">Pilihan Favorit Minggu Ini</a></h4><!-- End .banner-subtitle -->
                                    <h3 class="banner-title"><a href="#"><span>Pakaian<br>Liburan Wanita</span></a></h3><!-- End .banner-title -->
                                    <a href="#" class="btn btn-outline-primary-2 banner-link">Lihat Sekarang<i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .banner-content -->
                            </div><!-- End .banner -->
                        </div><!-- End .col-md-6 -->
                    </div><!-- End .row -->
                </div><!-- End .banner-group -->
            </div><!-- End .container -->

            <div class="mb-4"></div><!-- End .mb-6 -->

            <div class="container">
                <div class="heading heading-center mb-3">
                    <h2 class="title">Produk Trendi</h2><!-- End .title -->

                    <ul class="nav nav-pills justify-content-center" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="trendy-all-link" data-toggle="tab" href="#trendy-all-tab" role="tab" aria-controls="trendy-all-tab" aria-selected="true">All</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="trendy-women-link" data-toggle="tab" href="#trendy-women-tab" role="tab" aria-controls="trendy-women-tab" aria-selected="false">Women</a>
                        </li>
                    </ul>
                </div><!-- End .heading -->

                <div class="tab-content tab-content-carousel">
                    <div class="tab-pane p-0 fade show active" id="trendy-all-tab" role="tabpanel" aria-labelledby="trendy-all-link">
                        <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                            data-owl-options='{
                                "nav": false, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":4,
                                        "nav": true
                                    }
                                }
                            }'>
                            <div class="product product-2">
                                <figure class="product-media">
                                    <a href="belanja.php">
                                        <img src="assets/images/demos/demo-5/products/product-1-1.jpg" alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action product-action-transparent">
                                        <a href="#" class="btn-product btn-cart"><span>Keranjang</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Pakaian</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Vest dress</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        Rp. 85.980
                                    </div><!-- End .product-price -->

                                    <div class="product-nav product-nav-dots">
                                        <a href="#" class="active" style="background: #2d272b;"><span class="sr-only">Color name</span></a>
                                        <a href="#" style="background: #8f957d;"><span class="sr-only">Color name</span></a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                </div><!-- End .owl-carousel -->
            </div><!-- .End .tab-pane -->
            <div class="tab-pane p-0 fade" id="trendy-women-tab" role="tabpanel" aria-labelledby="trendy-women-link">
                <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                    data-owl-options='{
                                "nav": false, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":4,
                                        "nav": true
                                    }
                                }
                            }'>
                </div><!-- End .owl-carousel -->
            </div><!-- .End .tab-pane -->
    </div><!-- End .tab-content -->
    </div><!-- End .container -->

    <div class="mb-5"></div><!-- End .mb-5 -->

    <div class="pt-6 pb-6" style="background-color: #fff;">
        <div class="container">
            <div class="banner-set">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="banner-set-content text-center">
                            <div class="set-content-wrapper">
                                <h4>Spesial</h4>
                                <h2>Percantik Gaya Anda.</h2>

                                <p>Bergabunglah dengan daftar email eksklusif kami dan jadi yang pertama mengetahui tentang penjualan, kupon, produk baru, dan lainnya! </p>

                                <div class="banner-set-products">
                                    <div class="row">
                                        <div class="products">
                                            <div class="col-6">
                                                <div class="product product-2 text-center">
                                                    <figure class="product-media">
                                                        <a href="product.html">
                                                            <img src="assets/images/demos/demo-5/products/product-13.jpg" alt="Product image" class="product-image">
                                                        </a>
                                                    </figure><!-- End .product-media -->

                                                    <div class="product-body">
                                                        <h3 class="product-title"><a href="product.html">Rib-knit cardigan</a></h3><!-- End .product-title -->
                                                        <div class="product-price">
                                                            Rp. 198.350
                                                        </div><!-- End .product-price -->
                                                    </div><!-- End .product-body -->
                                                </div><!-- End .product -->
                                            </div><!-- End .col-sm-6 -->

                                            <div class="col-6">
                                                <div class="product product-2 text-center">
                                                    <figure class="product-media">
                                                        <a href="product.html">
                                                            <img src="assets/images/demos/demo-5/products/product-14.jpg" alt="Product image" class="product-image">
                                                        </a>
                                                    </figure><!-- End .product-media -->

                                                    <div class="product-body">
                                                        <h3 class="product-title"><a href="product.html">Linen-blend trousers</a></h3><!-- End .product-title -->
                                                        <div class="product-price">
                                                            Rp. 130.700
                                                        </div><!-- End .product-price -->
                                                    </div><!-- End .product-body -->
                                                </div><!-- End .product -->
                                            </div><!-- End .col-sm-6 -->
                                        </div>
                                    </div><!-- End .row -->
                                </div><!-- End .banner-set-products -->
                            </div><!-- End .set-content-wrapper -->
                        </div><!-- End .banner-set-content -->
                    </div><!-- End .col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="banner-set-image banner-border-hover">
                            <a href="#">
                                <img src="assets/images/demos/demo-5/banners/banner-4.jpg" alt="banner">
                            </a>
                            <div class="banner-content">
                                <h3 class="banner-title"><a href="#"><span>Basic Kasual &<br>item kuncinya Tren.</span></a></h3><!-- End .banner-title -->
                                <h4 class="banner-subtitle">dalam tampilan ini</h4>
                                <!-- End .banner-subtitle -->
                                <h4 class="banner-detail">• Rib-knit cardigan <br>• Linen-blend paper bag trousers</h4>
                                <h4 class="banner-price">Rp. 150.350 - Rp. 108.700</h4>
                                <a href="#" class="btn btn-outline-primary-2 banner-link">beli semua</a>
                            </div><!-- End .banner-content -->
                        </div><!-- End .banner-set-image -->
                    </div><!-- End .col-lg-6 -->
                </div><!-- End .row -->
            </div><!-- End .banner-set -->
        </div><!-- End .container -->
    </div><!-- End .bg-lighter pt6 pb-6 -->



    <div class="bg-lighter pt-7 pb-4" style="background-color: #fafafa;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="icon-box icon-box-side">
                        <span class="icon-box-icon text-dark">
                            <i class="icon-rocket"></i>
                        </span>
                        <div class="icon-box-content">
                            <h3 class="icon-box-title">Pembayaran & Pengiriman</h3><!-- End .icon-box-title -->
                            <p>Gratis ongkir untuk pesanan di atas $50</p>
                        </div><!-- End .icon-box-content -->
                    </div><!-- End .icon-box -->
                </div><!-- End .col-sm-6 col-lg-4 -->

                <div class="col-sm-6 col-lg-4">
                    <div class="icon-box icon-box-side">
                        <span class="icon-box-icon text-dark">
                            <i class="icon-refresh"></i>
                        </span>
                        <div class="icon-box-content">
                            <h3 class="icon-box-title">Pengembalian & Uang Kembali</h3><!-- End .icon-box-title -->
                            <p>Jaminan uang kembali 100%</p>
                        </div><!-- End .icon-box-content -->
                    </div><!-- End .icon-box -->
                </div><!-- End .col-sm-6 col-lg-4 -->

                <div class="col-sm-6 col-lg-4">
                    <div class="icon-box icon-box-side">
                        <span class="icon-box-icon text-dark">
                            <i class="icon-life-ring"></i>
                        </span>
                        <div class="icon-box-content">
                            <h3 class="icon-box-title">Dukungan Berkualitas</h3><!-- End .icon-box-title -->
                            <p>Layanan dukungan online 24/7</p>
                        </div><!-- End .icon-box-content -->
                    </div><!-- End .icon-box -->
                </div><!-- End .col-sm-6 col-lg-4 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .bg-lighter pt-5 pb-5 -->
    </main><!-- End .main -->

    <footer class="footer footer-2">
        <div class="footer-middle border-0">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-lg-6">
                        <div class="widget widget-about">
                            <a href="index.php" class="footer-logo">Outfitz</a>
                            <p>Outfitz adalah destinasi fashion online yang menghadirkan koleksi pakaian stylish dan berkualitas. Temukan tren terbaru, nikmati promo eksklusif, dan rasakan pengalaman belanja yang mudah serta aman. Lengkapi gayamu bersama Outfitz!</p>


                            <div class="widget-about-info">
                                <div class="row">
                                    <div class="col-sm-6 col-md-4">
                                        <span class="widget-about-title">Ada pertanyaan? Hubungi kami 24/7</span>
                                        <a href="tel:123456789">0812 2728 6595</a>
                                    </div><!-- End .col-sm-6 -->
                                    <div class="col-sm-6 col-md-8">
                                        <span class="widget-about-title">Metode Pembayaran</span>
                                        <figure class="footer-payments">
                                            <img src="assets/images/payments.png" alt="Payment methods" width="272" height="20">
                                        </figure><!-- End .footer-payments -->
                                    </div><!-- End .col-sm-6 -->
                                </div><!-- End .row -->
                            </div><!-- End .widget-about-info -->
                        </div><!-- End .widget about-widget -->
                    </div><!-- End .col-sm-12 col-lg-3 -->

                    <div class="col-sm-6 col-lg-4">
                        <div class="widget">
                            <h4 class="widget-title">Komitmen Kami</h4>
                            <p>Kami berkomitmen untuk pengadaan yang etis dan keberlanjutan. Pelajari lebih lanjut tentang praktik keberlanjutan kami.</p>
                            <a href="contact.php" class="btn btn-outline-secondary btn-sm">Pelajari Lebih Lanjut</a>
                        </div>
                    </div>
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .footer-middle -->

        <div class="footer-bottom">
            <div class="container">
                <p class="footer-copyright">Copyright © 2025 Outfitz. All Rights Reserved.</p><!-- End .footer-copyright -->
                <div class="social-icons social-icons-color">
                    <span class="social-label">Social Media</span>
                    <a href="https://instagram.com/meaffq/" class="social-icon social-instagram" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                    <a href="https://instagram.com/dea.salsa.503/" class="social-icon social-instagram" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                </div><!-- End .soial-icons -->
            </div><!-- End .container -->
        </div><!-- End .footer-bottom -->
    </footer><!-- End .footer -->
    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container mobile-menu-light">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-close"></i></span>

            <form action="#" method="get" class="mobile-search">
                <label for="mobile-search" class="sr-only">Search</label>
                <input type="search" class="form-control" name="mobile-search" id="mobile-search" placeholder="Search in..." required>
                <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
            </form>

            <nav class="mobile-nav">
                <ul class="mobile-menu">
                    <li class="active">
                        <a href="index.html">Home</a>

                        <ul>
                            <li><a href="index-1.html">01 - furniture store</a></li>
                            <li><a href="index-2.html">02 - furniture store</a></li>
                            <li><a href="index-3.html">03 - electronic store</a></li>
                            <li><a href="index-4.html">04 - electronic store</a></li>
                            <li><a href="index-5.html">05 - fashion store</a></li>
                            <li><a href="index-6.html">06 - fashion store</a></li>
                            <li><a href="index-7.html">07 - fashion store</a></li>
                            <li><a href="index-8.html">08 - fashion store</a></li>
                            <li><a href="index-9.html">09 - fashion store</a></li>
                            <li><a href="index-10.html">10 - shoes store</a></li>
                            <li><a href="index-11.html">11 - furniture simple store</a></li>
                            <li><a href="index-12.html">12 - fashion simple store</a></li>
                            <li><a href="index-13.html">13 - market</a></li>
                            <li><a href="index-14.html">14 - market fullwidth</a></li>
                            <li><a href="index-15.html">15 - lookbook 1</a></li>
                            <li><a href="index-16.html">16 - lookbook 2</a></li>
                            <li><a href="index-17.html">17 - fashion store</a></li>
                            <li><a href="index-18.html">18 - fashion store (with sidebar)</a></li>
                            <li><a href="index-19.html">19 - games store</a></li>
                            <li><a href="index-20.html">20 - book store</a></li>
                            <li><a href="index-21.html">21 - sport store</a></li>
                            <li><a href="index-22.html">22 - tools store</a></li>
                            <li><a href="index-23.html">23 - fashion left navigation store</a></li>
                            <li><a href="index-24.html">24 - extreme sport store</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="category.html">Shop</a>
                        <ul>
                            <li><a href="category-list.html">Shop List</a></li>
                            <li><a href="category-2cols.html">Shop Grid 2 Columns</a></li>
                            <li><a href="category.html">Shop Grid 3 Columns</a></li>
                            <li><a href="category-4cols.html">Shop Grid 4 Columns</a></li>
                            <li><a href="category-boxed.html"><span>Shop Boxed No Sidebar<span class="tip tip-hot">Hot</span></span></a></li>
                            <li><a href="category-fullwidth.html">Shop Fullwidth No Sidebar</a></li>
                            <li><a href="product-category-boxed.html">Product Category Boxed</a></li>
                            <li><a href="product-category-fullwidth.html"><span>Product Category Fullwidth<span class="tip tip-new">New</span></span></a></li>
                            <li><a href="cart.html">Cart</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                            <li><a href="wishlist.html">Wishlist</a></li>
                            <li><a href="#">Lookbook</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="product.html" class="sf-with-ul">Product</a>
                        <ul>
                            <li><a href="product.html">Default</a></li>
                            <li><a href="product-centered.html">Centered</a></li>
                            <li><a href="product-extended.html"><span>Extended Info<span class="tip tip-new">New</span></span></a></li>
                            <li><a href="product-gallery.html">Gallery</a></li>
                            <li><a href="product-sticky.html">Sticky Info</a></li>
                            <li><a href="product-sidebar.html">Boxed With Sidebar</a></li>
                            <li><a href="product-fullwidth.html">Full Width</a></li>
                            <li><a href="product-masonry.html">Masonry Sticky Info</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Pages</a>
                        <ul>
                            <li>
                                <a href="about.html">About</a>

                                <ul>
                                    <li><a href="about.html">About 01</a></li>
                                    <li><a href="about-2.html">About 02</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="contact.html">Contact</a>

                                <ul>
                                    <li><a href="contact.html">Contact 01</a></li>
                                    <li><a href="contact-2.html">Contact 02</a></li>
                                </ul>
                            </li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="faq.html">FAQs</a></li>
                            <li><a href="404.html">Error 404</a></li>
                            <li><a href="coming-soon.html">Coming Soon</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="blog.html">Blog</a>

                        <ul>
                            <li><a href="blog.html">Classic</a></li>
                            <li><a href="blog-listing.html">Listing</a></li>
                            <li>
                                <a href="#">Grid</a>
                                <ul>
                                    <li><a href="blog-grid-2cols.html">Grid 2 columns</a></li>
                                    <li><a href="blog-grid-3cols.html">Grid 3 columns</a></li>
                                    <li><a href="blog-grid-4cols.html">Grid 4 columns</a></li>
                                    <li><a href="blog-grid-sidebar.html">Grid sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Masonry</a>
                                <ul>
                                    <li><a href="blog-masonry-2cols.html">Masonry 2 columns</a></li>
                                    <li><a href="blog-masonry-3cols.html">Masonry 3 columns</a></li>
                                    <li><a href="blog-masonry-4cols.html">Masonry 4 columns</a></li>
                                    <li><a href="blog-masonry-sidebar.html">Masonry sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Mask</a>
                                <ul>
                                    <li><a href="blog-mask-grid.html">Blog mask grid</a></li>
                                    <li><a href="blog-mask-masonry.html">Blog mask masonry</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Single Post</a>
                                <ul>
                                    <li><a href="single.html">Default with sidebar</a></li>
                                    <li><a href="single-fullwidth.html">Fullwidth no sidebar</a></li>
                                    <li><a href="single-fullwidth-sidebar.html">Fullwidth with sidebar</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="elements-list.html">Elements</a>
                        <ul>
                            <li><a href="elements-products.html">Products</a></li>
                            <li><a href="elements-typography.html">Typography</a></li>
                            <li><a href="elements-titles.html">Titles</a></li>
                            <li><a href="elements-banners.html">Banners</a></li>
                            <li><a href="elements-product-category.html">Product Category</a></li>
                            <li><a href="elements-video-banners.html">Video Banners</a></li>
                            <li><a href="elements-buttons.html">Buttons</a></li>
                            <li><a href="elements-accordions.html">Accordions</a></li>
                            <li><a href="elements-tabs.html">Tabs</a></li>
                            <li><a href="elements-testimonials.html">Testimonials</a></li>
                            <li><a href="elements-blog-posts.html">Blog Posts</a></li>
                            <li><a href="elements-portfolio.html">Portfolio</a></li>
                            <li><a href="elements-cta.html">Call to Action</a></li>
                            <li><a href="elements-icon-boxes.html">Icon Boxes</a></li>
                        </ul>
                    </li>
                </ul>
            </nav><!-- End .mobile-nav -->

            <div class="social-icons">
                <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
            </div><!-- End .social-icons -->
        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->


    <!-- Plugins JS File -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.hoverIntent.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/superfish.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.plugin.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/demos/demo-5.js"></script>
</body>


<!-- molla/index-5.html  22 Nov 2019 09:56:18 GMT -->

</html>