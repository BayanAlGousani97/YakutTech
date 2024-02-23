<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YakuTech</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/logo2.jpg') }}">
    <!-- animation -->
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
    <!-- font awosom -->
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- swiper -->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- font -->
    <style>
        .sec2,
        .sec3,
        .sec4 {
            min-height: 100vh;
            padding: 20px;
        }

        .sec2 img,
        .sec3 img {
            max-width: 100%;
            height: auto;
        }

        @media (max-width: 768px) {

            .sec2,
            .sec3,
            .sec5 {
                min-height: auto;
            }

            .sec2 .head h1,
            .sec3 .head h1 {
                font-size: 24px;
            }

            .sec2 .row div,
            .sec3 .row div {
                flex-basis: 100%;
                max-width: 100%;
            }
        }
    </style>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">
    <!-- Start header -->
    <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-white p-0" data-aos="fade-down">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/img/logo2.jpg') }}" alt="" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main"
                aria-controls="main" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="main">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link p-2 p-lg-3 active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-2 p-lg-3" href="#sec2">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-2 p-lg-3" href="#sec3">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-2 p-lg-3" href="#sec4">Project</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link p-2 p-lg-3" href="#sec7">Contact</a>
                    </li>
                </ul>
                <div class="search ps-3 pe-3 d-none d-lg-block">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
                <a class="btn rounded-pill main-btn" href="{{ route('getOffer') }}">Get offer</a>
            </div>
        </div>
    </nav>
    <!--End header  -->

    <!-- Start Landing -->
    <section class="sec1">
        <div class="landing d-flex justify-content-center align-items-center">
            <div class="daim row d-flex justify-content-center w-100">
                <div class="dl col-lg-6  flex-column d-flex justify-content-center text-light align-items-center  p-0">
                    <div class="total flex-column d-flex justify-content-center align-items-center">
                        <div class="y flex-column d-flex">
                            <img src="{{ asset('assets/img/software-removebg-preview.png') }}" class="s"
                                alt="">
                            <img src="{{ asset('assets/img/14-removebg-preview.png') }}" class="d" alt="">
                            <h1><span style="font-size: 80px;">Y</span>aku<span
                                    style="color: #b3050e; font-size: 70px;">Tech</span></h1>
                        </div>
                    </div>
                    <h1 data-aos="fade-up" data-aos-duration="3000">Welcome In YakuTech </h1>
                    <p data-aos="fade-up" data-aos-duration="3000">Build Your Own Project From Zero To Hero</p>
                    <a class="btn rounded-pill main-btn " href="#" data-aos="fade-up" data-aos-duration="3000">Get
                        Started</a>

                </div>
                <div class="dr col-lg-6 d-none d-lg-block d-flex justify-content-center p-0" data-aos="zoom-in"
                    data-aos-delay="1000">
                    <img src="{{ asset('assets/img/landing-image.png') }}" class="img w-100" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- End Landing -->
    <!-- start about -->
    <section class="sec2 " id="sec2">
        <div class="container">
            <div class="head text-center mb4" data-aos="fade-up" data-aos-delay="100">
                <h1>About Us</h1>
                <div class="divider"></div>
                <p>Lorem voluptas praesentium cum vel architecto quasi a porro? Minus doloribus <br> accusamus similique
                    tempora voluptatibus nihil beatae.</p>

            </div>
            <div class="row">
                <div class="col-lg-6 d-flex justify-content-center align-items-center" data-aos="fade-right"
                    data-aos-delay="500">

                    <img src="{{ asset('assets/img/img-lad.png') }}" class="img-fluid h-100" alt="">


                </div>
                <div class="col-lg-6 ">
                    <div class="text-block ">
                        <div class="one mb-3" data-aos="fade-left" data-aos-delay="500">
                            <div class="icon d-flex align-items-baseline">
                                <i class="fa-solid fa-briefcase"></i>
                                <h3 class="ms-3">Our Mission</h3>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque autem porro harum ab omnis
                                sapiente vitae nam iusto ullam debitis minus hic blanditiis, reprehenderit eveniet nulla
                                qui doloremque, voluptas facilis?</p>
                        </div>
                        <div class="one mb-3" data-aos="fade-left" data-aos-delay="700">
                            <div class="icon d-flex align-items-baseline">
                                <i class="fa-solid fa-list-check"></i>
                                <h3 class="ms-3">Our Plan</h3>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque autem porro harum ab omnis
                                sapiente vitae nam iusto ullam debitis minus hic blanditiis, reprehenderit eveniet nulla
                                qui doloremque, voluptas facilis?</p>

                        </div>
                        <div class="one mb-3" data-aos="fade-up" data-aos-delay="1000">
                            <div class="icon d-flex align-items-baseline">
                                <i class="fa-regular fa-calendar-days"></i>
                                <h3 class="ms-3">Our Vision</h3>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque autem porro harum ab omnis
                                sapiente vitae nam iusto ullam debitis minus hic blanditiis, reprehenderit eveniet nulla
                                qui doloremque, voluptas facilis?</p>

                        </div>
                    </div>


                </div>
            </div>
        </div>

    </section>
    <!-- end about -->
    <!-- start service -->
    <section class="sec3 " id="sec3">
        <div class="container">
            <div class="head text-center" data-aos="fade-up" data-aos-delay="100">
                <h1>Service</h1>
                <div class="divider"></div>
                <p>Lorem voluptas praesentium cum vel architecto quasi a porro? Minus doloribus <br> accusamus similique
                    tempora voluptatibus nihil beatae.</p>

            </div>
            <div class="row p-0">
                <div class="h col-md-6 col-lg-4 d-flex flex-column mb-5 h-100" data-aos="zoom-in"
                    data-aos-delay="500">
                    <div class="box w-100 p-4 shadow">
                        <div class="circl mb-3"><i class="fa-solid fa-code"></i></div>
                        <div class="info w-100 gap-3 h-25">
                            <h5><a href="">Coding</a></h5>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                nulla</p>
                            <div class="ico">
                                <a href="">Learn more</a>
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="h col-md-6 col-lg-4 d-flex flex-column mb-5 h-100" data-aos="zoom-in"
                    data-aos-delay="700">
                    <div class="box p-4 w-100 shadow ">
                        <div class="circl mb-3"><i class="fa-solid fa-user-shield"></i></div>
                        <div class="info w-100 gap-3 h-25">
                            <h5><a href="">security</a></h5>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                nulla</p>
                            <div class="ico">
                                <a href="">Learn more</a>
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="h col-md-6 col-lg-4 d-flex flex-column  mb-5 h-100" data-aos="zoom-in"
                    data-aos-delay="1000">
                    <div class="box p-4 w-100 shadow ">
                        <div class="circl mb-3"><i class="fa-solid fa-screwdriver-wrench"></i></div>
                        <div class="info w-100 gap-3 h-25">
                            <h5><a href="">Fixing</a></h5>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                nulla</p>
                            <div class="ico">
                                <a href="">Learn more</a>
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 d-flex flex-column   mb-5 h-25" data-aos="zoom-in"
                    data-aos-delay="500">
                    <div class="box w-100 p-4 shadow ">
                        <div class="circl mb-3 "><i class="fa-solid fa-palette"></i></div>
                        <div class="info w-100 gap-3 h-25">
                            <h5><a href="">Disign</a></h5>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                voluptatum</p>
                            <div class="ico">
                                <a href="">Learn more</a>
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 col-lg-4 d-flex flex-column  mb-5 h-25" data-aos="zoom-in" data-aos-delay="700">
                    <div class="box w-100 p-4 shadow">
                        <div class="circl mb-3"><i class="fa-solid fa-palette"></i></div>
                        <div class="info w-100 gap-3 h-25">
                            <h5><a href="">Disign</a></h5>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                voluptatum</p>
                            <div class="ico">
                                <a href="">Learn more</a>
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex flex-column  mb-5 h-25" data-aos="zoom-in"
                    data-aos-delay="1000">
                    <div class="box w-100 p-4 shadow ">
                        <div class="circl mb-3"><i class="fa-solid fa-bullhorn"></i></div>
                        <div class="info w-100 gap-3 h-25">
                            <h5><a href="">Marketing</a></h5>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                voluptatum</p>
                            <div class="ico">
                                <a href="">Learn more</a>
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- end service -->
    <!-- start my project -->

    <section class="sec4" id="sec4">
        <div class="container">
            <div class="head text-center" data-aos="zoom-in" data-aos-delay="100">
                <h1>My Project</h1>
                <div class="divider"></div>

            </div>

            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center align-items " data-aos="fade-up"
                    data-aos-delay="100">
                    <ul class="pro list-unstyled d-flex justify-content-center mb-5 gap-5">
                        <li class="active fw-bold rounded-pill px-3" data-cat=".all">All</li>
                        <li class="fw-bold " data-cat=".app">App</li>
                        <li class="fw-bold" data-cat=".card">Card</li>
                        <li class="fw-bold" data-cat=".web">Web</li>
                    </ul>
                </div>
            </div>



            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4  p web all" data-aos="zoom-in" data-aos-delay="500">
                    <div class=" pro-sec" data-work="Application">
                        <img src="{{ asset('assets/img/web1.png') }}" class="img-fluid" alt="">
                        <div class="ser d-none ">
                            <h4>Web1</h4>
                            <p>Web1</p>
                            <a href="{{ asset('assets/img/web1.png') }}"><i class="fa-solid fa-plus"></i></a>
                            <a href="https://bootstrapmade.com/demo/Append/" class="" title="More Details"><i
                                    class="fa-solid fa-link"></i></a>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4 col-md-6 mb-4  card all p" data-aos="zoom-in" data-aos-delay="700">
                    <div class="pro-sec " data-work="Application">
                        <img src="{{ asset('assets/img/web2.png') }}" class="img-fluid " alt="">
                        <div class="ser d-none ">
                            <h4>Web2</h4>
                            <p>Web2</p>
                            <a href="{{ asset('assets/img/web2.png') }}" class="" title="Web3"><i
                                    class="fa-solid fa-plus"></i></a>
                            <a href="https://bootstrapmade.com/demo/Arsha/" class="" title="More Details"><i
                                    class="fa-solid fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4  web all p" data-aos="zoom-in" data-aos-delay="1000">
                    <div class="pro-sec" data-work="Application">
                        <img src="{{ asset('assets/img/web3.png') }}" class="img-fluid " alt="">
                        <div class="ser d-none ">
                            <h4>Web3</h4>
                            <p>Web3</p>
                            <a href="{{ asset('assets/img/web3.png') }}" class="" title="App"><i
                                    class="fa-solid fa-plus"></i></a>
                            <a href="https://bootstrapmade.com/demo/iPortfolio/" class=""
                                title="More Details"><i class="fa-solid fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4 p card all" data-aos="zoom-in" data-aos-delay="500">
                    <div class=" pro-sec " data-work="Application">
                        <img src="{{ asset('assets/img/web4.png') }}" class="img-fluid " alt="">
                        <div class="ser d-none ">
                            <h4>Web4</h4>
                            <p>Web4</p>
                            <a href="{{ asset('assets/img/web4.png') }}" class="" title="web4"><i
                                    class="fa-solid fa-plus"></i></a>
                            <a href="https://bootstrapmade.com/demo/Gp/" class="" title="More Details"><i
                                    class="fa-solid fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4  app all p" data-aos="zoom-in" data-aos-delay="700">
                    <div class="pro-sec " data-work="Application">
                        <img src="{{ asset('assets/img/web5.png') }}" class="img-fluid " alt="">
                        <div class="ser d-none ">
                            <h4>Web5</h4>
                            <p>Web5</p>
                            <a href="{{ asset('assets/img/web5.png') }}" class="" title="App"><i
                                    class="fa-solid fa-plus"></i></a>
                            <a href="https://bootstrapmade.com/demo/Yummy/" class="" title="More Details"><i
                                    class="fa-solid fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4  app all p" data-aos="zoom-in" data-aos-delay="1000">
                    <div class=" pro-sec" data-work="Application">
                        <img src="{{ asset('assets/img/web7.png') }}" class="img-fluid " alt="">
                        <div class="ser d-none ">
                            <h4>Web6</h4>
                            <p>Web6</p>
                            <a href="{{ asset('assets/img/web7.png') }}" class="" title="App"><i
                                    class="fa-solid fa-plus"></i></a>
                            <a href="https://bootstrapmade.com/demo/Logis/" class="" title="More Details"><i
                                    class="fa-solid fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <!-- <div class="col-lg-4 col-md-6 mb-4"  data-aos="zoom-in" data-aos-delay="500">
              <div class="pro-sec  " >
              <img src="" class="img-fluid app all" alt="">
              <div class="ser d-none ">
                <h4>Web7</h4>
                <p>Web7</p>
                <a href="image/web7.png" class="" title="App"><i class="fa-solid fa-plus"></i></a>
                <a href="https://bootstrapmade.com/demo/UpConstruction/" class="" title="More Details"><i class="fa-solid fa-link"></i></a>
              </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4"  data-aos="zoom-in" data-aos-delay="700">
              <div class="pro-sec  " >
              <img src="image/web8.png" class="img-fluid card all" alt="">
              <div class="ser d-none ">
                <h4>Web8</h4>
                <p>Web8</p>
                <a href="image/web8.png" class="" title="App"><i class="fa-solid fa-plus"></i></a>
                <a href="https://bootstrapmade.com/demo/FlexStart/" class="" title="More Details"><i class="fa-solid fa-link"></i></a>
              </div>
              </div>
            </div> -->

                <div class="d-flex justify-content-center mt-5">
                    <a class="btn rounded-pill main-btn text-uppercase" href="#">I Want More</a>
                </div>


            </div>

    </section>
    <!-- end my project -->

    <!-- counter -->
    <section class="sec5 d-flex justify-content-center align-items-center">
        <div class="container text-white text-center">
            <div class="head text-center" data-aos="zoom-in" data-aos-delay="100">
                <h1>Counters</h1>
                <div class="divider"></div>
            </div>
            <div class="row gy-4 " data-aos="fade-up">
                <div class="col-md-3  col-sm-6">
                    <i class="fa-solid fa-user"></i>

                    <h3 class="mt-3 mb-2">300</h3>
                    <p>Client</p>
                </div>
                <div class="col-md-3 col-sm-6">
                    <i class="fa-solid fa-code"></i>
                    <h3 class="mt-3 mb-2">254</h3>
                    <p>Project</p>
                </div>
                <div class="col-md-3 col-sm-6">
                    <i class="fa-solid fa-earth-americas"></i>
                    <h3 class="mt-3 mb-2">50</h3>
                    <p>countries</p>
                </div>
                <div class="col-md-3 col-sm-6">
                    <i class="fa-solid fa-desktop"></i>
                    <h3 class="mt-3 mb-2">48</h3>
                    <p>Hard worker</p>
                </div>
            </div>
        </div>
    </section>
    <!-- end counter -->

    <!-- start testimonials -->
    <section class="sec6">
        <div class="container">

            <div class="head text-center" data-aos="fade-up" data-aos-delay="100">
                <h1>Testimonials</h1>
                <div class="divider"></div>
            </div>

            <div class="row justify-content-center mb-4">
                <div class="col-lg-8 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class=" swiper ">
                        <div class="swiper-wrapper mb-4">

                            <div class="swiper-slide ">
                                <div class="tes d-flex ">
                                    <img src="{{ asset('assets/img/testimonial-1.jpg') }}" class="testimonial-img"
                                        alt="">
                                    <div class="testi mb-4">
                                        <h3>Saul Goodman</h3>
                                        <h4>Ceo &amp; Founder</h4>
                                        <p>
                                            Proin iaculis purus consequat sem cure digni ssim donec porttitora entum
                                            suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et.
                                            Maecen aliquam, risus at semper.
                                        </p>
                                    </div>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="tes d-flex">
                                    <img src="{{ asset('assets/img/testimonial-2.jpg') }}" class="testimonial-img"
                                        alt="">
                                    <div class="testi">
                                        <h3>Sara Wilsson</h3>
                                        <h4>Designer</h4>
                                        <p>
                                            Export tempor illum tamen malis malis eram quae irure esse labore quem
                                            cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua
                                            noster fugiat irure amet legam anim culpa.
                                        </p>
                                    </div>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="tes d-flex justify-content-center align-items-center">
                                    <img src="{{ asset('assets/img/testimonial-3.jpg') }}" class="testimonial-img"
                                        alt="">
                                    <div class="testi">
                                        <h3>Jena Karlis</h3>
                                        <h4>Store Owner</h4>
                                        <p>
                                            Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla
                                            quem veniam duis minim tempor labore quem eram duis noster aute amet eram
                                            fore quis sint minim.
                                        </p>
                                    </div>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="tes d-flex justify-content-center align-items-center">
                                    <img src="{{ asset('assets/img/testimonial-4.jpg') }}" class="testimonial-img"
                                        alt="">
                                    <div class="testi">
                                        <h3>Matt Brandon</h3>
                                        <h4>Freelancer</h4>
                                        <p>
                                            Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export
                                            minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt
                                            elit fore quem dolore labore illum veniam.
                                        </p>
                                    </div>
                                </div>
                            </div><!-- End testimonial item -->

                        </div>
                        <div class="swiper-pagination "></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end testimonials -->
    <!-- start contect -->
    <section class="sec7" id="sec7">
        <div class="container">
            <div class="head text-center" data-aos="fade-up" data-aos-delay="100">
                <h1>Contact Us</h1>
                <div class="divider"></div>
            </div>
            <div class="row">
                <div class="col-lg-5" data-aos="fade-right" data-aos-delay="500">
                    <div
                        class="contact d-flex flex-md-column justify-content-between pb-3 justify-content-md-center  align-items-start gap-4">
                        <div class="cont">
                            <div class="icon d-flex align-items-baseline">
                                <i class="fa-solid fa-location-dot"></i>
                                <h3 class="ms-3">Location</h3>
                            </div>
                            <p>Syria,Damascuse</p>
                        </div>
                        <div class="cont">
                            <div class="icon d-flex align-items-baseline">
                                <i class="fa-solid fa-envelope"></i>
                                <h3 class="ms-3">Email</h3>
                            </div>
                            <p>gh@gmail.com</p>
                        </div>
                        <div class="cont">
                            <div class="icon d-flex align-items-baseline">
                                <i class="fa-solid fa-phone"></i>
                                <h3 class="ms-3">Phone</h3>
                            </div>
                            <p>+0123456789123</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 d-flex justify-content-center align-items-center" data-aos="fade-left"
                    data-aos-delay="500">
                    <div class="d-flex justify-content-center align-items-center flex-column w-100">
                        <form action="" class="w-100">
                            <div class="row">
                                <div class="col-md-6  mb-4">
                                    <input type="text" class="form-control" placeholder="First name">
                                </div>
                                <div class="col-md-6  mb-4">
                                    <input type="text" class="form-control" placeholder="Last name">
                                </div>
                            </div>
                            <div class="mb-4">
                                <input type="text" class="form-control" placeholder="Subject">
                            </div>
                            <div class="mb-4">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                            </div>
                            <button type="submit" class="form-control shadow btn  mb-4">
                                Send Message
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>

    </section>


    <!-- end contact -->
    <!-- start footer -->

    <!-- end footer -->
    <section class="sec8">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex justify-content-center align-items-center ">
                    <img src="{{ asset('assets/img/logoc-removebg-preview.png') }}" class="img py-4" alt="">
                </div>
                <div class="col-lg-6 d-flex justify-content-center align-items-center flex-column gap-2">
                    <p>Follow Us</p>
                    <div class=" d-flex justify-content-center align-items-center gap-4">
                        <a href=""><i class="fs-5 fa-brands fa-facebook"></i></a>
                        <a href=""><i class="fs-5 fa-brands fa-google"></i></a>
                        <a href=""><i class="fs-5 fa-brands fa-twitter"></i></a>
                        <a href=""><i class="fs-5 fa-brands fa-github"></i></a>
                    </div>
                    <div class="copyright">
                        &copy; Copyright <strong><span>YakuTech</span></strong>. All Rights Reserved
                    </div>
                </div>


            </div>
        </div>

    </section>
    <!-- animation -->
    <script src="{{ asset('assets/js/aos.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- swiper -->
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
