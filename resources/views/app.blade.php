<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GHSP72WBRV"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-GHSP72WBRV');
    </script>
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
                        <h5 class="text-uppercase">Helping Businesses Automate Operations & Reduce Manual Work</h5>
                        <p style="font-size: 1.1rem; margin-top: 1rem; line-height: 1.4;">I create software that handles your repetitive tasks automatically, so you can focus on growing your business</p>
                        <div class="d-flex align-items-center mt-4 gap-3">
                            <a class="primary_btn" href="tel:+19494146986"><span>(949) 414-6986</span></a>
                            <a class="primary_btn tr-bg" href="mailto:michael@millistech.com"><span>Email Me</span></a>
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
                        Born and raised in Southern California, I have been programming and building custom applications professionally for over 10 years. I've spent the last decade developing business-focused solutions, from event registration systems and text messaging platforms to AI-powered sentiment analysis tools.
                    </p>

                    <p>
                        I partner with businesses to deeply understand their unique challenges. Then I create custom software solutions that streamline operations, eliminate time-consuming manual tasks, and help your team work more efficiently.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End About Us Area =================-->

<!--================ Start What I Build Area =================-->
<section class="features_area" id="what-i-build">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="main_title">
                    <h2>What I Build</h2>
                    <p>
                        With 10+ years of professional development experience, I bring deep technical expertise and a business-first approach to every project.
                    </p>
                </div>
            </div>
        </div>
        <div class="row feature_inner justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex">
                <div class="feature_item d-flex flex-column h-100">
                    <div class="text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" style="color: #f9d923; margin-bottom: 1.5rem;">
                            <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                            <line x1="8" y1="21" x2="16" y2="21"></line>
                            <line x1="12" y1="17" x2="12" y2="21"></line>
                            <polyline points="6 9 9 12 13 8"></polyline>
                            <polyline points="9 6 11 8 13 6"></polyline>
                        </svg>
                    </div>
                    <h4 class="text-center">Custom Web Applications</h4>
                    <p>Business-focused web applications tailored to your specific needs, from SaaS products to internal tools.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex">
                <div class="feature_item d-flex flex-column h-100">
                    <div class="text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" style="color: #f9d923; margin-bottom: 1.5rem;">
                            <path d="M12 2a2 2 0 0 1 2 2c0 .74-.4 1.39-1 1.73V7h1a7 7 0 0 1 7 7h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v1a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-1H2a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h1a7 7 0 0 1 7-7h1V5.73c-.6-.34-1-.99-1-1.73a2 2 0 0 1 2-2z"></path>
                            <circle cx="9" cy="13" r="1.5"></circle>
                            <circle cx="15" cy="13" r="1.5"></circle>
                        </svg>
                    </div>
                    <h4 class="text-center">AI-Powered Solutions</h4>
                    <p>Integrate artificial intelligence into your workflows, including automated document processing, sentiment analysis, and intelligent chatbots.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex">
                <div class="feature_item d-flex flex-column h-100">
                    <div class="text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" style="color: #f9d923; margin-bottom: 1.5rem;">
                            <circle cx="12" cy="12" r="3"></circle>
                            <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
                        </svg>
                    </div>
                    <h4 class="text-center">Workflow Automation</h4>
                    <p>Replace manual, repetitive tasks with efficient, automated processes that save time and reduce errors.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End What I Build Area =================-->

<!--================ Start Features Area =================-->
<section class="features_area" id="features">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="main_title">
                    <h2>How I Work</h2>
                    <p>
                        I take a collaborative, structured approach to building custom applications. Every project starts with understanding your business, not just writing code.
                    </p>

                    <p>
                        Here's how I ensure your project succeeds.
                    </p>
                </div>
            </div>
        </div>
        <div class="row feature_inner">
            <div class="col-lg-3 col-md-6 d-flex">
                <div class="feature_item d-flex flex-column h-100">
                    <div class="text-center">
                        <img src="img/services/s1.png" alt="" style="max-width: 64px; height: auto; display: inline-block;">
                    </div>
                    <h4 class="text-center">Information Gathering</h4>
                    <p>I dive deep into your business processes, pain points, and goals to understand exactly what you need.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 d-flex">
                <div class="feature_item d-flex flex-column h-100">
                    <div class="text-center">
                        <img src="img/services/s2.png" alt="" style="max-width: 64px; height: auto; display: inline-block;">
                    </div>
                    <h4 class="text-center">Strategic Planning</h4>
                    <p>I create a detailed technical plan and architecture that addresses your specific requirements.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 d-flex">
                <div class="feature_item d-flex flex-column h-100">
                    <div class="text-center">
                        <img src="img/services/s3.png" alt="" style="max-width: 64px; height: auto; display: inline-block;">
                    </div>
                    <h4 class="text-center">Development</h4>
                    <p>I use proven, professional-grade tools to ensure your solution is reliable, secure, and built to grow with your business.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 d-flex">
                <div class="feature_item d-flex flex-column h-100">
                    <div class="text-center">
                        <img src="img/services/s4.png" alt="" style="max-width: 64px; height: auto; display: inline-block;">
                    </div>
                    <h4 class="text-center">Launch & Support</h4>
                    <p>We launch together, then I provide ongoing support and optimization as your needs evolve.</p>
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
                        <button type="submit" class="primary_btn p-3"><span class="px-3">Send Message</span></button>

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
                            <p>Ready to streamline your business?</p>
                            <h3>(949) 414-6986</h3>
                        </div>
                    </div>
                    <div class="call-now d-flex mt-4">
                        <div>
                            <span class="fa fa-envelope"></span>
                        </div>
                        <div class="ml-15">
                            <p>Or send me an email:</p>
                            <h3><a href="mailto:michael@millistech.com" style="color: inherit; text-decoration: none;">michael@millistech.com</a></h3>
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
