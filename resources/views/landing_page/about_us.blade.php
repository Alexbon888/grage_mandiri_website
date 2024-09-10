<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">

        <link href="assets/img/logo/LOGO GRAGE MANDIRI.png" rel="icon">

        <title>Grage Mandiri- About Us</title>

        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        @include('head_link')
    </head>

    <body>
        <!-- Spinner Start -->
        @include('spinner')
        <!-- Spinner End -->

        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
            <a href="{{ url('home') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
                <h2 class="m-0 text-primary"><i class="fa fa-car me-3"></i>Grage Mandiri</h2>
            </a>

            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="{{ url('home') }}" class="nav-item nav-link">Beranda</a>
                    <a href="{{ url('about_us') }}" class="nav-item nav-link active">Tentang Kami</a>
                    <a href="{{ url('services') }}" class="nav-item nav-link">Layanan</a>
                </div>

                <a href="{{ url('login') }}" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Reservasi<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </nav>
        <!-- Navbar End -->

        <!-- Page Header Start -->
        <div class="container-fluid page-header mb-5 p-0" style="background-image: url(assets/img/carousel-bg-1.jpg);">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Tentang Kami</h1>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item">
                                <a href="{{ url('home') }}">Beranda</a>
                            </li>

                            <li class="breadcrumb-item text-white active" aria-current="page">Tentang Kami</li>

                            <li class="breadcrumb-item">
                                <a href="{{ url('services') }}">Layanan</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="d-flex py-5 px-4">
                            <i class="fa fa-certificate fa-3x text-primary flex-shrink-0"></i>
                            <div class="ps-4">
                                <h5 class="mb-3">Perbaikan Berkualitas</h5>
                                <p>Pekerjaan terjamin dan bergaransi</p>
                                <!-- <a class="text-secondary border-bottom" href="">Read More</a> -->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="d-flex bg-light py-5 px-4">
                            <i class="fa fa-users-cog fa-3x text-primary flex-shrink-0"></i>
                            <div class="ps-4">
                                <h5 class="mb-3">Teknisi Ahli</h5>
                                <p>Mekanik professional dan berpengalaman</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="d-flex py-5 px-4">
                            <i class="fa fa-tools fa-3x text-primary flex-shrink-0"></i>
                            <div class="ps-4">
                                <h5 class="mb-3">Peralatan Lengkap</h5>
                                <p>Peralatan lengkap untuk kebutuhan otomotif</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->

        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 pt-4" style="min-height: 400px;">
                        <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
                            <img class="position-absolute img-fluid w-100 h-100" src="assets/img/about2.png" style="object-fit: cover;" alt="">

                            <div class="position-absolute top-0 end-0 mt-n4 me-n4 py-4 px-5" style="background: rgba(0, 0, 0, .08);">
                                <h1 class="display-4 text-white mb-0">20 <span class="fs-4">Tahun</span></h1>
                                <h4 class="text-white">Pengalaman</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <h6 class="text-primary text-uppercase">Tentang Kami</h6>

                        <h1 class="mb-4"><span class="text-primary">Grage Mandiri</span> Adalah Tempat Terbaik Untuk Perbaikan Dan Perawatan Mobil Anda</h1>

                        <div class="row g-2 mb-2 pb-2">
                            <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                <div class="d-flex" style="align-items: center;">
                                    <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                        <span class="fw-bold text-secondary">01</span>
                                    </div>

                                    <div class="ps-3" style="flex-grow: 1; display: flex; align-items: center;">
                                        <h5 style="text-align: center;">Mekanik yang berpengalaman dan professional</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row g-2 mb-2 pb-2">
                            <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                <div class="d-flex" style="align-items: center;">
                                    <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                        <span class="fw-bold text-secondary">02</span>
                                    </div>

                                    <div class="ps-3" style="flex-grow: 1; display: flex; align-items: center;">
                                        <h5 style="text-align: center;">Pekerjaan yang berkualitas dan bergaransi</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row g-2 mb-2 pb-2">
                            <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                <div class="d-flex" style="align-items: center;">
                                    <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                        <span class="fw-bold text-secondary">03</span>
                                    </div>

                                    <div class="ps-3" style="flex-grow: 1; display: flex; align-items: center;">
                                        <h5 style="text-align: center;">Menyediakan sparepart berkualitas</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="{{ url('login') }}" class="btn btn-primary py-3 px-5">Reservasi<i class="fa fa-arrow-right ms-3"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-primary text-uppercase">Hubungi Kami</h6>
                    <h1 class="mb-5">Jika Butuh Bantuan</h1>
                </div>

                <div class="row g-4">

                    <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                        <iframe class="position-relative rounded w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15849.796877174143!2d108.5536744!3d-6.7149056!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6ee26e8aa44093%3A0xb8847e20a59a0eef!2sGM%20Grage%20Mandiri!5e0!3m2!1sen!2sid!4v1720212133090!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                            frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0">
                        </iframe>

                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                    </div>
                    <div class="col-md-6">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <p class="mb-4">Silahkan menghububungi kami jika anda ingin informasi yang lebih detail</p>
                            <p class="mb-4">dengan nomor yang tertera di bawah ini.</p>
                            <a href="https://wa.me/62881023014902" class="btn btn-primary py-3 px-5">Hubungi Kami Lewat WhatsApp</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

        <!-- Footer Start -->
        @include('footer')
        <!-- Footer End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

        <!-- Footer Link -->
        @include('footer_link')
        <!-- Footer Link End-->
    </body>

</html>
