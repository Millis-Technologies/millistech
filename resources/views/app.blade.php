<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {!! seo() !!}

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<!--================ Start Header Area =================-->
<header class="header_area">
    <div class="main_menu">

        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="/"><img class="img-fluid" src="mmillis_img/millis_tech_logo.jpg" alt="Millis Tech Logo"></a>

                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="navbar-collapse collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav justify-content-end">
                        <li class="nav-item active"><a class="nav-link" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#features">What I do</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact Me</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<!--================ End Header Area =================-->

<!--================ Start Home Banner Area =================-->
<section class="home_banner_area">
    <div class="banner_inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="banner_content">
                        <h3 class="text-uppercase">Hello</h3>
                        <h1 class="text-uppercase">I am Michael Millis</h1>
                        <h5 class="text-uppercase">senior web and app developer</h5>
                        <div class="d-flex align-items-center">
                            <a class="primary_btn" href="#"><span>(949) 414-6986</span></a>
{{--                            <a class="primary_btn tr-bg" href="#"><span>Get CV</span></a>--}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="home_right_img">
                        <img class="" src="img/banner/home-right.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End Home Banner Area =================-->

<!--================ Start About Us Area =================-->
<section class="about_area section_gap" id="about">
    <div class="container">
        <div class="row justify-content-start align-items-center">
            <div class="col-lg-5">
                <div class="about_img">
                    <img class="" src="img/about-us.png" alt="">
                </div>
            </div>

            <div class="offset-lg-1 col-lg-6">
                <div class="main_title text-left">
                    <h2>let me <br>
                        Introduce <br>
                        myself</h2>
                    <p>
                        I am born and raised in Southern California and have been programming and building custom applications professionally for over 10 years.
                    </p>

                    <p>
                        I love to hear about other's businesses and passions and help them bring their ideas to life.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End About Us Area =================-->

<!--================ Start Features Area =================-->
<section class="features_area" id="features">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="main_title">
                    <h2>How We Get Started</h2>
                    <p>
                        I focus on making custom web applications that simplify business tasks and boost productivity. Using modern technology and a user-first approach, I create tools that help streamline your operations.
                    </p>

                    <p>
                        Here are the steps I take to ensure your project is a success.
                    </p>
                </div>
            </div>
        </div>
        <div class="row feature_inner">
            <div class="col-lg-3 col-md-6">
                <div class="feature_item">
                    <img src="img/services/s1.png" alt="">
                    <h4>Information Gathering</h4>
                    <p>I learn everything there is to know about your business and your processes.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="feature_item">
                    <img src="img/services/s2.png" alt="">
                    <h4>Rough Draft</h4>
                    <p>I create a rough plan on how I best think we can create a unique solution for your business.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="feature_item">
                    <img src="img/services/s3.png" alt="">
                    <h4>Work Starts</h4>
                    <p>After an inital agreement, I get started on your custom business web application.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="feature_item">
                    <img src="img/services/s4.png" alt="">
                    <h4>Launch</h4>
                    <p>We review, launch and continue to optimize your application for your needs.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End Features Area =================-->

<!--================ Srart Brand Area =================-->
{{--<section class="brand_area section_gap_bottom">--}}
{{--    <div class="container">--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-lg-6">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-4 col-md-4 col-sm-6">--}}
{{--                        <div class="single-brand-item d-table">--}}
{{--                            <div class="d-table-cell text-center">--}}
{{--                                <img src="img/brands/logo1.png" alt="">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-4 col-md-4 col-sm-6">--}}
{{--                        <div class="single-brand-item d-table">--}}
{{--                            <div class="d-table-cell text-center">--}}
{{--                                <img src="img/brands/logo2.png" alt="">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-4 col-md-4 col-sm-6">--}}
{{--                        <div class="single-brand-item d-table">--}}
{{--                            <div class="d-table-cell text-center">--}}
{{--                                <img src="img/brands/logo3.png" alt="">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-4 col-md-4 col-sm-6">--}}
{{--                        <div class="single-brand-item d-table">--}}
{{--                            <div class="d-table-cell text-center">--}}
{{--                                <img src="img/brands/logo4.png" alt="">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-4 col-md-4 col-sm-6">--}}
{{--                        <div class="single-brand-item d-table">--}}
{{--                            <div class="d-table-cell text-center">--}}
{{--                                <img src="img/brands/logo5.png" alt="">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-4 col-md-4 col-sm-6">--}}
{{--                        <div class="single-brand-item d-table">--}}
{{--                            <div class="d-table-cell text-center">--}}
{{--                                <img src="img/brands/logo6.png" alt="">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-4 col-md-4 col-sm-6">--}}
{{--                        <div class="single-brand-item d-table">--}}
{{--                            <div class="d-table-cell text-center">--}}
{{--                                <img src="img/brands/logo7.png" alt="">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-4 col-md-4 col-sm-6">--}}
{{--                        <div class="single-brand-item d-table">--}}
{{--                            <div class="d-table-cell text-center">--}}
{{--                                <img src="img/brands/logo8.png" alt="">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-4 col-md-4 col-sm-6">--}}
{{--                        <div class="single-brand-item d-table">--}}
{{--                            <div class="d-table-cell text-center">--}}
{{--                                <img src="img/brands/logo9.png" alt="">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="offset-lg-2 col-lg-4 col-md-6">--}}
{{--                <div class="client-info">--}}
{{--                    <div class="d-flex mb-50">--}}
{{--                        <span class="lage">10</span>--}}
{{--                        <span class="smll">Years Experience Working</span>--}}
{{--                    </div>--}}
{{--                    <div class="call-now d-flex">--}}
{{--                        <div>--}}
{{--                            <span class="fa fa-phone"></span>--}}
{{--                        </div>--}}
{{--                        <div class="ml-15">--}}
{{--                            <p>call me anytime!</p>--}}
{{--                            <h3>(+1)-800-555-6789</h3>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}

<section class="brand_area section_gap_bottom" id="contact">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="row">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="m-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('submit-contact-form') }}" method="POST">
                        @csrf
                        <x-honeypot />
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                            <div class="invalid-feedback">
                                Please enter your name.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                            <div class="invalid-feedback">
                                Please enter a valid email address.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" rows="5" name="message" required></textarea>
                            <div class="invalid-feedback">
                                Please enter your message.
                            </div>
                        </div>
                        <button type="submit" class="primary_btn p-0"><span class="px-3">Send Message</span></button>

                    </form>
                </div>
            </div>
            <div class="offset-lg-2 col-lg-4 col-md-6">
                <div class="client-info">
                    <div class="d-flex mb-50">
                        <span class="lage">10</span>
                        <span class="smll">Years Experience Working</span>
                    </div>
                    <div class="call-now d-flex">
                        <div>
                            <span class="fa fa-phone"></span>
                        </div>
                        <div class="ml-15">
                            <p>call me anytime!</p>
                            <h3>(949) 414-6986</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End Brand Area =================-->




<!--================ Start Testimonial Area =================-->
{{--<div class="testimonial_area section_gap_bottom">--}}
{{--    <div class="container">--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-lg-8 text-center">--}}
{{--                <div class="main_title">--}}
{{--                    <h2>client say about me</h2>--}}
{{--                    <p>Is give may shall likeness made yielding spirit a itself togeth created after sea is in beast <br>--}}
{{--                        beginning signs open god you're gathering ithe</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div id="carouselExample" class="carousel slide text-center carousel-dark" data-bs-ride="carousel">--}}
{{--            <div class="carousel-inner">--}}
{{--                <div class="carousel-item active">--}}
{{--                    <img class="rounded-circle shadow-1-strong mb-4"--}}
{{--                         src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp" alt="avatar"--}}
{{--                         style="width: 150px;" />--}}
{{--                    <div class="row d-flex justify-content-center">--}}
{{--                        <div class="col-lg-8">--}}
{{--                            <h5 class="mb-3">Maria Kate</h5>--}}
{{--                            <p>Photographer</p>--}}
{{--                            <p class="text-muted">--}}
{{--                                <i class="fas fa-quote-left pe-2"></i>--}}
{{--                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus et deleniti--}}
{{--                                nesciunt sint eligendi reprehenderit reiciendis, quibusdam illo, beatae quia--}}
{{--                                fugit consequatur laudantium velit magnam error. Consectetur distinctio fugit--}}
{{--                                doloremque.--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">--}}
{{--                        <li><i class="fas fa-star fa-sm"></i></li>--}}
{{--                        <li><i class="fas fa-star fa-sm"></i></li>--}}
{{--                        <li><i class="fas fa-star fa-sm"></i></li>--}}
{{--                        <li><i class="fas fa-star fa-sm"></i></li>--}}
{{--                        <li><i class="far fa-star fa-sm"></i></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--                <div class="carousel-item">--}}
{{--                    <img class="rounded-circle shadow-1-strong mb-4"--}}
{{--                         src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(32).webp" alt="avatar"--}}
{{--                         style="width: 150px;" />--}}
{{--                    <div class="row d-flex justify-content-center">--}}
{{--                        <div class="col-lg-8">--}}
{{--                            <h5 class="mb-3">John Doe</h5>--}}
{{--                            <p>Web Developer</p>--}}
{{--                            <p class="text-muted">--}}
{{--                                <i class="fas fa-quote-left pe-2"></i>--}}
{{--                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus et deleniti--}}
{{--                                nesciunt sint eligendi reprehenderit reiciendis.--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">--}}
{{--                        <li><i class="fas fa-star fa-sm"></i></li>--}}
{{--                        <li><i class="fas fa-star fa-sm"></i></li>--}}
{{--                        <li><i class="fas fa-star fa-sm"></i></li>--}}
{{--                        <li><i class="fas fa-star fa-sm"></i></li>--}}
{{--                        <li><i class="far fa-star fa-sm"></i></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--                <div class="carousel-item">--}}
{{--                    <img class="rounded-circle shadow-1-strong mb-4"--}}
{{--                         src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp" alt="avatar" style="width: 150px;" />--}}
{{--                    <div class="row d-flex justify-content-center">--}}
{{--                        <div class="col-lg-8">--}}
{{--                            <h5 class="mb-3">Anna Deynah</h5>--}}
{{--                            <p>UX Designer</p>--}}
{{--                            <p class="text-muted">--}}
{{--                                <i class="fas fa-quote-left pe-2"></i>--}}
{{--                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus et deleniti--}}
{{--                                nesciunt sint eligendi reprehenderit reiciendis, quibusdam illo, beatae quia--}}
{{--                                fugit consequatur laudantium velit magnam error. Consectetur distinctio fugit--}}
{{--                                doloremque.--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">--}}
{{--                        <li><i class="fas fa-star fa-sm"></i></li>--}}
{{--                        <li><i class="fas fa-star fa-sm"></i></li>--}}
{{--                        <li><i class="fas fa-star fa-sm"></i></li>--}}
{{--                        <li><i class="fas fa-star fa-sm"></i></li>--}}
{{--                        <li><i class="far fa-star fa-sm"></i></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">--}}
{{--                <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--                <span class="visually-hidden">Previous</span>--}}
{{--            </button>--}}
{{--            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">--}}
{{--                <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--                <span class="visually-hidden">Next</span>--}}
{{--            </button>--}}

{{--        </div>--}}

{{--    </div>--}}
{{--</div>--}}
<!--================ End Testimonial Area =================-->


<!--================Footer Area =================-->
<footer class="footer_area">
    <div class="container">
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-lg-12">--}}
{{--                <div class="footer_top flex-column">--}}
{{--                    <div class="footer_logo">--}}
{{--                        <a href="#">--}}
{{--                            <img src="img/logo.png" alt="">--}}
{{--                        </a>--}}
{{--                        <h4>Follow Me</h4>--}}
{{--                    </div>--}}
{{--                    <div class="footer_social">--}}
{{--                        <a href="#"><i class="fa fa-facebook"></i></a>--}}
{{--                        <a href="#"><i class="fa fa-twitter"></i></a>--}}
{{--                        <a href="#"><i class="fa fa-dribbble"></i></a>--}}
{{--                        <a href="#"><i class="fa fa-behance"></i></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class="row footer_bottom justify-content-center">
            <p class="col-lg-8 col-sm-12 footer-text">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        </div>
    </div>
</footer>
</body>
</html>
