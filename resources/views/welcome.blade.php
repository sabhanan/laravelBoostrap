<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @vite('resources/css/app.css')
            <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>

        <nav class="navbar fixed-top navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <ul class="navbar-nav position-absolute start-0 ms-3">
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="font-size: 0.9rem; margin-left: 80px;">
                            <button class="btn btn-transparent d-flex align-items-center mt-3">
                                <img class="me-2 mb-1" src="asset/add-line.png" alt=""><strong>Contact Us</strong>
                            </button>
                        </a>
                    </li>
                </ul>
                <!-- GUCCI brand -->
                <a class="navbar-brand mx-auto text-center brand-gucci " href="#">G U C C I</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end position-absolute end-0" style="margin-right: 80px;" id="navbarNav">
                    <ul class="navbar-nav d-flex align-items-center mt-3">
                        <li class="nav-item">
                            <button class="btn btn-transparent"><img class="mb-1" src="asset/shopping-bag-fill.png" alt=""></button>
                        </li>
                        <li class="nav-item">
                            <button class="btn btn-transparent"><img class="mb-1" src="asset/user-3-line.png" alt=""></button>
                        </li>
                        <li class="nav-item">
                            <button class="btn btn-transparent"><img class="mb-1" src="asset/search-line.png" alt=""></button>
                        </li>
                        <li class="nav-item">
                            <button class="btn btn-transparent d-flex align-items-center"><img class="me-2 mb-1" src="asset/menu-line.png" alt=""><strong>MENU</strong></button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="container-fluid p-0 position-relative">
            <img src="asset/man1.png" alt="Landing Page Image" class="img-fluid w-100" style="height: 120vh; object-fit: cover;">
            <div class="position-absolute bottom-0 start-50 translate-middle-x text-center w-100 pb-4">
                <h2 class="text-white ao">THE loafer since 1953</h2>
                <button class="card-btn card-btn-bottom ap">EXPLORE MEN'S COLLECTION</button>
            </div>
        </div>


        {{-- Card --}}
        <div class="container-fluid my-5">
            <div class="row no-gutters">
                <!-- Card 1 -->
                <div class="col-md-6 p-3">
                    <div class="card custom-card">
                        <img src="asset/girls.jpg" class="card-img" alt="Image 1">
                        <div class="card-img-overlay">
                            <button class="card-btn card-btn-top">WOMEN</button>
                            <h1 class="text-center ae text-white">Gucci Blondie Lensed by Nan <br> Goldin</h1>
                            <button class="card-btn card-btn-bottom">DISCOVER MORE</button>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-md-6 p-3">
                    <div class="card custom-card">
                        <img src="asset/girls1.jpg" class="card-img" alt="Image 2">
                        <div class="card-img-overlay">
                            <button class="card-btn card-btn-top">WOMEN</button>
                            <h1 class="text-center af text-white">Fall Winter 2024</h1>
                            <button class="card-btn card-btn-bottom">EXPLORE WOMEN'S COLLECTION</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


{{-- card 2 --}}
<div class="container-fluid p-3 items-center mr-5 ml-5">
    <div class="card card-fullscreen">
        <img src="asset/main.jpg" class="card-img " alt="Fullscreen Image">
        <button class="card-btn card-btn-top">MEN</button>
        <span class="card-btn ak bg-transparent"><strong>FALL Winter 2024</strong></span>
        <button class="card-btn card-btn-bottom al ">EXPLORE MEN'S COLLECTION</button>
    </div>
</div>


<div class="flex justify-center items-center h-32 bg-background text-center mt-5 mb-5">
    <h4 class="text-2xl font-bold text-foreground ai">FEATURED</h4>
</div>

<div class="container-fluid mt-5 mr-5 mb-5">
    <div class="row image-text-container">
        <!-- Image Section (Kiri) -->
        <div class="col-md-5 image-container">
            <img src="asset/man.jpg" alt="Placeholder Image" class="img-fluid">
        </div>

        <!-- Text Section (Kanan) -->
        <div class="col-md-6 text-container text-center">
            <h1 class="ab mb-5">PIETRO CASTTELLITO FOR <br> THE HORSEBIT 1953 <br> LOAFER</h1>
            <h5 class="ac mb-5 text-small">Pietro Castellitto highlights the contemporary elegance of <br> the Gucci Horsebit 1953 loafer in the new campaign.</h5>
            <button class="btn btn-transparant"><u><strong><h5>Discover More</h5></strong></u></button>
        </div>
    </div>
</div>

<div class="d-flex justify-content-center">
    <h1 class="text-center ag" style="font-size: 4rem;">GUCCI SERVICES</h1>
</div>



<div class="container-fluid my-5 px-4">
    <div class="row">
      <!-- Video Card 1 -->
      <div class="col-md-4">
        <div class="video-container">
          <video class="card-img-top video" autoplay muted loop>
            <source src="asset/main1.mp4" type="video/mp4">
          </video>
          <button class="video-btn" style="display: none;">
            <img src="asset/arrow-right-s-fill.png" alt="#">
          </button>
        </div>
        <!-- Teks di bawah Video Card 1 -->
        <div class="card-body bg-white text-center">
            <h4 class="card-title mb-3">PACKAGING</h4>
            <p class="fs-5 mb-4">Choose between our online exclusive tote or <br> boutique shopping bag to give your order <br> the perfect finish.</p>
          </div>
          <div class="bg-white text-center mt-4">
            <h5 class="text-muted"><u>Explore Gucci’s Packaging</u></h5>
          </div>
      </div>
      <!-- Video Card 2 -->
      <div class="col-md-4">
        <div class="video-container">
          <video class="card-img-top video" autoplay muted loop>
            <source src="asset/main2.mp4" type="video/mp4">
          </video>
          <button class="video-btn" style="display: none;">
            <img src="asset/arrow-right-s-fill.png" alt="#">
          </button>
        </div>
        <!-- Teks di bawah Video Card 2 -->
        <div class="card-body bg-white text-center">
            <h4 class="card-title mb-3">PERSONAZALITON</h4>
            <p class="fs-5 mb-2">Emboss select bags, luggage, belts, leather <br> accessories, and items from the pet’s <br> collection with initials to create a truly <br> unique piece.</p>
          </div>
          <div class="bg-white text-center mt-2">
            <h5 class="text-muted "><u>Discover The Collection</u></h5>
          </div>
      </div>
      <!-- Video Card 3 -->
      <div class="col-md-4">
        <div class="video-container">
          <video class="card-img-top video" autoplay muted loop>
            <source src="asset/main3.mp4" type="video/mp4">
          </video>
          <button class="video-btn" style="display: none;">
            <img src="asset/arrow-right-s-fill.png" alt="#">
          </button>
        </div>
        <!-- Teks di bawah Video Card 3 -->
        <div class="card-body bg-white text-center">
            <h4 class="card-title mb-3">COLLECT IN STORE</h4>
            <p class="fs-5 mb-5">Order online and collect your order from <br> your preferred Gucci boutique.</p>
          </div>
          <div class=" bg-white text-center mt-4">
            <h5 class="text-muted"><u>Discover how</u></h5>
          </div>
      </div>
    </div>
</div>



{{-- Rincian --}}
  <div class="bg-dark text-white p-5">
    <div class="row">
      <!-- Column 1 -->
      <div class="col-md-4">
        <h6 class="fw-bold mb-4">MAY WE HELP YOU?</h6>
        <ul class="list-unstyled">
          <li><a href="#" class="text-white text-decoration-none"><h6><u>Contact Us</u></h6></a></li>
          <li><a href="#" class="text-white text-decoration-none"><h6><u>My Order</u></h6></a></li>
          <li><a href="#" class="text-white text-decoration-none"><h6><u>FAQs</u></h6></a></li>
          <li><a href="#" class="text-white text-decoration-none"><h6><u>Email Unsubscribe</u></h6></a></li>
          <li><a href="#" class="text-white text-decoration-none"><h6><u>Sitemap</u></h6></a></li>
        </ul>
        <h6 class="fw-bold ah mb-4 ">GUCCI SERVICES</h6>
            <ul class="list-unstyled">
            <li class="mb-2">
                <a href="#" class="text-white text-decoration-none"><h6><u>Discover our services</u></h6></a>
            </li>
            <li class="mb-2">
                <a href="#" class="text-white text-decoration-none"><h6><u>Discover our services</u></h6></a>
            </li>
            <li class="mb-2">
                <a href="#" class="text-white text-decoration-none"><h6><u>Collect In Store</u></h6></a>
            </li>
            </ul>
      </div>
      <!-- Column 2 -->
      <div class="col-md-4">
        <h6 class="fw-bold mb-4">THE COMPANY</h6>
        <ul class="list-unstyled">
          <li><a href="#" class="text-white text-decoration-none"><h6><u>About Gucci</u></h6></a></li>
          <li><a href="#" class="text-white text-decoration-none"><h6><u>Gucci Equilibrium</u></h6></a></li>
          <li><a href="#" class="text-white text-decoration-none"><h6><u>Code of Ethics</u></h6></a></li>
          <li><a href="#" class="text-white text-decoration-none"><h6><u>Careers</u></h6></a></li>
          <li><a href="#" class="text-white text-decoration-none"><h6><u>Legal</u></h6></a></li>
          <li><a href="#" class="text-white text-decoration-none"><h6><u>Privacy & Cookie Policy</u></h6></a></li>
          <li><a href="#" class="text-white text-decoration-none"><h6><u>Corporate Information</u></h6></a></li>
        </ul>
      </div>

      <!-- Column 3 -->
      <div class="col-md-4">
        <h6 class="fw-bold mb-5">STORE LOCATOR</h6>
        <label for="location" class="form-label"><h5>Country/Region, City</h5></label>
        <input aria-label="STORE LOCATOR - Country/Region, City" type="text" data-testid="input-box-input" value="">
        <hr>

        <h6 class="fw-bold mb-4">SIGN UP FOR GUCCI UPDATES</h6>
        <p class="text-white mb-5">By entering your email address below, you consent to receiving our <br> newsletter with access to our latest collections, events and initiatives. More details on this are provided in our <u>Privacy Policy.</u></p>
        <label for="location" class="form-label"><h5>E-mail</h5></label>
        <input aria-label="STORE LOCATOR - Country/Region, City" type="text" data-testid="input-box-input" value="">
        <hr>

        <h6 class="fw-bold mb-4 mt-5">LANGUAGE</h6>
        <!-- Default dropup button -->
        <div class="btn-group dropup">
            <button type="button" class="btn btn-transparant text-white dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><strong><u>ENGLISH</u></strong></button>
            <ul class="dropdown-menu">
                <li>Français</li>
                <li>Deutsch</li>
                <li>Español</li>
                <li>Italiano</li>
                <li>简体中文</li>
            </ul>
        </div>

        <h6 class="fw-bold mb-4 mt-5">COUNTRY/REGION</h6>
        <p class="text-white"><strong><u>BELGIUM</u></strong></p>
      </div>
    </div>
  </div>


  {{-- paling bawah --}}
  <div class="bg-dark text-white p-4">
    <div class="mt-4 d-flex align-items-center">
      <img aria-hidden="true" alt="Equilibrium" src="asset/equ.jpg" class="me-2" style="width: 50px; height: 50px;" />
      <img aria-hidden="true" alt="Gucci Logo" src="asset/logob.jpg" class="me-2" style="width: 50px; height: 50px;" />
      <img aria-hidden="true" alt="Gucci Vision" src="asset/logob1.jpg" class="me-2" style="width: 50px; height: 50px;" />
      <img aria-hidden="true" alt="Gucci Osteria" src="asset/logob2.png" style="width: 50px; height: 50px;" />
    </div>
    <p class="mt-4 text-white">© 2016 - 2022 Guccio Gucci S.p.A. - All rights reserved. SIAE LICENCE # 2294/I/1936 and 5647/I/1936</p>
    <div class="flex justify-center items-center h-screen bg-background aj">
        <h1 class="aj text-white shadow-lg">GUCCI</h1>
    </div>
</div>





          <script>
            // Navbar
            window.addEventListener('scroll', function() {
            var navbar = document.querySelector('.navbar');
            console.log('ScrollY:', window.scrollY);
            console.log('Navbar Height:', navbar.offsetHeight);

            if (window.scrollY > navbar.offsetHeight) {
                console.log('Menambah kelas scrolled');
                navbar.classList.add('scrolled');
            } else {
                console.log('Menghapus kelas scrolled');
                navbar.classList.remove('scrolled');
            }
            });

            $(document).ready(function () {
                $(window).scroll(function () {
                    var $nav = $(".navbar");
                    $nav.toggleClass('scrolled', $(this).scrollTop() > 50);
                });
            });



            // Ambil semua video dan tombol pause
            const videos = document.querySelectorAll('.video');
            const buttons = document.querySelectorAll('.video-btn');

            videos.forEach((video, index) => {
                const button = buttons[index];

                video.addEventListener('click', function() {
                if (video.paused) {
                    video.play();
                    button.style.display = 'none';
                } else {
                    video.pause();
                    button.style.display = 'block';
                }
                });

                button.addEventListener('click', function() {
                video.play();
                button.style.display = 'none';
                });
            });
        </script>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
