<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>About</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- ========================================================
  * Template Name: Append
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/append-bootstrap-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="blog-page">

    <!-- ======= Header ======= -->
    <header id="header" class="header position-relative d-flex align-items-center scroll-up-sticky">
        <div class="container-fluid d-flex align-items-center justify-content-between">

            <a href={{ route('welcome') }} class="logo d-flex align-items-center me-auto me-xl-0">

                <h1>Qavaa Group</h1>
                <span>.</span>
            </a>

            <!-- Nav Menu -->
            <nav id="navmenu" class="navmenu ">
                <ul>
                    <li><a href={{ route('welcome') }}>Home</a></li>
                    <li><a href={{ route('about') }} class="active">About Us</a></li>
                    <li class="dropdown has-dropdown"><a href={{ route('marketplace') }}><span>E-commerce</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <div class="megamenu">
                            <ul class="dd-box-shadow">
                                <li>
                                    <a href="#">Membership</a> <br/>
                                        Ipsa sint sit. Quis ducimus tempore dolores impedit et dolor cumque alias maxime.
                                </li>
                                <li>
                                    <a href="#">Digital Marketing</a><br/>
                                    Ipsa sint sit. Quis ducimus tempore dolores impedit et dolor cumque alias maxime.
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown has-dropdown"><a href="#"><span>Consulting</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <div class="megamenu">

                                <ul class="dd-box-shadow">
                                    <li><a href={{ route('welcome') }}>Web Design</a> <br/>
                                        Ipsa sint sit. Quis ducimus tempore dolores impedit et dolor cumque alias maxime.
                                    </li>
                                    <li>
                                        <a href="#">Web & Mobile Apps</a> <br/>
                                        Ipsa sint sit. Quis ducimus tempore dolores impedit et dolor cumque alias maxime.
                                    </li>
                                    <li>
                                        <a href="#">Maintenance</a>
                                        <br/>
                                        Ipsa sint sit. Quis ducimus tempore dolores impedit et dolor cumque alias maxime.
                                    </li>
                                </ul>
                        </div>
                    </li>
                    <li><a href={{ route('contacts') }}>Contact</a></li>
                </ul>

                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav><!-- End Nav Menu -->

            <a class="btn-getstarted" href="index.html#about">Get Started</a>

        </div>
    </header><!-- End Header -->


    @yield('menu-content')




    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-about">
                    <a href={{ route('welcome') }} class="logo d-flex align-items-center">
                        <span>Qavaa Group</span>
                    </a>
                    <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita
                        valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
                    <div class="social-links d-flex mt-4">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href={{ route('welcome') }}>Home</a></li>
                        <li><a href={{ route('about') }}>About us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Terms of service</a></li>
                        <li><a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">Product Management</a></li>
                        <li><a href="#">Marketing</a></li>
                        <li><a href="#">Graphic Design</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4>Contact Us</h4>
                    <p>United States</p>
                    <p>Ivory Cost</p>
                    <p>Nigeria</p>
                    <p>Togo</p>
                    <p class="mt-4"><strong>Phone:</strong> <span>+1 410 929 7684</span></p>
                    <p><strong>Email:</strong> <span>info@qavaa.com</span></p>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>&copy; <span>Copyright</span> <strong class="px-1">Qavaa Group</strong> <span>All Rights
                    Reserved</span></p>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/append-bootstrap-website-template/ -->
                Designed by <a href={{ route('welcome') }}>Qavaa Group</a>
            </div>
        </div>

    </footer><!-- End Footer -->

    <!-- Scroll Top Button -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
