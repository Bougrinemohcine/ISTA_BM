<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- ========== Meta Tags ========== -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Educom - Education & LMS Template">

        <!-- ========== Page Title ========== -->
        <title>Educom - Education & LMS Template</title>

        <!-- ========== Favicon Icon ========== -->
        <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon">

        <!-- ========== Start Stylesheet ========== -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/css/flaticon-set.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/css/themify-icons.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/css/owl.theme.default.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/css/bootsnav.css') }}" rel="stylesheet" />
        <link href="{{ asset('style.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" />
        <!-- ========== End Stylesheet ========== -->

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="{{ asset('assets/js/html5/html5shiv.min.js') }}"></script>
          <script src="{{ asset('assets/js/html5/respond.min.js') }}"></script>
        <![endif]-->

        <!-- ========== Google Fonts ========== -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">
    </head>


<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Start Header Top
    ============================================= -->
    <div class="top-bar-area bg-dark text-light">
        <div class="container">
            <div class="row">
                <div class="col-md-4 logo-box">
                    <div class="logo">
                        <a href="index.html"><img src="assets/img/logo-light.png" alt="Thumb"></a>
                    </div>
                </div>
                <div class="col-md-8 address-info text-right">
                    <div class="info">
                        <ul>
                            <li>
                                <i class="fas fa-copy"></i> Total courses: <strong>23400</strong>
                            </li>
                            <li>
                                <i class="fas fa-user-shield"></i> Instructor: <strong>655</strong>
                            </li>
                            <li>
                                <i class="fas fa-phone"></i> Help Line: <strong>+123 456 7890</strong>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- Header
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default logo-less small-pad navbar-sticky bootsnav">

            <!-- Start Top Search -->
            <div class="container">
                <div class="row">
                    <div class="top-search">
                        <div class="input-group">
                            <form action="#">
                                <input type="text" name="text" class="form-control" placeholder="Search">
                                <button type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->

            <div class="container">

                <!-- Start Atribute Navigation -->
                <div class="attr-nav inc-btn">
                    <ul>
                        <li>
                            <a href="#">Register</a>
                        </li>
                        <li>
                            <a href="#">Login</a>
                        </li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img src="assets/img/logo.png" class="logo" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-left" data-in="#" data-out="#">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Home</a>
                            <ul class="dropdown-menu">
                                <li><a href="index.html">Home Version One</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Pages</a>
                            <ul class="dropdown-menu">
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="gallery.html">Gallery</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Gallery</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="gallery-grid-colum.html">Grid Colum</a></li>
                                        <li><a href="gallery-masonary-colum.html">Masonary Colum</a></li>
                                    </ul>
                                </li>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="register.html">Register</a></li>
                                <li><a href="404.html">Error Page</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Courses</a>
                            <ul class="dropdown-menu">
                                <li><a href="courses-grid.html">Course Grid</a></li>
                                <li><a href="courses-carousel.html">Course Carousel</a></li>
                                <li><a href="course-details.html">Course Details</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" > Teachers</a>
                            <ul class="dropdown-menu">
                                <li><a href="advisor-carousel.html">Advisor Carousel</a></li>
                                <li><a href="advisor-grid.html">Advisor Grid</a></li>
                                <li><a href="advisor-details.html">Advisor Details</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" > Event</a>
                            <ul class="dropdown-menu">
                                <li><a href="event-1.html">Event Version One</a></li>
                                <li><a href="event-2.html">Event Version Two</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Blog</a>
                            <ul class="dropdown-menu">
                                <li><a href="blog-standard.html">Blog Standard</a></li>
                                <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                <li><a href="blog-single.html">Blog Single Standard</a></li>
                                <li><a href="blog-single-left-sidebar.html">Single Left Sidebar</a></li>
                                <li><a href="blog-single-right-sidebar.html">Single Right Sidebar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="contact.html">contact</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->

    <!-- Start Banner
    ============================================= -->
    <div class="banner-area shadow bg-fixed dark text-center text-light" style="background-image: url('{{ asset('assets/img/2440x1578.png') }}');">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="box-table">
                        <div class="box-cell">
                            <div class="content search-content">
                                <h2>Growth You Career With Complate Courses</h2>
                                <ul>
                                    <li><i class="fas fa-drafting-compass"></i> Architecture</li>
                                    <li><i class="fas fa-book"></i> Education</li>
                                    <li><i class="fas fa-globe-asia"></i> Geography</li>
                                </ul>
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="row">
                                        <form action="#">
                                            <input type="text" placeholder="Enter course name" class="form-control" name="text">
                                            <button type="submit">
                                                <i class="ti-search"></i> Search
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Start Weekly Top
    ============================================= -->
    <div class="weekly-top-items carousel-shadow default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="top-courses">
                        <div class="heading">
                            <h4>Top Courses - <strong>Weekly</strong></h4>
                        </div>
                        <div class="top-course-items top-courses-carousel owl-carousel owl-theme">
                            <!-- Single Item -->
                            <div class="item">
                                <div class="thumb">
                                    <img src="{{asset('assets/img/800x600.png')}}" alt="Thumb">
                                    <div class="overlay">
                                        <a href="#">
                                            <img src="{{asset('assets/img/100x100.png')}}" alt="Thumb">
                                        </a>
                                        <ul>
                                            <li><i class="fas fa-clock"></i> 04:15:38</li>
                                            <li><i class="fas fa-list-ul"></i> 32</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="info">
                                    <div class="meta">
                                        <ul>
                                            <li>
                                                <a href="#">Education</a>
                                                <a href="#">Tech</a>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <span>(1k)</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <h4>
                                        <a href="#">data science and software</a>
                                    </h4>
                                    <p>
                                        Wisdom praise things she before. Be mother itself vanity favour do me of. Begin sex was power joy after had walls miles.
                                    </p>
                                    <div class="footer-meta">
                                        <a class="btn btn-theme effect btn-sm" href="#">Enroll Now</a>
                                        <h4>$23.00</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Item -->
                            <!-- Single Item -->
                            <div class="item">
                                <div class="thumb">
                                    <img src="{{asset('assets/img/800x600.png')}}" alt="Thumb">
                                    <div class="overlay">
                                        <a href="#">
                                            <img src="{{asset('assets/img/100x100.png')}}" alt="Thumb">
                                        </a>
                                        <ul>
                                            <li><i class="fas fa-clock"></i> 08:27:00</li>
                                            <li><i class="fas fa-list-ul"></i> 65</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="info">
                                    <div class="meta">
                                        <ul>
                                            <li>
                                                <a href="#">Illustration</a>
                                                <a href="#">Design</a>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(2k)</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <h4>
                                        <a href="#">Social Science & Humanities</a>
                                    </h4>
                                    <p>
                                        Wisdom praise things she before. Be mother itself vanity favour do me of. Begin sex was power joy after had walls miles.
                                    </p>
                                    <div class="footer-meta">
                                        <a class="btn btn-theme effect btn-sm" href="#">Enroll Now</a>
                                        <h4>$39.00</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Item -->
                            <!-- Single Item -->
                            <div class="item">
                                <div class="thumb">
                                    <img src="{{asset('assets/img/800x600.png')}}" alt="Thumb">
                                    <div class="overlay">
                                        <a href="#">
                                            <img src="{{asset('assets/img/100x100.png')}}" alt="Thumb">
                                        </a>
                                        <ul>
                                            <li><i class="fas fa-clock"></i> 04:15:38</li>
                                            <li><i class="fas fa-list-ul"></i> 32</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="info">
                                    <div class="meta">
                                        <ul>
                                            <li>
                                                <a href="#">Science</a>
                                                <a href="#">Tech</a>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.6k)</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <h4>
                                        <a href="#">Programming Masterclass</a>
                                    </h4>
                                    <p>
                                        Wisdom praise things she before. Be mother itself vanity favour do me of. Begin sex was power joy after had walls miles.
                                    </p>
                                    <div class="footer-meta">
                                        <a class="btn btn-theme effect btn-sm" href="#">Enroll Now</a>
                                        <h4>$54.00</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Item -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="top-author">
                        <h4>Top Author</h4>
                        <div class="author-items">
                            <!-- Single Item -->
                            <div class="item">
                                <div class="thumb">
                                    <a href="#">
                                        <img src="{{ asset('assets/img/100x100.png') }}" alt="Thumb">
                                    </a>
                                </div>
                                <div class="info">
                                    <h5><a href="#">Professon. Nuri Paul</a></h5>
                                    <ul>
                                        <li>Students enrolled <strong>12k+</strong></li>
                                        <li>
                                            <span>Rating</span>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="item">
                                <div class="thumb">
                                    <a href="#">
                                        <img src="{{ asset('assets/img/100x100.png') }}" alt="Thumb">
                                    </a>
                                </div>
                                <div class="info">
                                    <h5><a href="#">Dr. Bubly Minu</a></h5>
                                    <ul>
                                        <li>Students enrolled <strong>16k+</strong></li>
                                        <li>
                                            <span>Rating</span>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="item">
                                <div class="thumb">
                                    <a href="#"><img src="{{ asset('assets/img/100x100.png') }}" alt="Thumb"></a>
                                </div>
                                <div class="info">
                                    <h5><a href="#">Monayem Pruda</a></h5>
                                    <ul>
                                        <li>Students enrolled <strong>23k+</strong></li>
                                        <li>
                                            <span>Rating</span>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <a href="#">View All <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Weekly Top -->

    <!-- Start Registrationg
    ============================================= -->
    <div class="registration-area default-padding bg-dark text-light">
        <!-- Fixed BG-->
        <div class="fixed-bg bg-cover" style="background-image: url(assets/img/800x800.png);"></div>
        <!-- End Fixed BG-->
        <div class="container">
            <div class="row">
                <div class="col-md-7 countdown">
                    <h2>Register today</h2>
                    <h4>Get 50s of online Courses For Free!</h4>
                    <p>
                        Own partiality motionless was old excellence she inquietude contrasted. Sister giving so wicket cousin of an he rather marked. Of on game part body rich. Adapted mr savings venture it or comfort affixed friends. Considered sympathize ten uncommonly occasional assistance sufficient not. Letter of on become he tended active enable to. Vicinity relation sensible sociable surprise screened no up as.
                    </p>
                    <ul>
                        <li>Design Instruments for Communication</li>
                        <li>Own partiality motionless</li>
                        <li>Considered sympathize</li>
                        <li>Letter of on become</li>
                    </ul>
                    <div class="counter-class" data-date="2020-6-24 23:59:59"><!-- Date Formate Input yyyy-mm-dd hh:mm:ss -->
                        <div class="row">
                            <div class="item-list">
                                <div class="counter-item">
                                    <div class="item">
                                        <span class="counter-days"></span> Days
                                    </div>
                                </div>
                                <div class="counter-item">
                                    <div class="item">
                                        <span class="counter-hours"></span> Hours
                                    </div>
                                </div>
                                <div class="counter-item">
                                    <div class="item">
                                        <span class="counter-minutes"></span> Minutes
                                    </div>
                                </div>
                                <div class="counter-item">
                                    <div class="item">
                                        <span class="counter-seconds"></span> Seconds
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 reg-form">
                    <form action="#">
                        <h5>Free</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" placeholder="First Name" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Last Name" type="text">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Email*" type="email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <select>
                                        <option value="1">Chose Subject</option>
                                        <option value="2">Computer Engineering</option>
                                        <option value="4">Accounting Technologies</option>
                                        <option value="5">Web Development</option>
                                        <option value="6">Machine Language</option>
                                        <option value="7">Machine Language</option>
                                        <option value="8">Machine Language</option>
                                        <option value="9">Machine Language</option>
                                        <option value="10">Machine Language</option>
                                        <option value="11">Machine Language</option>
                                        <option value="12">Machine Language</option>
                                        <option value="13">Machine Language</option>
                                        <option value="14">Machine Language</option>
                                        <option value="15">Machine Language</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Phone" type="text">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit">
                                    Rigister Now
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Registrationg -->

    <!-- Start Categories
    ============================================= -->
    <div class="category-area default-padding">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Top Categories</h2>
                        <p>
                            Discourse assurance estimable applauded to so. Him everything melancholy uncommonly but solicitude inhabiting projection off. Connection stimulated estimating excellence an to impression.
                        </p>
                    </div>
                </div>
            </div>
            <div class="category-items">
                <div class="row">
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item mariner">
                            <a href="#">
                                <div class="item-box">
                                    <div class="icon">
                                        <i class="flaticon-algorithm"></i>
                                    </div>
                                    <div class="info">
                                        <h5>Analysis of Algorithms</h5>
                                        <p>
                                            Current enrolled <strong>1278</strong>
                                        </p>
                                        <span>28 Courses</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item java">
                            <a href="#">
                                <div class="item-box">
                                    <div class="icon">
                                        <i class="flaticon-nanotech"></i>
                                    </div>
                                    <div class="info">
                                        <h5>Computer Science</h5>
                                        <p>
                                            Current enrolled <strong>9577</strong>
                                        </p>
                                        <span>56 Courses</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item malachite">
                            <a href="#">
                                <div class="item-box">
                                    <div class="icon">
                                        <i class="flaticon-data-mining"></i>
                                    </div>
                                    <div class="info">
                                        <h5>Data Science</h5>
                                        <p>
                                            Current enrolled <strong>2544</strong>
                                        </p>
                                        <span>29 Courses</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item brilliantrose">
                            <a href="#">
                                <div class="item-box">
                                    <div class="icon">
                                        <i class="flaticon-chip"></i>
                                    </div>
                                    <div class="info">
                                        <h5>Engineering</h5>
                                        <p>
                                            Current enrolled <strong>6788</strong>
                                        </p>
                                        <span>87 Courses</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item casablanca">
                            <a href="#">
                                <div class="item-box">
                                    <div class="icon">
                                        <i class="flaticon-sketch"></i>
                                    </div>
                                    <div class="info">
                                        <h5>Architecture</h5>
                                        <p>
                                            Current enrolled <strong>1766</strong>
                                        </p>
                                        <span>39 Courses</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item emerald">
                            <a href="#">
                                <div class="item-box">
                                    <div class="icon">
                                        <i class="flaticon-paint-palette"></i>
                                    </div>
                                    <div class="info">
                                        <h5>Art & Design</h5>
                                        <p>
                                            Current enrolled <strong>4355</strong>
                                        </p>
                                        <span>36 Courses</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Categories -->

    <!-- Start Advisor
    ============================================= -->
    <div class="advisor-area carousel-shadow bg-gray default-padding bg-cover">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Experience Advisors</h2>
                        <p>
                            Discourse assurance estimable applauded to so. Him everything melancholy uncommonly but solicitude inhabiting projection off. Connection stimulated estimating excellence an to impression.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="advisor-items col-3 advisor-carousel owl-carousel owl-theme text-light text-center">
                        <!-- Single item -->
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/img/800x800.png" alt="Thumb">
                                <ul>
                                    <li class="facebook">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="dribbble">
                                        <a href="#"><i class="fab fa-dribbble"></i></a>
                                    </li>
                                    <li class="youtube">
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="info">
                                <span>Art Teacher</span>
                                <h4>Jonathom Nil</h4>
                            </div>
                        </div>
                        <!-- End Single item -->
                        <!-- Single item -->
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/img/800x800.png" alt="Thumb">
                                <ul>
                                    <li class="facebook">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="dribbble">
                                        <a href="#"><i class="fab fa-dribbble"></i></a>
                                    </li>
                                    <li class="youtube">
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="info">
                                <span>PHP Expert</span>
                                <h4>Admon Kilho</h4>
                            </div>
                        </div>
                        <!-- End Single item -->
                        <!-- Single item -->
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/img/800x800.png" alt="Thumb">
                                <ul>
                                    <li class="facebook">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="dribbble">
                                        <a href="#"><i class="fab fa-dribbble"></i></a>
                                    </li>
                                    <li class="youtube">
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="info">
                                <span>WordPress Ninja</span>
                                <h4>John Kabir</h4>
                            </div>
                        </div>
                        <!-- End Single item -->
                        <!-- Single item -->
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/img/800x800.png" alt="Thumb">
                                <ul>
                                    <li class="facebook">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="dribbble">
                                        <a href="#"><i class="fab fa-dribbble"></i></a>
                                    </li>
                                    <li class="youtube">
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="info">
                                <span>Web Developer</span>
                                <h4>Bubta Hurb</h4>
                            </div>
                        </div>
                        <!-- End Single item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Advisor -->

    <!-- Start Event
    ============================================= -->
    <div class="event-area default-padding">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Upcoming Events</h2>
                        <p>
                            Discourse assurance estimable applauded to so. Him everything melancholy uncommonly but solicitude inhabiting projection off. Connection stimulated estimating excellence an to impression.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="event-items">
                        <!-- Single Item -->
                        <div class="item">
                            <div class="col-md-5 thumb" style="background-image: url(assets/img/800x600.png);"></div>
                            <div class="col-md-7 info">
                                <div class="info-box">
                                    <div class="date">
                                        <strong>16</strong> Apr, 2020
                                    </div>
                                    <div class="content">
                                        <h4>
                                            <a href="#">Social Science & Humanities</a>
                                        </h4>
                                        <ul>
                                            <li><i class="fas fa-clock"></i> 8:00 - 16:00</li>
                                            <li><i class="fas fa-map-marked-alt"></i> California, TX 70240</li>
                                        </ul>
                                        <p>
                                            Attachment astonished to on appearance imprudence so collecting in excellence. Tiled way blind lived whose new. The for fully had she there leave merit enjoy forth.
                                        </p>
                                        <div class="bottom">
                                            <a href="#" class="btn circle btn-dark border btn-sm">
                                                <i class="fas fa-chart-bar"></i> Book Now
                                            </a>
                                            <a href="#">
                                                <i class="fas fa-ticket-alt"></i> 126 Available
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="col-md-5 thumb" style="background-image: url(assets/img/800x600.png);"></div>
                            <div class="col-md-7 info">
                                <div class="info-box">
                                    <div class="date">
                                        <strong>08</strong> Jul, 2020
                                    </div>
                                    <div class="content">
                                        <h4>
                                            <a href="#">Secondary Schools United Nations</a>
                                        </h4>
                                        <ul>
                                            <li><i class="fas fa-clock"></i> 10:00 - 14:00</li>
                                            <li><i class="fas fa-map-marked-alt"></i> California, TX 70240</li>
                                        </ul>
                                        <p>
                                            Attachment astonished to on appearance imprudence so collecting in excellence. Tiled way blind lived whose new. The for fully had she there leave merit enjoy forth.
                                        </p>
                                        <div class="bottom">
                                            <a href="#" class="btn circle btn-dark border btn-sm">
                                                <i class="fas fa-chart-bar"></i> Book Now
                                            </a>
                                            <a href="#">
                                                <i class="fas fa-ticket-alt"></i> 58 Available
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="col-md-5 thumb" style="background-image: url(assets/img/800x600.png);"></div>
                            <div class="col-md-7 info">
                                <div class="info-box">
                                    <div class="date">
                                        <strong>19</strong> Aug, 2020
                                    </div>
                                    <div class="content">
                                        <h4>
                                            <a href="#">International Conference on Art Business</a>
                                        </h4>
                                        <ul>
                                            <li><i class="fas fa-clock"></i> 11:00 - 19:00</li>
                                            <li><i class="fas fa-map-marked-alt"></i> California, TX 70240</li>
                                        </ul>
                                        <p>
                                            Attachment astonished to on appearance imprudence so collecting in excellence. Tiled way blind lived whose new. The for fully had she there leave merit enjoy forth.
                                        </p>
                                        <div class="bottom">
                                            <a href="#" class="btn circle btn-dark border btn-sm">
                                                <i class="fas fa-chart-bar"></i> Book Now
                                            </a>
                                            <a href="#">
                                                <i class="fas fa-ticket-alt"></i> 256 Available
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->

                    </div>
                </div>
                <div class="more-btn col-md-12 text-center">
                    <a href="#" class="btn btn-theme effect btn-md">View All Events</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Event -->

    <!-- Start Fun Factor
    ============================================= -->
    <div class="fun-factor-area default-padding text-center bg-fixed shadow dark-hard" style="background-image: url(assets/img/2440x1578.png);">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 item">
                    <div class="fun-fact">
                        <div class="icon">
                            <i class="fas fa-award"></i>
                        </div>
                        <div class="info">
                            <span class="timer" data-to="212" data-speed="5000"></span>
                            <span class="medium">National Awards</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 item">
                    <div class="fun-fact">
                        <div class="icon">
                            <i class="fas fa-user-shield"></i>
                        </div>
                        <div class="info">
                            <span class="timer" data-to="128" data-speed="5000"></span>
                            <span class="medium">Best Teachers</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 item">
                    <div class="fun-fact">
                        <div class="icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="info">
                            <span class="timer" data-to="8970" data-speed="5000"></span>
                            <span class="medium">Students Enrolled</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 item">
                    <div class="fun-fact">
                        <div class="icon">
                            <i class="fas fa-book-open"></i>
                        </div>
                        <div class="info">
                            <span class="timer" data-to="640" data-speed="5000"></span>
                            <span class="medium">Cources</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Fun Factor -->

    <!-- Start Testimonials
    ============================================= -->
    <div class="testimonials-area carousel-shadow active-dots bg-gray default-padding bg-cover" style="background-image: url(assets/img/shape-bg.png);">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>What Students Says</h2>
                        <p>
                            Discourse assurance estimable applauded to so. Him everything melancholy uncommonly but solicitude inhabiting projection off. Connection stimulated estimating excellence an to impression.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonial-items testimonial-carousel owl-carousel owl-theme text-center">
                        <!-- Single Item -->
                        <div class="item">
                            <div class="icon">
                                <i class="ti-quote-left"></i>
                            </div>
                            <div class="content">
                                <p>
                                    Regret eat looked warmth easily far should now. Prospect at me wandered on extended wondered thoughts appetite to. Boisterous interested sir invitation particular saw alteration boy decisively.
                                </p>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <img src="assets/img/100x100.png" alt="Thumb">
                            </div>
                            <div class="author">
                                <h4>Jonat Harik</h4>
                                <span>Student of DIU</span>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="icon">
                                <i class="ti-quote-left"></i>
                            </div>
                            <div class="content">
                                <p>
                                    Ashamed herself has distant can studied mrs. Led therefore its middleton perpetual fulfilled provision frankness. Small he drawn after among every three no.
                                </p>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <img src="assets/img/100x100.png" alt="Thumb">
                            </div>
                            <div class="author">
                                <h4>Bunah Ahem</h4>
                                <span>Student of COO</span>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="icon">
                                <i class="ti-quote-left"></i>
                            </div>
                            <div class="content">
                                <p>
                                    Regret eat looked warmth easily far should now. Prospect at me wandered on extended wondered thoughts appetite to. Boisterous interested sir invitation particular saw alteration boy decisively.
                                </p>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <img src="assets/img/100x100.png" alt="Thumb">
                            </div>
                            <div class="author">
                                <h4>Proda Huk</h4>
                                <span>Student of ICC</span>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonials -->

    <!-- Start Blog
    ============================================= -->
    <div class="blog-area default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Latest News</h2>
                        <p>
                            Discourse assurance estimable applauded to so. Him everything melancholy uncommonly but solicitude inhabiting projection off. Connection stimulated estimating excellence an to impression.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="blog-items">
                    <!-- Single Item -->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <a href="#">
                                    <img src="assets/img/800x600.png" alt="Thumb">
                                </a>
                            </div>
                            <div class="info">
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fas fa-user"></i> Admin</a>
                                        </li>
                                        <li><i class="fas fa-calendar-alt"></i> 14 Jun, 2020</li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <div class="tags">
                                        <a href="#">Event</a>
                                        <a href="#">Education</a>
                                    </div>
                                    <h4>
                                        <a href="#">Inquietude assistance precaution any impression man sufficient.</a>
                                    </h4>
                                    <p>
                                        Resembled at perpetual no believing is otherwise sportsman. Is do he dispatched cultivated travelling astonished.
                                    </p>
                                    <a href="#"><i class="fas fa-plus"></i> Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <a href="#">
                                    <img src="assets/img/800x600.png" alt="Thumb">
                                </a>
                            </div>
                            <div class="info">
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fas fa-user"></i> Admin</a>
                                        </li>
                                        <li><i class="fas fa-calendar-alt"></i> 25 Jul, 2020</li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <div class="tags">
                                        <a href="#">Learing</a>
                                        <a href="#">Geography</a>
                                    </div>
                                    <h4>
                                        <a href="#">Discourse ye continued pronounce we Particular use abilities.</a>
                                    </h4>
                                    <p>
                                        Resembled at perpetual no believing is otherwise sportsman. Is do he dispatched cultivated travelling astonished.
                                    </p>
                                    <a href="#"><i class="fas fa-plus"></i> Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <a href="#">
                                    <img src="assets/img/800x600.png" alt="Thumb">
                                </a>
                            </div>
                            <div class="info">
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fas fa-user"></i> Admin</a>
                                        </li>
                                        <li><i class="fas fa-calendar-alt"></i> 18 Sep, 2020</li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <div class="tags">
                                        <a href="#">Courses</a>
                                        <a href="#">Tech</a>
                                    </div>
                                    <h4>
                                        <a href="#">Deficient discourse do newspaper be an eagerness continued.</a>
                                    </h4>
                                    <p>
                                        Resembled at perpetual no believing is otherwise sportsman. Is do he dispatched cultivated travelling astonished.
                                    </p>
                                    <a href="#"><i class="fas fa-plus"></i> Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->

    <!-- Start Newsletter
    ============================================= -->
    <div class="newsletter-area">
        <div class="container">
            <div class="subscribe-items shadow theme-hard default-padding bg-cover" style="background-image: url(assets/img/2440x1578.png);">
                <div class="row">
                    <div class="col-md-7 left-info">
                        <div class="info-box">
                            <div class="icon">
                                <i class="flaticon-email"></i>
                            </div>
                            <div class="info">
                                <h3>Subscribe to our newsletter</h3>
                                <p>
                                    Prospect humoured mistress to by proposal marianne attended. Simplicity the far admiration preference everything.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <form action="#">
                            <div class="input-group">
                                <input type="email" placeholder="Enter your e-mail here" class="form-control" name="email">
                                <button type="submit">
                                    Subscribe <i class="fa fa-paper-plane"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Newsletter -->

    <!-- Start Footer
    ============================================= -->
    <footer class="bg-light">
        <div class="container">
            <div class="f-items default-padding">
                <div class="row">
                    <!-- Single item -->
                    <div class="col-md-4 col-sm-6 item equal-height">
                        <div class="f-item about">
                            <h4>About</h4>
                            <p>
                                Excellence decisively nay man yet impression for contrasted remarkably. There spoke happy for you are out. Fertile how old address.
                            </p>
                            <ul>
                                <li>
                                    <p>Email <span><a href="mailto:info@example.com">info@example.com</a></span></p>
                                </li>
                                <li>
                                    <p>Office <span>123 6th St. Melbourne, FL 32904</span></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single item -->

                    <!-- Single item -->
                    <div class="col-md-2 col-sm-6 item equal-height">
                        <div class="f-item link">
                            <h4>Categories</h4>
                            <ul>
                                <li>
                                    <a href="#"><i class="ti-angle-right"></i> All Courses</a>
                                </li>
                                <li>
                                    <a href="#"><i class="ti-angle-right"></i> Event</a>
                                </li>
                                <li>
                                    <a href="#"><i class="ti-angle-right"></i> Digital Marketing</a>
                                </li>
                                <li>
                                    <a href="#"><i class="ti-angle-right"></i> Design & Branding</a>
                                </li>
                                <li>
                                    <a href="#"><i class="ti-angle-right"></i> Storytelling</a>
                                </li>
                                <li>
                                    <a href="#"><i class="ti-angle-right"></i> Education</a>
                                </li>
                                <li>
                                    <a href="#"><i class="ti-angle-right"></i> Geography</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single item -->

                    <!-- Single item -->
                    <div class="col-md-2 col-sm-6 item equal-height">
                        <div class="f-item link">
                            <h4>Support</h4>
                            <ul>
                                <li>
                                    <a href="#"><i class="ti-angle-right"></i> Documentation</a>
                                </li>
                                <li>
                                    <a href="#"><i class="ti-angle-right"></i> Forums</a>
                                </li>
                                <li>
                                    <a href="#"><i class="ti-angle-right"></i> Language Packs</a>
                                </li>
                                <li>
                                    <a href="#"><i class="ti-angle-right"></i> Release Status</a>
                                </li>
                                <li>
                                    <a href="#"><i class="ti-angle-right"></i> LearnPress</a>
                                </li>
                                <li>
                                    <a href="#"><i class="ti-angle-right"></i> Feedback</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single item -->

                    <!-- Single item -->
                    <div class="col-md-4 col-sm-6 item equal-height">
                        <div class="f-item popular-courses">
                            <h4>Popular Courses</h4>
                            <ul>
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="assets/img/800x800.png" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="#">Subjects allied to Creative arts and design</a>
                                        <ul class="meta">
                                            <li>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </li>
                                            <li>(128) enrolled</li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="assets/img/800x800.png" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="#">Business and administrative subjects</a>
                                        <ul class="meta">
                                            <li>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li>(98) enrolled</li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="assets/img/800x800.png" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="#">Business and administrative subjects</a>
                                        <ul class="meta">
                                            <li>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </li>
                                            <li>(688) enrolled</li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single item -->
                </div>
            </div>
        </div>
        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; Copyright 2020. All Rights Reserved by <a href="#"> validtemplates</a></p>
                    </div>
                    <div class="col-md-6 text-right link">
                        <ul>
                            <li>
                                <a href="#">Terms of user</a>
                            </li>
                            <li>
                                <a href="#">License</a>
                            </li>
                            <li>
                                <a href="#">Support</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="{{ asset('assets/js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/equal-height.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/modernizr.custom.13711.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/progress-bar.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/count-to.js') }}"></script>
    <script src="{{ asset('assets/js/YTPlayer.min.js') }}"></script>
    <script src="{{ asset('assets/js/loopcounter.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootsnav.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>
